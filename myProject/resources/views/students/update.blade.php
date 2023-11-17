<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>update student</h1>
    <form action="/student/update/{{$student ->id}}" method = 'post'>
    @csrf
    name <input type="text" name="name" value ="{{$student->name}}">
    <br>
    age <input type="number" name="age" value ="{{$student->age}}"><br>
    address <input type="text" name="adress"value ="{{$student->address}}">
    <br>
    <input type="submit" value="submit">

    </form>
</body>
</html>