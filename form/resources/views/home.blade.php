
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
    <h1>E-Commerse</h1>
   <div class="home-form">
<a href="add"><button type="submit">ADD</button></a>
<a href="delete"><button type="submit">DELETE</button></a>
<a href="update"><button type="submit">UPDATE</button></a>
<a href="display"><button type="submit">VIEW</button></a>
   </div>

   <form action="logout" method="post">
    @csrf
    <button type="submit" value="logout">Logout</button>
</form>
</body>
</html>
