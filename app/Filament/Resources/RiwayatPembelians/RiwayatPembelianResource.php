<?php

namespace App\Filament\Resources\RiwayatPembelians;

use App\Filament\Resources\RiwayatPembelians\Pages\CreateRiwayatPembelian;
use App\Filament\Resources\RiwayatPembelians\Pages\EditRiwayatPembelian;
use App\Filament\Resources\RiwayatPembelians\Pages\ListRiwayatPembelians;
use App\Filament\Resources\RiwayatPembelians\Schemas\RiwayatPembelianForm;
use App\Filament\Resources\RiwayatPembelians\Tables\RiwayatPembeliansTable;
use App\Models\RiwayatPembelian;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class RiwayatPembelianResource extends Resource
{
    protected static ?string $model = RiwayatPembelian::class;
    protected static ?string $modelLabel = 'Riwayat Pembelian';
    protected static ?string $pluralModelLabel = 'Riwayat Pembelian';
    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Riwayat Pembelian';

    public static function form(Schema $schema): Schema
    {
        return RiwayatPembelianForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return RiwayatPembeliansTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }
    
    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->riwayat();
    }

    public static function getPages(): array
    {
        return [
            'index' => ListRiwayatPembelians::route('/'),
            'create' => CreateRiwayatPembelian::route('/create'),
            'edit' => EditRiwayatPembelian::route('/{record}/edit'),
        ];
    }
}
