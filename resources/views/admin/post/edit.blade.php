@extends('layouts.home')
@section('title', 'Edit Post')
@section('content')



<div class="section-header">
    <h1>Edit Post</h1>
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
    <form action="{{route('post.update', $post->id )}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('patch')
        <div class="form-group">
            <label>Judul</label>
            <input type="text" class="form-control" name="judul" value="{{ $post->judul }}">
        </div>
        <div class="form-group">
            <label>Category</label>
            <select name="category_id" class="form-control" id="">
                <option value="" holder>Select Category</option>
                @foreach ($category as $result )
                    <option value="{{ $result->id }}"

                        @if ($post->category_id == $result->id)
                            selected
                        @endif

                        >{{ $result->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Select Tags</label>
            <select class="form-control select2" multiple="" name="tags[]">
                @foreach ( $tag as $tags )
                <option value="{{ $tags->id }}"
                    @foreach ($post->tags as $value)
                        @if ($tags->id == $value->id)
                            selected
                        @endif
                    @endforeach
                    >{{ $tags->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Content</label>
            <textarea name="content" class="form-control">{{ $post->content }}</textarea>
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
