<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Marca;

class MarcaController extends Controller
{

    public function index()
    {
        return Marca::select('marca_id', 'nombre')->get();
    }
}
