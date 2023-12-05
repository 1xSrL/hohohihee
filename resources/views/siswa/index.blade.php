@extends('layout/aplikasi')

@section('konten')
<table class="table">
    <thead>
        <tr>
        <th>Nomor Induk</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Aksi</th>
        </tr>
    <thead>
    <tbody>
    @foreach ($data as $item)
        <tr>
            <td>{{ $item ->nomor_induk}}</td>
            <td>{{ $item ->nama}}</td>
            <td>{{ $item ->alamat}}</td>
            <td><a class='btn btn-secondary btn-sm' href='{{ url('/siswa/'.$item->nomor_induk)}}'>Detail</td>
        </tr>
    @endforeach
    </tbody>
</table>
{{ $data->links() }}
@endsection