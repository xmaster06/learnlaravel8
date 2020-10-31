<h1>User Login</h1>

<form method="post" action="">
    @csrf
    <input type="text" name="username" placeholder="Username"/><br/><br/>
    <input type="password" name="password" placeholder="Password"><br/><br/>
    <button type="submit">Login</button>
</form>