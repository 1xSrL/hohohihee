@extends('layout/aplikasi')
@section('konten')
    <h1>{{ $judul }}</h1>
    <p style="font-size:20px;">lorem ipsum dilirum pentilum pipilum titilum</p>
    <p style="font-size:20px;">
        <ul>
            <li>Email : {{$kontak['email']}}</li>
            <li>Youtube : {{$kontak['youtube']}}</li>
        </ul>
    </p>
@endsection