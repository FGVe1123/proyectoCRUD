<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHOW</title>
    <div class="nav" >
        <a href="/producto">Inicio</a>
    </div>
</head>
<body>

<h1>Detalles del producto</h1>

<h2>{{ $producto->nombre }}</h2>
<p>Equipo {{ $producto->nombre }} {{ $producto->modelo }} al precio de {{ $producto->precio }}</p><br>
    @if ($producto->existencia != 0)
        <a href="#"> <p>Comprar ahora</p> </a>
    @else <a href="#"> <p>Sin inventario</p> </a>    
    @endif

    
</body>
</html>