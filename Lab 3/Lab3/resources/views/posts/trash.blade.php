@extends('layouts.main')

@section('title', 'delete Post')

@section('content')

    <div class="container"><div class="row">
        <h1>Deleted Posts</h1></div></div>
    <body>
    <div class="container">
        <div class="row">
    <table>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Body</th>
            <th>Action</th>
        </tr>
        @foreach ($posts as $post)
            <tr>
                <td >{{ $post->id }}</td>
                <td class='w-25'>{{ $post->title }}</td>
                <td class='w-25'>{{ $post->body }}</td>
            </tr>
        @endforeach
    </table>
    </div>
    </div>
    @endsection

