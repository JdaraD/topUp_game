<?php

namespace App\Filament\Resources\Headerbanners\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class HeaderbannerForm
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
                            ->label('Judul Gambar')
                            ->placeholder('Masukan Judul Gambar')
                            ->required(),
                        FileUpload::make('gambar')
                            ->label('Banner Image')
                            ->placeholder('Upload Banner width ( 100% ) & height ( 554px )')
                            ->maxSize(2045)
                            ->imageEditorViewportHeight(554)
                            ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/jpg', 'image/gif'])
                            ->rule(['mimes:jpg,jpeg,png,gif'])
                            ->disk('public')
                            ->required(),
                        
                    ]),

            ])->columns(1);
    }
}
