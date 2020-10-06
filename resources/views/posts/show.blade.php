@extends('layouts.app')

@section('content')

<a href="/posts" class="btn btn-primary">Go Back</a>
<h1>{{ $post->title }}</h1>

<div>
    <p>{{ $post->body }}</p>
</div>

<hr>

<small>Created at: {{ $post->created_at }} }}</small>

<hr>

<a href="/posts/{{ $post->id }}/edit" class="btn btn-primary">Edit</a>

<form method="POST" action="/posts/{{ $post->id }}">
    @csrf
    @method ('DELETE')
    <input type="submit" class="btn btn-danger" value="Delete">
</form>

@endsection