const afterLoad = '<div class="alert alert-info text-center"> <i class="fa fa-spin fa-spinner"></i> Cargando los datos solicitados</div>';

$('#LogOut').click(()=>{
   $.ajax({
       url: 'LogOut'
   }).done(function (log) {
       if (log == '1')
       {
           location.reload();
       }
   });
});

function ListCostumers() {
    $.ajax({
        url: 'ListClients'
    }).done(function (list){
        $('#resultContent').html(list);
    });
}

$('#btn-clients').click(()=>{
    $('#resultContent').html(afterLoad);
    $('#btn-clients').attr('disabled', true);
   $.ajax({
       url: 'ListClients'
   }).done(function (list){
      $('#resultContent').html(list);
       $('#btn-clients').attr('disabled', false);
   });
});

function delete_costumer(d) {
    $('#btn-delete-costumer-'+d).attr('disabled', true);
    if (confirm("Estas seguro de eliminar este cliente?") === true) {
        $.ajax({
            url: 'delete-client/'+d
        }).done(function (deleted) {
           if (deleted == 'ok') {
               ListCostumers();
           } else {
               $('#btn-delete-costumer-'+d).attr('disabled', false);
               alert(deleted);
           }
        });
    }
}

function view_costumer(d) {
    $('#btn-view-costumer-'+d).attr('disabled', true);
    $.ajax({
        url: 'modal-edit-client/'+d
    }).done(function (modalview) {
       $('#ModalGeneral').html(modalview);
       $('#modalEditCostumer').modal('show');
        $('#btn-view-costumer-'+d).attr('disabled', false);
    });
}