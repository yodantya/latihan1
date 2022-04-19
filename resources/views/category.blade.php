@extends('layouts.main')

@section('content')
    {{ dd($post) }}
    <h3>Halaman Category : {{ $category }}</h3>
    
    @foreach ($post as $data)
    <article class="mb-5">
        <a href="post/{{ $data->slug }}"><h3>{{ $data->title }}</h3></a>

        <p style="font-size: 17px">{{ $data->excerpt }}</p>
    </article>
    @endforeach

@endsection