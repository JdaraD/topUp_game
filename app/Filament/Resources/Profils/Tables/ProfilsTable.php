<?php

namespace App\Filament\Resources\Profils\Tables;

use Filament\Actions\Action;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Support\Exceptions\Cancel;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Table;

class ProfilsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('order')
                    ->label('Urutan')
                    ->numeric()
                    ->formatStateUsing(function($state, $record, $column, $rowLoop) {
                        return $rowLoop->iteration;
                    })
                    ->sortable(),
                ToggleColumn::make('is_active')
                    ->label('Status'),
                TextColumn::make('name')
                    ->searchable(),
                ImageColumn::make('gambar')
                    ->searchable(),
                TextColumn::make('deskripsi')
                    ->label('Deskripsi')
                    ->limit(20)
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
                    ->label('Hapus')
                    ->successNotificationTitle('Data Berhasil Di Hapus')
                    ->requiresConfirmation()
                    ->modalHeading('Hapus Data')
                    ->modalDescription('Data yang dihapus tidak dapat dikembalikan.')
                    ->action(fn ($record) => $record->delete()),
                ViewAction::make()
                    ->icon('heroicon-o-eye')
                    ->label('Lihat Detail')
                    ->modalActions([
                        EditAction::make(), 
                        Action::make('cancel')
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
