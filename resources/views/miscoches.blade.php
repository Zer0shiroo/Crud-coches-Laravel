<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<h1>Todos los coches</h1>
{{session('success')}}

    <form action="{{route('listacoches')}}">
        <input type="text" name="matricula" placeholder="Filtra por coche">
        <input type="submit" value="Filtrar">
    </form>
    <ul>

        @foreach ($coches as $coche)
            <li><a href="{{route('mostrarcoche', $coche->id)}}">{{$coche->matricula}} - {{$coche->color}} - {{$coche->marca}} - {{$coche->modelo}}</a>
            <a href="{{route('eliminarcoche', $coche->id)}}">Eliminar</a>
            <a href="{{route('editarcoche', $coche->id)}}">Editar</a>
                           
        @endforeach
    </ul>
    <a href="crearcoche">Crear coche</a>

</body>

</html>