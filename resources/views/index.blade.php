<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&display=swap" rel="stylesheet">
    <!--<link rel="stylesheet" href="{{ asset('./css/app.css') }}">  feu referència al vostre fitxer d'estils -->
    <title>Paginació</title>
</head>

<body>

    <header>
        <h2>Pt_04_Martín_Jaime</h2>
        <a href="">INICIAR SESSION</a>
        <a href="">REGISTRAR-SE</a>
    </header>

    <div class="contenidor">
        <h1>Articles</h1>

        <section class='articles'><ul>
    @forelse($arts as $articulo)        
        <li><b>{{ $articulo->{'ID'} }}</b>: {{ $articulo->{'article'} }}</li>      
    @empty
        <li>Cap article a mostrar!!!</li>
    @endforelse
    </ul></section>

    <section class='paginacio'><ul><il>{{ $arts->links() }}</il></ul></section>
    </div>
</body>

</html>