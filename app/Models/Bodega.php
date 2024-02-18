<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Dispositivo;

class Bodega extends Model
{
    use HasFactory;

    protected $table = 'bodegas';
    protected $primaryKey = 'bodega_id';

    protected $fillable = ['nombre'];

    public function dispositivos()
    {
        return $this->hasMany(Dispositivo::class);
    }
}
