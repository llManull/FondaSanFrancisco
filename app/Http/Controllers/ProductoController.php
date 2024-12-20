<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductNode {
    public $product;
    public $next;

    public function __construct($product) {
        $this->product = $product;
        $this->next = null;
    }
}
class LinkedList {
    public $head;

    public function __construct() {
        $this->head = null;
    }

    public function addSorted($product) {
        $newNode = new ProductNode($product);

        if ($this->head === null || $this->head->product->price > $product->price) {
            $newNode->next = $this->head;
            $this->head = $newNode;
        } else {
            $current = $this->head;
            while ($current->next !== null && $current->next->product->price <= $product->price) {
                $current = $current->next;
            }
            $newNode->next = $current->next;
            $current->next = $newNode;
        }
    }

    public function toArray() {
        $array = [];
        $current = $this->head;
        while ($current !== null) {
            $array[] = $current->product;
            $current = $current->next;
        }
        return $array;
    }
}
class ProductoController extends Controller
{
    public function index(Request $request)
    {
        $orden = $request->get('orden', 'default');

        switch ($orden) {
            case 'az':
                $productos = Producto::orderBy('name', 'asc')->get();
                break;
            case 'precio':
                $productos = Producto::all();
                $sortedList = new LinkedList();

                foreach ($productos as $producto) {
                    $sortedList->addSorted($producto);
                }

                $productos = collect($sortedList->toArray());
                break;
            default:
                $productos = Producto::all();
                break;
        }

        return view('logeado.index', compact('productos', 'orden'));
    }

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

    public function agregarCarrito(Request $request)
    {
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

    public function quitarCarrito(Request $request)
    {
        \Cart::remove($request->id);
        return redirect('/prueba/producto');
    }

    public function incrementarCarrito(Request $request)
    {
        \Cart::update($request->id, array(
            'quantity' => 1,
        ));
        return redirect('/prueba/producto');
    }

    public function decrementarCarrito(Request $request)
    {
        \Cart::update($request->id, array(
            'quantity' => -1,
        ));
        return redirect('/prueba/producto');
    }
}