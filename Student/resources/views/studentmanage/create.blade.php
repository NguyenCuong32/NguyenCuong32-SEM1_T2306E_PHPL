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
        <h1>Add New Student</h1>
        <form action="/create" method="post" >
            @if ($errors->any())
                <div class="alert alert-danger text-center " >
                    <span class="text-danger" >Vui long kiem tra lai thong tin</span> 
                </div>
            @endif
            @csrf
            <div class="mb-3 mt-3">
                <label >StudentName:</label><br>
                <input type="text" name="studentname" class="form-control" ><br>
                    @error('studentname')
                        <span class="text-danger" >{{$message}}</span> <br>
                    @enderror
            </div>
            <div class="mb-3">
                <label class="form-label" >StudentAge:</label><br>
                <input type="date" name="studentage" class="form-control" ><br>
                    @error('studentage')
                    <span class="text-danger">{{$message}}</span> <br>
                    @enderror
            </div>
            <div class="mb-3">
                <label class="form-label" >Address:</label><br>
                <input type="text" name="address" class="form-control"><br>
                    @error('address')
                        <span class="text-danger" >{{$message}}</span>
                    @enderror
            </div>
                <input type="submit" value="Addnew" class="btn btn-primary" >
        </form>
        
        
        <button class="btn btn-info mt-3" ><a style="text-decoration: none; color:white" href="/">List Student</a></button>
    </div>
</body>
</html>