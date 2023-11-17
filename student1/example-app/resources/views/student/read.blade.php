<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="/add">Creat Student</a>
    <table>
        <thead>
            <th>id</th>
            <th>name</th>
            <th>age</th>
            <th>address</th>
        </thead>
        <tbody>
            @foreach ($student as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->age}}</td>
                <td>{{$user->address}}</td>
                <td><a href="/edit/{{$user->id}}">Edit</a></td>
                <td>
                    <form action="{{route('delete',$user)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" name="delete" value="Delete">
                    </form>
                </td>
            </tr>
            @endforeach
</body>

</html>