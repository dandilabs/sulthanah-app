@extends('layouts.home')
@section('title', 'Add Users')
@section('content')



<div class="section-header">
    <h1>Add Users</h1>
</div>
@if(count($errors) > 0)
    @foreach ($errors->all() as $error )
        <div class="alert alert-danger">{{$error}}</div>
    @endforeach
@endif

@include('sweetalert::alert')
{{--  @if(Session::has('success'))
<div class="alert alert-success">{{session('success')}}</div>
@endif  --}}

<div class="section-body">
    <form action="{{route('users.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label>Name User</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" name="email">
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="text" class="form-control" name="password">
        </div>
        <div class="form-group">
            <label>Role User</label>
            <select name="role" id="" class="form-control">
                <option value="" holder>Select Role</option>
                <option value="1" holder>Administrator</option>
                <option value="0" holder>Author</option>
            </select>
        </div>
        <div class="form-group">
            <button class="btn btn-outline-primary btn-block">Save</button>
        </div>
    </form>
</div>
@endsection
