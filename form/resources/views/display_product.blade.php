<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>E-Commerse</title>
</head>
<body>
    <h1>Users</h1>
<table border="1">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Category</th>
        <th>Price</th>
        <th>Quantity</th>
    </tr>
  
        @foreach ($details as $det )
            <tr>
         <td>{{ $det['id'] }}</td>
        <td>{{ $det['name'] }}</td>
        <td>{{ $det['category'] }}</td>
        <td>{{ $det['price'] }}</td>
        <td>{{ $det['quantity'] }}</td>
            </tr>            
        @endforeach
        
</table>
<a href="home" class="btn-display"><button type="submit">HOME</button></a>
</body>
</html>