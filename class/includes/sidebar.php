<div class="sidebar-header">
    <h3>Media Build</h3>
    <strong>MB</strong>
</div>

<ul class="list-unstyled components">

    <?php if($_SESSION['user_v'] == '1') : ?>
    <li class="active">
        <a href="#" >
            <i class="fas fa-user"></i>
            Usuarios
        </a>
    </li>
    <?php endif; ?>

    <?php if($_SESSION['task_v'] == '1') : ?>
    <li>
        <a href="#">
            <i class="fas fa-tasks"></i>
            Task
        </a>
    </li>
    <?php endif; ?>

    <?php if($_SESSION['service_v'] == '1') : ?>
    <li>
        <a href="#" >
            <i class="fas fa-tools"></i>
            Servicios
        </a>
    </li>
    <?php endif; ?>
</ul>