<h1>User List</h1>

<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>CreatedAt</th>
    </tr>
    @foreach($members as $memb)
    <tr>
        <td>{{$memb->id}}</td>
        <td>{{$memb->name}}</td>
        <td>{{$memb->email}}</td>
        <td>{{$memb->created_at}}</td>
    </tr>
    @endforeach
</table>