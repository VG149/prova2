<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimalController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Models\Animal;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('inicio');
});

Route::get('/cadastrar', function () {
    return view('cadastro');
});


//Route::get('/teste', function () {
    //return view('teste');
//});
Route::get('listar',[AnimalController::class,'show']);



Route::post('/cadastrar-animal',function(Request $request){
    //dd($request->all());

    Animal::create([
        'nome' => $request->nome,
        'especie' => $request->especie,
    ]);

    echo "Animal  com sucesso!";
});

Route::get('/editar/{id}', function($id){
    //dd(Produto::find($id)); //debug and die
    $produto = Produto::find($id);
    return view('editar', ['animal' => $animal]);
});

Route::post('/editar-animal/{id}',function(Request $request, $id){
    //dd($request->all());
    $animal = Animal::find($id);

    $animal->update([
        'nome' => $request->nome,
        'especie' => $request->especie,
    ]);

    echo "Animal editado com sucesso!";
});

Route::get('/excluir-animal/{id}',function($id){
    //dd($request->all());
    $produto = Animal::find($id);
    $produto->delete();

    echo "Produto excluido com sucesso!";
});