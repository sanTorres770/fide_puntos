<x-layouts.layout title="Productos">

    <div class="container mt-3">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach($productos as $producto)
            <div class="col">
                <div class="card shadow-lg">
                    <a href="{{route('productos.detalle',$producto->id)}}"><img src="{{asset('/images/'.$producto->imagen)}}" class="card-img-top" alt="..."></a>
                    <div class="card-body" style="background-color: #1a202c">
                        <center><h5 class="card-title text-white">{{$producto->descripcion}} </h5></center>
                        <center><p  class="card-text text-white">{{$producto->valor.' fidepuntos'}}</p></center>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

</x-layouts.layout>
