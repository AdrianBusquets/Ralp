<nav class="menu-container">
    <!-- burger menu -->
    <input type="checkbox" aria-label="Toggle menu" />
    <span></span>
    <span></span>
    <span></span>

    <!-- logo -->
    <a href="#" class="menu-logo">
        <h1>Ralp</h1>
        </a>
    
        <!-- menu items -->
        <div class="menu">
        <ul>
            <li>
            <a href="#home">
                Inicio
            </a>
            </li>
            <li>
            <a href="#pricing">
                Inmuebles
            </a>
            </li>
            <li>
            <a href="#blog">
                Lugares
            </a>
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