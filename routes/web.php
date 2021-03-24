<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\ControllerBanner;
use App\Http\Controllers\ControllerProduto;
use App\Http\Controllers\ControllerUser;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

// Route::get('/', function () {
//     return view('site.paginas.principal');
// });
Route::get('/', 'App\Http\Controllers\Site\ControllerPrincipal@index')->name('principal');

Auth::routes();

Route::get('envio-email', function(){

    $user = new stdClass();
    $user->name = 'Daniel Albernaz';
    $user->email = 'danielgomesalbernaz@gmail.com';
    // return new \App\Mail\newLaravelTips($user);
    Mail::send(new \App\Mail\newLaravelTips($user));
});


Route::post('/logar', [ControllerUser::class, 'logar'])->name('logar');
/**Usuários painel */


Route::get('/produto/{id}', 'App\Http\Controllers\ControllerProduto@index')->name('produto');
Route::get('/produtos', 'App\Http\Controllers\ControllerProdutos@index')->name('produtos');
Route::get('/institucional', 'App\Http\Controllers\ControllerInstitucional@index')->name('institucional');


Route::middleware(['auth'])->group(function() {
    Route::prefix('sistema')->group(function(){

        Route::get('/', function () {
            return view('painel/principal');
        });

            Route::name('usuario.')->group(function (){
                Route::get('/cadastrar-usuario', [ControllerUser::class, 'create'])->name('cadastrar');
                Route::post('/salvar-usuario', [ControllerUser::class, 'store'])->name('salvar');
                Route::get('/listar-usuario', [ControllerUser::class, 'list'])->name('listar');
                Route::post('/status-usuario', [ControllerUser::class, 'status'])->name('status');
                Route::get('/editar-usuario/{id}', [ControllerUser::class, 'findUser'])->name('find');
                Route::post('/edit-usuario', [ControllerUser::class, 'edit'])->name('edit');
                Route::post('/deletar-usuario/{id}', [ControllerUser::class, 'delete'])->name('delete');
                Route::get('/logout', [ControllerUser::class, 'logout'])->name('logout');
            });


            Route::name('banner.')->group(function (){
                Route::get('/cadastrar-banner', 'App\Http\Controllers\Painel\ControllerBanner@create')->name('cadastrar');
                Route::post('/salvar-banner', 'App\Http\Controllers\Painel\ControllerBanner@store')->name('salvar');
                Route::get('/listar-banner', 'App\Http\Controllers\Painel\ControllerBanner@list')->name('listar');
                Route::post('/status-banner', 'App\Http\Controllers\Painel\ControllerBanner@status')->name('status');
                Route::post('/deletar-banner/{id}', 'App\Http\Controllers\Painel\ControllerBanner@delete')->name('delete');
                Route::get('/editar-banner/{id}', 'App\Http\Controllers\Painel\ControllerBanner@find')->name('find');
                Route::post('/edit-banner', 'App\Http\Controllers\Painel\ControllerBanner@edit')->name('edit');
            });


            Route::name('produto.')->group(function (){
                Route::get('/cadastrar-produto', 'App\Http\Controllers\Painel\ControllerProduto@create')->name('cadastrar');
                Route::post('/salvar-produto', 'App\Http\Controllers\Painel\ControllerProduto@store')->name('salvar');
                Route::post('/salvar-galleria/{id}', 'App\Http\Controllers\Painel\ControllerProduto@storeGalleria')->name('galleria');
                Route::get('/listar-produto', 'App\Http\Controllers\Painel\ControllerProduto@list')->name('listar');
                Route::post('/status-produto', 'App\Http\Controllers\Painel\ControllerProduto@status')->name('status');
                Route::post('/deletar-produto/{id}', 'App\Http\Controllers\Painel\ControllerProduto@delete')->name('delete');
                Route::post('/deletar-produto-imagem/{id}', 'App\Http\Controllers\Painel\ControllerProduto@destroyImage')->name('destroy');
                Route::get('/editar-produto/{id}', 'App\Http\Controllers\Painel\ControllerProduto@find')->name('find');
                Route::post('/edit-produto', 'App\Http\Controllers\Painel\ControllerProduto@edit')->name('edit');
            });

            Route::name('institucional.')->group(function (){
                Route::get('/editar-institucional/{id}', 'App\Http\Controllers\Painel\ControllerInstitucional@find')->name('find');
                Route::post('/edit-institucional', 'App\Http\Controllers\Painel\ControllerInstitucional@edit')->name('edit');
            });

            Route::name('empresa.')->group(function (){
                Route::get('/editar-empresa/{id}', 'App\Http\Controllers\Painel\ControllerEmpresa@find')->name('find');
                Route::post('/edit-empresa', 'App\Http\Controllers\Painel\ControllerEmpresa@edit')->name('edit');
            });

            Route::name('instalacoes.')->group(function (){
                Route::get('/editar-instalacoes/{id}', 'App\Http\Controllers\Painel\ControllerInstalacoes@find')->name('find');
                Route::post('/edit-instalacoes', 'App\Http\Controllers\Painel\ControllerInstalacoes@edit')->name('edit');
                Route::post('/salvar-galleria-instalacoes/{id}', 'App\Http\Controllers\Painel\ControllerInstalacoes@storeGalleria')->name('galleria');
                Route::post('/deletar-instalacoes-imagem/{id}', 'App\Http\Controllers\Painel\ControllerInstalacoes@destroyImage')->name('destroy');
            });



    });
});










