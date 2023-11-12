<!DOCTYPE html>
<html language = "en">

<head>
    <meta charset="UTF-8">
</head>

<body>
    <h2>Get Users </h2>
    <a href="/users/create">Create new User</a>
    <table class ="table">
        <thead>
            <th>Id</th>
            <th>User name</th>
            <th>Password</th>
            <th>Method</th>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>

                    <a href="/users/update/{{$user->id}}">Update</a>
                    <form action="/users/delete/{{$user->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type = "submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</body>

</html>