

<!DOCTYPE html>
<html>
<head>
    <title>Employee </title>
</head>
<body>

<h1>Edit Employee</h1>

<form method="post" action="{{ route('employees.update', $employee->id) }}">
    @csrf
    @method('PUT')
    <label for="name">Name:</label>
    <input type="text" name="name" value="{{ $employee->name }}" required><br>

    <label for="gender">Gender:</label>
    <input type="text" name="gender" value="{{ $employee->gender }}" required><br>

    <label for="address">Address:</label>
    <input type="text" name="address" value="{{ $employee->address }}" required><br>

    <label for="birthdate">Birthdate:</label>
    <input type="date" name="birthdate" value="{{ $employee->birthdate }}" required><br>

    <label for="base_salary">Base Salary:</label>
    <input type="number" name="base_salary" value="{{ $employee->base_salary }}" required><br>

    <label for="total_salary">Total Salary:</label>
    <input type="number" name="total_salary" value="{{ $employee->total_salary }}" required><br>

    <button type="submit">Update Employee</button>
</form>

</body>
</html>
