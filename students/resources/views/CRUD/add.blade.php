<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        @csrf
        @if ($errors->any())
            <h3 style="color: red">vui lòng kiểm tra lại</h3>
        @endif
        <label>Username</label><br>
        <input type="text" name="username" value="{{old('username')}}"><br>
            @error('username')
                <span style="color: red">{{$message}}</span><br>
            @enderror    
        <label>Fullname</label><br>
        <input type="text" name="fullname" value="{{old('fullname')}}"><br>
            @error('fullname')
                <span style="color: red">{{$message}}</span><br>
            @enderror
        <label>Date</label><br>
        <input type="date" name="date" value="{{old('date')}}"><br>
        <label>Email</label><br>
        <input type="text" name="email" value="{{old('email')}}"><br>
            @error('email')
                <span style="color: red">{{$message}}</span><br>
            @enderror
        <label >Password</label><br>
        <input type="password" name="password"><br>
            @error('password')
                <span style="color: red">{{$message}}</span><br>
            @enderror
        <input type="submit" name="submit" value="submit">
    </form>
    
</body>
</html>