<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
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

    public function productosCarrito()
    {
        return view('/logeado/carrito')->with('productosCarrito', \Cart::getContent());
    }

    public function agregarCarrito(Request $request){
        //dd($request->all());
        \Cart::add(array(
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'attributes' => array(
                'description' => $request->description,
                'image' => $request->image,
                //'subtotal' => $request->price * $request->quantity,
            )
        ));
        return redirect('/prueba/producto');
    }

    public function quitarCarrito(Request $request){
        \Cart::remove($request->id);
        return redirect('/prueba/producto');
    }

    Public function incrementarCarrito(Request $request){
        \Cart::update($request->id, array(
            'quantity' => 1,
        ));
        return redirect('/prueba/producto');
    }

    Public function decrementarCarrito(Request $request){
        \Cart::update($request->id, array(
            'quantity' => -1,
        ));
        return redirect('/prueba/producto');
    }
}
