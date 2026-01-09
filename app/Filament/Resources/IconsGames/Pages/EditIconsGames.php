<?php

namespace App\Filament\Resources\IconsGames\Pages;

use App\Filament\Resources\IconsGames\IconsGamesResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditIconsGames extends EditRecord
{
    protected static string $resource = IconsGamesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
