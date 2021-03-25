<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ControllerInstitucional extends Controller
{
    function index(){

        return view('site.paginas.institucional');
    }
}
