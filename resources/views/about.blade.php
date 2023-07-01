@extends('layouts.main')

@section('container')
    <h1> Halaman About</h1>
    <h3>{{ $nama }}</h3>
    <p>{{ $email }}</p>
    <img src="img/{{ $image }}" alt="{{ $nama }}" width="200" height="200" class="img-thumnail rounded-circle">
@endsection
