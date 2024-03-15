@extends('layouts.main')

@section('title', 'Create New Post')

@section('content')

<div class="container">
    <div class="row">
        <h1 style="margin-left:4rem ">Creating Post</h1>
    </div>
</div>
<div class="container">
    <div class="row">
        <form action="{{route("posts.store")}}" method="POST" style="margin: 5rem">
            @csrf
            <label for="id">ID</label>
            <input type="text" name="id" id="id">
            <label for="title">Title</label>
            <input type="text" name="title" id="title">
            <label for="body">Body</label>
            <input type="text" name="body" id="body">
            <button type="submit">Create Post</button>
        </form>

    </div>
</div>
@endsection
