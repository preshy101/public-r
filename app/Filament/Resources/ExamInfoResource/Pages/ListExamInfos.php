<?php

namespace App\Filament\Resources\ExamInfoResource\Pages;

use App\Filament\Resources\ExamInfoResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListExamInfos extends ListRecords
{
    protected static string $resource = ExamInfoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
