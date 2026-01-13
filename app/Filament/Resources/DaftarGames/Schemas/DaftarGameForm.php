<?php

namespace App\Filament\Resources\DaftarGames\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class DaftarGameForm
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
                            ->label('Nama Game')
                            ->placeholder('PUBG Mobile')
                            ->required(),
                        TextInput::make('publisher')
                            ->label('Nama Publisher')
                            ->placeholder('Tencent Games')
                            ->required(),
                        FileUpload::make('gambar')
                            ->label('Cover Game')
                            ->placeholder('Upload Cover Game width ( 192px ) & height ( 208px )')
                            ->maxSize(2045)
                            ->imageEditorViewportHeight(208)
                            ->imageEditorViewportWidth(192)
                            ->acceptedFileTypes(['image/jpg', 'image/jpeg', 'image/png'])
                            ->rule(['mimes:jpeg,jpg,png'])
                            ->disk('public')
                            ->directory('CoverGames')
                            ->required(),
                        FileUpload::make('banner')
                            ->label('Banner Game')
                            ->placeholder('Upload Banner Game width width( 100% ) & Height( 280px )')
                            ->maxSize(10045)
                            ->imageEditorViewportHeight(280)
                            ->acceptedFileTypes(['image/jpg', 'image/jpeg', 'image/png', 'image/gif'])
                            ->rule(['mimes:jpeg,jpg,png,gif'])
                            ->disk('public')
                            ->directory('BannerGames')
                            ->required(),
                        RichEditor::make('deskripsi')
                            ->label('Deskripsi')
                            ->required()
                            ->json()
                            ->columnSpanFull(),
                    ]),
                
                
            ])->columns(1);
    }
}
