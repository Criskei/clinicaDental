<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class citas_historial extends Model
{
    protected $table = 'citas_historiales';
    protected $primaryKey = 'cita_historial_id';
    public $timestamps = false;
    use HasFactory;

    public function cita(): BelongsTo
    {
        return $this->belongsTo(cita::class, 'cita_id');
    }
    public function historial_medico(): BelongsTo
    {
        return $this->belongsTo(historiales_medico::class, 'historial_medico_id');
    }
}
