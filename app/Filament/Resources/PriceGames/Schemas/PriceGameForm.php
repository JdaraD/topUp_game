<?php

namespace App\Filament\Resources\PriceGames\Schemas;

use App\Models\daftarGame;
use App\Models\iconsgame;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class PriceGameForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->schema([
                TextInput::make('order')
                    ->hidden()
                    ->numeric()
                    ->default(0),
                Section::make()
                    ->schema([
                        Toggle::make('is_active')
                            ->label('Status')
                            ->onColor('success')
                            ->default((true))
                            ->required(),
                    ]),
                Section::make()
                    ->schema([
                        Select::make('daftar_game_id')
                            ->label('Daftar Games')
                            ->placeholder('Pilih Game')
                            ->searchable()
                            ->preload()
                            ->required()
                            ->options(
                                daftarGame::query()
                                            ->where('is_active', true)
                                            ->pluck('name', 'id')
                            ),
                        Select::make('iconsgame_id')
                            ->label('Icon Games')
                            ->placeholder('Pilih Icon Games')
                            ->required()
                            ->preload()
                            ->searchable()
                            ->options(
                                iconsgame::query()
                                    ->where('is_active', true)
                                    ->pluck('name', 'id')
                            ),
                        TextInput::make('name')
                            ->label('Name Event')
                            ->placeholder('Tulis Event')
                            ->required(),
                        TextInput::make('value')
                            ->label('Money Game')
                            ->required()
                            ->numeric(),
                        TextInput::make('harga')
                            ->label('Harga')
                            ->prefix('Rp.')
                            ->required()
                            ->numeric(),
                        TextInput::make('discon')
                            ->label('Diskon')
                            // ->hint('%')
                            ->suffix('%')
                            ->required()
                            ->numeric(),
                    ]),
                
            ])->columns(1);
    }
}
