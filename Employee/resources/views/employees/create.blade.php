

<!DOCTYPE html>
<html>
<head>
    <title>Employee </title>
</head>
<body>

<h1>Add Employee</h1>

<form method="post" action="{{ route('employees.store') }}">
    @csrf
    <label for="name">Name:</label>
    <input type="text" name="name" required><br>

    <label for="gender">Gender:</label>
    <input type="text" name="gender" required><br>

    <label for="address">Address:</label>
    <input type="text" name="address" required><br>

    <label for="birthdate">Birthdate:</label>
    <input type="date" name="birthdate" required><br>

    <label for="base_salary">Base Salary:</label>
    <input type="number" name="base_salary" required><br>

    <label for="total_salary">Total Salary:</label>
    <input type="number" name="total_salary" required><br>

    <button type="submit">Add Employee</button>
</form>

</body>
</html>
