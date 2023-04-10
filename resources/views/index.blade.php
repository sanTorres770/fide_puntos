<x-layouts.layout title="Inicio">
    <div class="container col-md-6 mt-5">

        @auth()
        <div class="d-flex">
            <h5 class="ms-4">{{'Bienvenido(a): '.strtoupper(\Illuminate\Support\Facades\Auth::user()->name.' '.\Illuminate\Support\Facades\Auth::user()->last_name)}}</h5>
        </div>
        @endauth

        <img src="{{URL::asset('/images/inicio.png')}}" alt="inicio">
    </div>
    <div class="row align-items-center mt-3">
        <div class="col text-center">
            <div class="btn-group">
                <a href="{{route('productos.lista')}}" class="btn btn-primary">Ingresar</a>
            </div>
        </div>
    </div>



</x-layouts.layout>
