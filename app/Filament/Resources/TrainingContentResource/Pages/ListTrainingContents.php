<?php

namespace App\Filament\Resources\TrainingContentResource\Pages;

use App\Filament\Resources\TrainingContentResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTrainingContents extends ListRecords
{
    protected static string $resource = TrainingContentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
