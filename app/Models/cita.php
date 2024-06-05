<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class cita extends Model
{
    protected $primaryKey = 'cita_id';
    public $timestamps = false;
    use HasFactory;

    public function paciente(): BelongsTo
    {
        return $this->belongsTo(paciente::class, 'paciente_id');
    }
    public function dentista(): BelongsTo
    {
        return $this->belongsTo(dentista::class, 'dentista_id');
    }
    public function estado(): BelongsTo
    {
        return $this->belongsTo(estado::class, 'estado_id');
    }
    public function pagos(): HasMany
    {
        return $this->hasMany(pago::class, 'cita_id');
    }
    public function citas_historiales(): HasMany
    {
        return $this->hasMany(citas_historial::class, 'cita_id');
    }
    public function productos(): BelongsToMany
    {
        return $this->belongsToMany(producto::class, 'citas_productos', 'cita_id', 'producto_id');
    }
}
