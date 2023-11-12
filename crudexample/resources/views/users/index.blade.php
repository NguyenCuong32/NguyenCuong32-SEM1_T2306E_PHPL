<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="/user/create">Create new User</a>
    <table id="userTable">
    <thead>
        <th>Name</th>
        <th>Email</th>
        <th>Create At</th>
        <th>Update At</th>
        <th>Actions</th>
    </thead>
    <tbody>
    @foreach($users1 as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->create_at }}</td>
                <td>{{ $user->update_at }}</td>
                <td>
                    <a href="/user/update/{{$user->id}}">Update</a>
                </td>
            </tr>
        @endforeach

    
    </tbody>
    </table>
</body>
</html>