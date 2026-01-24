<?php

namespace App\Filament\Resources\RiwayatPembelians\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class RiwayatPembelianForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('order_id')
                    ->required(),
                TextInput::make('order')
                    ->required()
                    ->numeric()
                    ->default(0),
                Toggle::make('is_active')
                    ->required(),
                TextInput::make('Mid')
                    ->required(),
                TextInput::make('server')
                    ->required(),
                TextInput::make('daftar_game_id')
                    ->required()
                    ->numeric(),
                TextInput::make('price_game_id')
                    ->required()
                    ->numeric(),
                TextInput::make('qty')
                    ->required()
                    ->numeric(),
                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->required(),
                TextInput::make('noWa')
                    ->required(),
                TextInput::make('harga')
                    ->required(),
                TextInput::make('diskon')
                    ->required(),
                Select::make('status')
                    ->options(['Pending' => 'Pending', 'Gagal' => 'Gagal', 'Berhasil' => 'Berhasil'])
                    ->default('Pending')
                    ->required(),
            ]);
    }
}
