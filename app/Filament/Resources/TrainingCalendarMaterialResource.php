<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TrainingCalendarMaterialResource\Pages;
use App\Models\TrainingCalendarMaterial;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Storage;

class TrainingCalendarMaterialResource extends Resource
{
    protected static ?string $model = TrainingCalendarMaterial::class;

    protected static ?string $navigationIcon = 'heroicon-o-calendar-days';
    protected static ?string $activeNavigationIcon = 'heroicon-s-calendar-days';

    protected static ?string $navigationGroup = 'TRAINING';
    protected static ?int $navigationSort = 3;

    protected static ?string $label = 'Training Calendar Material';
    protected static ?string $pluralLabel = 'Training Calendar Materials';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Details')->columns(2)->schema([
                    TextInput::make('title')
                        ->required()
                        ->maxLength(255),
                    DatePicker::make('event_date')
                        ->label('Event / Effective Date')
                        ->required(),
                    Textarea::make('description')
                        ->rows(5)
                        ->columnSpanFull(),
                    DateTimePicker::make('published_at')
                        ->label('Publish At'),
                    Toggle::make('is_active')
                        ->label('Active')
                        ->default(true),
                ]),
                Section::make('Upload')->schema([
                    FileUpload::make('attachment')
                        ->label('Material File')
                        ->directory('training/calendar')
                        ->preserveFilenames()
                        ->acceptedFileTypes([
                            'application/pdf',
                            'application/msword',
                            'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
                        ])
                        ->downloadable(),
                ])->columnSpan(['lg' => 1]),
            ])->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('event_date')
                    ->label('Event Date')
                    ->date('jS M Y')
                    ->sortable(),
                Tables\Columns\TextColumn::make('attachment')
                    ->label('File')
                    ->url(fn(TrainingCalendarMaterial $record): ?string => $record->attachment ? Storage::url($record->attachment) : null)
                    ->openUrlInNewTab()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\IconColumn::make('is_active')
                    ->label('Active')
                    ->boolean(),
                Tables\Columns\TextColumn::make('published_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('deleted_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTrainingCalendarMaterials::route('/'),
            'create' => Pages\CreateTrainingCalendarMaterial::route('/create'),
            'edit' => Pages\EditTrainingCalendarMaterial::route('/{record}/edit'),
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
