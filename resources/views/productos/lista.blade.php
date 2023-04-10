<x-layouts.layout title="Productos">
    <div class="bg-dark p-xl-2">
        <div class="container mt-3">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                @foreach($productos as $producto)
                <div class="col">
                    <div class="card " style="background-color: aliceblue">
                        <a href="{{route('productos.detalle',$producto->id)}}"><img src="{{asset('/images/'.$producto->imagen)}}" class="card-img-top" alt="..."></a>
                        <div class="card-body" style="background-color: #1a202c">
                            <h5 class="card-title text-white text-center">{{$producto->descripcion}}</h5>
                            @auth()
                                <p class="card-text text-white text-center">{{$producto->valor.' puntos'}}</p>
                            @endauth
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>


</x-layouts.layout>
