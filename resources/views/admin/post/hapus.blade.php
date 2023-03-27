@extends('layouts.home')
@section('title', 'Post Trashed')
@section('content')
<div class="section-header">
    <h1>Post Trashed</h1>
</div>
@if(Session::has('success'))
    <div class="alert alert-success">{{session('success')}}</div>
@endif

<div class="section-body">
    <table class="table mt-3">
        <thead class="thead-dark">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Judul</th>
                <th scope="col">Category</th>
                <th scope="col">Tags</th>
                <th scope="col">Content</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($post as $result => $hasil)
                <tr>
                    <td>{{ $result + $post->firstitem() }}</td>
                    <td>{{ $hasil->judul }}</td>
                    <td>{{ $hasil->category->name }}</td>
                    <td>
                        @foreach ($hasil->tags as $tag )
                            <ul>
                                <li>{{ $tag->name }}</li>
                            </ul>
                        @endforeach
                    </td>
                    <td>{{ $hasil->content }}</td>
                    <td><img src="{{ asset($hasil->image) }}" class="img-fluid" width="200px" alt=""></td>
                    <td>
                        <form action="{{ route('post.kill', $hasil->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <a href="{{ route('post.restore', $hasil->id) }}" class="btn btn-sm btn-info">
                                <i class="fas fa-pen"></i> Restore
                            </a>
                            <button href="" class="btn btn-sm btn-danger" onclick="myFunction('Yakin akan menghapus data?')">
                                <i class="fas fa-trash"></i> Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
