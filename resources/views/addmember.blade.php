<h1>Add Members</h1>
<form action="add" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Username"><br /><br />
    <input type="text" name="email" placeholder="Password"><br /><br />
    <input type="text" name="address" placeholder="Address"><br /><br />
    <button type="submit">Add Member</button>
</form>