@extends('layouts.main')

@section('content')
    <article>
        <h3>{{ $blogs->title }}</h3>
        <h5>By : Yodantya in <a href="categories/{{ $blogs->category->slug }}">{{ $blogs->category->name }}</a></h5>
        <div style="font-size: 17px">
            {{-- berfungsi untuk tidak escape tag html --}}
            {!! $blogs->body !!}
        </div>
    </article>

    {{-- <a href="blog" class="btn btn-warning">Back</a> --}}
@endsection