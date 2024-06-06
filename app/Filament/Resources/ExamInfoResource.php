<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ExamInfoResource\Pages;
use App\Filament\Resources\ExamInfoResource\RelationManagers;
use App\Models\examInfo;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\CheckboxColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ExamInfoResource extends Resource
{
    protected static ?string $model = examInfo::class;
    protected static ?string $navigationLabel = 'Exam Information';

    protected static ?string $navigationIcon = 'heroicon-o-book-open';
    protected static ?string $activeNavigationIcon = 'heroicon-s-book-open';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('') ->columns(2)
                ->description('')
                ->schema([
                TextInput::make('title')
                ->maxLength(255)
                ->required()
                ->placeholder('Title')
                ->minLength(2)
                ->columnSpanFull(),
                Textarea::make('description')
                ->required()
                ->placeholder('')
                ->rows(3)
                ->cols(20)
                ->columnSpanFull()
                ->minLength(2)
                ->maxLength(255),
                RichEditor::make('body')
                ->required()
                ->minLength(2)
                ->columnSpanFull()
                // ->fileAttachmentsVisibility('private')
                ->fileAttachmentsDirectory('exam/attachments'),
                Toggle::make('status'),

                ])->columnSpan(2),
                Section::make('Upload Image')
                ->description('')
                ->schema(
                    [
                        FileUpload::make('image')->directory('exams/thumbnails'),
                    ])->collapsible()->columnSpan(['lg' => 1]),
            ])->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')
                ->square()
                ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('title')
                ->searchable()
                ->sortable(),
                TextColumn::make('description')
                ->limit(50)
                 ,
                TextColumn::make('body')->html()->limit(150)->wrap(),
                CheckboxColumn::make('status'),
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

        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListExamInfos::route('/'),
            'create' => Pages\CreateExamInfo::route('/create'),
            'edit' => Pages\EditExamInfo::route('/{record}/edit'),
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
