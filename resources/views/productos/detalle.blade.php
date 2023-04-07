<x-layouts.layout :title="$producto->descripcion">

    <div class="container text-center">
        <div class="card text-center">
            <div class="card-header">
                <h5 class="card-title">{{$producto->descripcion}}</h5>
            </div>
            <div class="card-body">
                <p class="card-text">{{$producto->mensaje}}</p>
                <img src="{{asset('/images/'.$producto->imagen)}}" class="img-fluid" alt="imagen" width="500px" height="400px">
            </div>
            <div class="card-footer text-body-secondary">
                <form action="{{route('productos.guardar_canje')}}" method="post">
                    @csrf
                    <input type="text" hidden value="{{$producto->id}}" name="producto_id">
                    <input type="text" hidden value="1" name="cliente_id">
                    <button type="submit" class="button-bicho">{{'Lo quiero canjear por '.$producto->valor.' puntos'}}</button>
                </form>
            </div>
        </div>
    </div>
</x-layouts.layout>
