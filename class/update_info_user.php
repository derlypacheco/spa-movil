<?php 
session_start();
if ($_SESSION['user'] != '') {
    include_once 'Config.php';
    $config = new Config();
    $pass = '';
    if ($_POST['newp'] != '') {
        $pass = ", password_user = '".sha1(md5($_POST['newp']))."' ";
    }
    $sql = "
        update global_users set 
        fullname_user = '".addslashes($_POST['nameuser'])."',
        mail_user = '".$_POST['correo']."',
        cellphone_user = '".$_POST['cell']."' 
        $pass
        where user_user = '".$_SESSION['user']."';
    ";
    $query = $config->exe_query($sql);
    if ($query) {
        echo '
        <div class="alert alert-success alert-dismissible fade show" role="alert">
             Informaci&oacute;n actualizada correctamente.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        ';
    } else {
        if ($_SESSION['Permiso'] == 'Developer') {
            echo '
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strog>Error:</strong> '.$config->mysqli->error.'
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            ';
        } else {
            echo '
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strog>Error:</strong> al actualizar la informaci&oacute;n del usuario.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            ';
        }
    }
}
?>