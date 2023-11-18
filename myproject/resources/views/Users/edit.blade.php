<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/users/update/{{$user->id}}" method="post">
    @csrf
    <label for="name">Name</label>
    <input type="text" name="name" value={{$user->name}}>
    <br>
    <label for="email">Email</label>
    <input type="email" name="email" value={{$user->email}}>
    <br>
    <label for="password">Password</label>
    <input type="password" name="password" id="">
    <input type="submit" value="edit user">
    </form>
</body>
</html>