<nav class="navbar navbar-expand-lg navbar-toggleable-md bg-dark navbar-dark sticky-top">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="/admin">
        <img src="/public/img/logo_sin_fondo_small.png" alt="">
    </a>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <div class="container-fluid ">
            <ul class="navbar-nav d-none d-md-flex">
                <li class="nav-item dropdown d-flex ml-auto mr-auto mr-md-0">
                    <a class="nav-link dropdown-toggle text-white" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="fa fa-user fa-fw mr-3"></span>
                        Administrador
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item text-center" href="/admin/logout">Cerrar Sesión</a>
                    </div>
                </li>
            </ul>

            <ul class="navbar-nav d-flex d-md-none">
                <li class="nav-item dropdown d-flex ml-auto mr-auto mr-md-0">
                    <a class="nav-link dropdown-toggle text-white" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="fa fa-user fa-fw mr-3"></span>
                        Administrador
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item text-center" href="/admin/logout">Cerrar Sesión</a>
                    </div>
                </li>

                <li class="nav-item d-flex ml-auto mr-auto">
                    <a href="/admin/products" class="nav-link text-white">
                        Productos
                    </a>
                </li>

                <li class="nav-item d-flex ml-auto mr-auto">
                    <a href="/admin/clients/1" class="nav-link">
                        Clientes
                    </a>
                </li>

                <li class="nav-item d-flex ml-auto mr-auto">
                    <a href="/admin/orders/1" class="nav-link ">
                        Pedidos
                    </a>
                </li>
                <li class="nav-item d-flex ml-auto mr-auto">
                    <a href="/admin/reports" class="nav-link ">
                        Reportes
                    </a>
                </li>

            </ul>

        </div>
    </div>
</nav>