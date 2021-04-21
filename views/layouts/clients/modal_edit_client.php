<?php
session_start();
if ($_SESSION['client_v'] == '1') {
    include_once '../../../class/Config.php';
    $config = new Config();
    $sql = "select * from global_customers where activo = '1' and id_cliente = '".$_GET['id']."'";
    $listCostumer = $config->ListArray($sql);
    foreach ($listCostumer as $row);
?>
    <div class="modal fade border-0" id="modalEditCostumer" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog border-0">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Editar cliente</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="post" id="frmEditCostumer">
                        <div class="row form-group my-2">
                            <div class="col">
                                <label for="">Nombre completo</label>
                                <input type="text" class="form-control" required name="fullname" value="<?php echo $row['nombre']; ?>">
                            </div>
                        </div>

                        <div class="row form-group my-2">
                            <div class="col-6">
                                <label for="">Celular</label>
                                <input type="text" class="form-control" required name="cell" value="<?php echo $row['celular']; ?>">
                            </div>
                            <div class="col-6">
                                <label for="">Telefono </label>
                                <input type="text" class="form-control" required name="phone" value="<?php echo $row['telefono']; ?>">
                            </div>
                        </div>

                        <div class="row form-group my-2">
                            <div class="col-6">
                                <label for="">Correo</label>
                                <input type="email" class="form-control" name="email" value="<?php echo $row['correo']; ?>">
                            </div>
                            <div class="col-6">
                                <label for="">Limite credito</label>
                                <input type="number" class="form-control" name="limit" min="1" required value="100" value="<?php echo $row['limite_credito']; ?>">
                            </div>
                        </div>

                        <div class="row form-group my-2">
                            <div class="col">
                                <label for="">Direcci&oacute;n</label>
                                <input type="text" class="form-control" name="address" value="<?php echo $row['direccion']; ?>">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-12 d-grid gap-2">
                                <input type="hidden" name="id" value="<?php echo $row['id_cliente']; ?>">
                                <button type="submit" id="btn-submit-client" class="btn d-md-block my-2 btn-principal">
                                    modificar cliente
                                </button>
                            </div>
                        </div>

                        <div id="result">

                        </div>

                    </form>
                </div>

                <script>
                    $('#frmEditCostumer').submit((e)=>{
                       e.preventDefault();
                       $.ajax({
                           type: 'POST',
                           url: 'edit-client',
                           data: new FormData($('#frmEditCostumer')[0]),
                           processData: false,
                           contentType: false
                       }).done(function (rest){
                           if (rest == 'ok') {
                               ListCostumers();
                               $('#result').addClass('row form-group text-center alert bg-success m-2');
                               $('#result').html('Se ha modificado correctamente el cliente');
                           } else {
                               $('#result').addClass('row form-group text-center alert alert-danger m-2');
                               $('#result').html(rest);
                           }
                       });
                    });
                </script>

            </div>
        </div>
    </div>
<?php } ?>
