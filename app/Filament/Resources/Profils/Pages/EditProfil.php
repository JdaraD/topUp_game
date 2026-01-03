<?php

namespace App\Filament\Resources\Profils\Pages;

use App\Filament\Resources\Profils\ProfilResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditProfil extends EditRecord
{
    protected static string $resource = ProfilResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
