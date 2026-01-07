<?php

namespace App\Filament\Resources\Headerbanners\Pages;

use App\Filament\Resources\Headerbanners\HeaderbannerResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditHeaderbanner extends EditRecord
{
    protected static string $resource = HeaderbannerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
