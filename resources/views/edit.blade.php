<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Editar</title>
</head>
<body>
    <div class="container mt-5 col-md-6 text-center">
        <form action="{{route('products.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" name="name" id="name" class="form-control" value="{{$product->name}}">
            </div>
            <div class="form-group">
                <label for="price">Precio</label>
                <input type="text" name="price" id="price" class="form-control" value="{{$product->price}}">
            </div>
            <div class="form-group">
                <label for="description">Descripción</label>
                <textarea name="description" id="description" cols="30" rows="10" class="form-control" >{{$product->description}} </textarea>
            </div>
            <button type="submit" class="btn btn-primary mt-4">Guardar</button>
        </form>
    </div>
    <script src="{{asset(js/script.js)}}"></script>
</body>
</html>