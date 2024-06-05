<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class documentos_clinico extends Model
{
    protected $primaryKey = 'documento_clinico_id';
    use HasFactory;

    public function categoria_documento(): BelongsTo
    {
        return $this->belongsTo(categorias_documento::class, 'categoria_documento_id');
    }
    public function paciente(): BelongsTo
    {
        return $this->belongsTo(paciente::class, 'paciente_id');
    }
    public function dentista(): BelongsTo
    {
        return $this->belongsTo(dentista::class, 'dentista_id');
    }
}
