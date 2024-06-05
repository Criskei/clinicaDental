<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\Pivot;

class alergias_paciente extends Pivot
{
    protected $table = 'alergias_pacientes';
    protected $primaryKey = 'alergia_paciente_id';
    public $timestamps = false;
    use HasFactory;

    public function alergia(): BelongsTo
    {
        return $this->belongsTo(alergia::class, 'alergia_paciente_id');
    }

    public function paciente(): BelongsTo
    {
        return $this->belongsTo(paciente::class, 'alergia_paciente_id');
    }
}
