<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TUMA_QLSV</title>
</head>
<body>
       <table border="1">
        <thead> 
        <tr>
        <th colspan="7">STUDENT INFORMATION</th>
    </tr>
            <th>ID</th>
            <th>Student Name</th>
            <th>Student Age</th>
            <th>Address</th>
            <th>Create At</th>
            <th>Update At</th>
            <th>Update</th>
</thead>
<tbody>
@foreach($students as $student)
    <tr>    
        <td>{{$student-> id}}</td>
        <td>{{$student-> studentname}}</td>
        <td>{{$student-> studentage}}</td>
        <td>{{$student-> address}}</td>
        <td>{{$student->created_at}}</td>
        <td>{{$student->updated_at}}</td>
        <td><a href ="/student/update/{{$student-> id}}">Update </a></td>
    </tr>     
    @endforeach
</tbody>
</table>
<br>
<b>Register Click Here: </b>
<a href = "/student/create"><b>Create New Student</b></a>
</html>