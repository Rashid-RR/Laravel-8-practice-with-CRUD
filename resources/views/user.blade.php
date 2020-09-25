<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <table class="table table-striped table-inverse table-responsive" border="1">
        <thead class="thead-inverse">
            <tr>
                <th>ID</th>
                <th>Email</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>User Image</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($collection as $item)
                    <tr>
                        <td scope="row">{{ $item['id'] }}</td>
                        <td>{{ $item['email'] }}</td>
                        <td>{{ $item['first_name'] }}</td>
                        <td>{{ $item['last_name'] }}</td>
                        <td><img src={{ $item['avatar'] }} /></td>
                    </tr>
                @endforeach
            </tbody>
    </table>
</body>
</html>