<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;

    protected $fillable = [
        'area_nome',
    ];

    // Relação 1 para muitos com vagas
    public function vagas() {
        return $this->hasMany(Vagas::class, 'are_id');
    }
}
