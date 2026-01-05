<?php

namespace App\Filament\Resources\Profils\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Flex;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\ToggleColumn;

class ProfilForm
{
    public static function getPluralModelLabel(): string
    {
        return 'Profil';
    }

    public static function getModelLabel(): string
    {
        return 'Profil';
    }

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
                                ->onColor('success')
                                ->offColor('danger')
                                ->required()
                                ->default(true)
                                ->label('Status'),
                        ]),
                    Section::make()
                        ->schema([
                            TextInput::make('name')
                                ->label('Nama Perusahaan')
                                ->placeholder('Masukan Nama Perusahaan')
                                ->required(),
                            FileUpload::make('gambar')
                                ->label('Logo atau Identitas Perusahana')
                                ->placeholder('Upload Logo atau Identitas Perusahana')
                                ->maxSize(2024)
                                ->imageEditorViewportWidth(56)
                                ->imageEditorViewportHeight(64)
                                ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/jpg'])
                                ->rule(['mimes:jpg,jpeg,png'])
                                ->required(),
                            Textarea::make('deskripsi')
                                ->label('Deskripsi')
                                ->placeholder('Masukan Deskripsi')
                                ->required()
                                ->columnSpanFull(),
    
                    ])
            ])->columns(1);

                

    }
}
