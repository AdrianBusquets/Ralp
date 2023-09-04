<nav class="menu-container">
    <!-- burger menu -->
    <input type="checkbox" aria-label="Toggle menu" />
    <span></span>
    <span></span>
    <span></span>

    <!-- logo -->
    <a href="{{ route('home') }}" class="menu-logo">
        <h1>Ralp</h1>
        </a>
    
        <!-- menu items -->
        <div class="menu">
        <ul>
            <li>
            <a href="#pricing">
                Inmuebles
            </a>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Lugares
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                {{-- @foreach ($cities as $city)
                    <li><a class="dropdown-item" href="{{ route('city.ads', $city) }}">{{ $city->name }}</a></li>
                @endforeach --}}
            </ul>
            </li>
        </ul>
        <ul>
        @guest
            @if(Route::has('login'))
            <li>
                <a href="{{ route('login') }}">
                    Entrar
                </a>
                </li>
            @endif
            @if (Route::has('register'))
            <li>
                <a href="{{ route('register') }}">
                    Registrar
                </a>
                </li>
            @endif
            @else
            <li>
                <form id="logoutForm" action="{{ route('logout') }}" method="POST">
                    @csrf
                </form>
                <a id="logoutBtn" href="#">
                    Salir
                </a>
                </li>
        @endguest
        </ul>
        </div>
    </nav>