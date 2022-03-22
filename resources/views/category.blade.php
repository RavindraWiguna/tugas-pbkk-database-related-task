@extends('layouts.template')

@section('page-title')
<title>Learn Laravel-Category:{{ $title }}</title>
@endsection

@section('container')
<h1>Halaman Categori {{ $category }}</h1>
<hr/>
@if (count($articles) < 1)
    <h2>Maaf saat ini belum ada article untuk kategori {{ $category }}</h2>
@else
@foreach ($articles as $article)
<article class="mb-5">
    <h3>
        <a href="/articles/{{ $article->slug }}">
            {{ $article->title }}
        </a>
    </h3>
    <h6>By: {{ $article->author }}</h6>
    <p>{{ $article->excerpt }}</p>
</article>
@endforeach    
@endif
@endsection