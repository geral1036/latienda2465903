<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('materialize/css/materialize.css') }}">
    <title>Tienda</title>
</head>
<body>
    <nav class="blue-grey darken-2">
        <div class="nav-wrapper">
          <a href="#!" class="brand-logo">La Tienda php</a>
          <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li><a href="sass.html">Productos</a></li>
            <li><a href="badges.html">Pedidos</a></li>
           
          </ul>
        </div>
      </nav>
     <div class="container">
       @yield('contenido')
     </div>
     <script src="{{ asset('materialize/js/materialize.js')}}"></script>
    
</body>
</html>