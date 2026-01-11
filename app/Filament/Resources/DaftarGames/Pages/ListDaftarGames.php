<?php

namespace App\Filament\Resources\DaftarGames\Pages;

use App\Filament\Resources\DaftarGames\DaftarGameResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListDaftarGames extends ListRecords
{
    protected static string $resource = DaftarGameResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
