<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>update product</h1>
    <form action="/product/update/{{$product ->id}}" method = 'post'>
    @csrf
    productype<input type="text" name="productype" value ="{{$product->productype}}">
    <br>
    ProductCode <input type="number" name="ProductCode" value ="{{$product->ProductCode}}"><br>
    ProductName<input type="text" name="ProductName"value ="{{$product->ProductName}}">
     <br>
     Quantity <input type="number" name="Quantity" value ="{{$product->Quantity}}"><br>
    Node<input type="text" name="ProductName"value ="{{$product->node}}">
    <input type="submit" value="submit">

    </form>
</body>
</html>