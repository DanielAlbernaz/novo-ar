<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerInstitucional extends Controller
{
    function index(){

        return view('site.paginas.institucional');
    }
}
