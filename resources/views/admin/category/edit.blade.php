@extends('layouts.app')

@section('content_body')
<form action="{{ route('category.update', $category->id) }}" method="post">
    @csrf
    @method('PUT')
    <div class="form-row">
        <div class="form-group col-md-6 mt-4">
            <label for="name">Category Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $category->name }}" required>
        </div>
        <div class="form-group col-md-6 mt-4">
            <label for="slug">Slug</label>
            <input type="text" class="form-control" id="slug" name="slug" value="{{ $category->slug }}" required>
        </div>
        <div class="form-group col-md-6">
            <label for="description">Description</label>
            <input type="text" class="form-control" id="description" name="description" value="{{ $category->description }}" required>
        </div>
        <div class="form-group col-md-6">
            <label for="parent_id">Parent ID</label>
            <input type="text" class="form-control" id="parent_id" name="parent_id" value="{{ $category->parent ? $category->parent->name : 'No Parent' }}" disabled>
        </div>
    </div>
    <button type="submit" class="btn btn-primary mt-2">Update</button>
    <a href="{{ route('category.index') }}" class="btn btn-danger mt-2">Cancel</a>
</form>
@stop
