<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>create Category</title>
</head>
<body>
    <h1>Formulario de registro de categorias</h1>
    <form action="{{ route('saveCategory') }}" method="post">
        @csrf
        <input type="text" name="name" placeholder="Ingrse el nombre de la categoria">
        <br><br>
        <input type="text" name="description" placeholder="Ingrese la descripción de la categoria">
        <br><br>
        <input type="submit" name="enviar" value="Enviar">
    </form>

</body>
</html>
