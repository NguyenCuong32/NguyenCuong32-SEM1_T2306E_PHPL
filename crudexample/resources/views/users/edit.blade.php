<!DOCTYPE html> <html lang="en"> <head> <meta charset="UTF-8"> <meta name="viewport" content="width=device-width,
    initial-scale=1.0"> <title>Edit User</title> </head>

<body> <h2>Edit user</h2>
    <form action="/user/update/{{$user->id}}" method="post">
        @csrf <label for="name">Name</label>
        <input type="text" name="name" value={{$user->name}}>
        <br>
        <label for="email">Email</label>
        <input type="text" name="email" value={{$user->email}}>
        <br>
        <label for="password">password</label>
        <input type="password" name="password">
        <input type="submit" text="Edit user">
    </form>
    </body>

    </html>