<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Dispositivo;
use App\Models\Marca;

class Modelo extends Model
{
    use HasFactory;

    protected $table = 'modelos';
    protected $primaryKey = 'modelo_id';

    protected $fillable = [
        'nombre',
        'marca_id',
    ];

    public function marca()
    {
        return $this->belongsTo(Marca::class);
    }

    public function dispositivos()
    {
        return $this->hasMany(Dispositivo::class);
    }
}
