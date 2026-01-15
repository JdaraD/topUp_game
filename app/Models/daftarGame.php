<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class daftarGame extends Model
{
    use HasFactory;

    protected $fillable = [
        'order',
        'is_active',
        'name',
        'publisher',
        'gambar',
        'banner',
        'deskripsi',
        'created_at',
        'updated_at'
    ];

    protected function casts() : array
    {
        return [
            'deskripsi' => 'array',
        ];
    }

    public function priceGames()
    {
        return $this->hasMany(priceGame::class, 'daftar_game_id');
    }

    public function riwayat()
    {
        return $this->hasMany(riwayatPembelian::class,'daftar_game_id');
    }
}


