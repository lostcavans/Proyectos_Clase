<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index Category</title>
</head>
<body>
        <h1>Lista de Categorias</h1>
        <a href="{{ route('createCategory') }}"> Crear Categoria</a>
        <table>
           <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>created_at</th>
            <th>estado</th>
            <th>Acciones</th>
           </tr>
           <tbody>
                @forelse ($categories as $category )
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->description }}</td>
                        <td>{{ $category->created_at }}</td>
                        <td>
                            @if($category->estado)
                                <span style="color: green">Activo</span>
                            @else
                                <span style="color: red">Inactivo</span>
                            @endif

                        </td>
                        <td>
                            <a href="{{route('showCategory', $category->id)}}">Mostrar</a>
                            &nbsp;&nbsp;
                            <a href="{{ route('editCategory', $category->id)}}">Actualizar</a>
                        </td>
                    </tr>
                @empty
                    <li>No hay Categorias</li>
                @endforelse
           </tbody>
        </table>
</body>
</html>
