<x-layouts.layout :title="$producto->descripcion">

    <div class="container text-center mt-5">
        <div class="alert alert-info text-center">
            <h5>{{strtoupper(\Illuminate\Support\Facades\Auth::user()->name).', en este momento cuentas con '.$puntos.' fidepuntos disponibles!'}}</h5>
        </div>
        <div class="card text-center">
            <div class="card-header">
                <h5 class="card-title">{{$producto->descripcion}}</h5>
            </div>
            <div class="card-body">
                <p class="card-text">{{$producto->mensaje}}</p>
                <p class="card-text">{{'Valor -> '.$producto->valor.' fidepuntos'}}</p>
                <img src="{{asset('/images/'.$producto->imagen)}}" class="img-fluid" alt="imagen" width="500px" height="400px">
            </div>
            <div class="card-footer text-body-secondary">
                <form action="{{route('productos.guardar_canje')}}" method="post">
                    @csrf
                    <input type="text" hidden value="{{$producto->id}}" name="producto_id">
                    <input type="text" hidden value="{{$producto->descripcion}}" name="descripcion">
                    <input type="text" hidden value="{{\Illuminate\Support\Facades\Auth::user()->id}}" name="cliente_id">
                    <input type="text" hidden value="{{$producto->valor}}" name="valor">
                    <input type="text" hidden value="{{$puntos}}" name="puntos">
                    <input type="text" hidden value="{{\Illuminate\Support\Facades\Auth::user()->email}}" name="email">


                    @if($valido)
                    <button type="submit" class="button-bicho">{{'Lo quiero canjear por '.$producto->valor.' puntos'}}</button>
                    @else
                    <div class="alert alert-danger text-center">
                        <h6>:( En este momento no cuentas con los fidepuntos suficientes. Sigue comprando para acumular más puntos.</h6>
                    </div>
                    @endif
                </form>
            </div>
        </div>
    </div>
</x-layouts.layout>
