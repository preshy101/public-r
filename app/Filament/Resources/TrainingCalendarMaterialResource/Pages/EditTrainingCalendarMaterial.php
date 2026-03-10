<?php

namespace App\Filament\Resources\TrainingCalendarMaterialResource\Pages;

use App\Filament\Resources\TrainingCalendarMaterialResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTrainingCalendarMaterial extends EditRecord
{
    protected static string $resource = TrainingCalendarMaterialResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }
}
