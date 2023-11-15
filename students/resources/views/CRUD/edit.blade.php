<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        @csrf
        <label>Username123</label><br>
        <input type="text" name="username" value="{{$user->username}}"><br>
        <label>Fullname</label><br>
        <input type="text" name="fullname" value="{{$user->fullname}}"><br>
        <label>Date</label><br>
        <input type="date" name="date" value="{{$user->date}}"><br>
        <label>Email</label><br>
        <input type="text" name="email" value="{{$user->email}}"><br>
        <label >Password</label><br>
        <input type="password" name="password"><br>
        <input type="submit"  value="edit">
    </form>
</body>
</html>