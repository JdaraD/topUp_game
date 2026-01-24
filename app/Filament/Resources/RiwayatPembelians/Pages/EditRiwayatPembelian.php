<?php

namespace App\Filament\Resources\RiwayatPembelians\Pages;

use App\Filament\Resources\RiwayatPembelians\RiwayatPembelianResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditRiwayatPembelian extends EditRecord
{
    protected static string $resource = RiwayatPembelianResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
