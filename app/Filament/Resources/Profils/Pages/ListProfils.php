<?php

namespace App\Filament\Resources\Profils\Pages;

use App\Filament\Resources\Profils\ProfilResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListProfils extends ListRecords
{
    protected static string $resource = ProfilResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
