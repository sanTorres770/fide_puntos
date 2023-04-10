<nav class="navbar navbar-expand-lg" style="background-color: #4a4a4a">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('index')}}"><img src="{{URL::asset('/images/logo.png')}}" alt="logo" height="60px" width="60px"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active text-white fw-bold" aria-current="page" href="{{route('index')}}">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active text-white fw-bold" href="{{route('productos.lista')}}">Productos</a>
                </li>
                @auth()
                <li class="nav-item">
                    <a class="nav-link active text-white fw-bold" href="{{route('canjes',\Illuminate\Support\Facades\Auth::user()->id)}}">Mis Canjes</a>
                </li>
                @endauth
            </ul>
            @auth()
                <div class="d-flex">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="fw-bold">{{\Illuminate\Support\Facades\Auth::user()->email}}</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <form action="{{route('logout')}}" method="post">
                                        @csrf
                                        <a class="dropdown-item" href="#" onclick="this.closest('form').submit()">Cerrar sesión</a>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>

                </div>
            @endauth
            @guest()
                <div class="d-flex">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active text-white fw-bold" href="{{route('login')}}">Iniciar sesión</a>
                        </li>
                    </ul>
                </div>
                <div class="d-flex">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active text-white fw-bold" href="{{route('registro')}}">Registrarse</a>
                        </li>
                    </ul>
                </div>
            @endguest
        </div>
    </div>
</nav>
