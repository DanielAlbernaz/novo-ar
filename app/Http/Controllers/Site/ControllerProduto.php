<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\GalleriaProduto;
use App\Models\Produto;
use Illuminate\Http\Request;

class ControllerProduto extends Controller
{
    function index(Request $request){

        $produto = Produto::find($request->id);
        $galeria = GalleriaProduto::where('id_produto', $request->id)->get();

        return view('site.paginas.produto', compact('produto', 'galeria'));
    }
}
