<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class colorSetting extends Model
{
    use HasFactory;
    protected $fillable = [
        'order',
        'is_active',
        'name',
        'colorHeader',
        'colorHeader_opacity',
        'colorBody',
        'colorBody_opacity',
        'colorFooter',
        'colorFooter_opacity',
        'created_at',
        'updated_at'
    ];

    /* ======================
     | Accessor (RGBA)
    |======================*/

    public function getColorHeaderRgbaAttribute(): string
    {
        return hexToRgba($this->colorHeader, $this->colorHeader_opacity);
    }

    public function getColorBodyRgbaAttribute(): string
    {
        return hexToRgba($this->colorBody, $this->colorBody_opacity);
    }

    public function getColorFooterRgbaAttribute(): string
    {
        return hexToRgba($this->colorFooter, $this->colorFooter_opacity);
    }
}
