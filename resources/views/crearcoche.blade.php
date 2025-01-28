<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
    <form method="POST" action="{{route('guardarcoche')}}">
        @csrf
        <input type="text" name="matricula" placeholder="Matricula del coche" value="{{old('matricula')}}">
        <input type="text" name="color" placeholder="Color del coche" value="{{old('color')}}">
        <input type="text" name="marca" placeholder="marca del coche" value="{{old('marca')}}">
        <input type="text" name="modelo" placeholder="modelo del coche" value="{{old('modelo')}}">

        <input type="submit" value="Guardar">

    </form>
    <a href="miscoches">Volver</a>

</body>

</html>