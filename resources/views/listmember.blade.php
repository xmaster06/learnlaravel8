<h1>Member List</h1>
<br />
<table border="0">
    <tr>
        <th width="100" align="left">Adı</th>
        <th width="100" align="left">Eposta</th>
        <th width="100" align="left">Adresi</th>
        <th width="100">İşlemler</th>
    </tr>
    @foreach($list as $l)
    <tr>
        <td>{{ $l->name }}</td>
        <td>{{ $l->email }}</td>
        <td>{{ $l->address }}</td>
        <td align="center"><a href="{{ 'list/delete/'.$l->id }}">Sil</a></td>
    </tr>
    @endforeach
</table>