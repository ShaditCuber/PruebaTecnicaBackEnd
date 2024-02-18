<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Modelo;
use App\Models\Bodega;

class Dispositivo extends Model
{
    use HasFactory;

    protected $table = 'dispositivos';
    protected $primaryKey = 'dispositivo_id';

    protected $fillable = ['nombre', 'modelo_id', 'bodega_id'];

    public function modelo()
    {
        return $this->belongsTo(Modelo::class);
    }

    public function bodega()
    {
        return $this->belongsTo(Bodega::class);
    }

}
