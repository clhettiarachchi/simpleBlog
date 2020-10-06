@extends('layouts.app')

@section('content')

    <h1>Posts</h1>

    @if (count($posts) > 0)

        @foreach ($posts as $post)
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title"><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h3>
                    <p class="card-text">Created at: {{ $post->created_at }}</small>
                </div>
            </div>
        @endforeach

    @else
        <p>No posts found</p>
    @endif

@endsection
