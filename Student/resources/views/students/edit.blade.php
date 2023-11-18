<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eric</title>
</head> 
<h2>Edit student</h2>
    <form action="/student/update/{{$students->id}}" method = "post">
        @csrf
        <label for="studentname"><b>Student Name</b></lable>
        <br>
        <input type="text" name="studentname" value="{{$students->studentname}}">
        <br>
        <label for="studentage"><b>Student Age</b></lable>
        <br>
        <input type="text" name="studentage" value="{{$students->studentage}}">
        <br>
        <label for="birthday"><b>Birthday</b></lable>
        <br>
        <input type="date" name="birthday" value="{{$students->birthday}}">
        <br>
        <label for="address"><b>Address</b></label>
        <br>
        <input type="text" name="address"> 
        <br>
        <button type="submit">Saved</button>
    </form>
</body>
</html>
