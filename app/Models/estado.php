<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class estado extends Model
{
    protected $primaryKey = 'estado_id';
    public $timestamps = false;
    use HasFactory;

    public function historiales_medicos(): HasMany
    {
        return $this->hasMany(historiales_medico::class, 'estado_id');
    }
    public function citas(): HasMany
    {
        return $this->hasMany(cita::class, 'estado_id');
    }
}
