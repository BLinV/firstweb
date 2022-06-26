<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="/"><img src="{{ Storage::url('images/icon.svg') }}" alt="logo" width="100" height="36"></a>
        <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
        </form>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto me-2 mb-lg-0">
                <li class="nav-item {{ Request::is('producto') && ! Request::is('producto/{cod}') ? 'active' : '' }}">
                    <a class="nav-link" href="{{url('/producto')}}">
                        <span class="glyphicon glyphicon-film" aria-hidden="true"></span>
                        Productos
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
                        Iniciar sesi&oacute;n
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li class="nav-item">
                            <form class="container-fluid" action="{{ url('/login') }}" method="POST" style="display:inline">
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon1">@</span>
                                    <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                                <button class="btn btn-outline-success me-2" type="submit">Iniciar sesi&oacute;n</button>
                            </form>

                        </li>
                        <!--<li class="nav-item {{ Request::is('login') && ! Request::is('auth/login')? 'active' : ''}}">
                            <a class="dropdown-item" href="{{ url('/login') }}">
                                <span class="glyphicon glyphicon-film" aria-hidden="true"></span>Iniciar sesión</a>
                        </li>
                        <li class="nav-item">
                            <form action="{{ url('/logout') }}" method="POST" style="display:inline">{{ csrf_field() }}
                                <button type="submit" class="btn btn-link nav-link" style="display:inline;cursor:pointer">
                                    Salir de sistema
                                </button>
                            </form>
                        </li>-->
                        <li>
                            <hr class="dropdown-divider">¿Eres nuevo?
                        </li>
                        <li class="nav-item {{ Request::is('register')? 'active' : ''}}">
                            <a class="dropdown-item" href="{{url('/register')}}">
                                <span class="glyphicon glyphicon-film" aria-hidden="true"></span>Crear cuenta</a>
                            <!--<button class="btn btn-sm btn-outline-secondary" type="button">Smaller button</button>-->
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<table class="table" alling="center">
    <thead class="table table-bordered">
        <tr>
            <th scope="col" class="{{ setArchivo('inicio') }}"><a href="/">Inicio</a></th>
            <th scope="col" class="{{ setArchivo('personas') }}"><a href="/personas">Personal</a></th>
            <th scope="col" class="{{ setArchivo('producto') }}"><a href="/producto">Productos</a></th>
            <th scope="col" class="{{ setArchivo('contacto') }}"><a href="/contacto">Contacto</a></th>
        </tr>
    </thead>
</table>