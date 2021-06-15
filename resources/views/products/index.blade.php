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
    <div class="container"><br>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="crad-heder">
                    &nbsp &nbsp  <strong>Listado de productos</strong>
                        <a href="{{ route('products.create') }}" class="btn btn-success btn-sm col-md-3 offset-md-6">Agregar nuevo producto</a>
                    </div>
                        <div class="card-body">
                            @if(session('info'))
                            <div class="alert alert-success" role="alert">
                                    {{ session('info') }}   
                                </div>
                            @endif
                            <table class="table table-hover table-sm">
                                <thead>
                                    <th>Descipción</th>
                                    <th>Precio</th>
                                    <th>Acción</th>
                                </thead>
                                <tbody>
                                    @foreach($products as $product)
                                    <tr>
                                        <td>
                                            {{ $product->description }}
                                        </td>
                                        <td>
                                            {{ $product->price }}
                                        </td>
                                        <td>
                                        <a href="" class="btn btn-warning btn-sm" >Editar</a>
                                        <a href="javascript: document.getElementById('delete-{{ $product->id }}').submit()" class ="btn btn-danger">Eliminar</a>
                                        <form id="delete-{{ $product->id }}" action="{{ route('products.destroy', $product->id) }}" method="POST" >
                                            @method('delete') 
                                            @csrf
                                        </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>