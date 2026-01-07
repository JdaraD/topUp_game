<?php

namespace App\Filament\Resources\Headerbanners;

use App\Filament\Resources\Headerbanners\Pages\CreateHeaderbanner;
use App\Filament\Resources\Headerbanners\Pages\EditHeaderbanner;
use App\Filament\Resources\Headerbanners\Pages\ListHeaderbanners;
use App\Filament\Resources\Headerbanners\Schemas\HeaderbannerForm;
use App\Filament\Resources\Headerbanners\Tables\HeaderbannersTable;
use App\Models\Headerbanner;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class HeaderbannerResource extends Resource
{
    protected static ?string $modelLabel = 'Banner';
    protected static ?string $pluralModelLabel = 'Banner Promosi Top';
    protected static ?string $model = Headerbanner::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'header banner';

    public static function form(Schema $schema): Schema
    {
        return HeaderbannerForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return HeaderbannersTable::configure($table);
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
            'index' => ListHeaderbanners::route('/'),
            'create' => CreateHeaderbanner::route('/create'),
            'edit' => EditHeaderbanner::route('/{record}/edit'),
        ];
    }
}
