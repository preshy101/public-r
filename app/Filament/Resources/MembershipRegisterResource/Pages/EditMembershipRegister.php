<?php

namespace App\Filament\Resources\MembershipRegisterResource\Pages;

use App\Filament\Resources\MembershipRegisterResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMembershipRegister extends EditRecord
{
    protected static string $resource = MembershipRegisterResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }
}
