<h1>User Login</h1>

<form method="post" action="users">
    @csrf
    <input type="text" name="username"/>
    <input type="password" name="password"/>
    <button type="submit">Login</button>
</form>