<?php

namespace App\Filament\Resources\Banners\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class BannerForm
{
    public static function getPuralModelLabel() : string
    {
        return 'Banner';
    }

    public static function getModelLabel() : string
    {
        return 'Banner';
    }

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
                            ->default(true)
                            ->onColor('success')
                            ->offColor('danger')
                            ->required(),
                    ]),
                Section::make()
                    ->schema([
                        TextInput::make('name')
                            ->label('Judul Banner')
                            ->placeholder('Masukan Judul Banner')
                            ->required(),
                        FileUpload::make('gambar')
                            ->label('Gambar Banner')
                            ->placeholder('Masukan gambar Banner width( 100% ) & Height( 280px )')
                            ->imageEditorViewportHeight(280)
                            ->required(),
                    ]),
                
            ])->columns(1);
    }
}
