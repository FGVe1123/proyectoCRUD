<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHOW</title>
   
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

<h1>Detalles del producto</h1>

    <div class="card">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="#">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4">{{ $producto->nombre }}<i class="material-icons right">Ver más</i></span>
        @if ($producto->existencia != 0)
            <a href="#"> <p>Comprar ahora</p> </a>
        @else <a href="#"> <p>Sin inventario</p> </a>    
        @endif
    </div>
    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4">{{ $producto->nombre }}<i class="material-icons right">close</i></span>
      <p>Equipo {{ $producto->nombre }} {{ $producto->modelo }} al precio de {{ $producto->precio }}</p>
    </div>
  </div>
    
</body>
</html>