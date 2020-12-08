@include('header')
@csrf
<form action="form" method="POST">
    <input type="text" name="username" placeholder="Enter username" /> <br /><br />
    <input type="password" name="password" placeholder="Enter password" /> <br /><br />
    <button type="submit">Login</button>
</form>
@include('footer')