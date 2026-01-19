<?php

namespace App\Filament\Resources\Vouchers\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

use function Livewire\str;

class VoucherForm
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
                            ->offColor('danger')
                            ->default(true)
                            ->required(),
                    ]),       
                Section::make()
                    ->schema([
                        TextInput::make('name')
                            ->label('Nama Voucher')
                            ->placeholder('Masukkan Nama Voucher Game ( Voucher kemerdekaan )')
                            ->required(),
                        TextInput::make('code')
                            ->label('Kode Voucher')
                            ->default( fn() => Str::upper(Str::random(8)))
                            ->required(),
                        TextInput::make('diskon')
                            ->label('Diskon')
                            ->suffix('%')
                            ->required()
                            ->numeric(),
                    ]),       
                
            ])->columns(1);
    }
}
