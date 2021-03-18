<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ControllerProduto extends Controller
{
    function index(){

        return view('site.paginas.produto');
    }
}
