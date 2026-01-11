<?php

namespace App\Filament\Resources\DaftarGames\Pages;

use App\Filament\Resources\DaftarGames\DaftarGameResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditDaftarGame extends EditRecord
{
    protected static string $resource = DaftarGameResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
