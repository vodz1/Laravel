@extends('layouts.main')

@section('title', 'Edit Post')

@section('content')

<div class="container">
    <div class="row">
        <h1>Editing Post</h1>
    </div>

    <div class="row">

        <form action="{{route('posts.update', $post->id)}}" method="POST">
            @csrf
            @method('PUT')
            <label for="id">ID</label>
            <input type="text" name="id" id="id" value="{{$post->id}}">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" value="{{$post->title}}">
            <label for="body">Body</label>
            <input type="text" name="body" id="body" value="{{$post->body}}">
            <button type="submit">Edit Post</button>
        </form>
    </div>
</div>

@endsection
