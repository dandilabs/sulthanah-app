@extends('layouts.home')
@section('title', 'Users')
@section('content')
<div class="section-header">
    <h1>User</h1>
</div>
@if(Session::has('success'))
    <div class="alert alert-success">{{session('success')}}</div>
@endif

<a href="{{route('users.create')}}" class="btn btn-info btn-sm">Add Users</a>
<div class="section-body">
    <table class="table mt-3">
        <thead class="thead-dark">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Name User</th>
                <th scope="col">Email</th>
                <th scope="col">Role</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($user as $result => $hasil)
                <tr>
                    <td>{{ $result + $user->firstitem() }}</td>
                    <td>{{ $hasil->name }}</td>
                    <td>{{ $hasil->email }}</td>
                    <td>
                        @if($hasil->role )
                            <span class="badge badge-danger">Administrator</span>
                            @else
                            <span class="badge badge-primary">Author</span>
                        @endif
                    </td>
                    <td>
                        <form action="{{ route('users.destroy', $hasil->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <a href="{{ route('users.edit', $hasil->id) }}" class="btn btn-sm btn-primary">
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
