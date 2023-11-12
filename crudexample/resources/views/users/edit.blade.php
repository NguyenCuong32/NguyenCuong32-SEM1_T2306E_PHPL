<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
</head>
<body>
    <form action="/users/update/{{$user->id}}" method="post">
    @csrf
    <label for="name">Name</label>
    <input type="text" name ="name" value="{{$user->name}}">
    <br>
    <label for="email" name ="email">Email</label>
    <input type="text" name ="email" value ="{{$user->email}}">
    <br>
    <label for="password" name ="password">Password</label>
    <input type="password" name ="password">
    <br>
    <input type="submit" text="Update User">
    </form>
</body>
</html>