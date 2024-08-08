@extends('layout.main')

@section('container')
    <h1>About</h1>
    <h2>Nama : {{ $name }}</h2>
    <h2>email : {{ $email}}</h2>
    <img src="img/{{ $img }}" alt="{{ $img }}" width="200">
@endsection
