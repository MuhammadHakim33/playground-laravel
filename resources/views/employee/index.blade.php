<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee</title>
</head>
<body>

    <ol>
        @foreach($employees as $employee)
            <li>
                <p style="margin:4px;">NO : {{ $employee->emp_no }}</p>
                <p style="margin:4px;">TANGGAL LAHIR : {{ $employee->birth_date }}</p>
                <p style="margin:4px;">NAMA : {{ $employee->first_name }} {{ $employee->last_name }}</p>
                <p style="margin:4px;">TANGGAL KERJA : {{ $employee->hire_date }}</p>
                <ul>
                    @foreach($employee->salaries as $salary)
                        <li>GAJI : {{ $salary->salary }} ({{ $salary->from_date }} Sampai {{ $salary->to_date }})</li>
                    @endforeach
                </ul>
            </li>
        @endforeach
    </ol>

</body>
</html>
