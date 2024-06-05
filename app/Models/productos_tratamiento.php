<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\Pivot;

class productos_tratamiento extends Pivot
{
    protected $table = 'productos_tratamientos';
    protected $primaryKey = 'producto_tratamiento_id';
    public $timestamps = false;
    use HasFactory;

    public function tratamiento(): BelongsTo
    {
        return $this->belongsTo(tratamiento::class, 'productos_tratamientos');
    }
    public function producto(): BelongsTo
    {
        return $this->belongsTo(producto::class, 'productos_tratamientos');
    }
}
