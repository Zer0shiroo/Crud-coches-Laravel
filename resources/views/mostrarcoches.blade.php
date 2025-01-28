<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Mi coche: {{$coche->id}}</h1>
    <ul>
       {{$coche->matricula}}
       {{$coche->color}}
        
    </ul>
    <a href="../miscoches">Volver</a>

</body>

</html>