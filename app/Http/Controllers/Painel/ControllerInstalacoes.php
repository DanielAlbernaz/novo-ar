<?php

namespace App\Http\Controllers\Painel;

use App\Http\Controllers\Controller;
use App\Models\Instalacoes;
use Exception;
use Illuminate\Http\Request;

class ControllerInstalacoes extends Controller
{
    function find(Request $request){
        $instalacoes = Instalacoes::find($request->id);
        return view('painel.instalacoes.frmAltInstalacoes', compact('instalacoes'));
      }

      function edit(Request $request){
        try {

            $objempresa = Instalacoes::find($request->id);
            $objempresa->title = $request->title;
            $objempresa->text = $request->text;
            $objempresa->save();

            $retorno = [
                'situacao' => 'success',
                'form' => 'alt',
                'redirect' => 'sistema/editar-instalacoes/1',
                'msg' => 'Alteração realizada com sucesso!',
            ];
            return $retorno;

        } catch (Exception $e) {
            $retorno = [
                'situacao' => 'error',
                'form' => 'alt',
                'redirect' => 'editar-instalacoes/1',
                'msg' => 'Erro ao realizar alteração!',
            ];
            return $retorno;
        }

     }
}
