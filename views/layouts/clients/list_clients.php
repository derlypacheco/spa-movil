<?php
session_start();
if ($_SESSION['client_v'] == '1') {
    include_once  '../../../class/Config.php';
    $config = new Config();
    $filtro = " where activo = '1' and id_company = '".$_SESSION['company']."' ";
    if ($_POST['busq'] != '') {
        $filtro = " where activo = '1' and id_company = '".$_SESSION['company']."' ";
        $filtro .= " and like ( nombre like '%".addslashes($_POST['busq'])."%' ) ";
        $filtro .= " or celular like '%".addslashes($_POST['busq'])."%' ";
        $filtro .= " or direccion like '%".addslashes($_POST['busq'])."%' ";
    }
    $listClients = $config->ListArray("select * from global_customers $filtro ");
    ?>

    <div class="form-group my-3">
        <div class="row">
            <div class="col-8">
                <h2 class="text-white align-content-sm-center">
                    Listado de clientes
                </h2>
            </div>
            <div class="col">
                <input id="box-costumer" class="form-control" placeholder="Buscar cliente">
            </div>
        </div>
    </div>


    <div class="form-group my-3">
        <div class="row">
            <div class="col">
                <?php if($_SESSION['client_c'] == '1'): ?>
                <button type="button" class="btn btn-principal" id="btn-add-costumer">
                    Nuevo cliente
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
                            <div class="col-4">
                                <div class=" d-grid gap-2">
                                    <?php if ($_SESSION['acc_v'] == '1') : ?>
                                    <button class="btn d-block btn-warning" onclick="account('<?php echo $rows['id_cliente']; ?>')" id="btn-account-<?php echo $rows['id_cliente']; ?>">
                                        <i class="fa fa-file-invoice"></i>
                                    </button>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="d-grid gap-2">
                                    <button class="btn btn-principal d-block" onclick="view_costumer('<?php echo $rows['id_cliente']; ?>')" id="btn-view-costumer-<?php echo $rows['id_cliente']; ?>">
                                        <i class="fa fa-user-edit"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="d-grid gap-2">
                                    <button class="btn d-block btn-danger" onclick="delete_costumer('<?php echo $rows['id_cliente']; ?>')" id="btn-delete-costumer-<?php echo $rows['id_cliente']; ?>">
                                        <i class="fa fa-times-circle"></i>
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
