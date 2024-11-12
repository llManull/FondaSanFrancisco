<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoControllerController extends Controller
{
    public function index()
    {
        $productos = Producto::all();
        return view('logeado.index', compact('productos'));
    }

    public function create()
    {
        return view('logeado.create');
        return view('logeado.create', compact('productos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $datosProductos = request()->except('_token');
        $imagen = $request->file('image');
        if ($imagen && $imagen->isValid()) {
            $rutaCarpeta = 'storage/uploads';
            $nombreImagen = $imagen->getClientOriginalName();
            $request->file('image')->move($rutaCarpeta, $nombreImagen);
            $datosProductos['image'] = $nombreImagen;
        }

        Producto::insert($datosProductos);
        return redirect('/logeado/create')->with('success', 'Producto registrado con éxito.');
    }

    
}
