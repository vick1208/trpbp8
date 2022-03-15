@extends('layout.template')
@section('title','Detail Guru')
@section('content')

<table class="table">
    <tr>
        <td width="100px">NIP</td>
        <td width="30px">:</td>
        <td>{{$guru->nip}}</td>
    </tr>
    <tr>
        <td width="100px">Nama Guru</td>
        <td width="30px">:</td>
        <td>{{$guru->nama_guru}}</td>
    </tr>
    <tr>
        <td width="100px">Mata Pelajaran</td>
        <td width="30px">:</td>
        <td>{{$guru->mapel}}</td>
    </tr>
    <tr>
        <td><a href="/guru" class="btn btn-success tbn-sm">Kembali</a></td>
    </tr>
</table>

@endsection
  
    