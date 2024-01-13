<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Category;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\ColorPicker;
use App\Filament\Resources\CategoryResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\CategoryResource\RelationManagers;

class CategoryResource extends Resource
{
    protected static ?string $model = Category::class;

    protected static ?string $navigationIcon = 'heroicon-o-archive-box';
    protected static ?string $navigationGroup = 'Blog';
    protected static ?string $navigationLabel = 'Category';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('')  
                    ->description('')
                    ->schema([  
                TextInput::make('title')->live()->required()->minLength(3)->maxLength(150)
                ->afterStateUpdated(function 
                (string $operation, $state, Forms\Set $set){
                    if ($operation === 'edit') {
                        return;
                    }
                    $set('slug', Str::slug($state));
                    }
            ),
                TextInput::make('slug')->required()->unique(ignoreRecord: true),
                ColorPicker::make('text_color')->nullable(),
                ColorPicker::make('bg_color')->nullable()
            ]) ->columns(2)
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            TextColumn::make('title')->sortable()->searchable(),
            TextColumn::make('slug')->sortable()->searchable(),
            TextColumn::make('text_color')->sortable()->searchable(),
            TextColumn::make('bg_color')->sortable()->searchable(), 
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
            'index' => Pages\ListCategories::route('/'),
            'create' => Pages\CreateCategory::route('/create'),
            'edit' => Pages\EditCategory::route('/{record}/edit'),
        ];
    }
}
