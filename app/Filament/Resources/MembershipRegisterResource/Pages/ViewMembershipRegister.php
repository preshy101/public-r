<?php

namespace App\Filament\Resources\MembershipRegisterResource\Pages;

use App\Filament\Resources\MembershipRegisterResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewMembershipRegister extends ViewRecord
{
    protected static string $resource = MembershipRegisterResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
