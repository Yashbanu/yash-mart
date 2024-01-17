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
    <h1>ADD MEMBER</h1>
<form action="add" method="post">
    @csrf
  
    <label>Name:</label><br>
    <input type="text" name="name"><br><br>
    @error('name') 
        <span>{{ $message }}</span><br>
    @enderror<br>
    <label>Category:</label><br><br><br>
  
<input type="radio"  name="category" value="software">
<label >Software</label>
<input type="radio"  name="category" value="Hardware">
<label >Hardware</label>
    <br><br><br>
    @error('category') 
        <span>{{ $message }}</span><br><br>
    @enderror
    <label>Price:</label><br>
    <input type="number" name="price"><br><br><br>
    @error('price') 
        <span>{{ $message }}</span><br><br>
    @enderror
    <label>Quantity</label><br>
    <input type="number" name="quantity"><br><br><br>
    @error('quantity') 
        <span>{{ $message }}</span><br><br>
    @enderror
    <button type="submit">ADD MEMBER</button>
</form>

</body>
</html>