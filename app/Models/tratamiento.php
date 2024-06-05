<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class tratamiento extends Model
{
    protected $primaryKey = 'tratamiento_id';
    public $timestamps = false;
    use HasFactory;

    public function historiales_medicos(): HasMany
    {
        return $this->hasMany(historiales_medico::class, 'tratamiento_id');
    }
    public function especialidad(): BelongsTo
    {
        return $this->belongsTo(especialidad::class, 'especialidad_id');
    }
    public function productos(): BelongsToMany
    {
        return $this->belongsToMany(producto::class, 'productos_tratamientos', 'tratamiento_id', 'producto_id');
    }
}
