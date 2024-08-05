<?php

namespace App\Filament\Resources\TrainingContentResource\Pages;

use App\Filament\Resources\TrainingContentResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTrainingContent extends EditRecord
{
    protected static string $resource = TrainingContentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }
}
