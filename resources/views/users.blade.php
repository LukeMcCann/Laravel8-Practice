<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users Page</title>
</head>
<body>
    <h3>Math</h3>
    <p> We can use php in blade tempaltes by including two sets of nested curly braces</p>
    <p>10 * 2 = {{ 10 * 2}} </p>
    <br />
    <h3>PHP Methods</h3>
    <p>This same technique also allows us to write PHP and use methods</p>
    <p>Registered Users: {{ count($users) }}</p>
    <br />
    <h3>Conditionals</h3>
    <p>You may also use loops and conditionals</p>
    @foreach ($users as $user)
        @if ($user == 'Luke')
            <h1>{{ $user }} exists!</h1>
        @else 
            <h1>{{ $user }} exists!</h1>
        @endif
    @endforeach
</body>
</html>