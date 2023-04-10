<x-layouts.layout title="Login">
<div class="container-sm p-3 rounded-3" style="width: 30rem;max-width: 100%;background-color: #1a202c">
    <h5 class="text-center mb-3 text-white">Inicia sesión y comienza a canjear</h5>
    <form action="{{route('loguear')}}" method="post">
        @csrf
        <div class="form-floating mb-3">
            <input type="email" class="form-control" id="email" name="email" placeholder="Correo electrónico" value="{{old('email')}}">
            <label for="email">Correo electrónico</label>
            @error('email')
            <small style="color: #ef4444">{{$message}}</small>
            @enderror
        </div>
        <div class="form-floating mb-3">
            <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña">
            <label for="password">Contraseña</label>
            @error('password')
            <small style="color: #ef4444">{{$message}}</small>
            @enderror
        </div>
        <input type="checkbox" id="remember" name="remember">
        <label for="remember" class="text-white">Recuérdame</label>
        <div class="text-center mt-3">
            <button type="submit" class="btn btn-primary">Iniciar sesión</button>
        </div>
    </form>
    <a href="{{route('registro')}}">Registrarme</a>
</div>
</x-layouts.layout>
