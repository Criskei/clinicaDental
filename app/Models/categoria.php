<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class categoria extends Model
{
    protected $primaryKey = 'categoria_id';
    public $timestamps = false;
    use HasFactory;

    public function productos(): HasMany
    {
        return $this->hasMany(producto::class, 'categoria_id');
    }
}
