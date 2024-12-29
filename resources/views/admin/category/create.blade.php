@extends('layouts.app')

@section('content_body')
<form action="{{ route('category.store') }}" method="post">
    @csrf
    <div class="form-row">
        <div class="form-group col-md-6 mt-4">
            <label for="name">Category Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Category Name" required>
        </div>
        <div class="form-group col-md-6 mt-4">
            <label for="slug">Slug</label>
            <input type="text" class="form-control" id="slug" name="slug" placeholder="URL" required>
        </div>
        <div class="form-group col-md-6">
            <label for="description">Description</label>
            <input type="text" class="form-control" id="description" name="description" placeholder="Description" required>
        </div>
        <div class="form-group col-md-6">
            <label for="parent_id">Parent ID</label>
            <select class="custom-select" id="parent_id" name="parent_id">
                <option value="">-- No Parent --</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <button type="submit" class="btn btn-primary mt-2">Save</button>
    <a href="{{ route('category.index') }}" class="btn btn-danger mt-2">Cancel</a>
</form>
@stop
