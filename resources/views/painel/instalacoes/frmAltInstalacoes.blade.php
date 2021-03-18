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

Form::sb_FormText('Título', 'title', 'Defina um título para o  instalações', '800px', $instalacoes->title, true);

Form::sb_FormTextHtml('Texto', 'text', 'Escre uma texto', $instalacoes->text, false);

Form::sb_FormGalleria($galleriaInstalacoes, 'sistema/deletar-instalacoes-imagem');

Form::sb_FormSubmit('Salvar', '', 'sistema/edit-instalacoes');

Form::sb_FormHidden('id', $instalacoes->id);

Form::sb_FormEnd();


?>

<script>
    var urlDomain = window.location.origin;

    Dropzone.options.myDropzone= {
    url: urlDomain + '/sistema/salvar-galleria-instalacoes/1',
    //autoProcessQueue: false,
    uploadMultiple: true,
    addRemoveLinks:false,
    dictDefaultMessage: "Arraste ou clique para importar suas fotos.",
    parallelUploads: 100,
    maxFiles: 100,
    maxFilesize: 100,
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

</script>

@include('painel/footer')
