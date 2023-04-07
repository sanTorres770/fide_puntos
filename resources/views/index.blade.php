<x-layouts.layout title="Inicio">
    <div class="container col-md-6">
        <img src="{{URL::asset('/images/inicio.png')}}" alt="inicio">
        <div class="h-30"></div>
        <br>
        <div class="h-100">
            <div class="row w-100 align-items-center">
                <div class="col text-center">
                    <div class="btn-group">
                        <a href="{{route('login')}}" class="btn btn-primary me-2">ingresar</a>
                        <a href="{{route('registro')}}" class="btn btn-primary">registrarse</a>

                    </div>
                </div>
            </div>
        </div>
    </div>



</x-layouts.layout>
