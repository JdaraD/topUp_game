<?php

namespace App\Filament\Resources\Keranjangs\Pages;

use App\Filament\Resources\Keranjangs\KeranjangResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditKeranjang extends EditRecord
{
    protected static string $resource = KeranjangResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
