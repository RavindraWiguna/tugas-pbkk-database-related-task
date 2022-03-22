@extends('layouts.template')

@section('page-title')
<title>{{ $title }}</title>
@endsection

@section('container')
<h1 class="mb-5">Halaman Category Middleum</h1>
@foreach ($categories as $category)
<ul class="">
    <li>
        <h2><a href="/categories/{{ $category->slug }}">
            {{ $category->name }}
        </a></h2>
    </li>
</ul>
@endforeach
@endsection