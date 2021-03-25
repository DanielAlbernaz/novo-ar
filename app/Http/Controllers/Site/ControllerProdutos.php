<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Painel\ControllerBanner;
use App\Http\Controllers\Painel\ControllerProduto;
use App\Models\Banner;
use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class ControllerProdutos extends Controller
{
    function index(){
        /**
         * Inativações
         */
        ControllerProduto::inactivateDate();

        $produto = Produto::where('status', 1)->whereDate('begin_date', '<=', Carbon::now()->toDateString())->get();

        return view('site.paginas.produtos', compact('produto'));
    }
}
