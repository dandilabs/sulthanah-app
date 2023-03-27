@extends('layouts.home')
@section('title', 'Post')
@section('content')
<div class="section-header">
    <h1>Post</h1>
</div>
@if(Session::has('success'))
    <div class="alert alert-success">{{session('success')}}</div>
@endif

<a href="{{route('post.create')}}" class="btn btn-info btn-sm">Add Post</a>
<div class="section-body">
    <table class="table mt-3">
        <thead class="thead-dark">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Judul</th>
                <th scope="col">Category</th>
                <th scope="col">Tags</th>
                {{--  <th scope="col">Content</th>  --}}
                <th scope="col">Image</th>
                <th scope="col">Creator</th>
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
                                <h5><span class="badge badge-info">{{ $tag->name }}</span></h5>
                            </ul>
                        @endforeach
                    </td>
                    {{--  <td>{{ $hasil->content }}</td>  --}}
                    <td><img src="{{ asset($hasil->image) }}" class="img-fluid" width="200px" alt=""></td>
                    <td><h6><span class="badge badge-primary">{{ $hasil->users->name }}</span></h6></td>
                    <td>
                        <form action="{{ route('post.destroy', $hasil->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <a href="{{ route('post.edit', $hasil->id) }}" class="btn btn-sm btn-primary">
                                <i class="fas fa-pen"></i> Edit
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
