<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class priceGame extends Model
{
    use HasFactory;

    protected $fillable = [
        'order',
        'is_active',
        'daftar_game_id',
        'iconsgame_id',
        'name',
        'harga',
        'discon',
        'created_at',
        'updated_at',
    ];

    public function game()
    {
        return $this->belongsTo(daftarGame::class,'daftar_game_id');
    }

    public function iconsgames()
    {
        return $this->belongsTo(iconsgame::class, 'iconsgame_id');
    }

}
