<?php

namespace App\Filament\Resources\ColorSettings\Tables;

use Filament\Actions\Action;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\ColorColumn;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Table;

class ColorSettingsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('order')
                    ->label('Urutan')
                    ->numeric()
                    ->formatStateUsing( function($state, $record, $column, $rowLoop) {
                        return $rowLoop->iteration;
                    })
                    ->sortable(),
                ToggleColumn::make('is_active')
                    ->label('Status'),
                TextColumn::make('name')
                    ->searchable(),
                ColorColumn::make('colorHeader')
                    ->label('Color Header')
                    ->searchable(),
                ColorColumn::make('colorBody')
                    ->label('Color Body')
                    ->searchable(),
                ColorColumn::make('colorFooter')
                    ->label('Color Footer')
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
                    ->label('Hapus Theme')
                    ->successNotificationTitle('Data Theme Telah Di Hapus')
                    ->requiresConfirmation()
                    ->modalHeading('Hapus Data Theme')
                    ->modalDescription('Data Theme yang dihapus tidak dapat dikembalikan.')
                    ->action(fn($record) => $record->delete()),
                ViewAction::make()
                    ->icon('heroicon-o-eye')
                    ->label('Lihat Detail')
                    ->modalActions([
                        EditAction::make(),
                        Action::make('cancel')
                            ->label('tutup')
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
