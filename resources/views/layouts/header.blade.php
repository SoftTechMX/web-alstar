<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

        <a href="{{ route('index') }}" class="logo d-flex align-items-center">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="assets/img/logo.png" alt=""> -->
            <h1 class="sitename">Alstar</h1>
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li>
                    <a href="{{ route('landing') }}#hero" class="active">Inicio</a>
                </li>
                <li>
                    <a href="{{ route('landing') }}#about">Acerca de</a>
                </li>
                <li>
                    <a href="{{ route('landing') }}#services">Servicios</a>
                </li>
                <li>
                    <a href="{{ route('landing') }}#portfolio">Catalogo</a>
                </li>
                <li>
                    <a href="{{ route('landing') }}#team">Equipo</a>
                </li>

                <li class="dropdown">
                    <a href="#">
                        <span>Cuentas</span> <i class="bi bi-chevron-down toggle-dropdown"></i>
                    </a>
                    <ul>
                        @guest
                        <li>
                            <a href="{{ route('login') }}">Iniciar Sesión</a>
                        </li>
                        <li>
                            <a href="{{ route('register') }}">Registro</a>
                        </li>
                        @endguest

                        @auth
                        <li>
                            <a href="{{ route('logout') }}">Mi Cuenta</a>
                        </li>
                        <li>
                            <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                {{ __('Cerrar Sesión') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                        <li>
                            <a href="{{ route('admin.configuracion') }}">Configuración</a>
                        </li>
                        @endauth
                    </ul>
                </li>

                <li>
                    <a href="{{ route('landing') }}#contact">Contacto</a>
                </li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

    </div>
</header>

{{-- EJEMPLO DE DROPDOWN
<li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
    <ul>
        <li><a href="#">Dropdown 1</a></li>
        <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
                <li><a href="#">Deep Dropdown 1</a></li>
                <li><a href="#">Deep Dropdown 2</a></li>
                <li><a href="#">Deep Dropdown 3</a></li>
                <li><a href="#">Deep Dropdown 4</a></li>
                <li><a href="#">Deep Dropdown 5</a></li>
            </ul>
        </li>
        <li><a href="#">Dropdown 2</a></li>
        <li><a href="#">Dropdown 3</a></li>
        <li><a href="#">Dropdown 4</a></li>
    </ul>
</li>
--}}