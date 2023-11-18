<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eric</title>
</head> 
<h2>Login Information</h2>
    <form action="/student/create" method = "post">
        @csrf
        <label for="studentname"><b>Student Name</b></lable>
        <br>
        <input type="text" name="studentname">
        <br>
        <label for="studentage"><b>Student Age</b></lable>	
        <br>
        <input type="text" name="studentage">
        <br>
        <label for="birthday"><b>Birthday</b></lable>	
        <br>
        <input type="date" name="birthday">
        <br>
        <label for="address"><b>Address</b></label>
        <br>
        <input type="text" name="address">
        <br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>