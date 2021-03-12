<?php

namespace App\Http\Middleware;

use App\Models\Form;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {

        if($_SERVER["HTTP_HOST"] == '127.0.0.1:8000'){
            Session::put('URL_SISTEMA', 'http://127.0.0.1:8000/sistema/');
            Session::put('URL_IMG', 'http://127.0.0.1:8000/storage/');
        }else{
            /** Dominio */
            $url =  'https://' . $_SERVER['HTTP_HOST'];
            $urlImagem =  'https://' . $_SERVER['HTTP_HOST'] . '\storage';

            Session::put('URL_SISTEMA', $url);
            Session::put('URL_IMG', $urlImagem);
        }
        if (! $request->expectsJson()) {
            return route('login');
        }
    }
}
