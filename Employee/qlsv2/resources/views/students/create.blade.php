

<!DOCTYPE html>
<html>
<head>
    <title>QLSV</title>
</head>
<body>

<h1>Add Student</h1>

<form method="post" action="{{ route('students.store') }}">
    @csrf
    <label for="name">Name:</label>
    <input type="text" name="name" required><br>

    <label for="class">Class:</label>
    <input type="text" name="class" required><br>

    <label for="address">Address:</label>
    <input type="text" name="address" required><br>

    <label for="birthdate">Birthdate:</label>
    <input type="date" name="birthdate" required><br>

    <label for="gender">Gender:</label>
    <select name="gender" required>
        <option value="male">Male</option>
        <option value="female">Female</option>
    </select><br>

    <button type="submit">Add Student</button>
</form>

</body>
</html>
