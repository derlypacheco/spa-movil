<?php
session_start();
if ($_SESSION['client_c'] == '1') {
    include_once '../../../class/Config.php';
    $config = new Config();
?>

    <div class="modal fade border-0" id="modalAddCostumer" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog border-0">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Nuevo cliente</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="post" id="frmAddCostumer">

                        <div class="row form-group my-2">
                            <div class="col">
                                <label for="">Nombre completo</label>
                                <input type="text" class="form-control" required name="fullname">
                            </div>
                        </div>

                        <div class="row form-group my-2">
                            <div class="col-6">
                                <label for="">Celular</label>
                                <input type="text" class="form-control" required name="cell">
                            </div>
                            <div class="col-6">
                                <label for="">Telefono </label>
                                <input type="text" class="form-control" required name="phone">
                            </div>
                        </div>

                        <div class="row form-group my-2">
                            <div class="col-6">
                                <label for="">Correo</label>
                                <input type="email" class="form-control" name="email">
                            </div>
                            <div class="col-6">
                                <label for="">Limite credito</label>
                                <input type="number" class="form-control" name="limit" min="1" required value="100">
                            </div>
                        </div>

                        <div class="row form-group my-2">
                            <div class="col">
                                <label for="">Direcci&oacute;n</label>
                                <input type="text" class="form-control" name="address">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-12 d-grid gap-2">
                                <button type="submit" id="btn-submit-client" class="btn d-md-block my-2 btn-principal">
                                    Agregar cliente
                                </button>
                            </div>
                        </div>

                        <div id="result">

                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>

    <script>
        $('#frmAddCostumer').submit((e)=>{
            e.preventDefault();
           $('#btn-submit-client').attr('disabled', true);
           $.ajax({
               type: 'POST',
               url: 'add-client',
               data: new FormData($('#frmAddCostumer')[0]),
               processData: false,
               contentType: false
           }).done(function (rest) {
               $('#btn-submit-client').attr('disabled', false);
               if (rest == 'ok') {
                   $('#frmAddCostumer')[0].reset();
                   ListCostumers();
               } else {
                    $('#result').addClass("row form-group text-center alert alert-danger m-2");
                    $('#result').html(rest);
               }
           });
        });
    </script>

<?php } ?>

