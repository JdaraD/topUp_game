<?php

namespace App\Filament\Resources\RiwayatPembelians\Tables;

use Filament\Actions\Action;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class RiwayatPembeliansTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('order')
                    ->label('Nomor Urut')
                    ->numeric()
                    ->sortable()
                    ->formatStateUsing( function($state, $record, $column, $rowLoop){
                        return $rowLoop->iteration;
                    }),
                TextColumn::make('order_id')
                    ->label('Order ID')
                    ->searchable()
                    ->searchable(),
                // IconColumn::make('is_active')
                //     ->boolean(),
                TextColumn::make('Mid')
                    ->label('Name Member')
                    ->searchable(),
                TextColumn::make('server')
                    ->label('Server Game')
                    ->searchable(),
                TextColumn::make('games.name')
                    ->label('Nama Games')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('price.harga')
                    ->label('Harga Game')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('qty')
                    ->label('Jumlah')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('email')
                    ->label('Email address')
                    ->searchable(),
                TextColumn::make('noWa')
                    ->label('No WhatsApp')
                    ->searchable(),
                TextColumn::make('harga')
                    ->label('Total Harga')
                    ->searchable(),
                TextColumn::make('diskon')
                    ->label('Diskon')
                    ->searchable(),
                BadgeColumn::make('status')
                    ->label('Status Pembelian')
                    ->colors([
                        'warning' => 'Pending',
                        'danger' => 'Gagal',
                        'success' => 'Berhasil',
                    ])
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
                // EditAction::make(),
                ViewAction::make()
                    ->label('Lihat Detail')
                    ->icon('heroicon-o-eye')
                    ->modalActions([
                        Action::make('status')
                            ->label('Update Status')
                            ->icon('heroicon-s-pencil')
                            ->form([
                                Select::make('status')
                                    ->label('Status Pembelian')
                                    ->options([
                                        'Pending' => 'Pending',
                                        'Gagal' => 'Gagal',
                                        'Berhasil' => 'Berhasil',
                                    ])
                                    ->required(),
                            ])
                            ->action(function (array $data, $record) {
                                $record->update([
                                    'status' => $data['status'],
                                ]);
                            })
                            ->modalHeading('Ubah Status')
                            ->successNotificationTitle('Status Berhasil Diubah'),
                         
                        Action::make('Tutup')
                            ->label('Tutup')
                            ->close(),
                    ]),
                DeleteAction::make()
                    ->label('Hapus Riwayat Pembelian')
                    ->successNotificationTitle('Data Riwayat Pembelian Telah Di Hapus')
                    ->requiresConfirmation()
                    ->modalHeading('Hapus Data Riwayat Pembelian')
                    ->modalDescription('Data Riwayat Pembelian yang dihapus tidak dapat dikembalikan.')
                    ->action(fn($record) => $record->delete()),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
