<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student Info</title>
</head>
<body>
    <form action="/sinhvien/update/{id}" method= "post">
        @csrf
        <label for="studentname"> Student Name</label>
        <input type="text" name="studentname" value = {{$student->studentname}}>
        <br><br>
        <label for="studentage"> Student Age</label>
        <input type="text" name="studentage" value = {{$student->studentage}}>
        <br><br>
        <label for="Address"> Address</label>
        <input type="text" name="address" value = {{$student->address}}>
        <br><br>
        <label for="email">Email</label>
        <input type="email" name="email" value = {{$student->email}}>
        <br><br>
        <label for="password ">Password</label>
        <input type="password" name="password">
        <br><br>
        <input type="submit" text ="Edit User">
    </form>
</body>
</html>