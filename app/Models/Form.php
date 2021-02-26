<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Form extends Model
{
    use HasFactory;

    public function sb_FormBegin($nome = '', $id = '', $action)
    {
        $form = '';

        $form .= '<div class="row">';
            $form .= '<div class="col-lg-12">';
                $form .= '<div class="ibox ">';
                    $form .= '<div class="ibox-title">';
                        $form .= '<h5>' . $nome . '</h5>';
                 $form .= '</div>';
            $form .= '<div class="ibox-content">';
        $form .= '<form id="'. $id .'" method="POST"  enctype="multipart/form-data" action="'. $action .'" >';

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



    public function sb_FormImagemCrop($name = '', $id = '', $required = false)
    {
        $form = '';

        $form .='<div class="form-group row">';
        $form .='<label class="col-sm-2 col-form-label">'. $name .' '.($required == true ? '<label>*</label>' : '').'</label>';
            $form .='<div class="col-sm-10">';
                $form .= '<div class="custom-file" style="width: 19%">';
                    $form .= '<input type="file" class="custom-file-input" name="'. $id .'" onchange="preview(this)" id="'. $id .'" '.($required == true ? 'required' : '').' >';
                    $form .= '<label for="logo" class="custom-file-label">Escolha a imagem...</label>';
                $form .= '</div> ';
            $form .='</div>';
        $form .='</div>';
        $form .='<div class="hr-line-dashed"></div>';

        $form .='<input type="hidden" id="x" name="x" />';
        $form .='<input type="hidden" id="y" name="y" />';
        $form .='<input type="hidden" id="w" name="w" />';
        $form .='<input type="hidden" id="h" name="h" />';

        // Onde visualiza a imagem
        $form .='<div class="formRow imgPreview" style="text-align:center; margin-left: 65px; display:none;">';
            $form .='<p><i>Selecione onde a imagem será recortada.</i></p>';
            $form .='<img id="jcrop" style="background-color:transparent"/>';
        $form .='</div>';


        return print_r($form);
    }


    public function sb_FormSubmit($name = '')
    {
        $form = '';

        $form .='<div class="form-group row">';
            $form .='<div class="col-sm-4 col-sm-offset-2">';
                $form .='<button class="btn btn-primary btn-sm"  type="submit">'. $name .'</button>';
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

    public function sb_Menssagem()
    {
        $html = "";
        $html .= "<script>";
                 $html .= "$(document).ready(function() {";
                 $html .= "setTimeout(function() {";
                 $html .= "toastr.options = {";
                     $html .= "closeButton: true,";
                     $html .= "progressBar: true,";
                     $html .= "showMethod: 'slideDown',";
                     $html .= "timeOut: 4000";
                     $html .= "};";
                     $html .= "toastr.success('Responsive Admin Theme', 'Welcome to INSPINIA');";

                     $html .= " }, 1300);";

                 $html .= "$('.navbar-minimalize').on('click', function (event) {";
                 $html .= "event.preventDefault();";
                 $html .= "$('body').toggleClass('mini-navbar');";
                 $html .= "SmoothlyMenu();";

                 $html .= "});";


                $html .= "var data1 = [";
                $html .= "[0,4],[1,8],[2,5],[3,10],[4,4],[5,16],[6,5],[7,11],[8,6],[9,11],[10,30],[11,10],[12,13],[13,4],[14,3],[15,3],[16,6]";
                $html .= "];";
                $html .= "var data2 = [";
                $html .= "[0,1],[1,0],[2,2],[3,0],[4,1],[5,3],[6,1],[7,5],[8,2],[9,3],[10,2],[11,1],[12,0],[13,2],[14,8],[15,0],[16,0]";
                $html .= "];";
                $html .= "$('#flot-dashboard-chart').length && $.plot($('#flot-dashboard-chart'), [";
                $html .= "data1, data2";
                $html .= "],";
                $html .= "{";
                    $html .= "series: {";
                        $html .= "lines: {";
                                 $html .= "show: false,";
                                 $html .= "fill: true";
                                 $html .= "},";
                                 $html .= "splines: {";
                                 $html .= "show: true,";
                                 $html .= "tension: 0.4,";
                                 $html .= "lineWidth: 1,";
                                 $html .= "fill: 0.4";
                                 $html .= "},";
                                 $html .= "points: {";
                                    $html .= "radius: 0,";
                                    $html .= "show: true";
                                    $html .= "},";
                                    $html .= "shadowSize: 2";
                                    $html .= "},";
                                    $html .= "grid: {";
                            $html .= "hoverable: true,";
                            $html .= "clickable: true,";
                            $html .= "tickColor: '#d5d5d5',";
                            $html .= "borderWidth: 1,";
                            $html .= "color: '#d5d5d5'";
                            $html .= "},";
                        $html .= "colors: ['#1ab394', '#1C84C6'],";
                        $html .= "xaxis:{";
                        $html .= "},";
                        $html .= "yaxis: {";
                            $html .= "ticks: 4";
                            $html .= "},";
                            $html .= "tooltip: false";
                            $html .= "}";
                            $html .= ");";

                 $html .= "var doughnutData = {";
                 $html .= "labels: ['App','Software','Laptop' ],";
                 $html .= "datasets: [{";
                     $html .= "data: [300,50,100],";
                     $html .= "backgroundColor: ['#a3e1d4','#dedede','#9CC3DA']";
                 $html .= "}]";
                 $html .= "} ;";


                 $html .= "var doughnutOptions = {";
                 $html .= "responsive: false,";
                 $html .= "legend: {";
                    $html .= "display: false";
                    $html .= "}";
                    $html .= "};";


                 $html .= "var ctx4 = document.getElementById('doughnutChart').getContext('2d');";
                 $html .= "new Chart(ctx4, {type: 'doughnut', data: doughnutData, options:doughnutOptions});";

                $html .= "var doughnutData = {";
                $html .= "labels: ['App','Software','Laptop' ],";
                $html .= "datasets: [{";
                     $html .= "data: [70,27,85],";
                     $html .= "backgroundColor: ['#a3e1d4','#dedede','#9CC3DA']";
                 $html .= "}]";
                 $html .= "} ;";


                $html .= "var doughnutOptions = {";
                $html .= "responsive: false,";
                $html .= "legend: {";
                    $html .= "display: false";
                    $html .= "}";
                    $html .= "};";


                 $html .= "var ctx4 = document.getElementById('doughnutChart2').getContext('2d');";
                 $html .= "new Chart(ctx4, {type: 'doughnut', data: doughnutData, options:doughnutOptions});";

                 $html .= "});";
                 $html .= "</script>";

                 return print_r($html);
    }

}



