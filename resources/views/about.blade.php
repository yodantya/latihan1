@extends('layouts.main')

@section('content')
    <h3>Halaman About</h3>

    <h4>{{ $nama }}</h4>
    <p>{{ $email }}</p>
    <img src="images/{{ $image }}" alt="Jenengku" width="200" class="img-thumbnail rounded-circle">
@endsection