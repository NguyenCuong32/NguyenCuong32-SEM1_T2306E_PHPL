<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>edit user</h2>
    <form action="/users/update/{{$user->id}}" method = "post">
      
       @csrf
        <label for="name">Name</label>
        <input type="text" name="name" value = {{$user -> name}} id="">
        <br><br>
        <label for="email">Email</label>
        <input type="email" name="email" value = {{$user -> email}} id="">
        <br><br>
        <label for="password ">Password</label>
        <input type="password" name="password" id="">
        <br><br>
        <input type="submit" value="Submit">

    </form>
</body>
</html>
</body>
</html>