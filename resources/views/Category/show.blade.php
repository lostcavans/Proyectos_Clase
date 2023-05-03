<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>show Category</title>
</head>
<body>
    <h1>Formulario de Muestra de categorias</h1>
    <label for="category_id">ID:</label>
        <input type="text" name="category_id" value="{{$category->id}}" disabled><br><br>
        <label for="name">Name:</label>
        <input type="text" name="name" placeholder="Ingrese el nombre de la categoria" value = "{{$category->name }}" disabled>
        <br><br>
        <label for="description">Description:</label>
        <input type="text" name="description" placeholder="Ingrese la descripción de la categoria" value = "{{$category->description }}" disabled>
        <br><br>
        <a href="{{route('category')}}">Volver</a>

</body>
</html>