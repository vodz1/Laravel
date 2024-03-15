@extends('layouts.main')

@section('title', 'Posts List')

@section('content')

    <div class="container"><div class="row">
        <h1 style="margin-left:4rem ">List Of Posts</h1></div>

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
                <td>
                    <a class="btn btn-primary" href="{{ url("/posts/{$post->id}/edit") }}">Edit</a>
                     <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-warning">Delete</button>
                                </form>
                </td>
            </tr>
        @endforeach
    </table>
    </div>



@endsection