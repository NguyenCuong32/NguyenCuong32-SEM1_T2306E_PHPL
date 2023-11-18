<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="/student">create new student</a>
    <table class="table">
        <thead>
            <th>Name</th>
            <th>Email</th>
            <th>Adress</th>
            <th>Age</th>
            <th>create at</th>
            <th>update at</th>
            <th>action</th>
        </thead>
        <tbody>
            @foreach($students as $student)
            <tr>
                <td>{{$student->name}}</td>
                <td>{{$student->email}}</td>
                <td>{{$student->adress}}</td>
                <td>{{$student->age}}</td>
                <td>{{$student->created_at}}</td>
                <td>{{$student->updated_at}}</td>
                <td><a href="/student/update/{{$student->id}}">update</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>