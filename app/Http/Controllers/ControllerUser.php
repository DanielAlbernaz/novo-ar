<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Intervention\Image\ImageManagerStatic;

class ControllerUser extends Controller
{
    public function create(Request $request)
    {
        return view('painel.usuario.frmCadUsuario');
    }

    /**
     * Function que salva cria o User
     */
    public function store(Request $request)
    {
        $objForm = new Form();
        $objUser = new User();

        try {
            if($request->image_file){
                $image_parts = explode(";base64,", $request->image_file);
                $image_type_aux = explode("image/", $image_parts[0]);
                $image_type = $image_type_aux[1];
                $image_base64 = base64_decode($image_parts[1]);

                //Se não existir cria o diretorio
                $localStorage = 'usuarios';
                $namePhoto = 'photo_' . time() . '.' . $image_type;
                try {
                    mkdir(storage_path('/app/public/'. $localStorage), 0777, true);
                } catch (Exception $e) {

                }
                $img = ImageManagerStatic::make($image_base64);
                $img->save(storage_path('\app\public'. '/\/'  . $localStorage) . '/\/' . $namePhoto,100);

                $imagem = $localStorage . "/" . $namePhoto;
                //$objForm->print_rpre($namePhoto);
            }

            $objUser->name = $request->name;
            $objUser->email = $request->email;
            $objUser->password = Hash::make($request->password);
            $objUser->nivel_acesso = $request->nivel_acesso;
            $objUser->imagem = $imagem;
            $objUser->save();

            $retorno = [
                'situacao' => 'success',
            ];
            return $retorno;
        } catch (Exception $e) {
            $retorno = [
                'situacao' => 'error',
            ];
            return $retorno;
        }
 }

 function list(Request $request){

    return view('painel.usuario.frmListaUsuario');
 }
}
