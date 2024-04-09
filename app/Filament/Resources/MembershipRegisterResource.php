<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use App\Models\MembershipRegister;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Section;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\DateTimePicker;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\MembershipRegisterResource\Pages;
use App\Filament\Resources\MembershipRegisterResource\RelationManagers;

class MembershipRegisterResource extends Resource
{
    protected static ?string $model = MembershipRegister::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('') ->columns(2)
                    ->description('Membership register')
                    ->schema([
                 TextInput::make('SNO')
                ->required()
                ->minLength(2)
                ->maxLength(255),
                TextInput::make('PRACTICE_ID')
                ->required()
                ->minLength(2)
                ->maxLength(255),
                 TextInput::make('LAST_NAME')
                ->required()
                ->minLength(2)
                ->maxLength(255),
                 TextInput::make('FIRST_NAME')
                ->minLength(2)
                ->maxLength(255),
                 TextInput::make('PHONE')
                ->required()
                ->minLength(2)
                ->maxLength(255),
                 TextInput::make('EMAIL')
                 ->email()
                ->required()
                ->minLength(2)
                ->maxLength(255),
                Select::make('GRADE')
                ->required()
                ->options([
                    'fellows' => 'Fellows',
                    'Associate' => 'Associate',
                    'Graduate' => 'Graduate',
                    'Members' => 'Members'
                ])
                ,

                 TextInput::make('CHAPTER')
                ->required()
                ->minLength(2)
                ->maxLength(255),
                 TextInput::make('ORGANIZATION')
                ->required()
                ->minLength(2)
                ->maxLength(255),
                DateTimePicker::make('INDUCTED') ,
                DateTimePicker::make('UPGRADED')
                ,
                ]),
                Select::make('Confirmed')
                ->options([
                    'Yes' => 'Yes',
                    'No' => 'No'
                ])
                ,

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('SNO')
                ->searchable()
                ->sortable(),
                TextColumn::make('PRACTICE_ID')
                ->searchable()
                ->sortable(),
                TextColumn::make('LAST_NAME')
                ->searchable()
                ->sortable(),
                TextColumn::make('FIRST_NAME')
                ->searchable()
                ->sortable(),
                TextColumn::make('PHONE')
                ->searchable()
                ->sortable(),
                TextColumn::make('EMAIL')
                ->searchable()
                ->sortable(),
                TextColumn::make('GRADE')
                ->searchable()
                ->sortable(),

                TextColumn::make('CHAPTER')
                ->searchable()
                ->sortable(),
                TextColumn::make('ORGANIZATION')
                ->limit(50)
                ->toggleable(isToggledHiddenByDefault: true)
                ->searchable()
                ->sortable(),
                TextColumn::make('INDUCTED')
                ->toggleable(isToggledHiddenByDefault: true)
                ->searchable()
                ->sortable(),
                TextColumn::make('UPGRADED')
                ->toggleable(isToggledHiddenByDefault: true)
                ->searchable()
                ->sortable(),
                TextColumn::make('Confirmed')
                ->toggleable(isToggledHiddenByDefault: false)
                ->badge()
                ->color(fn (string $state): string => match ($state) {

                    'Yes' => 'success',
                    'No' => 'danger',
                })
                ->sortable(),
            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListMembershipRegisters::route('/'),
            'create' => Pages\CreateMembershipRegister::route('/create'),
            'view' => Pages\ViewMembershipRegister::route('/{record}'),
            'edit' => Pages\EditMembershipRegister::route('/{record}/edit'),
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
