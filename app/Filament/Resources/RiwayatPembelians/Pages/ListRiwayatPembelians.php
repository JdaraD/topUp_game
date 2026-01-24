<?php

namespace App\Filament\Resources\RiwayatPembelians\Pages;

use App\Filament\Resources\RiwayatPembelians\RiwayatPembelianResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListRiwayatPembelians extends ListRecords
{
    protected static string $resource = RiwayatPembelianResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // CreateAction::make(),
        ];
    }

    public static function canCreate(): bool
    {
        return false;
    }

}
