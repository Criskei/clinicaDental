<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class pago extends Model
{
    protected $primaryKey = 'pago_id';
    public $timestamps = false;
    use HasFactory;

    public function cita(): BelongsTo
    {
        return $this->belongsTo(cita::class, 'cita_id');
    }
    public function metodo_pago(): BelongsTo
    {
        return $this->belongsTo(metodos_pago::class, 'metodo_pago_id');
    }
    public function tipo_pago(): BelongsTo
    {
        return $this->belongsTo(tipos_pago::class, 'tipo_pago_id');
    }
}
