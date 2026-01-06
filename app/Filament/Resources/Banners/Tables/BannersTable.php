<?php

namespace App\Filament\Resources\Banners\Tables;

use Filament\Actions\Action;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Table;

class BannersTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('order')
                    ->label('Urutan')
                    ->numeric()
                    ->sortable()
                    ->formatStateUsing(function ($state, $record, $column, $rowLoop) {
                        return $rowLoop->iteration;
                    }),
                ToggleColumn::make('is_active')
                    ->label('Status'),
                TextColumn::make('name')
                    ->label('Nama Banner')
                    ->searchable(),
                ImageColumn::make('gambar')
                    ->label('Gambar Banner')
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
                    ->label('Hapus Banner')
                    ->successNotificationTitle('Banner Berhasil Di Hapus')
                    ->requiresConfirmation()
                    ->modalHeading('Hapus Data Banner')
                    ->modalDescription('Data Banner yang dihapus tidak dapat dikembalikan.')
                    ->action(fn($record) => $record->delete()),
                ViewAction::make()
                    ->icon('heroicon-o-eye')
                    ->label('Lihat Detail')
                    ->modalActions([
                        EditAction::make(),
                        Action::make('cancel')
                            ->label('Tutup')
                            ->color('gray')
                            ->close(),
                    ])

            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
