@extends('layouts.home')
@section('title', 'Edit Category')
@section('content')



<div class="section-header">
    <h1>Edit Category</h1>
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
    <form action="{{route('category.update', $category->id)}}" method="POST">
        @csrf
        @method('patch')
        <div class="form-group">
            <label>Name Category</label>
            <input type="text" class="form-control" name="name" value="{{$category->name}}">
        </div>
        <div class="form-group">
            <button class="btn btn-outline-primary btn-block">Save</button>
        </div>
    </form>
</div>
@endsection