<?php

namespace App\Filament\Resources;

use App\Models\cms;
use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\CmsResource\Pages;
use Filament\Forms\Components\DateTimePicker;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\CmsResource\RelationManagers;

class CmsResource extends Resource
{
    protected static ?string $model = cms::class;
    protected static ?string $navigationLabel = 'CMS';

    protected static ?string $navigationIcon = 'heroicon-o-squares-plus';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Main') 
                    ->description('')
                    ->schema([  
                Select::make('contentId')
                ->required()
                ->searchable()
                ->options([
                    // home
                    'slide' => 'SLIDE',
                    'welcome' => 'WELCOME NOTES',
                    'presidentSpeech' => "PRESIDENT'S SPEECH",
                    'teamMembers' => 'TEAM MEMBERS',
                    'faq' => 'FAQ',
                    'testimonial' => 'TESTIMONIAL',
                    // about us
                    'history' => 'HISTORY',
                    'visionAndMission' => 'VISION AND MISSION',
                    'ethicCodes' => 'ETHIC CODES',
                    'council' => 'COUNCIL',
                    // student
                    'curriculum' => 'CURRICULUM',
                    // membership
                    'membershipInformation' => 'MEMBERSHIP INFORMATION',
                    'membershipCategory' => 'MEMBERSHIP CATEGORY',
                    'membershipUpgrade' => 'MEMBERSHIP UPGRADE', 
                    // resources
                    'images' => 'IMAGE GALLERY',
                    'events' => 'EVENT',
                    'videos' => 'VIDEO GALLERY',
                    'downloads' => 'DOWNLOADABLE'
                ]),   
                TextInput::make('version')
                ->required() 
                ->minLength(2)
                ->maxLength(255), 
                TextInput::make('title')
                ->required() 
                ->placeholder('Name, Title, FAQ-Question')
                ->minLength(2)
                ->maxLength(255), 
                Textarea::make('description')
                ->required()
                ->placeholder('FAQ-Answer')
                ->rows(10)
                ->cols(20)
                ->minLength(2)
                ->maxLength(255),
                Textarea::make('note') 
                ->minLength(2)
                ->maxLength(255), 
                RichEditor::make('fullText') 
                ->minLength(2) 
                ->fileAttachmentsDirectory('attachments')
                ->fileAttachmentsVisibility('private'),
            
                DateTimePicker::make('startDate')->nullable()
                ->required(),
                DateTimePicker::make('endDate')->nullable()
                ->required(),
            ]), 
                Section::make('Main')
                ->description('')
                ->schema([
                FileUpload::make('image')
                ->minSize(12)
                ->maxSize(102400)
                ->imageEditor()
                ->imageResizeMode('cover')
                ->imageCropAspectRatio('16:9')
                ->imageResizeTargetWidth('1920')
                ->imageResizeTargetHeight('1080')
                ->directory('resources/thumbnails'), 
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('contentId') 
                ->searchable()
                ->label('Content Type') 
                ->sortable(),
                TextColumn::make('version')
                ->sortable(),
                TextColumn::make('title')
                ->searchable()
                ->sortable(),
                TextColumn::make('description')
                ->limit(50)
                 ,
                TextColumn::make('fullText')->html()->limit(150)->wrap(),
                TextColumn::make('note')->html()->limit(50)
                ->toggleable(isToggledHiddenByDefault: true),
                ImageColumn::make('image')
                ->square()
                ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('startDate')->html()->limit(50)
                ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('endDate')->html()
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
            'index' => Pages\ListCms::route('/'),
            'create' => Pages\CreateCms::route('/create'),
            'edit' => Pages\EditCms::route('/{record}/edit'),
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
