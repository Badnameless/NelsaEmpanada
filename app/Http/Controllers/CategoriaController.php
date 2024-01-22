<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    public function Create(Request $request){
        $categoria = new Categoria();
        $categoria->nombre = $request->nombreCategoria;
        $categoria->save();

        return back();
    }
}
