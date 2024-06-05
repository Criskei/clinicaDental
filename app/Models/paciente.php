<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class paciente extends Model
{
    protected $primaryKey = 'paciente_id';
    public $timestamps = false;
    use HasFactory;

    public function documentos_clinicos(): HasMany
    {
        return $this->hasMany(documentos_clinico::class, 'paciente_id');
    }
    public function alergias(): BelongsToMany
    {
        return $this->belongsToMany(alergia::class, 'alergias_pacientes', 'paciente_id', 'alergia_id');
    }
    public function usuario(): BelongsTo
    {
        return $this->belongsTo(User::class, 'usuario_id');
    }
    public function historiales_medicos(): HasMany
    {
        return $this->hasMany(historiales_medico::class, 'paciente_id');
    }
    public function citas(): HasMany
    {
        return $this->hasMany(cita::class, 'paciente_id');
    }
}

