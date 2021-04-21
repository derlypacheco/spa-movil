<?php
session_start();
if ($_SESSION['acc_c'] == '1') {
    include_once '../../../class/Config.php';
    $config = new Config();
    $date = date('Y-m-d');
    $sql = "insert into global_payment (
date_pay,
costumer_pay,
user_pay,
cant_pay,
desc_pay                
) values (
          '".$date."',
          '".$_POST['id']."',
          '".$_SESSION['user']."',
          '".$_POST['cant']."',
          '".addslashes($_POST['descr'])."'
)";
    $query = $config->exe_query($sql);
    if ($query) {
        echo 'ok';
    } else {
        if ($_SESSION['Permiso'] == 'Developer') {
            echo  $config->mysqli->error;
        } else {
            echo 'Hay un error al cargar el abono al cliente';
        }
    }
}