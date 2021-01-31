<?php
session_start();
if ($_SESSION['client_v'] == '1') {
    include_once  '../../../class/Config.php';
    $config = new Config();
    $listClients = $config->ListArray("select * from global_customers where activo = '1' ");
    ?>

    <div class="form-group my-3">
        <div class="row">
            <div class="col-8">
                <h2 class="text-white align-content-sm-center">
                    Listado de clientes
                </h2>
            </div>
            <div class="col">
                <input name="" class="form-control" placeholder="Buscar cliente">
            </div>
        </div>
    </div>

    <div class="form-group my-3">
        <div class="row">
            <div class="col">
                <?php if($_SESSION['client_c'] == '1'): ?>
                <button type="button" class="btn btn-principal" id="btn-add-costumer">
                    <i class="fa fa-user"></i> Nuevo cliente
                </button>
                <?php endif; ?>
            </div>
        </div>
    </div>

<!--    style="width: 210px;"-->

        <div class="mb-3   ">
            <table class="table bg-complement text-white table-responsive">
                <tbody>
                <?php
                if (count($listClients) == 0) { echo '
                    <div class="alert alert-info text-center fw-bold">Aun no cuenta con clientes registrados</div>
                '; }
                foreach ($listClients as $rows) { ?>
                <tr class="tr-bottom-4">
                    <td class="align-middle">
                        <span class="fw-bold"><?php echo $rows['nombre']; ?></span>  <br>
                        <small class="fw-lighter">Limite de credito: <?php echo $rows['limite_credito']; ?></small>
                    </td>
                    <td class="align-middle"><?php echo $rows['direccion']; ?></td>
                    <td class="align-middle"><?php echo $rows['celular']; ?></td>
                    <td class="align-middle" style="width: 210px;">
                        <div class="row">
                            <div class="col-6">
                                <div class="d-grid gap-2">
                                    <button class="btn btn-principal d-block" onclick="view_costumer('<?php echo $rows['id_cliente']; ?>')" id="btn-view-costumer-<?php echo $rows['id_cliente']; ?>">
                                        Ver
                                    </button>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-grid gap-2">
                                    <button class="btn d-block btn-danger" onclick="delete_costumer('<?php echo $rows['id_cliente']; ?>')" id="btn-delete-costumer-<?php echo $rows['id_cliente']; ?>">
                                        Eliminar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>

        <script>

            $('#btn-add-costumer').click(()=>{
                $('#btn-add-costumer').attr('disabled', true);
                $.ajax({
                    url: 'modal-add-client'
                }).done(function (result) {
                    $('#ModalGeneral').html('');
                    $('#btn-add-costumer').attr('disabled', false);
                    $('#ModalGeneral').html(result);
                    $('#modalAddCostumer').modal('show');
                });
            });

        </script>

<?php } ?>
