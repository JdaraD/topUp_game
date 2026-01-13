<?php

namespace App\Filament\Resources\DaftarGames\Tables;

use Filament\Actions\Action;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Table;

class DaftarGamesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('order')
                    ->numeric()
                    ->label('Urutan')
                    ->sortable()
                    ->formatStateUsing(function($state, $record, $column, $rowLoop) {
                        return $rowLoop->iteration;
                    }),
                ToggleColumn::make('is_active')
                    ->label('Status'),
                TextColumn::make('name')
                    ->searchable(),
                TextColumn::make('publisher')
                    ->searchable(),
                ImageColumn::make('gambar')
                    ->label('Cover Games')
                    ->disk('public')
                    ->searchable(),
                ImageColumn::make('banner')
                    ->label('Banner Games')
                    ->disk('public')
                    ->searchable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make()
                    ->openUrlInNewTab(),
                DeleteAction::make()
                    ->label('Hapus Game')
                    ->successNotificationTitle('Data Game Telah Di Hapus')
                    ->requiresConfirmation()
                    ->modalHeading('Hapus Data Game')
                    ->modalDescription('Data Game yang dihapus tidak dapat dikembalikan.')
                    ->action(fn($record) => $record->delete()),
                ViewAction::make()
                    ->label('Lihat Detail')
                    ->icon('heroicon-o-eye')
                    ->modalActions([
                        EditAction::make(),
                        Action::make('cencel')
                            ->label('Tutup')
                            ->color('gray')
                            ->close(),
                    ]),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
