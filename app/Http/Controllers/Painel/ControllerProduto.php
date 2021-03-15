<?php

namespace App\Http\Controllers\Painel;

use App\Models\Form;
use App\Models\GalleriaProduto;
use App\Models\Produto;
use DateTime;
use Exception;
use Facade\FlareClient\Stacktrace\File;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Intervention\Image\ImageManagerStatic;

class ControllerProduto extends Controller
{
    public function create(Request $request)
    {
        //$this->inactivateDate();
        return view('painel.produto.frmCadProduto');
    }

    public function store(Request $request)
    {
        $objProduto = new Produto();
        try {
            if($request->image_file){
                $image_parts = explode(";base64,", $request->image_file);
                $image_type_aux = explode("image/", $image_parts[0]);
                $image_type = $image_type_aux[1];
                $image_base64 = base64_decode($image_parts[1]);

                //Se não existir cria o diretorio
                $localStorage = 'produto';
                $namePhoto = 'photo_' . time() . '.' . $image_type;
                try {
                    mkdir(storage_path('/app/public/'. $localStorage), 0777, true);
                } catch (Exception $e) {

                }
                $img = ImageManagerStatic::make($image_base64);
                $img->save(storage_path('\app\public'. '/\/'  . $localStorage) . '/\/' . $namePhoto,100);

                $request->image_file= $localStorage . "/" . $namePhoto;
            }

            $objProduto->title = $request->title;
            $objProduto->vazao = $request->vazao;
            $objProduto->motor = $request->motor;
            $objProduto->consumo = $request->consumo;
            $objProduto->abertura = $request->abertura;
            $objProduto->reservatorio = $request->reservatorio;
            $objProduto->text = $request->text;
            $objProduto->status = $request->status;
            $objProduto->begin_date = ($request->begin_date ? $request->begin_date  : date('Y-m-d H:i:s'));
            $objProduto->end_date = $request->end_date;
            $objProduto->imagem = $request->image_file;
            $objProduto->save();

            $retorno = [
                'situacao' => 'success',
                'form' => 'cad',
                'redirect' => 'sistema/listar-produto',
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
    $produtos = Produto::all();

    $produtosList = array();
    for($i = 0; $i < count($produtos); $i++){
        $produtosList[$i]['ID'] = $produtos[$i]->id;
        $produtosList[$i]['TÍTULO'] = $produtos[$i]->title;
        $produtosList[$i]['IMAGEM'] = '<img src="'.session('URL_IMG'). $produtos[$i]->imagem.'" style="width: 100px; overflow: hidden;" >' ;
        $produtosList[$i]['INÍCIO EXIBIÇÃO'] = date_format(new DateTime($produtos[$i]->begin_date), 'd/m/Y H:i:s');
        $produtosList[$i]['FIM EXIBIÇÃO'] = ($produtos[$i]->end_date ? date_format(new DateTime($produtos[$i]->end_date), 'd/m/Y H:i:s') : '');
        $produtosList[$i]['STATUS'] = $produtos[$i]->status;
    }
    return view('painel.produto.frmListaProduto', compact('produtosList'));
 }

 function status(Request $request){
    $user = Produto::find($request->id);

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

 function delete(Request $request){
    $produto = Produto::find($request->id);
    unlink(storage_path('\app\public/\/'.$produto->imagem));
    $this->destroyImage($produto->id);
    $produto->delete();

    $retorno = [
        'situacao' => 'success',
    ];

    return $retorno;
 }

 function find(Request $request){
    $produto = Produto::find($request->id);
    $galleriaProduto = GalleriaProduto::where('id_produto',  $request->id)->get();

     return view('painel.produto.frmAltProduto', compact('produto', 'galleriaProduto'));
  }

 function destroyImage($id){
    $galleriaProduto = GalleriaProduto::find($id);
    unlink(storage_path('\app\public/\/'.$galleriaProduto->imagem));
    $galleriaProduto->delete();

    $retorno = [
        'situacao' => 'success',
    ];

    return $retorno;
    exit;
  }

 function storeGalleria(Request $request){


    $files = $request->file;

    for($i = 0; $i < count($files); $i++){
        try {
            if($files[$i]){
                $extensaoPhoto = $files[$i]->extension();
                $img = ImageManagerStatic::make($files[$i]);

                //Se não existir cria o diretorio
                $localStorage = 'produto/' . $request->id;
                $namePhoto = 'photo_' . time() . rand(1, 100) .  $i . '.' . $extensaoPhoto;
                try {
                    mkdir(storage_path('/app/public/'. $localStorage), 0777, true);
                } catch (Exception $e) {

                }
                $img->save(storage_path('\app\public'. '/\/'  . $localStorage) . '/\/' . $namePhoto,100);

                $imagem = $localStorage . "/" . $namePhoto;
            }

        }catch (Exception $e) {
        }

        $galleriaProduto = new GalleriaProduto();

        $galleriaProduto->id_produto = $request->id;
        $galleriaProduto->imagem = $imagem;
        $galleriaProduto->save();
    }

    exit;
  }

  function edit(Request $request){

    try {
        if($request->image_file){
            $image_parts = explode(";base64,", $request->image_file);
            $image_type_aux = explode("image/", $image_parts[0]);
            $image_type = $image_type_aux[1];
            $image_base64 = base64_decode($image_parts[1]);

            //Se não existir cria o diretorio
            $localStorage = 'produto';
            $namePhoto = 'photo_' . time() . '.' . $image_type;
            try {
                mkdir(storage_path('/app/public/'. $localStorage), 0777, true);
            } catch (Exception $e) {

            }
            $img = ImageManagerStatic::make($image_base64);
            $img->save(storage_path('\app\public'. '/\/'  . $localStorage) . '/\/' . $namePhoto,100);

            $request->image_file= $localStorage . "/" . $namePhoto;
        }

        $objProduto = Produto::find($request->id);
        $objProduto->title = $request->title;
        $objProduto->url = $request->url;
        $objProduto->target_page = $request->target_page;
        $objProduto->status = $request->status;
        $objProduto->begin_date = ($request->begin_date ? $request->begin_date  : date('Y-m-d H:i:s'));
        $objProduto->end_date = $request->end_date;
        $objProduto->imagem = ($request->image_file ? $request->image_file : $request->imgOld);
        $objProduto->save();

        $retorno = [
            'situacao' => 'success',
            'form' => 'alt',
            'redirect' => 'sistema/listar-produto',
            'msg' => 'Alteração realizada com sucesso!',
        ];
        return $retorno;

    } catch (Exception $e) {
        $retorno = [
            'situacao' => 'error',
            'form' => 'alt',
            'redirect' => 'sistema/listar-produto',
            'msg' => 'Erro ao realizar alteração!',
        ];
        return $retorno;
    }

 }

 function inactivateDate()
 {
    Produto::where('status', 1)
    ->where('end_date', '<', date('Y-m-d H:i:s'))
    ->update(['status' => 0]);
 }
}
