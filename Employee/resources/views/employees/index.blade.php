

<!DOCTYPE html>
<html>
<head>
    <title>Employee </title>
</head>
<body>

<h1>Employee List</h1>

<a href="{{ route('employees.create') }}">Add Employee</a>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Gender</th>
        <th>Address</th>
        <th>Birthdate</th>
        <th>Base Salary</th>
        <th>Total Salary</th>
        <th>Actions</th>
    </tr>
    @foreach($employees as $employee)
        <tr>
            <td>{{ $employee->id }}</td>
            <td>{{ $employee->name }}</td>
            <td>{{ $employee->gender }}</td>
            <td>{{ $employee->address }}</td>
            <td>{{ $employee->birthdate }}</td>
            <td>{{ $employee->base_salary }}</td>
            <td>{{ $employee->total_salary }}</td>
            <td>
                <a href="{{ route('employees.edit', $employee->id) }}">Edit</a>
                <form method="post" action="{{ route('employees.destroy', $employee->id) }}" style="display:inline;">
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
