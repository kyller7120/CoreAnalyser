<li class="side-menus {{ Request::is('*') ? 'active' : '' }}">

    @if (Route::has('login'))
        @auth
            {{-- <li class="nav-item">
                <a class="nav-link" href="{{ url('/home') }}">
                    <i class="fas fa-home" style="color: #1E90FF;"></i><span>Inicio</span>
                </a>
            </li> --}}

            <li class="nav-item">
                <a class="nav-link" href="{{ url('/') }}">
                    <i class="fas fa-home" style="color: #1E90FF;"></i><span>Inicio</span>
                </a>
            </li>

            {{--<li class="nav-item">
                <a class="nav-link" href="/">
                    <i class="fas fa-tree" style="color: #32CD32;"></i><span>Bienvenido</span>
                </a>
            </li>--}}

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="catalogoDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-stream" style="color: #FFD700;"></i><span> Catálogo de cuentas</span>
                </a>
                <div class="dropdown-menu" aria-labelledby="catalogoDropdown">
                    <a class="dropdown-item" href="{{ route('catalogo.index') }}">Catalogo de cuentas</a>
                    <a class="dropdown-item" href="{{route('vinculacion.index')}}">Relacionar cuentas</a>
                    <a class="dropdown-item" href="{{ route('graficos.index') }}">Gráficas</a>
                </div>
            </li>
            
            <li class="nav-item dropdown">
                <a class="nav-link" href="{{ route('periodo.index') }}">
                    <i class="fas fa-folder-open" style="color: #8A2BE2;"></i><span>Periodos</span>
                </a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="analisisDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-search-dollar" style="color: #20B2AA;"></i><span> Análisis</span>
                </a>
                <div class="dropdown-menu" aria-labelledby="analisisDropdown">
                    <a class="dropdown-item" href="{{ route('horizontal.index') }}">Análisis horizontal</a>
                    <a class="dropdown-item" href="{{route('vertical.index')}}">Análisis vertical</a>
                </div>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="ratiosDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-chart-bar" style="color: #FF4500;"></i><span> Ratios</span>
                </a>
                <div class="dropdown-menu" aria-labelledby="ratiosDropdown">
                    <a class="dropdown-item" href="{{ route('ratios.index') }}">Ratios de la empresa</a>
                    <a class="dropdown-item" href="{{route('ratios.comparacion')}}">Comparación de ratios</a>
                </div>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link" href="{{ route('sector.index') }}">
                    <i class="fas fa-tags" style="color: #4B0082;"></i><span>Sectores</span>
                </a>
            </li>
            {{-- <a href="#colapsoCatalogo" data-toggle="collapse" aria-controls="colapsoCatalogo">
            <i class="fas fa-stream"></i><span>Catalogo</span>
        </a>
        <div class="collapse" id="colapsoCatalogo" style="margin-left: 2rem">
            <a class="nav-link" href="{{ route('catalogo.index') }}">
                <i class="fas fa-stream"></i><span>Catalogo de cuentas</span>
            </a>
        </div> --}}

            {{-- <div class="dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                <i class="fas fa-stream"></i><span>Catalogo</span>
            </a>
            <div class="dropdown-menu">
                <a class="nav-link dropdown-item" href="{{ route('catalogo.index') }}">
                    <i class="fas fa-stream"></i><span>Catalogo de cuentas</span>
                </a>
              <a class="dropdown-item" href="#">Another action</a>
            </div>
          </div> --}}

            @can('ver-empresa')
                <li class="nav-item dropdown">
                    <a class="nav-link" href="{{ route('empresa.index') }}">
                        <i class="fas fa-building" style="color: #1E90FF;"></i><span>Empresa</span>
                    </a>
                </li>
            @endcan

            @can('ver-usuario')
                <li class="nav-item dropdown">
                    <a class="nav-link" href="{{ route('usuarios.index') }}">
                        <i class="fas fa-user" style="color: #32CD32;"></i><span>Usuarios</span>
                    </a>
                </li>
            @endcan

            @can('ver-rol')
                <li class="nav-item dropdown">
                    <a class="nav-link" href="{{ route('roles.index') }}">
                        <i class="fas fa-globe" style="color: #8A2BE2;"></i><span>Roles</span>
                    </a>
                </li>
            @endcan
        @else
            <a href="{{ route('login') }}">
                <i class="fas fa-user" style="color: #FF4500;"></i><span>Ingresar</span>
            </a>

            {{-- @if (Route::has('register'))
                <a href="{{ route('register') }}">
                    <i class="fas fa-building" style="color: #FFD700;"></i><span>Registrarse</span>
                </a>
            @endif --}}
        @endauth

    @endif
</li>
