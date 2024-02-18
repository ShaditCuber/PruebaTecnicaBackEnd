<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ModeloRequests;
use App\Models\Modelo;
use Illuminate\Http\Request;

class ModeloController extends Controller
{

    public function index(ModeloRequests $request)
    {
        $modelos = Modelo::join('marcas', 'modelos.marca_id', '=', 'marcas.marca_id')
            ->where('modelos.marca_id', $request->marca_id)
            ->get(['modelos.modelo_id', 'modelos.nombre as modelo_nombre', 'marcas.nombre as marca_nombre']);

        //'marcas.marca_id as marca_id' si se quiere obtener el id de la marca
        return $modelos;
    }
}
