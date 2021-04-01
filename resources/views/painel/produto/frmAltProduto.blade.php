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
   #buttonGalleria{
    opacity: 0;
}

   #imagemGalleria:hover #buttonGalleria{
    opacity: 1;
    transition-duration: 5s;


}
</style>

<?php
use App\Models\Form;

Form::sb_FormBegin('Alterar produto', 'validation');


Form::sb_FormText('Título', 'title', 'Defina um título para o produto', '800px', $produto->title, true);

Form::sb_FormText('Vazão de ar', 'vazao', 'Defina um valor para o campo', '200px', $produto->vazao, false);
Form::sb_FormText('Motor', 'motor', 'Defina um valor para o campo', '200px', $produto->motor, false);
Form::sb_FormText('Consumo elétrico', 'consumo', 'Defina um valor para o campo', '200px', $produto->consumo, false);
Form::sb_FormText('Abertura de parede', 'abertura', 'Defina um valor para o campo', '200px', $produto->abertura, false);
Form::sb_FormText('Reservatório / peso seco', 'reservatorio', 'Defina um valor para o campo', '200px', $produto->reservatorio, false);


Form::sb_FormTextHtml('Descrição produto', 'text', 'Escre uma descrição', $produto->text, false);


Form::sb_FormCropImage('Imagem produto', $produto->imagem, false);

Form::sb_FormGalleria($galleriaProduto, 'sistema/deletar-produto-imagem');

$opcaoAba[] = "<option value='1'  ".($produto->status == 1 ? 'selected="selected" ' : '')." >Ativo</option>";
$opcaoAba[] .= "<option value='2'  ".($produto->status == 0 ? 'selected="selected" ' : '')." >Inativo</option>";
Form::sb_FormSelect('Status', 'status', $opcaoAba, '250px', true);

Form::sb_FormDate('Data início exibição', 'begin_date', 'Data inícial que o conteúdo será exibido', '289px', str_replace(' ','T',$produto->begin_date) , false);

Form::sb_FormDate('Data final exibição', 'end_date', 'Data final máxima que o conteúdo será exibido', '289px',str_replace(' ','T',$produto->end_date), false);


Form::sb_FormSubmit('Salvar', '', 'sistema/edit-produto');

Form::sb_FormHidden('id', $produto->id);
Form::sb_FormHidden('imgOld', $produto->imagem);

Form::sb_FormEnd();


?>



<script>
    Dropzone.options.myDropzone= {
    url: 'http://127.0.0.1:8000/sistema/salvar-galleria/' + '<?php print $produto->id; ?>',
    //autoProcessQueue: false,
    uploadMultiple: true,
    addRemoveLinks:false,
    dictDefaultMessage: "Arraste ou clique para importar suas fotos.",
    parallelUploads: 10,
    maxFiles: 10,
    maxFilesize: 55,
    acceptedFiles: 'image/*',
    headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
    init: function() {
        dzClosure = this; // Makes sure that 'this' is understood inside the functions below.

        // for Dropzone to process the queue (instead of default form behavior):
        document.getElementById("submit-all").addEventListener("click", function(e) {
            // Make sure that the form isn't actually being sent.
            e.preventDefault();
            e.stopPropagation();
            dzClosure.processQueue();
        });

        //send all the form data along with the files:
        this.on("sendingmultiple", function(data, xhr, formData) {
            formData.append("lastname", jQuery("#lastname").val());
        });
    }
}


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
