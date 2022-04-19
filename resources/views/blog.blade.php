@extends('layouts.main')

@section('content')
    <h3>Halaman Blog</h3>
    
    @foreach ($post as $data)
    <article class="mb-5">
        <a href="post/{{ $data->slug }}"><h3>{{ $data->title }}</h3></a>
        {{-- <h5>By : {{ $data["author"] }}</h5> --}}
        <p style="font-size: 17px">{{ $data->excerpt }}</p>
    </article>
    @endforeach

@endsection