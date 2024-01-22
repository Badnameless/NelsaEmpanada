<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Categoria;

class ProductoController extends Controller
{
    public function showProducts(){
        $categorias = Categoria::all();
        $productos = Producto::with('Categoria')->get();
        return view('productos', compact('categorias', 'productos'));
    }

    public function product(Request $request){
        $producto = new Producto();
        $producto->nombre = $request->nombreProducto;
        $producto->precio = $request->precio;
        $producto->categoriasID = $request->categoria;
        $producto->save();

        return back();
    }

    public function destroy($id){
        Producto::destroy($id);

        return back();
    }

    public function edit(Request $request, $id){
        $producto = Producto::find($id);
        $producto->nombre = $request->nombre;
        $producto->precio = $request->precio;
        $producto->categoriasID = $request->categoria;
        $producto->save();
        
        return back();
    }
}
