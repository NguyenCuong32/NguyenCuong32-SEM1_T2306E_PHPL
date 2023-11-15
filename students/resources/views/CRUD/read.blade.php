<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="/add">Creat Student</a>
    <table>
        <thead>
            <th>Username</th>
            <th>Fullname</th>
            <th>Date</th>
            <th>Email</th>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                    <td>{{$user->username}}</td>
                    <td>{{$user->fullname}}</td>
                    <td>{{$user->date}}</td>
                    <td>{{$user->email}}</td>
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
        </tbody>
    </table>
</body>
</html>