// const pathSite = window.location.hostname
const pathSite = 'http://127.0.0.1:8000/';

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

function formularios(route){

    jQuery.ajax({
        url: pathSite + route,
        type: "POST",
        dataType: "JSON",
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: $('#validation').serialize(),
        success: function( data )
        {
            if(data.situacao == 'success'){

                if(data.form == 'cad'){
                    mesages('success', data.msg);
                    setTimeout(function() {
                        window.location.href = pathSite + data.redirect
                      }, 1000);
                }

                if(data.form == 'alt'){
                    mesages('success',  data.msg);
                    setTimeout(function() {
                        window.location.href = pathSite + data.redirect
                      }, 1000);
                }

            }

            if(data.situacao == 'error'){
                if(data.form == 'alt'){
                    mesages('error',  data.msg);
                }

                if(data.form == 'alt'){
                    mesages('error',  data.msg);
                }
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
                setTimeout(function() {
                    window.location.reload();
                  }, 1000);

            }
            if(data.situacao == 'error'){
                mesages('error', 'Erro ao alterar o status!');
            }
        }
    });
}

function deletar(route, id){
    var route = pathSite + route + '/' +  id;
    Swal.fire({
        title: 'Você tem certeza de deseja excluir?',
        text: "Pode ser irreversível!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Sim, deletar!',
        cancelButtonText: 'Cancelar'
      }).then((result) => {
        if (result.isConfirmed) {

            jQuery.ajax({
                url: route,
                type: "POST",
                dataType: "JSON",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {id:id},
                success: function( data )
                {
                    if(data.situacao == 'success'){
                        Swal.fire(
                            'Deletado!',
                            'Excluido com sucesso.',
                            'success'
                          )
                        setTimeout(function() {
                            window.location.reload();
                          }, 1000);

                    }
                    if(data.situacao == 'error'){
                        mesages('error', 'Erro ao alterar o status!');
                    }
                }
            });


        }
      })

}
