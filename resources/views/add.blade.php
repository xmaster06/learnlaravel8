<h1>Add Member</h1>

@if(session('user'))
<h3 style="color:green"> {{ session('user') }} user has been added </h3>
@endif
<form method="post" action="">
    @csrf
    <input type="text" name="user" placeholder="Enter Username"><br /><br />
    <input type="password" name="pass" placeholder="Enter Password"><br /><br />
    <input type="text" name="email" placeholder="Enter Email"><br /><br />
    <button type="submit">Add Member</button>
</form>