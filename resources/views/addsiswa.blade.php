@extends('layout.template')
@section('title','Add Guru')
    

@section('content')
<form action="/siswa/simpan" method="post">
    {{ csrf_field() }}
    <table>
        <tr><td>NIS</td><td><input type="text" name="nis" required></td></tr>
        <tr><td>Nama Siswa</td><td><input type="text" name="nama_siswa" required></td></tr>
        <tr><td>Kelas</td><td><input type="text" name="kelas" required></td></tr>
        <tr><td><a href="/siswa" class="btn btn-success tbn-sm">Kembali</a></td>
            <td><input type="submit" value="Tambah Siswa"></td>
        </tr>
    </table>
</form>
@endsection