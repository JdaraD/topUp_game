<?php

namespace App\Filament\Resources\IconsGames\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class IconsGamesForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->schema([
                TextInput::make('order')
                    ->hidden()
                    ->numeric()
                    ->default(1),
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
                            ->label('Nama Icons')
                            ->placeholder('Diamons PUBG Mobile')
                            ->required(),
                        TextInput::make('games')
                            ->label('Nama Jenis Games')
                            ->placeholder('PUBG Mobile')
                            ->required(),
                        FileUpload::make('gambar')
                            ->label('Icons Diamons Games')
                            ->placeholder('Upload Icons dalam bentuk PNG atau Transparan')
                            ->maxSize(2045)
                            ->disk('public')
                            ->directory('Icons')
                            ->acceptedFileTypes(['image/jpg', 'image/jpeg', 'image/png', 'image/PNG'])
                            ->rule(['mimes:jpg,jpng,png'])
                            ->required(),
                    ]),
            ])->columns(1);
    }
}
