<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form action="login" method="POST">
        @csrf
        <input type="text" name="user" placeholder="Enter username"> <br /> <br />
        <input type="password" name="password" placeholder="Enter password"> <br /> <br />
        <button type="submit">Login</button>
    </form>
</body>
</html>