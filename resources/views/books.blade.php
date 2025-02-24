<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books List</title>
    <style>
        body { font-family: Arial, sans-serif; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid black; padding: 10px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h2>My Books List</h2>
    <table>
        <thead>
            <tr>
                <th>Book Title</th>
                <th>Price ($)</th>
                <th>Category</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
                <tr>
                    <td>{{ $book['name'] }}</td>
                    <td>{{ $book['price'] }}</td>
                    <td>{{ $book['genre'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
