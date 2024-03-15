@extends('layouts.main')

@section('title', 'View Post')

@section('content')
    <!-- Your view post content goes here -->

<div class="contatiner"><div class="row">
    <h1>Single Post</h1></div>
    <div class="row">
        <div class="col-6">
            <h3>ID: {{ $post->id }}</h3>
            <h3>Title: {{ $post->title }}</h3>
            <h3>Body: {{ $post->body }}</h3>
        </div>
    </div>
</div>
@endsection


