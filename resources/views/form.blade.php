@include('header')

    <form action="form" method="POST">
        @csrf
        <input type="text" name="username" placeholder="Enter username" /> <br />
        <span class="error">@error('username') {{ $message }} @enderror</span> <br />
        <input type="password" name="password" placeholder="Enter password" /> <br />
        <span class="error"> @error('password') {{ $message }} @enderror</span> <br /> 
        <button type="submit">Login</button>
    </form>
@include('footer')