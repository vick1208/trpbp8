@extends('layout.template')
@section('title','Add Guru')
    

@section('content')
<form action="/guru/simpan" method="post">
    {{ csrf_field() }}
    <table>
        <tr><td>NIP</td><td><input type="text" name="nip" required></td></tr>
        <tr><td>Nama Guru</td><td><input type="text" name="nama_guru" required></td></tr>
        <tr><td>Mata Pelajaran</td><td><input type="text" name="mapel" required></td></tr>
        <tr><td><a href="/guru" class="btn btn-success tbn-sm">Kembali</a></td>
            <td><input type="submit" value="Tambah Guru"></td>
        </tr>
    </table>
</form>
@endsection