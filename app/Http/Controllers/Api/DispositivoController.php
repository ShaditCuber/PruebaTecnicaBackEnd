<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\DispositivoRequests;
use App\Models\Dispositivo;
use Illuminate\Http\Request;

class DispositivoController extends Controller
{
    // public function indexByModeloOrMarca(DispositivoRequests $request)
    // {
    //     $query = Dispositivo::query()
    //         ->join('modelos', 'dispositivos.modelo_id', '=', 'modelos.modelo_id')
    //         ->join('marcas', 'modelos.marca_id', '=', 'marcas.marca_id')
    //         ->join('bodegas', 'dispositivos.bodega_id', '=', 'bodegas.bodega_id')
    //         ->select('dispositivos.nombre', 'dispositivos.dispositivo_id', 'modelos.nombre as modelo_nombre', 'marcas.nombre as marca_nombre');
    //     //'bodegas.nombre as bodega_nombre' en caso de querer obtener el nombre de la bodega

    //     if ($request->filled('modelo_id')) {
    //         $query->where('dispositivos.modelo_id', $request->modelo_id);
    //     }

    //     if ($request->filled('marca_id')) {
    //         $query->where('modelos.marca_id', $request->marca_id);
    //     }

    //     $dispositivos = $query->get();

    //     return $dispositivos;
    // }

    public function index(Request $request)
    {

        $query = Dispositivo::query()
            ->join('modelos', 'dispositivos.modelo_id', '=', 'modelos.modelo_id')
            ->join('marcas', 'modelos.marca_id', '=', 'marcas.marca_id')
            ->join('bodegas', 'dispositivos.bodega_id', '=', 'bodegas.bodega_id')
            ->select('dispositivos.nombre', 'dispositivos.dispositivo_id', 'modelos.nombre as modelo_nombre', 'marcas.nombre as marca_nombre','bodegas.nombre as bodega_nombre');

        
        if ($request->filled('bodega_id')) {
            $query->where('dispositivos.bodega_id', $request->bodega_id);
        }
        if ($request->filled('modelo_id')) {
            $query->where('dispositivos.modelo_id', $request->modelo_id);
        }
        if ($request->filled('marca_id')) {
            $query->where('modelos.marca_id', $request->marca_id);
        }

        $dispositivos = $query->get();





        return $dispositivos;
    }

}
