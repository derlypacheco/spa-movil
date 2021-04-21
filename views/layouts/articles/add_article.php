<?php
session_start();
if ($_SESSION['art_c'] == '1') {
    include_once '../../../class/Config.php';
    $config = new Config();
    $ruta_img = 'src/img/no-image.jpg';
    if (isset($_FILES['picture']['tmp_name'])) {
        $name = $_FILES['picture']['name'];
        $rand = $config->get_rand(6);
        $ruta_img = "src/img/".date('Y')."/".date('m')."/".$rand."-".$name;
        if (move_uploaded_file($_FILES['picture']['tmp_name'], '../../../'.$ruta_img)){
        }
    }

    $sql = "insert into  global_article 
    (
        name_art,
        id_mark,
        buycost_art,
        cashcost_art,
        creditcost_art,
        cant_art,
        desc_art,
        company_art,
        picture_art
    ) 
    values 
    (
         '".addslashes($_POST['article'])."',
         '".$_POST['marca']."',
         '".$_POST['costo']."',
         '".$_POST['costo_cash']."',
         '".$_POST['costo_credit']."',
         '".$_POST['cant']."',
         '".addslashes($_POST['des_art'])."',
         '".$_SESSION['company']."',
         '".$ruta_img."'
)";
    $query = $config->exe_query($sql);
    if ($query) {
        echo 'ok';
    } else {
        if ($_SESSION['Permiso'] == 'Developer') {
            echo $config->mysqli->error;
        } else {
            echo 'Error al almacenar este registro consulte su conexi&oacute;n a internet, \n si el error permanece consulte al administrador';
        }
    }
}
