<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>CRUD Example</title>
</head>
<body>
    <h2>Create new User</h2>
    <form action="/users/create" method="post">
    @csrf
    <label for="Name">Name: <input type="text" name="name"></label><br>
    <label for="Email">Email: <input type="text" name="email"></label><br>
    <label for="Password">Password: <input type="text" name="password"></label><br>
    <button type="submit">Create User</button>
    </form>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
</body>
</html>