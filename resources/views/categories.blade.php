@extends('template')

@section('container')
    <h1>Halaman Kategori</h1>
    <hr />
    @foreach ($categories as $category)
        <div>
            <a href="/categories/{{ $category->slug }}">{{ $category->name }}</a>
        </div>
    @endforeach
@endsection
