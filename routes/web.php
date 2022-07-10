<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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


/*

Route::get('/response', function (\Illuminate\Http\Request $request){
    dd($request);
});

Route::get('/user/',[UserController::class,'show']);

Route::get('/user/{id}',[UserController::class,'showId']);

Route::get('/user/request/{id}',[UserController::class,'showRequest']);



Route::get('/users/{paramA}/{paramB}', function ($paramA, $paramB) {
    return $paramA . ' - '. $paramB;
});

Route::get('/empresa/{string?}', function ($string = null) {
    return $string;
});

// Criando um grupo de rotas - 05:20
Route::prefix('usuarios')->group(function() {

    Route::get('/', function() {
        return 'Listar Todos os Usuários';
    })->name('usuarios');

    Route::get('/{id}', function ($id) {
        return 'Visualizar os detalhe do usuário do ID->'.$id;
    })->name('usuarios.show');

    Route::get('/edit/{id}', function ($id){
        return 'Editar Usuário do ID -> '.$id;
    })->name('usuarios.tags');
});
*/

