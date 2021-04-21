<?php
session_start();
if ($_SESSION['acc_c'] == '1') {
    include_once '../../../class/Config.php';
    $config = new Config();
    $date = date('Y-m-d');
    // Obtener el name_art de la base de datos
    $nameItem = $config->get_name_item($_POST['item']);
    // Total a pagar
    $total = $_POST['cant'] * $_POST['costo'];
    // Si hay abono
    if (isset($_POST['abono']) != '') {
        $text = "Abono inicial de: ".$nameItem;
        $sqlabono = "insert into global_payment (
            date_pay,
            costumer_pay,
            user_pay,
            cant_pay,
            desc_pay                
            ) values (
          '".$date."',
          '".$_POST['id']."',
          '".$_SESSION['user']."',
          '".$_POST['abono']."',
          '".addslashes($text)."'
            )";
        $queryabono = $config->exe_query($sqlabono);
        if (!$queryabono) {
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
            <strong>Error</strong> por algun motivo no se realizo el abono inical de la cuenta.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        ';
            }
        }
    }
    $sql = "insert into global_accounts 
    (
    date_acc,
    iduser_acc,
    item_acc,
    cant_acc,
    costo_acc,
    total_acc,
    desc_acc,
    user_reg
    ) values (
     '".$date."',
     '".$_POST['id']."',
     '".addslashes($nameItem)."',
     '".$_POST['cant']."',
     '".$_POST['costo']."',
     '".$total."',
     '".addslashes($_POST['desc_ot'])."',
     '".$_SESSION['user']."'
    );
";
    $query = $config->exe_query($sql);
    if ($query) {
        echo 'ok';
    } else {
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
            <strong>Error</strong> hay un error al cargar la cuenta al cliente, consulte al administrador para solucionar este problema. 
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        ';
        }
    }
}