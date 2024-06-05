<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class dentista extends Model
{
    protected $primaryKey = 'dentista_id';
    public $timestamps = false;
    use HasFactory;

    public function documentos_clinicos(): HasMany
    {
        return $this->hasMany(documentos_clinico::class, 'dentista_id');
    }
    public function historiales_medicos(): HasMany
    {
        return $this->hasMany(historiales_medico::class, 'dentista_id');
    }
    public function citas(): HasMany
    {
        return $this->hasMany(cita::class, 'dentista_id');
    }
    public function especialidades(): BelongsToMany
    {
        return $this->belongsToMany(especialidad::class, 'dentistas_especialidades', 'dentista_id', 'especialidad_id');
    }
    public function usuario(): BelongsTo
    {
        return $this->belongsTo(User::class, 'usuario_id');
    }
    public function motivos(): BelongsToMany
    {
        return $this->belongsToMany(motivo::class, 'ausencias', 'dentista_id', 'motivo_id');
    }
}
