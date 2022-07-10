<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="/"><img src="{{ Storage::url('images/icon.svg') }}" alt="logo" width="100" height="36"></a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto me-2 mb-lg-0">
                @guest  
                    <li class="nav-item {{ Request::is('tienda') }}">
                        <a class="nav-link" href="{{url('/tienda')}}">
                            <span class="glyphicon glyphicon-film" aria-hidden="true"></span>
                            Tienda
                        </a>
                    </li>
                    <li class="nav-item {{ Request::is('contacto') ? 'active' : ''}}">
                        <a class="nav-link" href="{{ url('/contacto') }}">
                            <span class="glyphicon glyphicon-film" aria-hidden="true"></span>
                            Contacto
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            @guest
                                Login
                            @else
                                {{ Auth::user()->name }}
                            @endguest
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li class="nav-item">
                                @guest
                                    <form class="container-fluid" action="{{ url('/login') }}" method="GET" style="display:inline" aria-hidden="true">
                                        <button class="btn btn-outline-success me-2" type="submit">Iniciar sesi&oacute;n</button>
                                    </form>
                                    <li>
                                        <hr class="dropdown-divider">¿Eres nuevo?
                                    </li>
                                    <form class="container-fluid" action="{{ url('/register') }}" method="GET" style="display:inline" aria-hidden="true">
                                        <button class="btn btn-outline-success me-2" type="submit">Registrarse</button>
                                    </form>
                                @else
                                    <a href="#" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">Cerrar Sesión</a>
                                @endguest
                            </li>
                        </ul>
                    </li>
                @else
                    <li class="nav-item {{ Request::is('producto')  && ! Request::is('producto/{cod}') ? 'active' : '' }}">
                        <a class="nav-link" href="{{url('/producto')}}">
                            <span class="glyphicon glyphicon-film" aria-hidden="true"></span>
                            Productos
                        </a>
                    </li>
                    <li class="nav-item {{ Request::is('personas') ? 'active' : '' && ! Request::is('producto/{id_per}') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('/personas') }}">
                            <span class="glyphicon glyphicon-film" aria-hidden="true"></span>
                            Personal
                        </a>
                    </li>

                    <li class="nav-item {{ Request::is('clientes') ? 'active' : '' && ! Request::is('clientes/{id_cli}') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('/clientes') }}">
                            <span class="glyphicon glyphicon-film" aria-hidden="true"></span>
                            Clientes
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            @guest
                                Login
                            @else
                                {{ Auth::user()->name }}
                            @endguest
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li class="nav-item">
                                @guest
                                    <form class="container-fluid" action="{{ url('/login') }}" method="GET" style="display:inline" aria-hidden="true">
                                        <button class="btn btn-outline-success me-2" type="submit">Iniciar sesi&oacute;n</button>
                                    </form>
                                    <li>
                                        <hr class="dropdown-divider">¿Eres nuevo?
                                    </li>
                                    <form class="container-fluid" action="{{ url('/register') }}" method="GET" style="display:inline" aria-hidden="true">
                                        <button class="btn btn-outline-success me-2" type="submit">Registrarse</button>
                                    </form>
                                @else
                                    <a href="#" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">Cerrar Sesión</a>
                                @endguest
                            </li>
                        </ul>
                    </li>
                @endguest
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
                
            </ul>
        </div>
    </div>
</nav>
<!--
<table class="table" alling="center">
    <thead class="table table-bordered">
        <tr>
            <th scope="col" class="{{ setArchivo('inicio') }}"><a href="/">Inicio</a></th>
            <th scope="col" class="{{ setArchivo('personas') }}"><a href="/personas">Personal</a></th>
            <th scope="col" class="{{ setArchivo('producto') }}"><a href="/producto">Productos</a></th>
            <th scope="col" class="{{ setArchivo('contacto') }}"><a href="/contacto">Contacto</a></th>
            @guest
                <th><a href="{{ route('login') }}">Login</a></th>
            @else
            <th>
                <a href="#" onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">Cerrar Sesión</a>
            </th>
            @endguest
        </tr>
    </thead>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
</table>-->