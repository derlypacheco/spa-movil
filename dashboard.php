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
                    <a href="" class="" data-toggle="dropdown" aria-expanded="false">
                        <img src="src/img/SPADESKTOP-01.png" class="thumbnail rounded-circle" width="40">
                        <span class="my-1">Derly Ociel Pacheco Fabela</span>
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
                        Listado de usuarios
                    </h2>
                </div>
                <div class="col">
                    <input name="" class="form-control" placeholder="Buscar usuario">
                </div>
            </div>
        </div>

        <div class="form-group my-3">
            <div class="row">
                <div class="col">
                    <button type="button" class="btn btn-principal">
                        <i class="fa fa-user"></i> Nuevo usuario
                    </button>
                    <button type="button" class="btn btn-actions">
                        <i class="fa fa-"></i> Departamentos
                    </button>
                </div>
            </div>
        </div>

        <div class="mb-3   ">
            <table class="table bg-complement text-white table-responsive">
                <tbody>
                <tr class="tr-bottom-4">
                    <td style="width:5px; background-color: #eb6557">
                    </td>
                    <td align="center" style="width: 65px;" class="align-middle">
                        <img src="src/img/SPADESKTOP-01.png" class="rounded-circle thumbnail" height="55" width="55" alt="">
                    </td>
                    <td class="align-middle">
                        <span class="fw-bold">Derly Ociel Pacheco Fabela</span>  <br>
                        <small class="fw-lighter">R&D - Programador</small>
                    </td>
                    <td class="align-middle">d.pacheco@kufferath-us.com </td>
                    <td class="align-middle" style="width: 210px;">Administrador de Ventas</td>
                </tr>

                <tr class="tr-bottom-4">
                    <td style="width:5px; background-color: #eb6557">
                    </td>
                    <td align="center" style="width: 65px;" class="align-middle">
                        <img src="src/img/SPADESKTOP-01.png" class="rounded-circle thumbnail" height="55" width="55" alt="">
                    </td>
                    <td class="align-middle">
                        <span class="fw-bold">Derly Ociel Pacheco Fabela</span>  <br>
                        <small>R&D - Programador</small>
                    </td>
                    <td class="align-middle">d.pacheco@kufferath-us.com </td>
                    <td class="align-middle" style="width: 210px;">Administrador de Ventas</td>
                </tr>

                <tr class="tr-bottom-4">
                    <td style="width:5px; background-color: #eb6557">
                    </td>
                    <td align="center" style="width: 65px;" class="align-middle">
                        <img src="src/img/SPADESKTOP-01.png" class="rounded-circle thumbnail" height="55" width="55" alt="">
                    </td>
                    <td class="align-middle">
                        <span class="fw-bold">Derly Ociel Pacheco Fabela</span>  <br>
                        <small>R&D - Programador</small>
                    </td>
                    <td class="align-middle">d.pacheco@kufferath-us.com </td>
                    <td class="align-middle" style="width: 210px;">Administrador de Ventas</td>
                </tr>

                <tr class="tr-bottom-4">
                    <td style="width:5px; background-color: #eb6557">
                    </td>
                    <td align="center" style="width: 65px;" class="align-middle">
                        <img src="src/img/SPADESKTOP-01.png" class="rounded-circle thumbnail" height="55" width="55" alt="">
                    </td>
                    <td class="align-middle">
                        <span class="fw-bold">Derly Ociel Pacheco Fabela</span>  <br>
                        <small>R&D - Programador</small>
                    </td>
                    <td class="align-middle">d.pacheco@kufferath-us.com </td>
                    <td class="align-middle" style="width: 210px;">Administrador de Ventas</td>
                </tr>

                </tbody>
            </table>
        </div>


        <div class="form-group my-3">
            <div class="row">
                <div class="col-8">
                    <h2 class="text-white align-content-sm-center">
                        Listado de tareas
                    </h2>
                </div>
                <div class="col">
                    <input name="" class="form-control" placeholder="Buscar tarea">
                </div>
            </div>
        </div>


        <div class="mb-3   ">
            <table class="table bg-complement text-white table-responsive">
                <tbody>
                <tr class="tr-bottom-4">
                    <td style="width:5px; background-color: #37c5ab">
                    </td>
                    <td class="align-middle">
                        <span class="fw-bold">Actualizaciones de diciembre</span>  <br>
                        <small class="fw-lighter">Derly Ociel Pacheco Fabela</small>
                    </td>
                    <td class="align-middle" style="width: 180px;">
                        <div class="row d-grid gap-2">
                            <button class="btn p-1 d-md-block btn-principal"> Activa </button>
                        </div>
                        <div>
                            <div class="row">
                                <span class="col-6 p-1 text-start"><i class="fas fa-check-square"></i> 4/12</span>
                                <span class="col-6 p-1 text-end"><i class="fas fa-paperclip"></i> 5</span>
                            </div>
                        </div>
                    </td>
                    <td class="align-middle pe-4">
                        <div class="clearfix">
                            <div class="circle-user">+3</div>
                            <img src="https://images.generated.photos/3tQ6Nv-_MuhLX0hAt7jNe63_4KFBCqcaHkXstcQwu6c/rs:fit:256:256/Z3M6Ly9nZW5lcmF0/ZWQtcGhvdG9zL3Yz/XzAyMjM2MzMuanBn.jpg" class="thumbnail rounded-circle user-group" height="45" width="45" alt="">
                            <img src="https://images.generated.photos/2t6xEuDj_DH2NLLItw9uF3wWkWwaoxYw6VdFL3KZNxc/rs:fit:256:256/Z3M6Ly9nZW5lcmF0/ZWQtcGhvdG9zL3Yz/XzAzMzc5ODguanBn.jpg" class="thumbnail rounded-circle user-group" height="45" width="45" alt="">
                            <img src="https://images.generated.photos/PbwhiOdRoy7YwBDGItg1nQCc5YdfKHLYf0lzqX-mF0s/rs:fit:256:256/Z3M6Ly9nZW5lcmF0/ZWQtcGhvdG9zL3Yz/XzAyMjA2MDguanBn.jpg" class="thumbnail rounded-circle user-group" height="45" width="45" alt="">
                            <img src="https://images.generated.photos/F6e1lHJCxNn_NEVj2E1GbI9N_1t39AoP1PrkYVjPe3E/rs:fit:256:256/Z3M6Ly9nZW5lcmF0/ZWQtcGhvdG9zL3Yz/XzA0OTUwNjkuanBn.jpg" class="thumbnail rounded-circle user-group" height="45" width="45" alt="">
                            <img src="https://images.generated.photos/_3KAA0ZBKNZp72syYjcpEmiHJHtZJV9C5ZJB4XTpfNU/rs:fit:256:256/Z3M6Ly9nZW5lcmF0/ZWQtcGhvdG9zL3Yz/XzA0MzYxMTQuanBn.jpg" class="thumbnail rounded-circle user-group" height="45" width="45" alt="">
                            <img src="src/img/SPADESKTOP-01.png" class="thumbnail rounded-circle user-group" height="45" width="45" alt="">
                        </div>
                    </td>
                </tr>

                <tr class="tr-bottom-4">
                    <td style="width:5px; background-color: #37c5ab">
                    </td>
                    <td class="align-middle">
                        <span class="fw-bold">Actualizaciones de diciembre</span>  <br>
                        <small class="fw-lighter">Derly Ociel Pacheco Fabela</small>
                    </td>
                    <td class="align-middle" style="width: 180px;">
                        <div class="row d-grid gap-2">
                            <button class="btn p-1 d-md-block btn-principal"> Activa </button>
                        </div>
                        <div>
                            <div class="row">
                                <span class="col-6 p-1 text-start"><i class="fas fa-check-square"></i> 4/12</span>
                                <span class="col-6 p-1 text-end"><i class="fas fa-paperclip"></i> 5</span>
                            </div>
                        </div>
                    </td>
                    <td class="align-middle pe-4">
                        <div class="clearfix">
                            <div class="circle-user">+3</div>
                            <img src="https://images.generated.photos/3tQ6Nv-_MuhLX0hAt7jNe63_4KFBCqcaHkXstcQwu6c/rs:fit:256:256/Z3M6Ly9nZW5lcmF0/ZWQtcGhvdG9zL3Yz/XzAyMjM2MzMuanBn.jpg" class="thumbnail rounded-circle user-group" height="45" width="45" alt="">
                            <img src="https://images.generated.photos/2t6xEuDj_DH2NLLItw9uF3wWkWwaoxYw6VdFL3KZNxc/rs:fit:256:256/Z3M6Ly9nZW5lcmF0/ZWQtcGhvdG9zL3Yz/XzAzMzc5ODguanBn.jpg" class="thumbnail rounded-circle user-group" height="45" width="45" alt="">
                            <img src="https://images.generated.photos/PbwhiOdRoy7YwBDGItg1nQCc5YdfKHLYf0lzqX-mF0s/rs:fit:256:256/Z3M6Ly9nZW5lcmF0/ZWQtcGhvdG9zL3Yz/XzAyMjA2MDguanBn.jpg" class="thumbnail rounded-circle user-group" height="45" width="45" alt="">
                            <img src="https://images.generated.photos/F6e1lHJCxNn_NEVj2E1GbI9N_1t39AoP1PrkYVjPe3E/rs:fit:256:256/Z3M6Ly9nZW5lcmF0/ZWQtcGhvdG9zL3Yz/XzA0OTUwNjkuanBn.jpg" class="thumbnail rounded-circle user-group" height="45" width="45" alt="">
                            <img src="https://images.generated.photos/_3KAA0ZBKNZp72syYjcpEmiHJHtZJV9C5ZJB4XTpfNU/rs:fit:256:256/Z3M6Ly9nZW5lcmF0/ZWQtcGhvdG9zL3Yz/XzA0MzYxMTQuanBn.jpg" class="thumbnail rounded-circle user-group" height="45" width="45" alt="">
                            <img src="src/img/SPADESKTOP-01.png" class="thumbnail rounded-circle user-group" height="45" width="45" alt="">
                        </div>
                    </td>
                </tr>

                <tr class="tr-bottom-4">
                    <td style="width:5px; background-color: #37c5ab">
                    </td>
                    <td class="align-middle">
                        <span class="fw-bold">Actualizaciones de diciembre</span>  <br>
                        <small class="fw-lighter">Derly Ociel Pacheco Fabela</small>
                    </td>
                    <td class="align-middle" style="width: 180px;">
                        <div class="row d-grid gap-2">
                            <button class="btn p-1 d-md-block btn-principal"> Activa </button>
                        </div>
                        <div>
                            <div class="row">
                                <span class="col-6 p-1 text-start"><i class="fas fa-check-square"></i> 4/12</span>
                                <span class="col-6 p-1 text-end"><i class="fas fa-paperclip"></i> 5</span>
                            </div>
                        </div>
                    </td>
                    <td class="align-middle pe-4">
                        <div class="clearfix">
                            <img src="https://images.generated.photos/3tQ6Nv-_MuhLX0hAt7jNe63_4KFBCqcaHkXstcQwu6c/rs:fit:256:256/Z3M6Ly9nZW5lcmF0/ZWQtcGhvdG9zL3Yz/XzAyMjM2MzMuanBn.jpg" class="thumbnail rounded-circle user-group" height="45" width="45" alt="">
                            <img src="https://images.generated.photos/_3KAA0ZBKNZp72syYjcpEmiHJHtZJV9C5ZJB4XTpfNU/rs:fit:256:256/Z3M6Ly9nZW5lcmF0/ZWQtcGhvdG9zL3Yz/XzA0MzYxMTQuanBn.jpg" class="thumbnail rounded-circle user-group" height="45" width="45" alt="">
                            <img src="src/img/SPADESKTOP-01.png" class="thumbnail rounded-circle user-group" height="45" width="45" alt="">
                        </div>
                    </td>
                </tr>

                <tr class="tr-bottom-4">
                    <td style="width:5px; background-color: #37c5ab">
                    </td>
                    <td class="align-middle">
                        <span class="fw-bold">Actualizaciones de diciembre</span>  <br>
                        <small class="fw-lighter">Derly Ociel Pacheco Fabela</small>
                    </td>
                    <td class="align-middle" style="width: 180px;">
                        <div class="row d-grid gap-2">
                            <button class="btn p-1 d-md-block btn-principal"> Activa </button>
                        </div>
                        <div>
                            <div class="row">
                                <span class="col-6 p-1 text-start"><i class="fas fa-check-square"></i> 4/12</span>
                                <span class="col-6 p-1 text-end"><i class="fas fa-paperclip"></i> 5</span>
                            </div>
                        </div>
                    </td>
                    <td class="align-middle pe-4">
                        <div class="clearfix">
                            <img src="https://images.generated.photos/3tQ6Nv-_MuhLX0hAt7jNe63_4KFBCqcaHkXstcQwu6c/rs:fit:256:256/Z3M6Ly9nZW5lcmF0/ZWQtcGhvdG9zL3Yz/XzAyMjM2MzMuanBn.jpg" class="thumbnail rounded-circle user-group" height="45" width="45" alt="">
                            <img src="https://images.generated.photos/2t6xEuDj_DH2NLLItw9uF3wWkWwaoxYw6VdFL3KZNxc/rs:fit:256:256/Z3M6Ly9nZW5lcmF0/ZWQtcGhvdG9zL3Yz/XzAzMzc5ODguanBn.jpg" class="thumbnail rounded-circle user-group" height="45" width="45" alt="">
                            <img src="https://images.generated.photos/F6e1lHJCxNn_NEVj2E1GbI9N_1t39AoP1PrkYVjPe3E/rs:fit:256:256/Z3M6Ly9nZW5lcmF0/ZWQtcGhvdG9zL3Yz/XzA0OTUwNjkuanBn.jpg" class="thumbnail rounded-circle user-group" height="45" width="45" alt="">
                            <img src="https://images.generated.photos/_3KAA0ZBKNZp72syYjcpEmiHJHtZJV9C5ZJB4XTpfNU/rs:fit:256:256/Z3M6Ly9nZW5lcmF0/ZWQtcGhvdG9zL3Yz/XzA0MzYxMTQuanBn.jpg" class="thumbnail rounded-circle user-group" height="45" width="45" alt="">
                        </div>
                    </td>
                </tr>

                </tbody>
            </table>
        </div>



        <div class="form-group my-3">
            <div class="row">
                <div class="col-8">
                    <h2 class="text-white align-content-sm-center">
                        Servicios t&eacute;cnicos
                    </h2>
                </div>
                <div class="col">
                    <input name="" class="form-control" placeholder="Buscar servicio">
                </div>
            </div>
        </div>


        <div class="mb-3   ">
            <table class="table bg-complement text-white table-responsive">
                <tbody>
                <tr class="tr-bottom-4">
                    <td style="width:5px; background-color: #37c5ab">
                    </td>
                    <td class="align-middle">
                        <span class="">SML-15RTE4</span>  <br>
                        <small class="fw-lighter">1 enero 2021</small>
                    </td>
                    <td class="align-middle">
                        <span class="">Derly Ociel Pacheco Fabela</span>  <br>
                        <small class="fw-lighter">DPO10101</small>
                    </td>
                    <td class="align-middle">
                        <span class="">Instalaci&oacute;n y programaci&oacute;n de m&oacute;dulos nuevos</span>  <br>
                        <small class="fw-lighter">HA-A-0101</small>
                    </td>
                    <td class="align-middle" style="width: 180px;">
                        <div class=" d-grid gap-2">
                            <button class="btn p-1 d-md-block btn-actions"> Ver servicio </button>
                        </div>
                    </td>
                </tr>

                <tr class="tr-bottom-4">
                    <td style="width:5px; background-color: #37c5ab">
                    </td>
                    <td class="align-middle">
                        <span class="">SML-15RTE4</span>  <br>
                        <small class="fw-lighter">1 enero 2021</small>
                    </td>
                    <td class="align-middle">
                        <span class="">Derly Ociel Pacheco Fabela</span>  <br>
                        <small class="fw-lighter">DPO10101</small>
                    </td>
                    <td class="align-middle">
                        <span class="">Instalaci&oacute;n y programaci&oacute;n de m&oacute;dulos nuevos</span>  <br>
                        <small class="fw-lighter">HA-A-0101</small>
                    </td>
                    <td class="align-middle" style="width: 180px;">
                        <div class=" d-grid gap-2">
                            <button class="btn p-1 d-md-block btn-actions"> Ver servicio </button>
                        </div>
                    </td>
                </tr>

                <tr class="tr-bottom-4">
                    <td style="width:5px; background-color: #37c5ab">
                    </td>
                    <td class="align-middle">
                        <span class="">SML-15RTE4</span>  <br>
                        <small class="fw-lighter">1 enero 2021</small>
                    </td>
                    <td class="align-middle">
                        <span class="">Derly Ociel Pacheco Fabela</span>  <br>
                        <small class="fw-lighter">DPO10101</small>
                    </td>
                    <td class="align-middle">
                        <span class="">Instalaci&oacute;n y programaci&oacute;n de m&oacute;dulos nuevos</span>  <br>
                        <small class="fw-lighter">HA-A-0101</small>
                    </td>
                    <td class="align-middle" style="width: 180px;">
                        <div class=" d-grid gap-2">
                            <button class="btn p-1 d-md-block btn-warning"> Ver servicio </button>
                        </div>
                    </td>
                </tr>

                <tr class="tr-bottom-4">
                    <td style="width:5px; background-color: #37c5ab">
                    </td>
                    <td class="align-middle">
                        <span class="">SML-15RTE4</span>  <br>
                        <small class="fw-lighter">1 enero 2021</small>
                    </td>
                    <td class="align-middle">
                        <span class="">Derly Ociel Pacheco Fabela</span>  <br>
                        <small class="fw-lighter">DPO10101</small>
                    </td>
                    <td class="align-middle">
                        <span class="">Instalaci&oacute;n y programaci&oacute;n de m&oacute;dulos nuevos</span>  <br>
                        <small class="fw-lighter">HA-A-0101</small>
                    </td>
                    <td class="align-middle" style="width: 180px;">
                        <div class=" d-grid gap-2">
                            <button class="btn p-1 d-md-block btn-warning"> Ver servicio </button>
                        </div>
                    </td>
                </tr>

                <tr class="tr-bottom-4">
                    <td style="width:5px; background-color: #37c5ab">
                    </td>
                    <td class="align-middle">
                        <span class="">SML-15RTE4</span>  <br>
                        <small class="fw-lighter">1 enero 2021</small>
                    </td>
                    <td class="align-middle">
                        <span class="">Derly Ociel Pacheco Fabela</span>  <br>
                        <small class="fw-lighter">DPO10101</small>
                    </td>
                    <td class="align-middle">
                        <span class="">Instalaci&oacute;n y programaci&oacute;n de m&oacute;dulos nuevos</span>  <br>
                        <small class="fw-lighter">HA-A-0101</small>
                    </td>
                    <td class="align-middle" style="width: 180px;">
                        <div class=" d-grid gap-2">
                            <button class="btn p-1 d-md-block btn-principal"> Ver servicio </button>
                        </div>
                    </td>
                </tr>

                <tr class="tr-bottom-4">
                    <td style="width:5px; background-color: #37c5ab">
                    </td>
                    <td class="align-middle">
                        <span class="">SML-15RTE4</span>  <br>
                        <small class="fw-lighter">1 enero 2021</small>
                    </td>
                    <td class="align-middle">
                        <span class="">Derly Ociel Pacheco Fabela</span>  <br>
                        <small class="fw-lighter">DPO10101</small>
                    </td>
                    <td class="align-middle">
                        <span class="">Instalaci&oacute;n y programaci&oacute;n de m&oacute;dulos nuevos</span>  <br>
                        <small class="fw-lighter">HA-A-0101</small>
                    </td>
                    <td class="align-middle" style="width: 180px;">
                        <div class=" d-grid gap-2">
                            <button class="btn p-1 d-md-block btn-warning"> Ver servicio </button>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
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