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

function ListCostumers(b) {
    var datos = {
        'busq' : b
    }
    $.ajax({
        type: 'POST',
        url: 'ListClients',
        data: datos,
        processData: false,
        contentType: false
    }).done(function (list){
        $('#resultContent').html(list);
    });
}

$('#box-costumer').change(()=>{
  var text = $('#box-costumer').val();
  console.log(text);
  ListCostumers(text);
});

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

$('#my-data').click(()=>{
    $.ajax({
        url: 'datos-user'
    }).done((restuser)=>{
        $('#ModalGeneral').html(restuser);
        $('#modalInfoUser').modal('show');
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

function ListArticles() {
    $.ajax({
        url: 'list-articles'
    }).done(function (rest) {
        $('#resultContent').html(rest);
    });
}

$('#btn-atricles').click(()=>{
    $('#btn-atricles').attr('disabled', true);
    ListArticles();
    $('#btn-atricles').attr('disabled', false);
});

function delete_article(id) {
    if (confirm("Estas seguro que deseas eliminar este artículo?") === true) {
        $('#btn-delete-article-'+id).attr('disabled', true);
        var datos = {
            'id' : id
        }
        $.ajax({
            type: 'POST',
            url: 'delete-article',
            data: datos,
            processData: false,
            contentType: false
        }).done(function (rest) {
           if (rest == 'ok') {
               ListArticles();
           } else {
               console.log(rest);
           }
            $('#btn-delete-article-'+id).attr('disabled', false);
        });
    }
}

function account(id) {
    $('#btn-account-'+id).attr('disabled', true);
    $.ajax({
        url: 'the-account/'+id
    }).done(function (rsaccount){
        $('#btn-account-'+id).attr('disabled', false);
        $('#resultContent').html(rsaccount);
    });
}

function new_account(id) {
    $('#btn-new-account').attr('disabled', true);
    $.ajax({
        url: 'modal-add-account/'+id
    }).done((resta)=>{
        $('#ModalGeneral').html(resta);
        $('#ModalAddAccount').modal('show');
        $('#btn-new-account').attr('disabled', false);
    });
}

function add_payment(ID) {
    $('#btn-add-payment').attr('disabled', true);
    $.ajax({
        url: 'modal-add-payment/'+ID
    }).done((contentModal)=>{
        $('#ModalGeneral').html(contentModal);
        $('#modalAddPayment').modal('show');
        $('#btn-add-payment').attr('disabled', false);
    });
}

function list_payment_costumer(ID) {
    $.ajax({
        url: 'payment-costumer/'+ID
    }).done((restPayCos)=>{
        $('#payments-costumer').html(restPayCos);
    });
}

function delete_payment_costumer(ID, d) {
    if (confirm("¿Esta seguro de eliminar este abono?\nEsta acción afectara el estado de cuenta del cliente que tiene actualmente.") === true) {
        $('#btn-delete-payment-'+ID).attr('disabled', true);
        $.ajax({
            url: 'delete-payment-costumer/'+ID
        }).done((restDelete)=>{
            if (restDelete != '') {
                $('#resultDeletePayment').html(restDelete);
                $('#btn-delete-payment-'+ID).attr('disabled', false);
            }
            list_payment_costumer(d);
        });
    }
}

function list_accounts_costumer(ID) {
    $.ajax({
        url: 'account-costumer/'+ID
    }).done((restAccount)=>{
       $('#account-costumer').html(restAccount);
    });
}

function delete_account_costumer(ID, d) {
    if (confirm("¿Estas seguro de eliminar este cargo al cliente?\nEsta acción afectara al estado de cuenta que tiene actualmente.") === true) {
        $('#btn-delete-payment-'+ID).attr('disabled', true);
        $.ajax({
            url: 'delete-account-costumer/'+ID
        }).done((resdeleteacconut)=>{
            if(resdeleteacconut != '') {
                $('#resultDeletePayment').html(resdeleteacconut);
            }
            list_payment_costumer(d);
            list_accounts_costumer(d);
        });
    }
}