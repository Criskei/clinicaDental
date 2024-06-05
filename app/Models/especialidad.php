<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class especialidad extends Model
{
    protected $table = 'especialidades';
    protected $primaryKey = 'especialidad_id';
    public $timestamps = false;
    use HasFactory;

    public function dentistas(): BelongsToMany
    {
        return $this->belongsToMany(dentista::class);
    }
    public function tratamientos(): HasMany
    {
        return $this->hasMany(tratamiento::class, 'especialidad_id');
    }
}
