<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class alergia extends Model
{
    protected $primaryKey = 'alergia_id';
    public $timestamps = false;
    use HasFactory;

    public function pacientes(): BelongsToMany
    {
        return $this->belongsToMany(paciente::class, 'alergias_pacientes', 'alergia_id', 'paciente_id');
    }
}
