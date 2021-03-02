<?php

use App\Http\Controllers\ControllerUser;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerUsuario;

Route::get('/', function () {
    return view('site.paginas.principal');
});









Route::get('/sistema', function () {
    return view('painel/principal');
});








/**Usuários painel */
//Route::get('/cadastrar-usuario', 'ControllerUsuario@create');
Route::get('/cadastrar-usuario', [ControllerUser::class, 'create']);
Route::post('/salvar-usuario', [ControllerUser::class, 'store']);
Route::get('/listar-usuario', [ControllerUser::class, 'list']);
Route::post('/status-usuario', [ControllerUser::class, 'status']);
Route::get('/editar-usuario/{id}', [ControllerUser::class, 'findUser']);
Route::post('/edit-usuario', [ControllerUser::class, 'edit']);
Route::post('/deletar-usuario/{id}', [ControllerUser::class, 'delete']);






Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
