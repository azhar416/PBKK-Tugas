@extends('template')

@section('container')
    <article class="mb-5">
        <h3>{{ $article->title }}
        </h3>
        <h6>Category: <a href="/categories/{{ $article->category->slug }}">{{ $article->category->name }}</a>
        </h6>
        <h6>By: 
            <a href="/authors/{{ $article->author->username }}" class="text-decoration-none">
                {{ $article->author->name }}
            </a>
        </h6>
        <p>{!! $article->body !!}</p>
    </article>
@endsection
