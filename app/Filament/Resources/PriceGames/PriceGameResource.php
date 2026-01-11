<?php

namespace App\Filament\Resources\PriceGames;

use App\Filament\Resources\PriceGames\Pages\CreatePriceGame;
use App\Filament\Resources\PriceGames\Pages\EditPriceGame;
use App\Filament\Resources\PriceGames\Pages\ListPriceGames;
use App\Filament\Resources\PriceGames\Schemas\PriceGameForm;
use App\Filament\Resources\PriceGames\Tables\PriceGamesTable;
use App\Models\PriceGame;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PriceGameResource extends Resource
{
    public static ?string $pluralModelLabel = 'Price Diamons Games';

    public static ?string $modelLabel = 'Price Diamons Games';

    protected static ?string $model = PriceGame::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'priceGame';

    public static function form(Schema $schema): Schema
    {
        return PriceGameForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PriceGamesTable::configure($table);
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
            'index' => ListPriceGames::route('/'),
            'create' => CreatePriceGame::route('/create'),
            'edit' => EditPriceGame::route('/{record}/edit'),
        ];
    }
}
