<?php

namespace App\Filament\Resources\ImageSliders\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class ImageSliderForm
{
    public static function getModelPurelLable() : string
    {
        return 'Image Slide';
    }

    public static function getModelLabel() : string
    {
        return 'Image Slide';
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
                            ->onColor('success')
                            ->offColor('danger')
                            ->default(true)
                            ->required(),
                    ]),
                Section::make()
                    ->schema([
                        TextInput::make('name')
                            ->label('Nama Gambar Slide')
                            ->placeholder('Masukan Nama Gambar Banner')
                            ->required(),

                        FileUpload::make('gambar')
                            ->label('Gambar Slide')
                            ->image()
                            ->disk('public')
                            ->directory('image-sliders')
                            ->maxSize(10024)
                            ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/jpg', 'image/gif'])
                            ->rule(['mimes:jpg,jpeg,png,gif'])
                            ->imageEditor()
                            ->imageEditorViewportHeight(554)
                            ->required(),
                    ])

            ])->columns(1);
    }
}
