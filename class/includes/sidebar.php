<div class="sidebar-header">
    <h3>Fragancy</h3>
    <strong>F</strong>
</div>

<ul class="list-unstyled components">

    <?php if($_SESSION['user_v'] == '10') : ?>
    <li class="">
        <a href="#" >
            <i class="fas fa-user"></i>
            Usuarios
        </a>
    </li>
    <?php endif; ?>

    <?php if($_SESSION['client_v'] == '1') : ?>
    <li class="">
        <a href="#" id="btn-clients">
            <i class="fa fa-users"></i>
            Clientes
        </a>
    </li>
    <?php endif; ?>

    <?php if($_SESSION['art_v'] == '1') : ?>
        <li class="">
            <a href="#" id="btn-atricles">
                <i class="fa fa-shopping-cart"></i>
                Art&iacute;culos
            </a>
        </li>
    <?php endif; ?>

    <?php if($_SESSION['task_v'] == '18') : ?>
    <li>
        <a href="#">
            <i class="fas fa-tasks"></i>
            Task
        </a>
    </li>
    <?php endif; ?>

    <?php if($_SESSION['service_v'] == '18') : ?>
    <li>
        <a href="#" >
            <i class="fas fa-tools"></i>
            Servicios
        </a>
    </li>
    <?php endif; ?>
</ul>
