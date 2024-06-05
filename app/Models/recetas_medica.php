<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class recetas_medica extends Model
{
    protected $primaryKey = 'receta_medica_id';
    public $timestamps = false;
    use HasFactory;

    public function historiales_medicos(): HasMany
    {
        return $this->hasMany(historiales_medico::class, 'receta_medica_id');
    }
}
