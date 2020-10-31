<h1>File Upload</h1>

<form method="POST" action="" enctype="multipart/form-data">
    @csrf    
    <input type="file" name="file"><br/><br/>
    <button type="submit">Upload File</button>
</form>