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
    <h1>Editar productos</h1>
    
    <form action="/producto/{{ $producto->id }}" method="POST">
        @csrf
        @method('patch')

        <label for='existencia'>Existencia</label>
        <input type="text" name ="existencia" id="existencia" value="{{ $producto->existencia }}">
        <br>

        @error('existencia')
        <li>{{ $message }}</li>
        @enderror

        <label for='nombre'>Nombre</label>
        <input type="text" name="nombre" id="nombre" value="{{ $producto->nombre }}">
        <br>

        @error('nombre')
        <li>{{ $message }}</li>
        @enderror

        <label for='modelo'>modelo</label>
        <input type="text" name="modelo" id="modelo" value="{{ $producto->modelo }} ">
        <br>

        @error('modelo')
        <li>{{ $message }}</li>
        @enderror

        <label for='precio'>precio</label>
        <input type="text" name="precio" id="precio" value="{{ $producto->precio }}"> <!--agregar para lo que se estaba escribiendo?? {{ old('precio') }}-->
        <br>

        @error('precio')
        <li>{{ $message }}</li>
        @enderror

        <input type="submit" name="editar" value="Editar">
       
    </form>
   
</body>
</html>