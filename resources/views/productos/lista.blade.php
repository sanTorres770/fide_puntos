<x-layouts.layout title="Productos">

    <div class="container mt-3">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach($productos as $producto)
            <div class="col">
                <div class="card">
                    <a href="{{route('productos.detalle',$producto->id)}}"><img src="{{asset('/images/'.$producto->imagen)}}" class="card-img-top" alt="..."></a>
                    <div class="card-body" style="background-color: #718096">
                        <h5 class="card-title">{{$producto->descripcion}}</h5>
                        @auth()
                            <p class="card-text">{{$producto->valor.' puntos'}}</p>
                        @endauth
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

</x-layouts.layout>
