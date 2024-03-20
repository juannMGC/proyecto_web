<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>


<body>
    {{$products}}
    <form action="{{ route('products.store') }}" method="post">
        @csrf
        <label>ingrese el nombre del producto:
            <input type="text" name="product_name" placeholder="Ingrese el nombre del producto" >
        </label>

        <label>ingrese el precio del producto:
            <input step="0.5" type="number" name="product_price" placeholder="Ingrese el precio del producto" >
        </label>

        <label>ingrese la cantidad de unidades del producto:
            <input type="number" name="product_stock" placeholder="Ingrese el stock del producto" >
        </label>
        <br>
        <button type="submit">Guardar</button>
    </form>
</body>
</html>