<?php

namespace App\Filament\Resources\Vouchers\Tables;

use Filament\Actions\Action;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Table;

class VouchersTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('order')
                    ->label('Urutan')
                    ->numeric()
                    ->formatStateUsing( function($column, $rowLoop, $state, $record ){
                        return $rowLoop->iteration;
                    })
                    ->sortable(),
                ToggleColumn::make('is_active')
                    ->label('Status'),
                TextColumn::make('name')
                    ->label('Nama Voucher Games')
                    ->searchable(),
                TextColumn::make('code')
                    ->label('Kode Voucher Games')
                    ->searchable(),
                TextColumn::make('diskon')
                    ->label('Diskon')
                    ->suffix('%')
                    ->numeric()
                    ->sortable(),
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
                    ->label('Hapus Voucher Game')
                    ->successNotificationTitle('Data Voucher Game Telah Di Hapus')
                    ->requiresConfirmation()
                    ->modalHeading('Hapus Data Voucher Game')
                    ->modalDescription('Data Voucher Game yang dihapus tidak dapat dikembalikan.')
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
