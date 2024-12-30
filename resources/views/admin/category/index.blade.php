@extends('layouts.app')

@section('content_body')
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
<a href="{{ route('category.create') }}" class="btn btn-success mt-2 mb-2" style="float: right;">Add New Category</a>
<table class="table table-striped">
  <thead>
    <tr>
      <th>#</th>
      <th>Category Name</th>
      <th>Slug</th>
      <th>Description</th>
      <th>Parent Category Name</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    @if(count($categories) > 0)
        @foreach($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->name }}</td>
                <td>{{ $category->slug }}</td>
                <td>{{ $category->description }}</td>
                <td>{{ $category->parent ? $category->parent->name : 'No Parent' }}</td>
                <td>
                  <a href="{{ route('category.show', $category->id) }}" class="btn btn-success mt-2 mb-2">View</a>
                  <a href="{{ route('category.edit', $category->id) }}" class="btn btn-warning mt-2 mb-2">Edit</a>
                  <form action="{{ route('category.destroy', $category->id) }}" method="POST" style="display:inline-block;">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this category?')">Delete</button>
                  </form>
                </td>
            </tr>
        @endforeach
    @else
        <td colspan="6"><p style="text-align: center;">No categories found.</p></td>
    @endif
  </tbody>
  @if(isset($categories))
    <div class="d-flex justify-content-center">
        {{ $categories->links() }}
    </div>
  @endif
</table>
@stop
