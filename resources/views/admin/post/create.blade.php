@extends('layouts.home')
@section('title', 'Add Post')
@section('content')



<div class="section-header">
    <h1>Add Post</h1>
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
    <form action="{{route('post.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Judul</label>
            <input type="text" class="form-control" name="judul">
        </div>
        <div class="form-group">
            <label>Category</label>
            <select name="category_id" class="form-control" id="">
                <option value="" holder>Select Category</option>
                @foreach ($category as $result )
                    <option value="{{ $result->id }}">{{ $result->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Select Tags</label>
            <select class="form-control select2" multiple="" name="tags[]">
                @foreach ( $tag as $tags )
                <option value="{{ $tags->id }}">{{ $tags->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Content</label>
            <textarea name="content" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label>Image</label>
            <input type="file" class="form-control" name="image">
        </div>
        <div class="form-group">
            <button class="btn btn-outline-primary btn-block">Save</button>
        </div>
    </form>
</div>
<script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('content');
</script>
@endsection
