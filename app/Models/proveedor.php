<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class proveedor extends Model
{
    protected $table = 'proveedores';
    protected $primaryKey = 'proveedor_id';
    public $timestamps = false;
    use HasFactory;

    public function productos(): BelongsToMany
    {
        return $this->belongsToMany(producto::class, 'productos_proveedores', 'proveedor_id', 'producto_id');
    }
}
