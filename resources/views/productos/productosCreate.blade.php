<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creacion de productos</title>

    <div class="nav" >
        <a href="/producto">Inicio</a>
    </div>

</head>
<body>
    <h1>Registrar productos</h1>

    <form method="post" action="/producto">
        @csrf

        <label for="existencia">Existencia</label>
        <input type="number" name="existencia" id="existencia" value="{{ old('existencia') }}">
        <br>
        @error('existencia')
        <li>{{ $message }}</li>
        @enderror

        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre" value="{{ old('nombre') }}">
        <br>

        @error('nombre')
        <li>{{ $message }}</li>
        @enderror

        <label for="modelo">modelo</label>
        <input type="text" name="modelo" id="modelo" value="{{ old('modelo') }}">
        <br>
        
        @error('modelo')
        <li>{{ $message }}</li>
        @enderror
        <label for="precio">precio</label>
        <input type="number" name="precio" id="precio" value="{{ old('precio') }}">
        <br>

        @error('precio')
        <li>{{ $message }}</li>
        @enderror
       
        <input type="submit" name="enviar "value="ENVIAR">

        
    </form>
</body>
</html>