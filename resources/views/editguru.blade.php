@extends('layout.template')
@section('title','Edit Guru')
    

@section('content')
<form action="/guru/ubah" method="post">
    {{ csrf_field() }}
    <table>
        @foreach ($hasil as $h)
    <input type="hidden" name="id" value="{{$h->id_guru}}">   
    <tr><td>NIP</td><td><input type="text" name="nip" value="{{$h->nip}}" required></td></tr>
    <tr><td>Nama Guru</td><td><input type="text" name="nama_guru" value="{{$h->nama_guru}}" required></td></tr>
    <tr><td>Mata Pelajaran</td><td><input type="text" name="mapel" value="{{$h->mapel}}" required></td></tr>
        @endforeach
        
        <tr><td><a href="/guru" class="btn btn-success tbn-sm">Kembali</a></td>
            <td><input type="submit" value="Edit Guru"></td>
        </tr>
    </table>
</form>
@endsection