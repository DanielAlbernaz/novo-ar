<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerProdutos extends Controller
{
    function index(){

        return view('site.paginas.produtos');
    }
}
