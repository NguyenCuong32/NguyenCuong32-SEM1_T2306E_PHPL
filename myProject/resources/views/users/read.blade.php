<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Get user</h2>
    <a href="/users/create">create new user</a>
    <table class="table">
        <thead>
            <th>User name</th>
            <th>Password</th>
            <th>Email</th>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{$user['name']}}</td>
                <td>{{$user['password']}}</td>
                <td>{{$user['email']}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
</body>
</html>