function mesages(status, msg){

    if(status == 'success'){
        toastr.options = {
            closeButton: true,
            progressBar: true,
            showMethod: 'slideDown',
            timeOut: 4000
        };
        toastr.success(msg);
    }

    if(status == 'error'){
        toastr.options = {
            closeButton: true,
            progressBar: true,
            showMethod: 'slideDown',
            timeOut: 4000
        };
        toastr.error(msg);
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
                mesages('success', 'Cadastro salvo com sucesso!');
                window.location.href = 'listar-usuario'
            }
            if(data.situacao == 'error'){
                mesages('error', 'Erro ao salvar o cadastro!');
            }
        }
    });
}

function status(route, id){
    jQuery.ajax({
        url:  route,
        type: "POST",
        dataType: "JSON",
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: {id:id},
        success: function( data )
        {
            if(data.situacao == 'success'){
                mesages('success', 'Status alterado!');
                window.location.reload();
            }
            if(data.situacao == 'error'){
                mesages('error', 'Erro ao alterar o status!');
            }
        }
    });
}


