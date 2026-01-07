<?php

namespace App\Filament\Resources\Headerbanners\Pages;

use App\Filament\Resources\Headerbanners\HeaderbannerResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListHeaderbanners extends ListRecords
{
    protected static string $resource = HeaderbannerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
