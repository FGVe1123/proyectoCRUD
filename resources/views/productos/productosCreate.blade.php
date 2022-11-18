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
        </ul>
        </div>
    </nav>
   
<script>  M.AutoInit();</script>

</head>
<center>
<body>

<div class="section container" >
    <div class="section container">
        <h4>Registrar productos</h4>


        <div class="row" >
        
                <form  class="col s12" method="post" action="/producto">
                
                    @csrf
                    <div class="row" >                    
                        <div class="input-field col s5">
                            <label for="existencia" class="active">Existencia</label> 
                            <input class="validate" type="number" name="existencia" id="existencia" value="{{ old('existencia') }}">    
                                @error('existencia')
                                <li>{{ $message }}</li>
                                @enderror
                        </div>
                    </div>
                
                    <div class="row">
                        <div class="input-field col s5">
                            <label for="nombre" class="active">Nombre</label>    
                            <input class="validate" id="nombre" type="text" name="nombre" value="{{ old('nombre') }}">                            
                                @error('nombre')
                                <li>{{ $message }}</li>
                                @enderror
                        
                        </div>

                    </div>

                    <div class="row">
                        <div class="input-field col s5">
                            <label for="modelo" class="active">Modelo</label>    
                            <input class="validate"  id="modelo" type="text" name="modelo" value="{{ old('modelo') }}">
                                @error('modelo')
                                <li>{{ $message }}</li>
                                @enderror
                        
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s5">
                            <label for="precio" class="active">Precio</label>    
                            <input class="validate"  id="precio" type="number" name="precio" value="{{ old('precio') }}">
                                @error('precio')
                                <li>{{ $message }}</li>
                                @enderror
                        </div>
                    </div>


                <input class="btn waves-effect waves-teal" type="submit" name="enviar" value="Enviar">
             
                </form>

            
        </div>
    </div>
</div>

    <script>
        $(document).ready(function() {
        M.updateTextFields();
      });
      </script>

     

</body>
</center>
</html>