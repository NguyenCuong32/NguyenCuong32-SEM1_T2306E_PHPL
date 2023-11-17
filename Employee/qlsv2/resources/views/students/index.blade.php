

<!DOCTYPE html>
<html>
<head>
    <title>QLSV</title>
</head>
<body>

<h1>Student List</h1>

<a href="{{ route('students.create') }}">Add Student</a>

<table border="1">
    <tr>
        <th>Name</th>
        <th>Class</th>
        <th>Address</th>
        <th>Birthdate</th>
        <th>Gender</th>
        <th>Actions</th>
    </tr>
    @foreach($students as $student)
        <tr>
            <td>{{ $student->name }}</td>
            <td>{{ $student->class }}</td>
            <td>{{ $student->address }}</td>
            <td>{{ $student->birthdate }}</td>
            <td>{{ $student->gender }}</td>
            <td>
                <a href="{{ route('students.edit', $student->id) }}">Edit</a>
                <form method="post" action="{{ route('students.destroy', $student->id) }}" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>

</body>
</html>
