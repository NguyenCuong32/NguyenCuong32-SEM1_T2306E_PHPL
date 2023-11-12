<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create new user</title>

</head>

<body>
    <form action="/user/create" method="post">
        @csrf
        <label>Name</label>
        <input type="text" name="name">
        <br>
        <label for="email">Email</label>
        <input type="text" name="email">
        <br>
        <label for="text">Password</label>
        <input type="password" name="password">
        <br>
        <input type="submit" value="Submit">
    </form>
</body>

</html>