<h1>User Login</h1>

{{ print_r($data)}}

<form method="POST">
    @csrf
    <input type="text" name="username" placeholder="Username" /><br /><br />
    <input type="text" name="password" placeholder="Password" /><br /><br />
    <button type="submit">Login</button>
</form>