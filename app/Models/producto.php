<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class producto extends Model
{
    protected $primaryKey = 'producto_id';
    public $timestamps = false;
    use HasFactory;

    public function citas(): BelongsToMany
    {
        return $this->belongsToMany(cita::class, 'citas_productos', 'producto_id', 'cita_id');
    }
    public function categoria(): BelongsTo
    {
        return $this->belongsTo(categoria::class, 'categoria_id');
    }
    public function tratamientos(): BelongsToMany
    {
        return $this->belongsToMany(tratamiento::class, 'productos_tratamientos', 'producto_id', 'tratamiento_id');
    }
    public function proveedores(): BelongsToMany
    {
        return $this->belongsToMany(proveedor::class);
    }
}
