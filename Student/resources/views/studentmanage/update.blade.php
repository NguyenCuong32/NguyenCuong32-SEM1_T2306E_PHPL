<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Student</title>
</head>
<body>
    <div class="container mt-3 bg-light">
        <h1>Edit Info Student</h1>
        <form action="/update/{{$student->id}}" method="post" >
            @if ($errors->any())
                <div class="alert alert-danger text-center" >
                    <span>Xem lai thong tin update</span>
                </div>
            @endif
            @csrf
            <label for="studentname">StudentName:</label><br>
            <input type="text" name="studentname" class="form-control" value="{{$student->studentname}}" ><br>
                @error('studentname')
                    <span class="text-danger">{{$message}}</span><br>
                @enderror
            <label for="age">StudentAge:</label><br>
            <input type="date" name="studentage" class="form-control" value="{{$student->studentage}}" ><br>
                @error('studentage')
                    <span class="text-danger">{{$message}}</span><br>
                @enderror
            <label for="address">Address:</label><br>
            <input type="text" name="address" class="form-control" value="{{$student->address}}" ><br>
                @error('address')
                    <span class="text-danger">{{$message}}</span><br>
                @enderror
            <input type="submit" value="Update" class="btn btn-success " >
        </form>
    </div>  
</body>
</html>