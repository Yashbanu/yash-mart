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
    <h1>Login</h1>
    <form action="login" method="post">
        @csrf
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
        <label>
            Remember Me<input type="checkbox" name="remember me" >
        </label><br><br><br>
        

        <button type="submit" value="submit">submit</button><br><br><br>

        <a href="register">Register Now</a>
    </form>
</body>
</html>