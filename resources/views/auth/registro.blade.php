<x-layouts.layout>
<div class="container-sm p-3 rounded-3" style="width: 30rem;max-width: 100%;background-color: #1a202c">
    <h5 class="text-center mb-3 text-white">Regístrate y comienza a canjear</h5>
    <form action="{{route('registrar')}}" method="post">
        @csrf
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="name" name="name" placeholder="Nombre completo" value="{{old('name')}}">
            <label for="name">Nombre completo</label>
            @error('name')
            <small style="color: #ef4444">{{$message}}</small>
            @enderror
        </div>
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
        <div class="form-floating mb-3">
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirmar contraseña">
            <label for="password_confirmation">Confirmar contraseña</label>
            @error('password_confirmation')
            <small style="color: #ef4444">{{$message}}</small>
            @enderror
        </div>
        <div class="text-center mt-3">
            <button type="submit" class="btn btn-success">Registrarse</button>
        </div>
    </form>
    <a href="{{route('login')}}">Ya estoy registrado</a>
</div>
</x-layouts.layout>
