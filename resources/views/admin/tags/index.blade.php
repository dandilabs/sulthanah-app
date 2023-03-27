@extends('layouts.home')
@section('title', 'Tags')
@section('content')
<div class="section-header">
    <h1>Tags</h1>
</div>
@if(Session::has('success'))
    <div class="alert alert-success">{{session('success')}}</div>
@endif

<a href="{{route('tags.create')}}" class="btn btn-info btn-sm">Add Tags</a>
<div class="section-body">
    <table class="table mt-3">
        <thead class="thead-dark">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Name Tags</th>
                <th scope="col">Slug</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tag as $result => $hasil)
                <tr>
                    <td>{{ $result + $tag->firstitem() }}</td>
                    <td>{{ $hasil->name }}</td>
                    <td>{{ $hasil->slug }}</td>
                    <td>
                        <form action="{{ route('tags.destroy', $hasil->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <a href="{{ route('tags.edit', $hasil->id) }}" class="btn btn-sm btn-primary">
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