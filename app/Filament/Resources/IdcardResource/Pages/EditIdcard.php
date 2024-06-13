<?php

namespace App\Filament\Resources\IdcardResource\Pages;

use App\Filament\Resources\IdcardResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditIdcard extends EditRecord
{
    protected static string $resource = IdcardResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }
}
