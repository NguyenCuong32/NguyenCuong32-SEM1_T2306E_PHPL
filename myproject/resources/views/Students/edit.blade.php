<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/student/update/{{$student->id}}" method="post">
    @csrf
    <label for="name">Name</label>
    <input type="text" name="name" value={{$student->name}}>
    <br>
    <label for="email">Email</label>
    <input type="email" name="email" value={{$student->email}}>
    <br>
    
    <label for="age">Age</label>
    <input type="text" name="age" value={{$student->age}}>
    <br>
    <label for="adress">Adress</label>
    <input type="text" name="adress" value={{$student->adress}}>
    <br>
    <label for="password">Password</label>
    <input type="password" name="password" id="">
    <br>
    <input type="submit" value="edit user">
    </form>
</body>
</html>