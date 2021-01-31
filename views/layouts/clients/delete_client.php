<?php
session_start();
if ($_SESSION['client_d'] == '1') {
    include_once  '../../../class/Config.php';
    $config = new Config();
    $query = $config->exe_query("update global_customers set activo = '0' where id_cliente = '".$_GET['id']."' ");
    if ($query) {
        echo 'ok';
    } else {
        if ($_SESSION['Permiso'] == 'Developer') {
            echo $config->mysqli->error;
        } else {
            echo 'Ha pasado un error al eliminar el cliente, contacte con el administrador.';
        }
    }
}
