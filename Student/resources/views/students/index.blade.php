<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Information</title>

  <style>
    table {
      border-collapse: collapse;
      width: 100%;
      font-family: sans-serif;
      margin-bottom: 20px;
    }

    th, td {
      padding: 8px;
      text-align: left;
      border: 1px solid #ddd;
    }

    th {
      background-color: #f0f0f0;
      font-weight: bold;
    }

    a {
      text-decoration: none;
      color: black;
      font-weight: bold;
    }

    .update-button {
      padding: 5px 10px;
      background-color: #007bff;
      color: white;
      border: none;
      cursor: pointer;
      border-radius: 5px;
    }

    .delete-button {
      padding: 5px 10px;
      background-color: #dc3545;
      color: white;
      border: none;
      cursor: pointer;
      border-radius: 5px;
    }
  </style>
</head>
<body>
  <table border="1">
    <thead>
      <tr>
        <th colspan="8">STUDENT INFORMATION</th>
      </tr>
      <tr>
        <th>ID</th>
        <th>Student Name</th>
        <th>Student Age</th>
        <th>Birthday</th>
        <th>Address</th>
        <th>Create At</th>
        <th>Update At</th>
        <th>Actions</th>
      </tr>
    </thead>

    <tbody>
      @foreach($students as $student)
        <tr>
          <td>{{$student->id}}</td>
          <td>{{$student->studentname}}</td>
          <td>{{$student->studentage}}</td>
          <td>{{$student->birthday}}</td>
          <td>{{$student->address}}</td>
          <td>{{$student->created_at}}</td>
          <td>{{$student->updated_at}}</td>
          <td>
            <a href="/student/update/{{$student->id}}" class="update-button">Update</a>
            <form action="/student/delete/{{$student->id}}" method="POST" style="display: inline-block;">
              @csrf
              @method('DELETE')
              <input type="submit" name="Delete" value="delete">
            </form>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>

  <br>

  <b>Register Click Here: </b>
  <a href="/student/create"><b>Create New Student</b></a>
</body>
</html>
