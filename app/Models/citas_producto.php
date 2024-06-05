<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\Pivot;

class citas_producto extends Pivot
{
    protected $table = 'citas_productos';
    protected $primaryKey = 'cita_producto_id';
    public $timestamps = false;
    use HasFactory;

    public function cita(): BelongsTo
    {
        return $this->belongsTo(cita::class, 'cita_producto_id');
    }
    public function producto(): BelongsTo
    {
        return $this->belongsTo(producto::class, 'cita_producto_id');
    }
}
