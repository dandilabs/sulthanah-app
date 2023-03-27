@extends('layouts.home')
@section('title', 'Edit Tags')
@section('content')



<div class="section-header">
    <h1>Edit Tags</h1>
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
    <form action="{{route('tags.update', $tag->id)}}" method="POST">
        @csrf
        @method('patch')
        <div class="form-group">
            <label>Name Tags</label>
            <input type="text" class="form-control" name="name" value="{{$tag->name}}">
        </div>
        <div class="form-group">
            <button class="btn btn-outline-primary btn-block">Update</button>
        </div>
    </form>
</div>
@endsection