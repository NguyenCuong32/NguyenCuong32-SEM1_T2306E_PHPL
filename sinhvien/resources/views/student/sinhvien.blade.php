<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create new students</title>
</head>
<body>
    <form action="/sinhvien/create" method ="post">
    @csrf
        <label for="studentname"> Student Name</label>
        <input type="text" name="studentname" id="">
        <br><br>
        <label for="studentage"> Student Age</label>
        <input type="text" name="studentage" id="">
        <br><br>
        <label for="Address"> Address</label>
        <input type="text" name="address" id="">
        <br><br>
        <label for="email">Email</label>
        <input type="email" name="email" id="">
        <br><br>
        <label for="password ">Password</label>
        <input type="password" name="password" id="">
        <br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>