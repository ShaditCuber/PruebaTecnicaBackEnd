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
        return Modelo::where('marca_id', $request->marca_id)->get(['modelo_id', 'nombre']);
    }
}
