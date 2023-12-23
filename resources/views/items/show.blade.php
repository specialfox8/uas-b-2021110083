@extends('layouts.master')

@section('title', $items->name)

@section('content')
    <article class="blog-post my-4">
        <h1 class="display-5 fw-bold">{{ $items->name }}</h1>
        <p>{{ $items->price }}</p>
        <p>{{ $items->stock }}</p>
        <p class="blog-post-meta">{{ $items->updated_at }}</p>
    </article>
@endsection
