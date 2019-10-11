<nav>
        <ul> <!-- Es importante que en "routeIs" ocupemos en NOMBRE de la ruta -->
        {{--<li class=" {{ request()->routeIs('home') ? 'active' : '' }}" ><a href="/">Home</a></li> --}}
            <li class=" {{ modoActivo('home') }}" ><a href="{{ route('home') }}">Home</a></li>
            <li class="{{ modoActivo( 'nosotros' )}}" ><a href="{{ route('nosotros') }}">Nosotros</a></li>
            <li class="{{ modoActivo( 'proyects.*' ) }}" ><a href="{{ route('proyects.index')}}">Portafolio</a></li>
            <li class="{{ modoActivo( 'contacto' )}}" ><a href="{{ route('contacto')}}">Contactanos</a></li>
        </ul>
    </nav>