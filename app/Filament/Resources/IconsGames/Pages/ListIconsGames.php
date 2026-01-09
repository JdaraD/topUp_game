<?php

namespace App\Filament\Resources\IconsGames\Pages;

use App\Filament\Resources\IconsGames\IconsGamesResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListIconsGames extends ListRecords
{
    protected static string $resource = IconsGamesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
