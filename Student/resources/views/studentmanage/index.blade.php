<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Student</title>
</head>
<body>
    <button type="button" class="btn btn-primary" ><a style="text-decoration: none;color:white" href="/create">New student</a></button>
    <table class="table table-striped">
        <thead>
            <th>Student Name</th>
            <th>Age</th>
            <th>address</th>
            <th>Update</th>
            <th>Delete</th>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <td>{{$student->studentname}}</td>
                    <td>{{$student->studentage}}</td>
                    <td>{{$student->address}}</td>
                    <td><a class="btn btn-warning" style="text-decoration: none" href="/update/{{$student->id}}">Edit</a></td>
                    <td><form action="/delete/{{$student->id}}" method="post" >
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Delete" class="btn btn-danger" >
                        </form></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>