<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class categorias_documento extends Model
{
    protected $primaryKey = 'categoria_documento_id';
    public $timestamps = false;
    use HasFactory;

    public function documentos_clinicos(): HasMany
    {
        return $this->hasMany(documentos_clinico::class, 'categoria_documento_id');
    }
}
