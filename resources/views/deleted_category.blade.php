@extends('template')

@section('container')
    <h1>Halaman Kategori : {{ $category }}</h1>
    <hr />
    @foreach ($articles as $article)
        <article class="mb-5">
            <h3>
                <a href="/article/{{ $article->slug }}">
                    {{ $article->title }}
                </a>
            </h3>
            <h6>Category:
                <a href="/categories/{{ $article->category->slug }}">{{ $article->category->name }}</a>
            </h6>
            <h6>By: {{ $article->author }}</h6>
            <p>{{ $article->excerpt }}</p>
        </article>
    @endforeach
@endsection
