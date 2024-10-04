<?php

namespace App\Filament\Resources\ResultSheetResource\Pages;

use App\Filament\Resources\ResultSheetResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListResultSheets extends ListRecords
{
    protected static string $resource = ResultSheetResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
