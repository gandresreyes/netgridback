<?php

use App\Http\Controllers\Usuariocontroller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('usuarios',[Usuariocontroller::class,'getUsuario']);
Route::get('usuario/{id}',[Usuariocontroller::class,'getUsuarioid']);
Route::post('addusuario',[Usuariocontroller::class,'insertUsuario']);
Route::put('updateusuario/{id}',[Usuariocontroller::class,'updateUser']);
Route::delete('deletesuario/{id}',[Usuariocontroller::class,'deleteUser']);
