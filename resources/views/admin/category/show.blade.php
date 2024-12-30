@extends('layouts.app')

@section('content_body')
    <div class="form-row">
        <div class="form-group col-md-6 mt-4">
            <label for="name">Category Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $category->name }}" disabled>
        </div>
        <div class="form-group col-md-6 mt-4">
            <label for="slug">Slug</label>
            <input type="text" class="form-control" id="slug" name="slug" value="{{ $category->slug }}" disabled>
        </div>
        <div class="form-group col-md-6">
            <label for="description">Description</label>
            <input type="text" class="form-control" id="description" name="description" value="{{ $category->description }}" disabled>
        </div>
        <div class="form-group col-md-6">
            <label for="parent_id">Parent ID</label>
            <input type="text" class="form-control" id="parent_id" name="parent_id" value="{{ $category->parent ? $category->parent->name : 'No Parent' }}" disabled>
        </div>
    </div>
    <a href="{{ route('category.index') }}" class="btn btn-primary mt-2">Back</a>
@stop
