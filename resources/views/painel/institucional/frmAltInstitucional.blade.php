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

Form::sb_FormBegin('Alterar Quem Somos  ', 'validation');

Form::sb_FormText('Título', 'title', 'Defina um título para o sobre nós', '800px', $institucional->title, true);

Form::sb_FormCropImage('Imagem institucional', $institucional->imagem, false);

Form::sb_FormTextHtml('Descrição', 'text', 'Escre uma descrição', $institucional->text, true);

Form::sb_FormTextHtml('Missão', 'missao', 'Defina uma descrição para missão', $institucional->missao, true);

Form::sb_FormTextHtml('Visão', 'visao', 'Defina uma descrição para visão', $institucional->visao, true);

Form::sb_FormTextHtml('Valores', 'valores', 'Defina uma descrição para valores', $institucional->valores, true);

Form::sb_FormText('Link vídeo', 'url', 'Informar a url do vídeo', '800px', $institucional->url, false);

$opcaoAba[] = "<option value='1'  ".($institucional->status == 1 ? 'selected="selected" ' : '')." >Ativo</option>";
$opcaoAba[] .= "<option value='2'  ".($institucional->status == 0 ? 'selected="selected" ' : '')." >Inativo</option>";
Form::sb_FormSelect('Status', 'status', $opcaoAba, '250px', true);

Form::sb_FormSubmit('Salvar', '', 'sistema/edit-institucional');

Form::sb_FormHidden('id', $institucional->id);
Form::sb_FormHidden('imgOld', $institucional->imagem);


Form::sb_FormEnd();


?>



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
