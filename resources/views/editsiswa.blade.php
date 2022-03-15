@extends('layout.template')
@section('title','Edit Siswa')
    

@section('content')
<form action="/siswa/ubah" method="post">
    {{ csrf_field() }}
    <table>
        @foreach ($hasil as $h)
    <input type="hidden" name="id" value="{{$h->id_siswa}}">   
    <tr><td>NIS</td><td><input type="text" name="nis" value="{{$h->nis}}" required></td></tr>
        <tr><td>Nama Siswa</td><td><input type="text" name="nama_siswa" value="{{$h->nama_siswa}}" required></td></tr>
        <tr><td>Kelas</td><td><input type="text" name="kelas" value="{{$h->kelas}}" required></td></tr>
        @endforeach
        
        <tr><td><a href="/siswa" class="btn btn-success tbn-sm">Kembali</a></td>
            <td><input type="submit" value="Edit Siswa"></td>
        </tr>
    </table>
</form>
@endsection