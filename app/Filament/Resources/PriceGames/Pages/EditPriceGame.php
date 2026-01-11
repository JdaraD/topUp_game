<?php

namespace App\Filament\Resources\PriceGames\Pages;

use App\Filament\Resources\PriceGames\PriceGameResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditPriceGame extends EditRecord
{
    protected static string $resource = PriceGameResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
