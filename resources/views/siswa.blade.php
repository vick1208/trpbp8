@extends('layout.template')
@section('title','Siswa')

@section('content')
<a href="/siswa/tambah" class="btn btn-sm btn-primary">Add data siswa</a>
<br>
<br>
    <table class="table table-striped">
        <thead>
            <th>No</th>
            <th>NIS</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Action</th>
        </thead>
        <tbody>
            <?php $no=1 ?>
            @foreach ($siswa as $data)
                <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $data->nis }}</td>
                <td>{{ $data->nama_siswa }}</td>
                <td>{{ $data->kelas }}</td>
                <td>
                <a href="/siswa/detail/{{$data->id_siswa}}" class="btn btn-sm btn-success">Detail</a>
                <a href="/siswa/edit/{{$data->id_siswa}}" class="btn btn-sm btn-warning">Edit</a>
                <a href="/siswa/hapus/{{$data->id_siswa}}" class="btn btn-sm btn-danger">Delete</a>
                </td>
                </tr>
            @endforeach
        </tbody>

    </table>
@endsection
