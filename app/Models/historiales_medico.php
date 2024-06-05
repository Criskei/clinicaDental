<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class historiales_medico extends Model
{
    protected $table = 'historiales_medicos';
    protected $primaryKey = 'historial_medico_id';
    use HasFactory;

    public function paciente(): BelongsTo
    {
        return $this->belongsTo(paciente::class, 'paciente_id');
    }
    public function dentista(): BelongsTo
    {
        return $this->belongsTo(dentista::class, 'dentista_id');
    }
    public function tratamiento(): BelongsTo
    {
        return $this->belongsTo(tratamiento::class, 'tratamiento_id');
    }
    public function diente(): BelongsTo
    {
        return $this->belongsTo(diente::class, 'diente_id');
    }
    public function receta_medica(): BelongsTo
    {
        return $this->belongsTo(recetas_medica::class, 'receta_medica_id');
    }
    public function estado(): BelongsTo
    {
        return $this->belongsTo(estado::class, 'estado_id');
    }
    public function tipo_historial(): BelongsTo
    {
        return $this->belongsTo(tipos_historial::class, 'tipo_historial_id');
    }
    public function citas_historiales(): HasMany
    {
        return $this->hasMany(citas_historial::class, 'historial_medico_id');
    }
}
