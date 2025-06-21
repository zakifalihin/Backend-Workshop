<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="6">
        <thead>
            <tr>
                <th>No</th>
                <th>Buku</th>
                <th>Nama User</th>
            </tr>
        </thead>

        <tbody>
            @foreach($data as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->user->name }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>