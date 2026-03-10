<?php

namespace App\Filament\Resources\TrainingCalendarMaterialResource\Pages;

use App\Filament\Resources\TrainingCalendarMaterialResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTrainingCalendarMaterials extends ListRecords
{
    protected static string $resource = TrainingCalendarMaterialResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
