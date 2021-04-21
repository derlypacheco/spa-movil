<?php
session_start();
if ($_SESSION['fullname'] != '') { header('location:home'); }
if (isset($_COOKIE['_dig']) != '')
{
    require_once 'class/Config.php';
    $config = new Config();
    $autologin = $config->auto_application($_COOKIE['_dig']);
    if ($autologin == '1') {
        header('location:home'); 
    }
}
?><!doctype html>
<html lang="es">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/theme.css">
    <title>Control de Pagos </title>
</head>
<body>
    <div class="container">
        <div class="position-fixed top-50 top-50 start-50 translate-middle">
            <div class="login-conter">
                <div class="bg-complement header-login">
                    Iniciar sesion
                </div>
                <div class="body-login">
                    <form method="post" id="frmLogin">
                        <div class="form-group">
                            <input type="text" name="txtUser" id="txtUser" value="<?php if(isset($_COOKIE["user"])) { echo $_COOKIE["user"]; } ?>" placeholder="USUARIO" autofocus required maxlength="45" class="form-control-login">
                        </div>
                        <div class="form-group">
                            <input type="password" name="txtPass" placeholder="CONTRASE&Ntilde;A" required class="form-control-login">
                        </div>
                        <button type="submit" id="idBtnLogin" class="btn btn-login">
                            Entrar
                        </button>
                    </form>
                </div>
                <div class="footer-login">
                    <a class="text-white" href="#">Aviso de privacidad</a>
                </div>
            </div>
        </div>
        <!-- jQuery CDN - Slim version (=without AJAX) -->
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script>
            $('#frmLogin').submit(function (e){
                e.preventDefault();
                $('#idBtnLogin').attr('disabled', true);
                $.ajax({
                    type: 'POST',
                    url: 'access-login',
                    data: new FormData($('#frmLogin')[0]),
                    processData: false,
                    contentType: false
                }).done(function(event) {
                    if (event == 1)
                    {
                        location.href = 'home';
                    } else {
                        $('#frmLogin')[0].reset();
                    }
                    $('#txtUser').focus();
                    $('#idBtnLogin').attr('disabled', false);
                });
            });
        </script>
    </div>
</body>
</html>