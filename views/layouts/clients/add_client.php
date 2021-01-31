<?php
session_start();
if ($_SESSION['client_c'] == '1') {
    include_once '../../../class/Config.php';
    $config = new Config();
    $sql = "
        insert into global_customers 
        (
        nombre,
        celular,
        telefono,
        correo,
        direccion,
        limite_credito,
        id_company
        ) 
        values 
        (
         '".addslashes($_POST['fullname'])."',
         '".addslashes($_POST['cell'])."',
         '".addslashes($_POST['phone'])."',
         '".addslashes($_POST['email'])."',
         '".$_POST['address']."',
         '".$_POST['limit']."',
         '1'
        );
    ";
    $query = $config->exe_query($sql);
    if ($query) {
        echo 'ok';
    } else {
        if ($_SESSION['Permiso'] == 'Developer') {
            echo $config->mysqli->error;
        } else {
            echo 'Hay un error al almacenar el cliente, consulte con el administrador';
        }
    }
}