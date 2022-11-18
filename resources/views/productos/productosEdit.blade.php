<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creacion de productos</title>
    @vite(['resources/css/materialize.css', 'resources/js/materialize.js'])
    
    <nav>
        <div class="nav-wrapper">
        <a href="/dashboard" class="brand-logo right">perfil</a>
        <ul id="nav-mobile" class="left hide-on-med-and-down">
            <li><a href="/producto">Inicio</a></li>
            <li><a href="producto/create">Registrar Producto</a></li>
        </ul>
        </div>
    </nav>
    
</head>
<body>
<div class="section container" >

        <h4>Editar productos</h4>
        
        <div class="row" >
            <form  class="col s12" action="/producto/{{ $producto->id }}" method="POST">
                @csrf
                @method('patch')

                <div class="row" >                    
                    <div class="input-field col s5">

                        <label for='existencia' class="active">Existencia</label>
                        <input class="validate" type="text" name ="existencia" id="existencia" value="{{ $producto->existencia }}">
                            @error('existencia')
                            <li>{{ $message }}</li>
                            @enderror

                    </div>
                </div>


                <div class="row">
                        <div class="input-field col s5">
                            <label for='nombre' class="active">Nombre</label>
                            <input class="validate" type="text" name="nombre" id="nombre" value="{{ $producto->nombre }}">
                            <br>

                            @error('nombre')
                            <li>{{ $message }}</li>
                            @enderror


                        </div>
                </div>
                        
                <div class="row">
                        <div class="input-field col s5">        

                            <label for='modelo' class="active">modelo</label>
                            <input class="validate" type="text" name="modelo" id="modelo" value="{{ $producto->modelo }} ">
                            <br>

                            @error('modelo')
                            <li>{{ $message }}</li>
                            @enderror

                        </div>
                </div>

                <div class="row">
                        <div class="input-field col s5">               
                            <label for='precio' class="active">precio</label>
                            <input class="validate" type="text" name="precio" id="precio" value="{{ $producto->precio }}"> <!--agregar para lo que se estaba escribiendo?? {{ old('precio') }}-->
                            <br>

                            @error('precio')
                            <li>{{ $message }}</li>
                            @enderror
                        </div>
                </div>
                    
                <input class="btn waves-effect waves-teal" type="submit" name="enviar">
                
            </form>
        </div>   
</body>
</html>