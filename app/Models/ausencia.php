<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\Pivot;

class ausencia extends Pivot
{
    protected $table = 'ausencias';
    protected $primaryKey = 'ausencia_id';
    public $timestamps = false;
    use HasFactory;

    public function dentista(): BelongsTo
    {
        return $this->belongsTo(dentista::class, 'ausencia_id');
    }
    public function motivo(): BelongsTo
    {
        return $this->belongsTo(motivo::class, 'ausencia_id');
    }
}
