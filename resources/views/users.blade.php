<h1>User List</h1>

<table border="1">
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Email</td>
        <td>Profile Photo</td>
    </tr>
    @foreach ($collection as $user)
    <tr>
        <td>{{$user['id']}}</td>
        <td>{{$user['first_name']." ".$user['last_name']}}</td>
        <td>{{$user['email']}}</td>
        <td><img src="{{$user['avatar']}}" height="100" /></td>
    </tr>
    @endforeach
</table>