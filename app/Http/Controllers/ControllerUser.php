<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Redirect;
use Intervention\Image\ImageManagerStatic;

class ControllerUser extends Controller
{
    public function create(Request $request)
    {
        return view('painel/frmCadUsuario');
    }

    /**
     * Function que salva cria o User
     */
    public function store(Request $request)
    {
        $objForm = new Form();
        $objUser = new User();

        //Trata imagem
        if($request->imagem){
            $extensaoPhoto = $request->file('imagem')->extension();
            $img = ImageManagerStatic::make($request->imagem);

            $img->crop((int)$request->w, (int)$request->h, (int)$request->x, (int)$request->y);

            //Se não existir cria o diretorio
            $localStorage = 'usuarios';
            $namePhoto = 'photo_' . time() . '.' . $extensaoPhoto;
            try {
                mkdir(storage_path('/app/public/'. $localStorage), 0777, true);
            } catch (Exception $e) {

            }
            $img->save(storage_path('\app\public'. '/\/'  . $localStorage) . '/\/' . $namePhoto,100);

            $imagem = $localStorage . "/" . $namePhoto;
            //$objForm->print_rpre($namePhoto);
        }

        $objUser->name = $request->name;
        $objUser->email = $request->email;
        $objUser->password = $request->password;
        $objUser->nivel_acesso = $request->nivel_acesso;
        $objUser->imagem = $imagem;
        $objUser->save();

        // redirect()

        // $objForm->sb_Menssagem();




    }
}
