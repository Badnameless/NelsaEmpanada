<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categoria;

class Producto extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'precio',
        'categoriasID'
    ];

    public function Categoria(){
        return $this->belongsTo(Categoria::class, 'categoriasID');
    }

    public function ventas(){
        return $this->belongsToMany('App\Models\Venta');
    }
}
