<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Coche</title>
</head>

<body>
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
    <form method="POST" action="{{route('actualizarcoche', $coche->id)}}">
        @csrf
        @method('PUT')
        <input type="text" name="matricula" placeholder="Matrícula del coche" value="{{old('matricula', $coche->matricula)}}">
        <input type="text" name="color" placeholder="Color del coche" value="{{old('color', $coche->color)}}">
        <input type="text" name="marca" placeholder="Marca del coche" value="{{old('marca', $coche->marca)}}">
        <input type="text" name="modelo" placeholder="Modelo del coche" value="{{old('modelo', $coche->modelo)}}">

        <input type="submit" value="Guardar">

    </form>
    <a href="miscoches">Volver</a>
</body>

</html>