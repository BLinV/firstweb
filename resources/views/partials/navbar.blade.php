<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="/"><img src="{{ Storage::url('images/icon.svg') }}" alt="logo" width="100" height="36"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
                <i class="fas fa-bars" style="color:#FC4914; font-size:28px;"></i></span>
        </button>
        @if( true || Auth::check() )
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                </form>
            </ul>
            <ul class="navbar-nav me-auto me-2 mb-lg-0">
                <li class="nav-item {{ Request::is('services/{cod}') && ! Request::is('catalog/services/{cod}')? 'active' : ''}}">
                    <a class="nav-link" href="{{url('/services/ab')}}">
                        <span class="glyphicon glyphicon-film" aria-hidden="true"></span>
                        Servicios
                    </a>
                </li>
                <li class="nav-item {{ Request::is('projects/{cod}') && ! Request::is('catalog/projects/{cod}')? 'active' : ''}}">
                    <a class="nav-link" href="{{url('/projects/cd')}}">
                        <span class="glyphicon glyphicon-film" aria-hidden="true"></span>
                        Proyectos
                    </a>
                </li>
                <li class="nav-item {{ Request::is('clients/{cod}') && ! Request::is('catalog/clients/{cod}')? 'active' : ''}}">
                    <a class="nav-link" href="{{url('/clients/ef')}}">
                        <span class="glyphicon glyphicon-film" aria-hidden="true"></span>
                        Clientes
                    </a>
                </li>
                <li class="nav-item {{ Request::is('blog/{dat}') && ! Request::is('catalog/blog/{dat}')? 'active' : ''}}">
                    <a class="nav-link" href="{{url('/blog/8')}}">
                        <span class="glyphicon glyphicon-film" aria-hidden="true"></span>
                        Blog
                    </a>
                </li>
                <li class="nav-item {{ Request::is('contact') && ! Request::is('catalog/contact')? 'active' : ''}}">
                    <a class="nav-link" href="{{url('/contact')}}">
                        <span class="glyphicon glyphicon-film" aria-hidden="true"></span>
                        Contacto
                    </a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Acceder
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li class="nav-item {{ Request::is('login') && ! Request::is('auth/login')? 'active' : ''}}">
                            <a class="dropdown-item" href="{{url('/login')}}">
                                <span class="glyphicon glyphicon-film" aria-hidden="true"></span>Iniciar sesión / Registrarse</a>
                        </li>
                        <li class="nav-item">
                            <form action="{{ url('/logout') }}" method="POST" style="display:inline">{{ csrf_field() }}
                                <button type="submit" class="btn btn-link nav-link" style="display:inline;cursor:pointer">
                                    Salir de sistema
                                </button>
                            </form>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li class="nav-item {{ Request::is('catalog/show/{id}')? 'active' : ''}}">
                            <a class="dropdown-item" href="{{url('/catalog/show/20')}}">
                                <span class="glyphicon glyphicon-film" aria-hidden="true"></span>Mis compras</a>
                        </li>

                        <li><a class="dropdown-item" href="#">
                                Mis preferencias</a></li>

                    </ul>
                </li>
            </ul>
        </div>
        @endif
    </div>
</nav>

<table class="table" alling="center">
    <thead class="table table-bordered">
        <tr>
            <th scope="col" class="{{ setArchivo('inicio') }}"><a href="/">Inicio</a></th>
            <th scope="col" class="{{ setArchivo('producto') }}"><a href="producto">Productos</a></th>
            <th scope="col" class="{{ setArchivo('contacto') }}"><a href="contacto">Contacto</a></th>
        </tr>
    </thead>
</table>
