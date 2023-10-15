@extends('layouts.template')

@section('title', $book->title)

@section('content')
    <article class="blog-post my-4">
        <h1 class="display-5 fw-bold">{{ $book->ISBN }}</h1>
        <h1 class="display-5 fw-bold">{{ $book->Judul }}</h1>
        <h1 class="display-5 fw-bold">{{ $book->Kategori }}</h1>
        <h1 class="display-5 fw-bold">{{ $book->Penerbit }}</h1>
        <p class="blog-post-meta">{{ $book->updated_at }}</p>
    </article>
@endsection
