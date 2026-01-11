<?php

namespace App\Filament\Resources\DaftarGames;

use App\Filament\Resources\DaftarGames\Pages\CreateDaftarGame;
use App\Filament\Resources\DaftarGames\Pages\EditDaftarGame;
use App\Filament\Resources\DaftarGames\Pages\ListDaftarGames;
use App\Filament\Resources\DaftarGames\Schemas\DaftarGameForm;
use App\Filament\Resources\DaftarGames\Tables\DaftarGamesTable;
use App\Models\DaftarGame;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class DaftarGameResource extends Resource
{
    protected static ?string $pluralModelLabel = 'Daftar Game';

    protected static ?string $modelLabel = 'Daftar Game';

    protected static ?string $model = DaftarGame::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'daftarGame';

    public static function form(Schema $schema): Schema
    {
        return DaftarGameForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return DaftarGamesTable::configure($table);
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
            'index' => ListDaftarGames::route('/'),
            'create' => CreateDaftarGame::route('/create'),
            'edit' => EditDaftarGame::route('/{record}/edit'),
        ];
    }
}
