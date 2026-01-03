<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profil extends Model
{
    use HasFactory;
    protected $fillable = [
        'order',
        'is_active',
        'name',
        'gambar',
        'deskripsi',
        'created_at',
        'updated_at'
    ];
}
