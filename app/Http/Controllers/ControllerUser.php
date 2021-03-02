<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;
use App\Models\User;
use App\Models\Usuario;
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

                $request->image_file= $localStorage . "/" . $namePhoto;
                //$objForm->print_rpre($namePhoto);
            }

            $objUser->name = $request->name;
            $objUser->email = $request->email;
            $objUser->password = Hash::make($request->password);
            $objUser->nivel_acesso = $request->nivel_acesso;
            $objUser->imagem = $request->image_file;
            $objUser->status = 1;
            $objUser->save();

            $retorno = [
                'situacao' => 'success',
                'form' => 'cad',
                'msg' => 'Cadastro salvo com sucesso!',
            ];
            return $retorno;
        } catch (Exception $e) {
            $retorno = [
                'situacao' => 'error',
                'form' => 'cad',
                'msg' => 'Erro ao salvar o cadastro!',
            ];
            return $retorno;
        }
 }

 function list(Request $request){
    $users = User::all();

    $usersList = array();
    for($i = 0; $i < count($users); $i++){
        $usersList[$i]['ID'] = $users[$i]->id;
        $usersList[$i]['NAME'] = $users[$i]->name;
        $usersList[$i]['EMAIL'] = $users[$i]->email;
        $usersList[$i]['DATA CADASTRO'] = date_format($users[$i]->created_at, 'd/m/Y H:i:s');
        $usersList[$i]['STATUS'] = $users[$i]->status;
    }
    return view('painel.usuario.frmListaUsuario', compact('usersList'));
 }

 function status(Request $request){
    $user = User::find($request->id);

    if($user->status == 1){
        $user->status = 0;
    }else{
        $user->status = 1;
    }
    $user->save();

    $retorno = [
        'situacao' => 'success',
    ];

    return $retorno;
 }

 function findUser(Request $request){
   $user = User::find($request->id);

    return view('painel.usuario.frmAltUsuario', compact('user'));
 }


 function edit(Request $request){

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

            $request->image_file= $localStorage . "/" . $namePhoto;
        }

        $user = User::find($request->id);
        $user->name = $request->name;
        $user->email = $request->email;
        if($request->password){
            $user->password = Hash::make($request->password);
        }
        $user->nivel_acesso = $request->nivel_acesso;
        $user->imagem = ($request->image_file ? $request->image_file : $request->imgOld);
        $user->save();

        $retorno = [
            'situacao' => 'success',
            'form' => 'alt',
            'msg' => 'Alteração realizada com sucesso!',
        ];
        return $retorno;

    } catch (Exception $e) {
        $retorno = [
            'situacao' => 'error',
            'form' => 'alt',
            'msg' => 'Erro ao realizar alteração!',
        ];
        return $retorno;
    }

 }

 function delete(Request $request){
    $user = User::find($request->id);
    $user->delete();

    $retorno = [
        'situacao' => 'success',
    ];

    return $retorno;
 }



}
