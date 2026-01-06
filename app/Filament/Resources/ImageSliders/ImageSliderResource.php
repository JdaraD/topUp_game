<?php

namespace App\Filament\Resources\ImageSliders;

use App\Filament\Resources\ImageSliders\Pages\CreateImageSlider;
use App\Filament\Resources\ImageSliders\Pages\EditImageSlider;
use App\Filament\Resources\ImageSliders\Pages\ListImageSliders;
use App\Filament\Resources\ImageSliders\Schemas\ImageSliderForm;
use App\Filament\Resources\ImageSliders\Tables\ImageSlidersTable;
use App\Models\ImageSlider;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ImageSliderResource extends Resource
{
    protected static ?string $model = ImageSlider::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'imageSlider';

    public static function form(Schema $schema): Schema
    {
        return ImageSliderForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ImageSlidersTable::configure($table);
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
            'index' => ListImageSliders::route('/'),
            'create' => CreateImageSlider::route('/create'),
            'edit' => EditImageSlider::route('/{record}/edit'),
        ];
    }
}
