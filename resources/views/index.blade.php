<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&display=swap" rel="stylesheet">
    <!--<link rel="stylesheet" href="{{ asset('./css/app.css') }}">  feu referència al vostre fitxer d'estils -->
    <title>Paginació</title>
    @vite(['resources/css/app.css']);
</head>

<body>

    <header>
        <h2>Pt_04_Martín_Jaime</h2>
        <a href="">INICIAR SESSION</a>
        <a href="">REGISTRAR-SE</a>
    </header>

    <div class="contenidor">
        <h1>Articles</h1>

        <ul>
        
    @forelse($arts as $articulo)        
        <li>{{ $articulo->{'ID'} }} <br><small>{{ $articulo->{'article'} }}</small></li>      
    @empty
        <li>Cap projecte a mostrar!!!</li>
    @endforelse

    {{ $arts->links() }}
    </ul>

    </div>
</body>

</html>