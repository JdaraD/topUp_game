<?php

namespace App\Filament\Resources\ImageSliders\Pages;

use App\Filament\Resources\ImageSliders\ImageSliderResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditImageSlider extends EditRecord
{
    protected static string $resource = ImageSliderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
