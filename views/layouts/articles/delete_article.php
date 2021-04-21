<?php
session_start();
if ($_SESSION['art_e'] == '1') {
    include_once '../../../class/Config.php';
    $config = new Config();
    $sql = "update global_article set active_art = '0' where id_art = '".$_POST['id']."' ";
    $query = $config->exe_query($sql);
    if ($query) {
        echo 'ok';
    } else {
        if ($_SESSION['Permiso'] == 'Developer') {
            echo $config->mysqli->error;
        } else {
            echo 'Error al eliminar el artículo consulte con el administrador';
        }
    }
}