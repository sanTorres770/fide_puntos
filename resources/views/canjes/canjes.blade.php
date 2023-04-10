<x-layouts.layout>

    <div class="container mt-5 mb-5">
        <table class="table table-hover table-striped-columns text-center">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Producto canjeado</th>
                <th scope="col">Puntos utilizados</th>
                <th scope="col">Fecha y hora del canje</th>
            </tr>
            </thead>
            <tbody class="table-group-divider">
            @foreach($canjes as $canje)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$canje->descripcion}}</td>
                <td>{{$canje->valor}}</td>
                <td>{{$canje->created_at}}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>

</x-layouts.layout>
