<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Produto;
use Illuminate\Http\Request;

class ControllerProduto extends Controller
{
    function index(Request $request){

        $produto = Produto::find($request->id);

        return view('site.paginas.produto', compact('produto'));
    }
}
