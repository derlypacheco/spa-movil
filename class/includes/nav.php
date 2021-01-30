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
                <span class="mx-2"><?php echo $_SESSION['fullname']; ?></span>
                <i class="fas fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu p-3 dropdown-right bg-complement">
                <li class="p-2"><a href="#"> <i class="pe-2 fa fa-user"></i> Mis datos</a></li>
                <li class="p-2"><a href="#"> <i class="pe-2 fa fa-cog"></i>Preferencias</a></li>
                <hr>
                <li class="p-2"><a href="#" id="LogOut"> <i class="pe-2 fa fa-sign-out-alt"></i> Salir</a></li>
            </ul>
        </div>
    </div>
</nav>