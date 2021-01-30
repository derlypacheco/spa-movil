<?php
session_start();
if (isset($_SESSION['fullname']) != '') { header('location:home'); }
?><!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/theme.css">

    <title>Kufferath M&eacute;xico S.A. de C.V.</title>
</head>
<body>

    <div class="container ">

        <div class="position-absolute top-50 start-50 translate-middle">
            <div class="login-conter">
                <div class="bg-complement header-login">
                    Iniciar sesion
                </div>
                <div class="body-login">
                    <form method="post" id="frmLogin">
                        <div class="form-group">
                            <input type="text" name="txtUser" placeholder="USUARIO" autofocus required maxlength="45" class="form-control-login">
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
                    }
                    $('#idBtnLogin').attr('disabled', false);
                });
            });
        </script>

    </div>

</body>
</html>