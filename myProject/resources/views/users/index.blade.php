<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Get user</h2>
    <a  style="margin: 20px;" href="/users/user">create new user</a>
    <table class="table">
        <thead>
            <th>name</th>
            <th>email</th>
            <th>Create at</th>
            <th>Up date at</th>
            <th> hành động</th>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{$user['name']}}</td>
                <td>{{$user['email']}}</td>
                <td>{{$user['created_at']}}</td>
                <td>{{$user['updated_at']}}</td>
                <td ><a  href="update/{{$user -> id}}">update</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
</body>
</html>