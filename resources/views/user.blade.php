<h1>User Login</h1>
<!-- 
    using PUT and DELTE requires the method_field to be specified
    This will generate a hidden input field containing a spoofed value of 
    the forms HTTP verb.
-->
<form action="user" method="POST">
    {{ method_field('PUT') }}
    @csrf
    <input type="text" name="user" placeholder="Enter name"> <br />
    <input type="password" name="password" placeholder="Enter name"> <br />
    <button type="submit">Login</button>
</form>