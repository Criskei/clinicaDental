<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class metodos_pago extends Model
{
    protected $primaryKey = 'metodo_pago_id';
    public $timestamps = false;
    use HasFactory;

    public function pagos(): HasMany
    {
        return $this->hasMany(pago::class, 'metodo_pago_id');
    }
}
