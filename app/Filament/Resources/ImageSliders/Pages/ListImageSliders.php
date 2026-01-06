<?php

namespace App\Filament\Resources\ImageSliders\Pages;

use App\Filament\Resources\ImageSliders\ImageSliderResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListImageSliders extends ListRecords
{
    protected static string $resource = ImageSliderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
