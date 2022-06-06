@extends('layouts.layout')

@section('content')
    <div class="container">
        <h1>Edit post</h1>
        <form action="" method="POST">
            @csrf
            <input type="text" name="title" placeholder="title here" class="form-control" value="{{$post->title}}">
            <textarea name="body"  cols="30" rows="10" placeholder="your text here" class="form-control">{{$post->body}}</textarea>
            <button class="btn btn-primary">POST!</button>
        </form>
    </div>
@endsection