<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        input{
            margin: 20px;
        }
    </style>
</head>
<body>
    <h2> create a student</h2>
    <form action="/student/create" method="post">
        @csrf
        <label for="name">fullname</label>
        <input type="text" name="name" value="{{old('name')}}" id="">
        @error('name')
            {{ $message }}
        @enderror
        <br>
        <label for="age ">age </label>
        <input type="number" name="age"  value="{{old('age')}}"  id="">
        @error('age')
            {{ $message }}
        @enderror
       <br>
        adress <input type="text" name="adress">
        @error('adress')
            {{ $message }}
        @enderror
        <br>
        <input type="submit" value="submit">
    </form>
</body>
</html>