<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-heder">
                        Editar productos
                    </div>
                        <div class="card-body">
                            <form action="" method="POST">
                            @csrf
                                <div class="form-group">
                                    <label for="">Descripción</label>
                                    <input type="text" class="form-control" name="description" value="{{ $product->description }}">
                                </div><br>
                                <div class="form-group">
                                    <label for="">Precio</label>
                                    <input type="number" class="form-control" name="price" value="{{ $product->price }}">
                                </div><br>
                                <button type="submit" class ="btn btn-primary ">Guardar</button>
                                <a href="{{ route('products.index') }}" class ="btn btn-danger">Cancelar</a>
                            </form>
                        </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>