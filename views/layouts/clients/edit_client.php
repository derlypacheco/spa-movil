<?php
session_start();
if ($_SESSION['client_v'] == '1') {
    include_once '../../../class/Config.php';
    $config = new Config();
    $sql = "
        update global_customers set 
        nombre = '".addslashes($_POST['fullname'])."',
        celular = '".addslashes($_POST['cell'])."',
        telefono = '".addslashes($_POST['phone'])."',
        correo = '".addslashes($_POST['email'])."',
        direccion = '".addslashes($_POST['address'])."',
        limite_credito = '".$_POST['limit']."' 
        where id_cliente = '".$_POST['id']."'
    ";
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