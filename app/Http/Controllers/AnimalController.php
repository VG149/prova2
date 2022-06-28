<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutosController extends Controller
{
    function show()
    {
       
        $animal = Animal::all();
        return view('listar', ['animal' => $animal]);
    }
} 

