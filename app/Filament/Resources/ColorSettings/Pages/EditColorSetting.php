<?php

namespace App\Filament\Resources\ColorSettings\Pages;

use App\Filament\Resources\ColorSettings\ColorSettingResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditColorSetting extends EditRecord
{
    protected static string $resource = ColorSettingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
