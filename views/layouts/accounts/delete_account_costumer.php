<?php
session_start();
if ($_SESSION['acc_d'] == '1') {
    include_once '../../../class/Config.php';
    $config = new Config();
    $sql = "update global_accounts set active_acc = '0' where id_account = '".$_GET['id']."'; ";
    $query = $config->exe_query($sql);
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
            <strong>Error</strong> al elimimnar el gasto, consulta con el administrador. 
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        ';
        }
    }
}