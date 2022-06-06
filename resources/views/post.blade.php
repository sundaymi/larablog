@extends('layouts.layout')

@section('content')
    <div class="container">
        <h1>{{$post->title}}</h1>
        <p>{{$post->body}}</p>
        <a href="{{route('post.edit', $post)}}"></a><button class="btn btn-primary">Edit post</button>
        <a href="{{route('post.delete', $post)}}"></a><button class="btn btn-danger ">Delete post</button>
    </div>
@endsection