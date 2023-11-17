<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" 
    rel="stylesheet" >
    
</style>
</head>
<body>
    <h2>Danh sách học sinh trong lớp</h2>
    
    <table>
        <tr>
            <td>name</td>
            <td>age</td>
            <td>adress</td>
            <td>hành động</td>
        </tr>
    <tbody>
         @foreach($students as $student)
         <tr>
            <td>{{$student['name']}}</td>
            <td>{{$student['age']}}</td>
            <td>{{$student['address']}}</td>
            <td>  <a href="/student/update/{{$student['id']}}">update</a>
            <form action="/student/delete/{{$student->id}}" method="post">
                    
            <button class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa')" type="submit">Xóa</button>
            @csrf 
             @method('DELETE')
            </form>
       
            </td>
         </tr>
         @endforeach
    </tbody>

    </table>
    <h3>Bạn muốn tạo mới</h3>
    <a style="margin: 20px;" href="/student/create">addStudent</a>
    <div >
    {{ $students->onEachSide(5)->links() }}
    </div>
       
        

</body>
</html>