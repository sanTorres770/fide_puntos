
<nav class="navbar navbar-expand-lg " style="background-color: #4a4a4a">
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
                <li class="nav-item">
                    <a class="nav-link active text-white fw-bold" href="#">Mis Canjes</a>
                </li>
            </ul>
            <div class="d-flex">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active text-white fw-bold" href="{{route('registro')}}">Registrarse</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
