<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class tipos_historial extends Model
{
    protected $table = 'tipos_historiales';
    protected $primaryKey = 'tipo_historial_id';
    public $timestamps = false;
    use HasFactory;

    public function historiales_medicos(): HasMany
    {
        return $this->hasMany(historiales_medico::class, 'tipo_historial_id');
    }
}
