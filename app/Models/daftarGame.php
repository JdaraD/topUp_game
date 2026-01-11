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
}


