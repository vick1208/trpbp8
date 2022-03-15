@extends('layout.template')
@section('title','Detail Siswa')

@section('content')
<table class="table">
    <tr>
        <td width="100px">NIS</td>
        <td width="30px">:</td>
        <td>{{$siswa->nis}}</td>
    </tr>
    <tr>
        <td width="100px">Nama Siswa</td>
        <td width="30px">:</td>
        <td>{{$siswa->nama_siswa}}</td>
    </tr>
    <tr>
        <td width="100px">Kelas</td>
        <td width="30px">:</td>
        <td>{{$siswa->kelas}}</td>
    </tr>
    <tr>
        <td><a href="/siswa" class="btn btn-success tbn-sm">Kembali</a></td>
    </tr>
</table>
@endsection
