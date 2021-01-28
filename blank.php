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

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <button type="button" id="sidebarCollapse" class="btn btn-default">
                    <i class="fas fa-align-left"></i>
                </button>
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
<script src="js/jquery-3.3.1.slim.min.js"></script>
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