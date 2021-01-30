<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--    <meta http-equiv="Refresh" content=5>-->
    <title>Dashboard MX</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/theme.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css">

</head>

<body>



<div class="wrapper">
    <!-- Sidebar  -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <h3>Media Build</h3>
            <strong>MB</strong>
        </div>

        <ul class="list-unstyled components">
            <li class="active">
                <a href="#" >
                    <i class="fas fa-user"></i>
                    Usuarios
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fas fa-tasks"></i>
                    Task
                </a>
                <a href="#" >
                    <i class="fas fa-tools"></i>
                    Servicios
                </a>
            </li>
        </ul>

    </nav>

    <!-- Page Content  -->
    <div id="content">

        <nav class="navbar navbar-expand-lg navbar-light bg-principal">
            <div class="container-fluid">
                <button type="button" id="sidebarCollapse" class="btn btn-default">
                    <i class="fas text-white fa-align-left"></i>
                </button>
                <div class="dropdown">

                    <div class="circle">
                        <i class="fa fa-bell"></i>
                        <span class="fw-bold">+9</span>
                    </div>

                    <a href="" class="" data-toggle="dropdown" aria-expanded="false">
                        <img src="src/img/SPADESKTOP-01.png" class="thumbnail rounded-circle" width="40">
                        <span class="mx-2">Derly Ociel Pacheco Fabela</span>
                        <i class="fas fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu p-3 dropdown-right bg-complement">
                        <li class="p-2"><a href="#"> <i class="pe-2 fa fa-user"></i> Mis datos</a></li>
                        <li class="p-2"><a href="#"> <i class="pe-2 fa fa-cog"></i>Preferencias</a></li>
                        <hr>
                        <li class="p-2"><a href="#"> <i class="pe-2 fa fa-sign-out-alt"></i> Salir</a></li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="form-group my-3">
            <div class="row">
                <div class="col-8">
                    <h2 class="text-white align-content-sm-center">
                        T&iacute;tulo del contenido
                    </h2>
                </div>
                <div class="col">
                    <input name="" class="form-control" placeholder="Buscar">
                </div>
            </div>
        </div>

        <div class="form-group my-3">
            <div class="row">
                <div class="col">
                    <button type="button" class="btn btn-principal">
                        <i class="fa fa-plus"></i> Nuevo bot&oacute;n
                    </button>
                </div>
            </div>
        </div>

        <div class="mb-3  card">
            <div class="card-body">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </div>
        </div>

    </div>
</div>

<!-- jQuery CDN - Slim version (=without AJAX) -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<!-- Popper.JS -->
<script src="js/popper.min.js"></script>
<!-- Bootstrap JS -->
<script src="js/bootstrap.min.js"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
        });
    });
</script>


</body>

</html>