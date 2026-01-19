<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class riwayatPembelian extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'order',
        'is_active',
        'daftar_game_id',
        'icons_game_id',
        'price_game_id',
        'qty',
        'email',
        'noWa',
        // 'harga',
        // 'diskon',
        'status',
        'created_at',
        'updated_at'
    ];

    protected $casts = [
        'qty' => 'integer'
    ];

    public function games()
    {
        return $this->belongsTo(daftarGame::class, 'daftar_game_id');
    }

    public function icons()
    {
        return $this->belongsTo(iconsgame::class, 'icons_game_id');
    }

    public function price()
    {
        return $this->belongsTo(priceGame::class, 'price_game_id');
    }
}
