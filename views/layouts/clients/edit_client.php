<?php
session_start();
if ($_SESSION['client_v'] == '1') {
    include_once '../../../class/Config.php';
    $config = new Config();
    $sql = "";
    $query = $config->exe_query($sql);
    if ($query) {
        echo 'ok';
    } else {
        if ($_SESSION['Permiso'] == 'Developer') {
            echo $config->mysqli->error;
        } else {
            echo 'Tienes un error al modificar el cliente, contacta al administrador';
        }
    }
}