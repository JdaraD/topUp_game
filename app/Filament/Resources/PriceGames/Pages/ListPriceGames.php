<?php

namespace App\Filament\Resources\PriceGames\Pages;

use App\Filament\Resources\PriceGames\PriceGameResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPriceGames extends ListRecords
{
    protected static string $resource = PriceGameResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
