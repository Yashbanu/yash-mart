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
    <h1>UPDATE</h1>
<form action="updated" method="POST">
    @csrf
    
    <label>Name:</label><br>
    <input type="text" name="name" value="{{ $data['name'] }}"><br>
    <label>Category:</label><br>
    <input type="text" name="category" value="{{ $data['category'] }}"><br>
    <label>Price:</label><br>
    <input type="number" name="price" value="{{ $data['price'] }}"><br>
    <label>Quantity</label><br>
    <input type="number" name="quantity" value="{{ $data['quantity'] }}"><br><br>
    <button type="submit">UPDATE</button>
</form>
<a href="home"><button type="submit">HOME</button></a>
</body>
</html>