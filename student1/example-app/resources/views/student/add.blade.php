<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="/add" method="POST">
        @csrf
        <lable>name</lable><br>
        <input type=" text" name="name"></input><br>
        <lable>age</lable><br>
        <input type="text" name="age"></input><br>
        <lable">address</lable><br>
            <input type="text" name="address"></input><br>
            <input type="submit" value="submit">
    </form>
</body>

</html>