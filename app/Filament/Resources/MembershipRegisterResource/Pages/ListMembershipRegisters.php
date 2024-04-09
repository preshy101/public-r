<?php

namespace App\Filament\Resources\MembershipRegisterResource\Pages;

use App\Filament\Resources\MembershipRegisterResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMembershipRegisters extends ListRecords
{
    protected static string $resource = MembershipRegisterResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
