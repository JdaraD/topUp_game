<?php

namespace App\Filament\Resources\Keranjangs\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class KeranjangForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->schema([
                Section::make()
                    ->schema([
                        TextInput::make('order_id')
                            ->label('Order ID')
                            ->required(),
                    ]),
                Section::make()
                    ->schema([
                        TextInput::make('Mid')
                            ->label('Name Member')
                            ->required(),
                        // TextInput::make('server')
                        //     ->label('Server Game')
                        //     ->required(),
                        Select::make('daftar_game_id')
                            ->label('Nama Games')
                            ->relationship('games', 'name')
                            ->required(),
                        Select::make('price_game_id')
                            ->label('Harga Game')
                            ->relationship('price', 'harga')
                            ->required(),
                        // TextInput::make('qty')
                        //     ->label('Jumlah Pembelian')
                        //     ->required()
                        //     ->numeric(),
                        // TextInput::make('email')
                        //     ->label('Email address')
                        //     ->email()
                        //     ->required(),
                        // TextInput::make('noWa')
                        //     ->label('No WhatsApp')
                        //     ->required(),
                        // TextInput::make('harga')
                        //     ->label('Total Harga')
                        //     ->prefix('Rp. ')
                        //     ->required(),
                        // TextInput::make('diskon')
                        //     ->label('Diskon')
                        //     ->suffix('%')
                        //     ->required(),
                    ]),
                Section::make()
                    ->schema([
                        Select::make('status')
                            ->label('Status Pembelian')
                            ->options(['Pending' => 'Pending', 'Gagal' => 'Gagal', 'Berhasil' => 'Berhasil'])
                            ->default('Pending')
                            ->required(),
                    ]),
                
            ])->columns(1);
    }
}
