    <nav class="navbar navbar-light bg-white navbar-expand-md shadow-sm">
        <div class="container">
            <a href="{{ route('home')}}" class="navbar-brand">
                {{ config('app.name')}}
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="nav nav-pills"> <!-- Es importante que en "routeIs" ocupemos en NOMBRE de la ruta -->
                {{--<li class=" {{ request()->routeIs('home') ? 'active' : '' }}" ><a href="/">Home</a></li> --}}
                <li class=" nav-item" >
                    <a class="nav-link {{ modoActivo('home') }}" href="{{ route('home') }}">Inicio</a>
                </li>


                <li class="nav-item" >
                    <a class="nav-link {{ modoActivo( 'nosotros' )}}" href="{{ route('nosotros') }}">Nosotros</a>
                </li>


                
                
                <li class="nav-item" >
                    <a class="nav-link {{ modoActivo( 'contacto' )}}" href="{{ route('contacto')}}">Contactanos</a>
                </li>
                
                
                
                @auth
                
                <li class="nav-item" >
                    <a class="nav-link {{ modoActivo( 'Admin*' ) }}" href="{{ route('Admin.index')}}">Administrar</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Cerrar sesion
                    </a>
                </li>

                @else 

                    <li class="nav-item">
                        <a class="nav-link {{ modoActivo( 'login' )}}" href="{{ route('login') }}">
                            Iniciar sesion
                        </a>
                    </li>
                @endauth
                </ul>
            </div>
        </div>
    </nav>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>