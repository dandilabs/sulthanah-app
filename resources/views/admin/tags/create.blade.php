@extends('layouts.home')
@section('title', 'Add Category')
@section('content')



<div class="section-header">
    <h1>Add Tags</h1>
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
    <form action="{{route('tags.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label>Name Tags</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="form-group">
            <button class="btn btn-outline-primary btn-block">Save</button>
        </div>
    </form>
</div>
@endsection
