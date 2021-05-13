<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ControllerGaleria extends Controller
{
    function index(Request $request){
        return view('site.paginas.galeria');
    }
}
