<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\Pivot;

class productos_proveedor extends Pivot
{
    protected $table = 'productos_proveedores';
    protected $primaryKey = 'producto_proveedor_id';
    public $timestamps = false;
    use HasFactory;

    public function producto(): BelongsTo
    {
        return $this->belongsTo(producto::class, 'productos_proveedores');
    }
    public function proveedor(): BelongsTo
    {
        return $this->belongsTo(proveedor::class, 'productos_proveedores');
    }
}
