<?php

namespace App\Filament\Resources\ContactUszResource\Pages;

use App\Filament\Resources\ContactUszResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListContactUszs extends ListRecords
{
    protected static string $resource = ContactUszResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Actions\CreateAction::make(),
        ];
    }
}
