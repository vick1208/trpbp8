@extends('layout.template')
@section('title','Guru')

@section('content')
<a href="/guru/tambah" class="btn btn-sm btn-primary">Add data guru</a>
<br>
<br>
    <table class="table table-hover">
        <thead>
            <th>No</th>
            <th>NIP</th>
            <th>Nama</th>
            <th>Mata pelajaran</th>
            <th>Action</th> 
        </thead>
        <tbody>
            <?php $no=1; ?>
            @foreach($guru as $data)
                <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $data->nip }}</td>
                <td>{{ $data->nama_guru }}</td>
                <td>{{ $data->mapel }}</td>
                <td>
                <a href="/guru/detail/{{$data->id_guru}}" class="btn btn-sm btn-success">Detail</a>
                <a href="/guru/edit/{{$data->id_guru}}" class="btn btn-sm btn-warning">Edit</a>
                <a href="/guru/hapus/{{$data->id_guru}}" class="btn btn-sm btn-danger">Delete</a>
                </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
    
@endsection
