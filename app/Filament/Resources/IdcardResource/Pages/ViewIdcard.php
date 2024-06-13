<?php

namespace App\Filament\Resources\IdcardResource\Pages;

use App\Filament\Resources\IdcardResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewIdcard extends ViewRecord
{
    protected static string $resource = IdcardResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
