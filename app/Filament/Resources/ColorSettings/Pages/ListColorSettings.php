<?php

namespace App\Filament\Resources\ColorSettings\Pages;

use App\Filament\Resources\ColorSettings\ColorSettingResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListColorSettings extends ListRecords
{
    protected static string $resource = ColorSettingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
