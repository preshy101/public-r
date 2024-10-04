<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ResultSheetResource\Pages;
use App\Filament\Resources\ResultSheetResource\RelationManagers;
use App\Models\ResultSheet;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ResultSheetResource extends Resource
{
    protected static ?string $model = ResultSheet::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static ?string $activeNavigationIcon = 'heroicon-s-document-text';
    protected static ?string $navigationGroup = 'EDUCATION';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('registrationNumber')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('type')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('month')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('year')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('tu')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('tp')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('cgpa')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('remarks')
                    ->required()
                    ->maxLength(255),
                Forms\Components\RichEditor::make('courses')
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('registrationNumber')
                    ->searchable(),
                    Tables\Columns\TextColumn::make('type')
                    ->searchable(),
                Tables\Columns\TextColumn::make('courses')->html()->limit(150)->wrap()
                    ->searchable(),
                Tables\Columns\TextColumn::make('tu')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tp')
                    ->searchable(),
                Tables\Columns\TextColumn::make('cgpa')
                    ->searchable(),
                Tables\Columns\TextColumn::make('remarks')
                    ->searchable(),
                Tables\Columns\TextColumn::make('month')
                    ->searchable(),
                Tables\Columns\TextColumn::make('year')
                    ->searchable(),
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
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListResultSheets::route('/'),
            'create' => Pages\CreateResultSheet::route('/create'),
            'edit' => Pages\EditResultSheet::route('/{record}/edit'),
        ];
    }
}
