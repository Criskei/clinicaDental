<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class motivo extends Model
{
    protected $primaryKey = 'motivo_id';
    public $timestamps = false;
    use HasFactory;

    public function dentistas(): BelongsToMany
    {
        return $this->belongsToMany(dentista::class, 'ausencias', 'motivo_id', 'dentista_id');
    }
}
