<?php

namespace App\Filament\Resources\PriceGames\Schemas;

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
                            ->label('Icon Game')
                            ->searchable()
                            ->preload()
                            ->required()
                            ->options(
                                iconsgame::query()
                                            ->where('is_active', true)
                                            ->pluck('name', 'id')
                            ),
                        TextInput::make('iconsgame_id')
                            ->required()
                            ->numeric(),
                        TextInput::make('name')
                            ->required(),
                        TextInput::make('harga')
                            ->required()
                            ->numeric(),
                        TextInput::make('discon')
                            ->required()
                            ->numeric(),
                    ]),
                
            ]);
    }
}
