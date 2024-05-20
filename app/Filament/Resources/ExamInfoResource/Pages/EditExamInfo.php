<?php

namespace App\Filament\Resources\ExamInfoResource\Pages;

use App\Filament\Resources\ExamInfoResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditExamInfo extends EditRecord
{
    protected static string $resource = ExamInfoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
