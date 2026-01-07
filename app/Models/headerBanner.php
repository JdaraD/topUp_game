<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class headerBanner extends Model
{
    use HasFactory;

    protected $fillable = [
        'order',
        'is_active',
        'name',
        'gambar',
        'created_at',
        'updated_at'
    ];
}
