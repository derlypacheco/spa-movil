<?php
session_start();
if ($_SESSION['acc_d'] == '1') {
    include_once '../../../class/Config.php';
    $config = new Config();
    $ID = $_GET['id'];
    $query = $config->exe_query("update global_payment set active_pay = '0' where id_pay = '".$ID."';");
    if (!$query) {
        if ($_SESSION['Permiso'] == 'Developer') {
            echo '
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error</strong> '.$config->mysqli->error.'
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        ';
        } else {
            echo '
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error</strong> se ha generado un error al eliminar este pago, consulta con tu administrador
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        ';
        }
    }
}