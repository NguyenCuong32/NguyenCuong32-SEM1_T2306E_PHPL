<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        input{
            margin: 20px;
        }
    </style>
</head>
<body>
    <h2> create a product</h2>
    <form action="/product/create" method="post">
        @csrf
        <label for="Productype">Productype</label>
        <input type="text" name="Productype"  id="">
       
        <br>
        <label for="ProductCode ">ProductCode </label>
        <input type="text" name="ProductCode"    id="">
       
       <br>
       <label for="ProductName">ProductName</label>
         <input type="text" name="ProductName">
       
         <br>
        <label for="Quantity">Quantity</label>
        <input type="number" name="Quantity">
        <br>
        <label for="note">note</label>
        <input type="text" name="note">
        <br>
        <input type="submit" value="submit">


    </form>
</body>
</html>