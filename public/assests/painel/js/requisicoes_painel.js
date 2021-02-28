function mesages(status){

    if(status == 'success'){
        toastr.options = {
            closeButton: true,
            progressBar: true,
            showMethod: 'slideDown',
            timeOut: 4000
        };
        toastr.success('Cadastro salvo com sucesso!');
    }

    if(status == 'error'){
        toastr.options = {
            closeButton: true,
            progressBar: true,
            showMethod: 'slideDown',
            timeOut: 4000
        };
        toastr.error('Erro ao salvar o cadastro!');
    }
}

function formularios(){
    jQuery.ajax({
        url: "salvar-usuario",
        type: "POST",
        dataType: "JSON",
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: $('#validation').serialize(),
        success: function( data )
        {
            if(data.situacao == 'success'){
                mesages('success');
            }
            if(data.situacao == 'error'){
                mesages('error');
            }
        }
    });
}


