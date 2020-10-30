<h1>User Login</h1>


<form method="post" action="users">
    @csrf
    <input type="text" name="username" />
    <span style="color:red">@error('username'){{$message}}@enderror</span><br />
    <input type="password" name="password" />
    <span style="color:red">@error('password'){{$message}}@enderror</span><br />
    <button type="submit">Login</button>
</form>