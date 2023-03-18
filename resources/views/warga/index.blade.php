<a href="/warga/create">Tambahkan Warga</a>
<table border="1">
    <tr>
        <th>Nama</th>
        <th>NIK</th>
        <th>No. KK</th>
        <th>Jenis Kelamin</th>
        <th>Alamat</th>
        <th>Action</th>
    </tr>
    @foreach($warga as $w)
    <tr>
        <td>{{$w->nama}}</td>
        <td>{{$w->nik}}</td>
        <td>{{$w->no_kk}}</td>
        <td>{{$w->jenis_kelamin}}</td>
        <td>{{$w->alamat}}</td>
        <td>
            <a href="/warga/{{ $w->id }}/edit">Edit</a>
            <form action="/warga/{{ $w->id }}" method="POST">
                @csrf
                @method('delete')
               <input type="submit" value="Delete"> 
            </form>
        </td>
    </tr>
    @endforeach
</table>