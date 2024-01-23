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
    <h1>Register</h1>
    <form action="register" method="post">
        @csrf
        <label>Name</label><br><br>
        <input type="text" name="name" placeholder="enter name"><br><br>
        @error('name')
        <span>{{ $message }}</span>
        @enderror


        <label>email</label><br><br>
        <input type="email" name="email" placeholder="enter mail"><br><br>
        @error('email')
        <span>{{ $message }}</span>
        @enderror
            
        
        <label>password</label><br><br>
        <input type="password" name="password" placeholder="enter password"><br><br>

        @error('password')
        <span>{{ $message }}</span>
        @enderror<br>

        

        <button type="submit" value="submit">submit</button><br><br><br>

    
    </form>
</body>
</html>