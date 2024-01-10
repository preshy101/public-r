<?php

namespace App\Filament\Resources\ContactUszResource\Pages;

use App\Filament\Resources\ContactUszResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditContactUsz extends EditRecord
{
    protected static string $resource = ContactUszResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
