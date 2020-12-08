<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Users</title>
</head>
<body>

    @include('header')
    @include('inner')

    <x-footer />


    <p>
        In this file the header and innter part of the content are rendered into
        the view using partials. Partials allow views to be broken down into 
        multiple parts, allowing you to re-use common structures (e.g. navbars).

        The footer uses a component. While they look the same they are very difference
        tools. A component only sees variables explicitly passed to it, whereas 
        a partial will adopt all variables from the current scope unless a specific set 
        of variables are defined and passed to it, in which case it becomes a local scope 
        once again.
    </p>
    
</body>
</html>