<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" 
    rel="stylesheet" >
    
</style>
</head>
<body>
    <h2>Danh sách học sinh trong lớp</h2>
    
    <table>
        <tr>
            <td>id</td>
            <td>Productype</td>
            <td>ProductCode</td>
            <td>ProductName</td>
            <td>Quantity</td>
            <td>note</td>
        </tr>
    <tbody>
         @foreach($products as $product)
         <tr>
            <td>{{$product['id']}}</td>
            <td>{{$product['Productype']}}</td>
            <td>{{$product['ProductCode']}}</td>
            <td>{{$product['ProductName']}}</td>
            <td>  <a href="/product/update/{{$product['id']}}">update</a>
            <form action="/product/delete/{{$product->id}}" method="post">
                    
            <button  onclick="return confirm('Bạn có chắc chắn muốn xóa')" type="submit">Xóa</button>
            @csrf 
             @method('DELETE')
            </form>
       
            </td>
         </tr>
         @endforeach
    </tbody>

    </table>
    <h3>Bạn muốn tạo mới</h3>
    <a style="margin: 20px;" href="/product/create">addproduct</a>
    
        

</body>
</html>