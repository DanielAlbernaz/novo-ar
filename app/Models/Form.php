<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Form extends Model
{
    use HasFactory;

    public function sb_FormBegin($nome = '', $id = '')
    {
        $form = '';

        $form .= '<div class="row">';
            $form .= '<div class="col-lg-12">';
                $form .= '<div class="ibox ">';
                    $form .= '<div class="ibox-title">';
                        $form .= '<h5>' . $nome . '</h5>';
                 $form .= '</div>';
            $form .= '<div class="ibox-content">';
        $form .= '<form id="'. $id .'" method="POST"  enctype="multipart/form-data" action="javascript:void(0)" >';

        return print_r($form);
    }

    public function sb_FormText($name = '', $id = '', $title = '', $width = '', $value = '', $required = false)
    {
        $form = '';

        $form .='<div class="form-group  row ">';
            $form .='<label class="col-sm-2 col-form-label">'. $name .' '.($required == true ? '<label>*</label>' : '').'</label>';

            $form .='<div class="col-sm-10" input>';
            $form .='<span class="error"></span>';
                $form .='<input type="text" id="'. $id .'" class="form-control" name="'. $id .'" value="'. $value .'" title="'. $title .'" style="width:'. $width .'" '.($required == true ? 'required' : '').'></div>';
            $form .='</div>';

        $form .='<div class="hr-line-dashed"></div>';

        return print_r($form);
    }

    public function sb_FormTextEmail($name = '', $id = '', $title = '', $width = '', $value = '', $required = false)
    {
        $form = '';

        $form .='<div class="form-group  row ">';
            $form .='<label class="col-sm-2 col-form-label">'. $name .' '.($required == true ? '<label>*</label>' : '').'</label>';

            $form .='<div class="col-sm-10" input>';
            $form .='<span class="error"></span>';
                $form .='<input type="email" id="'. $id .'" class="form-control" name="'. $id .'" value="'. $value .'" title="'. $title .'" style="width:'. $width .'" '.($required == true ? 'required' : '').'></div>';
            $form .='</div>';

        $form .='<div class="hr-line-dashed"></div>';

        return print_r($form);
    }

    public function sb_FormPassword($name = '', $id = '', $title = '', $width = '', $value = '', $required = false)
    {
        $form = '';

        $form .='<div class="form-group  row">';
            $form .='<label class="col-sm-2 col-form-label">'. $name .' '.($required == true ? '<label>*</label>' : '').'</label>';

            $form .='<div id="message" class="col-sm-10" input>';
            $form .='<span class="error"></span>';
                $form .='<input onchange="validPasswords();" type="password" id="'. $id .'" class="form-control" name="'. $id .'" value="'. $value .'" title="'. $title .'" style="width:'. $width .'"  '.($required == true ? 'required' : '').' ></div>';
            $form .='</div>';

        $form .='<div class="hr-line-dashed"></div>';

        return print_r($form);
    }

    public function sb_FormSelect($name = '', $id = '', $arrayOption = array(), $width = '', $required = false)
    {
        $form = '';
        $form .='<div class="form-group row">';
            $form .='<label class="col-sm-2 col-form-label">'. $name .' '.($required == true ? '<label>*</label>' : '').'</label>';
                $form .='<div class="col-sm-10">';
                    $form .='<select id="'. $id .'"  name="'. $id .'" class="form-control m-b" style="width:'. $width .'"  '.($required == true ? 'required' : '').'>';

                        foreach($arrayOption as $option){
                            $form .= $option;
                        }

                    $form .='</select>';
                $form .='</div>';
            $form .='</div>';
        $form .='<div class="hr-line-dashed"></div>';

        return print_r($form);
    }
    public function sb_FormCropImage()
    {
        $form = '';

        $form .='<div class="">';
        $form .=' <h5>Selecionar Imagem</h5>';
        $form .='<input type="file"  name="image" class="image">';
        $form .='<input type="hidden" name="image_file" id="image_file">';
        $form .='</div>';
        $form .='<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">';
        $form .='<div class="modal-dialog modal-lg" role="document">';
        $form .='<div class="modal-content">';
        $form .='<div class="modal-header">';
        $form .='<h5 class="modal-title" id="modalLabel">Crop image</h5>';
        $form .='<button type="button" class="close" data-dismiss="modal" aria-label="Close">';
        $form .='<span aria-hidden="true">×</span>';
        $form .='</button>';
        $form .='</div>';
        $form .='<div class="modal-body">';
        $form .='<div class="img-container">';
        $form .='<div class="row">';
        $form .='<div class="col-md-8">      ';
        $form .='<img id="image">';
        $form .='</div>';
        $form .='<div class="col-md-4">';
        $form .='<div class="preview"></div>';
        $form .='</div>';
        $form .='</div>';
        $form .='</div>';
        $form .='</div>';
        $form .=' <div class="modal-footer">';
        $form .='<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>';
        $form .='<button type="button" class="btn btn-primary" id="crop">Crop</button>';
        $form .='</div>';
        $form .='</div>';
        $form .='</div>';
        $form .='</div>';
        $form .='</div> ';
        $form .='</div>';

        return print_r($form);
    }

    public function sb_FormSubmit($name = '')
    {
        $form = '';

        $form .='<div class="form-group row">';
            $form .='<div class="col-sm-4 col-sm-offset-2">';
                $form .='<button class="btn btn-primary btn-sm"  onclick="formularios()">'. $name .'</button>';
            $form .='</div>';
        $form .='</div>';

        return print_r($form);
    }

    public function sb_Table($title = '')
    {
        $form = '';

        $form .='<div class="wrapper wrapper-content animated fadeInRight">';
            $form .='<div class="row">';
                $form .='<div class="col-lg-12">';
                    $form .='<div class="ibox ">';
                        $form .='<div class="ibox-title">';
                            $form .='<h5>'.$title.'</h5>';
                            $form .='<div class="ibox-tools">';
                                $form .='<a class="collapse-link">';
                                    $form .='<i class="fa fa-chevron-up"></i>';
                                $form .='</a>';

                                $form .='<a class="dropdown-toggle" data-toggle="dropdown" href="#">';
                                    $form .='<i class="fa fa-wrench"></i>';
                                $form .='</a>';

                            $form .='<ul class="dropdown-menu dropdown-user">';
                                $form .='<li><a href="#" class="dropdown-item">Config option 1</a>';
                                $form .='</li>';

                                $form .='<li><a href="#" class="dropdown-item">Config option 2</a>';
                                $form .='</li>';

                            $form .='</ul>';

                            $form .='<a class="close-link">';
                                $form .='<i class="fa fa-times"></i>';
                            $form .='</a>';

                            $form .='</div>';
                        $form .='</div>';

                        $form .='<div class="ibox-content">';
                            $form .='<div class="table-responsive">';
                                $form .='<table class="table table-striped table-bordered table-hover dataTables-example" >';
                                    $form .='<thead>';
                                        $form .='<tr>';
                                            $form .='<th>Rendering engine</th>';
                                            $form .='<th>Browser</th>';
                                            $form .='<th>Platform(s)</th>';
                                            $form .='<th>Engine version</th>';
                                            $form .='<th >Ação</th>';
                                        $form .='</tr>';
                                    $form .='</thead>';

                                    $form .='<tbody>';
                                        $form .='<tr class="gradeC">';
                                            $form .='<td>Trident</td>';
                                            $form .='<td>Internet';
                                            $form .='Explorer 4.0';
                                            $form .='</td>';
                                            $form .='<td>Win 95+</td>';
                                            $form .='<td class="center">4</td>';
                                            $form .='<td class="center">';
                                                $form .='<a class="btn btn-success  dim" title="Editar" style="padding: 7px; box-shadow: inset 0 0 0 #1872ab, 0 5px 0 0 #1872ab, 0 10px 5px #999999 !important">';
                                                    $form .='<i class="fa fa-edit" style="color: white; font-size: 17px; "></i></a>';

                                                    $form .='<a class="btn btn-danger  dim " title="Excluir" style="padding: 7px; box-shadow: inset 0 0 0 #ea394c, 0 5px 0 0 #ea394c, 0 10px 5px #999999 !important; margin-left: 10px;">';
                                                    $form .='<i class="fa fa-trash" style="color: white; font-size: 17px; "></i></a>';
                                                $form .='</td>';
                                        $form .='</tr>';
                                    $form .='</tbody>';

                            $form .='<tfoot>';
                                $form .='<tr>';
                                    $form .='<th>Rendering engine</th>';
                                    $form .='<th>Browser</th>';
                                    $form .='<th>Platform(s)</th>';
                                    $form .='<th>Engine version</th>';
                                    $form .='<th>CSS grade</th>';
                                $form .='</tr>';
                            $form .='</tfoot>';
                        $form .='</table>';
                        $form .='</div>';

                        $form .='</div>';
                    $form .='</div>';
                $form .='</div>';
            $form .='</div>';
        $form .='</div>';

        return print_r($form);
    }

    public function sb_FormEnd()
    {
        $form = '';
                            $form .= '</form>';
                        $form .= '</div>';
                    $form .= '</div>';
                $form .= '</div>';
            $form .= '</div>';

        return print_r($form);
    }

    function print_rpre($valor)
    {
        echo "<pre>";
        print_r($valor);
        echo "</pre>";
    }



}



