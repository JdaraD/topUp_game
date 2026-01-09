<?php

namespace App\Filament\Resources\IconsGames;

use App\Filament\Resources\IconsGames\Pages\CreateIconsGames;
use App\Filament\Resources\IconsGames\Pages\EditIconsGames;
use App\Filament\Resources\IconsGames\Pages\ListIconsGames;
use App\Filament\Resources\IconsGames\Schemas\IconsGamesForm;
use App\Filament\Resources\IconsGames\Tables\IconsGamesTable;
use App\Models\iconsgame;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class IconsGamesResource extends Resource
{

    protected static ?string $modelLabel = 'Icon games'; 
    protected static ?string $pluralModelLabel = 'Icon Games';
    protected static ?string $model = iconsgame::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'iconsGames';

    public static function form(Schema $schema): Schema
    {
        return IconsGamesForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return IconsGamesTable::configure($table);
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
            'index' => ListIconsGames::route('/'),
            'create' => CreateIconsGames::route('/create'),
            'edit' => EditIconsGames::route('/{record}/edit'),
        ];
    }
}
