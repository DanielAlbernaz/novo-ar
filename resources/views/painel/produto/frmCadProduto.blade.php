 @include('painel/header')

 <style>
    img {
        display: block;
        max-width: 100%;
    }
    .preview {
        overflow: hidden;
        width: 160px;
        height: 160px;
        margin: 10px;
        border:  1px solid black;
    }
</style>

<?php
use App\Models\Form;

Form::sb_FormBegin('Cadastro de produtos', 'validation');

Form::sb_FormText('Título', 'title', 'Defina um título para o banner', '800px', '', true);

Form::sb_FormText('Vazão de ar', 'vazao', 'Defina um valor para o campo', '200px', '', false);
Form::sb_FormText('Motor', 'motor', 'Defina um valor para o campo', '200px', '', false);
Form::sb_FormText('Consumo elétrico', 'consumo', 'Defina um valor para o campo', '200px', '', false);
Form::sb_FormText('Abertura de parede', 'abertura', 'Defina um valor para o campo', '200px', '', false);
Form::sb_FormText('Reservatório / peso seco', 'reservatori', 'Defina um valor para o campo', '200px', '', false);

Form::sb_FormTextHtml('Descrição produto', 'textarea', 'Escre uma descrição', '', false);

Form::sb_FormCropImage('Imagem produto', '', true);

$opcaoStatus[] = "<option value='1'  selected>Ativo</option>";
$opcaoStatus[] .= "<option value='0' >Inativo</option>";
Form::sb_FormSelect('Status', 'status', $opcaoStatus, '250px', true);

Form::sb_FormDate('Data início exibição', 'begin_date', 'Data inícial que o conteúdo será exibido', '289px', '', false);

Form::sb_FormDate('Data final exibição', 'end_date', 'Data final máxima que o conteúdo será exibido', '289px', '', false);

Form::sb_FormSubmit('Salvar', 'sistema/salvar-produto', '');

Form::sb_FormEnd();


?>

<div id="gallery" class="dropzone"></div>

<script>
    var bs_modal = $('#modal');
    var image = document.getElementById('image');
    var cropper,reader,file;

    $("body").on("change", ".image", function(e) {
        var files = e.target.files;
        var done = function(url) {
            image.src = url;
            bs_modal.modal('show');
        };

        if (files && files.length > 0) {
            file = files[0];

            if (URL) {
                done(URL.createObjectURL(file));
            } else if (FileReader) {
                reader = new FileReader();
                reader.onload = function(e) {
                    done(reader.result);
                };
                reader.readAsDataURL(file);
            }
        }
    });

    bs_modal.on('shown.bs.modal', function() {
        cropper = new Cropper(image, {
            aspectRatio: 800 / 800,
            viewMode: 1,
            preview: '.preview'
        });
    }).on('hidden.bs.modal', function() {
        cropper.destroy();
        cropper = null;
    });

    $("#crop").click(function() {
        canvas = cropper.getCroppedCanvas({
            width: 800,
            height: 800,
        });

        canvas.toBlob(function(blob) {
            url = URL.createObjectURL(blob);
            var reader = new FileReader();
            reader.readAsDataURL(blob);
            reader.onloadend = function() {
            var base64data = reader.result;

            $('#image_file').val(base64data);
            bs_modal.modal('hide');
            };
        });
    });

</script>


@include('painel/footer')


