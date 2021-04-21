<?php
session_start();
if ($_SESSION['art_e'] == '1') {
    include_once '../../../class/Config.php';
    $config = new Config();
    $ruta_img = 'src/img/no-image.jpg';
    $picture = '';
    if (isset($_FILES['picture']['tmp_name'])) {
        $name = $_FILES['picture']['name'];
        $rand = $config->get_rand(6);
        $ruta_img = "src/img/" . date('Y') . "/" . date('m') . "/" . $rand . "-" . $name;
        if (move_uploaded_file($_FILES['picture']['tmp_name'], '../../../' . $ruta_img)) {
            $picture = " picture_art = '".$ruta_img."', ";
        }
    }
    $sql = "
        update global_article set 
            name_art = '".addslashes($_POST['article'])."',
            id_mark = '".$_POST['marca']."',
            buycost_art = '".$_POST['costo']."',
            cashcost_art = '".$_POST['costo_cash']."',
            creditcost_art = '".$_POST['costo_credit']."',
            $picture  
            cant_art = '".$_POST['cant']."',
            desc_art = '".addslashes($_POST['des_art'])."'
            where id_art = '".$_POST['id']."'
    ";

    $query = $config->exe_query($sql);
    if ($query) {
        echo 'ok';
    } else {
        if ($_SESSION['Permiso'] == 'Developer') {
            echo $config->mysqli->error;
        } else {
            echo 'Error al editar este registro consulte su conexi&oacute;n a internet, \n si el error permanece consulte al administrador';
        }
    }
}