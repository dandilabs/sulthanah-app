@extends('layouts.home')
@section('title', 'Edit Users')
@section('content')



<div class="section-header">
    <h1>Edit Users</h1>
</div>
@if(count($errors) > 0)
    @foreach ($errors->all() as $error )
        <div class="alert alert-danger">{{$error}}</div>
    @endforeach
@endif

@if(Session::has('success'))
<div class="alert alert-success">{{session('success')}}</div>
@endif

<div class="section-body">
    <form action="{{route('users.update', $user->id)}}" method="POST">
        @csrf
        @method('patch')
        <div class="form-group">
            <label>Name User</label>
            <input type="text" class="form-control" name="name" value="{{ $user->name }}">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" name="email" value="{{ $user->email }}" readonly>
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="text" class="form-control" name="password">
        </div>
        <div class="form-group">
            <label>Role User</label>
            <select name="role" id="" class="form-control">
                <option value="" holder>Select Role</option>
                <option value="1" holder
                @if($user->role == 1)
                    selected
                @endif
                >Administrator</option>
                <option value="0" holder
                @if($user->role == 0)
                    selected
                @endif
                >Author</option>
            </select>
        </div>
        <div class="form-group">
            <button class="btn btn-outline-primary btn-block">Update</button>
        </div>
    </form>
</div>
@endsection
