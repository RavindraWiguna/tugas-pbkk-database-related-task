@extends('layouts.template')

@section('page-title')
<title>Learn Laravel-Article: {{ $article->title }}</title>
@endsection

@section('container')
<article class="mb-5">
    <h3>{{ $article["title"] }}</h3>
    <h6>By: {{ $article["author"] }}</h6>
    <h6>Category: <a href="/categories/{{ $article->category->slug }}">{{ $article->category->name }}</a></h6>
    <p>{!! $article["body"] !!}</p>
</article>
@endsection