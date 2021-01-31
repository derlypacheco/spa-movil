<?php
session_start();
require_once 'Config.php';
$config = new Config();
$sqlLogin = "CALL sp_login_app('".addslashes($_POST['txtUser'])."', '".md5($_POST['txtPass'])."');";
$list = $config->ListArray($sqlLogin);
foreach ($list as $row){}
if (count($list) == 1)
{
    $_SESSION['fullname'] = $row['fullname_user'];
    $_SESSION['mail'] = $row['mail_user'];
    $_SESSION['pic_user'] = $row['picture_user'];
    $_SESSION['user'] = $row['user_user'];
    $_SESSION['Permiso'] = $row['name_perm'];

//    Permisos de usuarios
    $_SESSION['user_c'] = $row['user_c'];
    $_SESSION['user_e'] = $row['user_e'];
    $_SESSION['user_v'] = $row['user_v'];
    $_SESSION['user_d'] = $row['user_d'];

//    Permisos para Servicios
    $_SESSION['service_v'] = $row['service_v'];
    $_SESSION['service_c'] = $row['service_c'];
    $_SESSION['service_e'] = $row['service_e'];
    $_SESSION['service_d'] = $row['service_d'];

//    Permisos para Task del usuario
    $_SESSION['task_v'] = $row['task_v'];
    $_SESSION['task_e'] = $row['task_e'];
    $_SESSION['task_c'] = $row['task_c'];
    $_SESSION['task_d'] = $row['task_d'];

    //    Permisos para Task del usuario
    $_SESSION['client_v'] = $row['client_v'];
    $_SESSION['client_c'] = $row['client_c'];
    $_SESSION['client_e'] = $row['client_e'];
    $_SESSION['client_d'] = $row['client_d'];

    echo count($list);

}