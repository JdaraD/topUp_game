<?php

namespace App\Filament\Resources\ColorSettings\Schemas;

use Filament\Forms\Components\ColorPicker;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\Slider;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class ColorSettingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->schema([
                TextInput::make('order')
                    ->hidden()
                    ->numeric()
                    ->default(0),
                Section::make('Status')
                    ->schema([
                        Toggle::make('is_active')
                            ->label('Status')
                            ->onColor('success')
                            ->offColor('danger')
                            ->required()
                            ->default(true),
                    ]),
                Section::make()
                    ->schema([
                        TextInput::make('name')
                            ->label('Tema Warna')
                            ->placeholder('Masukan Tema Warna')
                            ->required(),
                        Section::make('Color Header')
                            ->schema([
                                ColorPicker::make('colorHeader')
                                    ->label('Color Header')
                                    ->placeholder('Pilih Warna Header')
                                    ->hex()
                                    ->required(),
                                Slider::make('colorHeader_opacity')
                                    ->label('Opacity Header')
                                    ->minValue(0)
                                    ->maxValue(100)
                                    ->step(1)
                                    ->reactive()
                                    ->default(100),
                                Placeholder::make('opacityHeader_value')
                                    ->label('Nilai Opacity')
                                    ->content(fn ($get) => $get('colorHeader_opacity') . ' %'),
                        ]),
                        Section::make('Color Body')
                            ->schema([
                                ColorPicker::make('colorBody')
                                    ->label('Color Body')
                                    ->placeholder('Pilih Warna Body')
                                    ->hex()
                                    ->required(),
                                Slider::make('colorBody_opacity')
                                    ->label('Opacity Body')
                                    ->minValue(0)
                                    ->maxValue(100)
                                    ->step(1)
                                    ->hint('%')
                                    ->default(100),
                                Placeholder::make('opacityBody_value')
                                    ->label('Nilai Opacity')
                                    ->content(fn ($get) => $get('colorBody_opacity'). ' %')
                            ]),
                        Section::make('Color Footer')
                            ->schema([
                                ColorPicker::make('colorFooter')
                                    ->label('Color Footer')
                                    ->placeholder('Pilih Warna Footer')
                                    ->hex()
                                    ->required(),
                                Slider::make('colorFooter_opacity')
                                    ->label('Opacity Footer')
                                    ->minValue(0)
                                    ->maxValue(100)
                                    ->step(1)
                                    ->hint('%')
                                    ->default(100),
                                Placeholder::make('opacityFooter_value')
                                    ->label('Nilai Opacity')
                                    ->content(fn ($get) => $get('colorFooter_opacity'). ' %')
                            ]),
                    ])
            ])->columns(1);
    }
}
