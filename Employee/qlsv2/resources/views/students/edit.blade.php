



<!DOCTYPE html>
<html>
<head>
    <title>Student Management System</title>
</head>
<body>

<h1>Edit Student</h1>

<form method="post" action="{{ route('students.update', $student->id) }}">
    @csrf
    @method('PUT')
    <label for="name">Name:</label>
    <input type="text" name="name" value="{{ $student->name }}" required><br>

    <label for="age">Age:</label>
    <input type="number" name="age" value="{{ $student->age }}" required><br>

    <label for="address">Address:</label>
    <input type="text" name="address" value="{{ $student->address }}" required><br>

    <button type="submit">Update Student</button>
</form>

</body>
</html>
