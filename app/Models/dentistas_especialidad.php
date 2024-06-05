<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\Pivot;

class dentistas_especialidad extends Pivot
{   
    protected $table = 'dentistas_especialidades';
    protected $primaryKey = 'dentista_especialidad_id';
    public $timestamps = false;
    use HasFactory;

    

    public function dentista(): BelongsTo
    {
        return $this->belongsTo(dentista::class, 'dentista_especialidad_id');
    }
    public function especialidad(): BelongsTo
    {
        return $this->belongsTo(especialidad::class, 'dentista_especialidad_id');
    }
}
