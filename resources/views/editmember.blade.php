<h1>Edit {{ $el->name }}</h1>
<form action="{{route('update')}}" method="POST">
    @csrf
    <input type="hidden" name="_id" value="{{$el->id}}">
    <input type="text" name="name" placeholder="Username" value="{{$el->name}}"><br /><br />
    <input type="text" name="email" placeholder="Email" value="{{$el->email}}"><br /><br />
    <input type="text" name="address" placeholder="Address" value="{{$el->address}}"><br /><br />
    <button type="submit">Update Member</button>
</form>