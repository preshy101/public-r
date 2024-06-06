<?php

namespace App\Filament\Resources;

use App\Models\cms;
use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\imageGallery;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Model;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ImageGalleryResource\Pages;
use App\Filament\Resources\ImageGalleryResource\RelationManagers;

class ImageGalleryResource extends Resource
{
    protected static ?string $model = imageGallery::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $activeNavigationIcon = 'heroicon-s-rectangle-stack';
    protected static ?string $navigationLabel = 'Gallery';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('')->columns(1)
                ->description('')
                ->schema([
                    Select::make('cms_id')->relationship('cms','title')->searchable()->required()
                    ->live()
                    ->afterStateUpdated(function( string $operation, $state, Forms\Set $set){
                        if($operation === 'edit'){

                        $set('cms_id', $state);
                        }
                        $data = cms::find($state);
                        if ($data) {
                            # code...
                            $set('note', $data->contentId . " - " . $data->version);
                        }else{
                            $set('note', '');
                        }
                    }),


                    Textarea::make('alternativeText')
                    ->required()
                    ->rows(5)
                    ->cols(20)
                    ->minLength(2)
                    ->maxLength(255),
                ])->columnSpan(2),
                Section::make('Files')
                ->description('')
                ->schema([
                    TextInput::make('note')
                    ->required()
                    ->minLength(2)
                    ->readOnly()
                    ->maxLength(255),
                FileUpload::make('image')
                ->multiple()
                ->label('file(s)')
                ->required()
                ->minFiles(1)
                ->maxSize(5000024)
                ->imageCropAspectRatio('20:19')
                ->maxFiles(105)
                ->directory('gallary/thumbnails'),
        ])->columnSpan(['lg' => 1])
            ])->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('cms_id')
                ->getStateUsing( function (Model $record){
                 return cms::find($record->cms_id)?->contentId;
                 })
                 ->label('Resource Type')
                 ->searchable(),
                TextColumn::make('note')
                ->limit(50)
                ->searchable(),
                TextColumn::make('alternativeText')
                ->toggleable(isToggledHiddenByDefault: true)
                ->limit(50),
                ImageColumn::make('image')
                ->square()
                ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()->requiresConfirmation(),
                Tables\Actions\ForceDeleteAction::make(),
                Tables\Actions\RestoreAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\ForceDeleteBulkAction::make(),
                    Tables\Actions\RestoreBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListImageGalleries::route('/'),
            'create' => Pages\CreateImageGallery::route('/create'),
            'edit' => Pages\EditImageGallery::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
