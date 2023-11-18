<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="/user">create new user</a>
    <table class="table">
        <thead>
            <th>Name</th>
            <th>Email</th>
            <th>create at</th>
            <th>update at</th>
            <th>action</th>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->created_at}}</td>
                <td>{{$user->updated_at}}</td>
                <td><a href="/users/update/{{$user->id}}">update</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>