<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class iconsgame extends Model
{
    use HasFactory;

    protected $fillable = [
        'order',
        'is_active',
        'daftar_game_id',
        'name',
        'gambar',
        'created_at',
        'updated_at'
    ];

    public function game()
    {
        return $this->belongsTo(daftarGame::class, 'daftar_game_id');
    }

    public function priceGames()
    {
        return $this->hasMany(priceGame::class, 'iconsgame_id');
    }
}
