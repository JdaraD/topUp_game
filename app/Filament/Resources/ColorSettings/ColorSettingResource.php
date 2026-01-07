<?php

namespace App\Filament\Resources\ColorSettings;

use App\Filament\Resources\ColorSettings\Pages\CreateColorSetting;
use App\Filament\Resources\ColorSettings\Pages\EditColorSetting;
use App\Filament\Resources\ColorSettings\Pages\ListColorSettings;
use App\Filament\Resources\ColorSettings\Schemas\ColorSettingForm;
use App\Filament\Resources\ColorSettings\Tables\ColorSettingsTable;
use App\Models\ColorSetting;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ColorSettingResource extends Resource
{
    protected static ?string $modelLabel = 'Color Setting';
    protected static ?string $pluralModelLabel = 'Color Setting';
    protected static ?string $model = ColorSetting::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'colorSetting';

    public static function form(Schema $schema): Schema
    {
        return ColorSettingForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ColorSettingsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListColorSettings::route('/'),
            'create' => CreateColorSetting::route('/create'),
            'edit' => EditColorSetting::route('/{record}/edit'),
        ];
    }
}
