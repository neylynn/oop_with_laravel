@extends('layouts.app')

@section('content_body')
<form action="{{ route('product.store') }}" method="post">
    @csrf
    <div class="form-row">
        <div class="form-group col-md-6 mt-4">
            <label for="name">Product Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Product Name" required>
        </div>
        <div class="form-group col-md-6 mt-4">
            <label for="description">Description</label>
            <input type="text" class="form-control" id="description" name="description" placeholder="Description" required>
        </div>
        <div class="form-group col-md-6">
            <label for="sku">SKU</label>
            <input type="text" class="form-control" id="sku" name="sku" placeholder="URL" required>
        </div>
        <div class="form-group col-md-6">
            <label for="price">Price</label>
            <input type="number" class="form-control" id="price" name="price" placeholder="Price" required>
        </div>
        <div class="form-group col-md-6">
            <label for="category_id">Category ID</label>
            <select class="custom-select" id="category_id" name="category_id">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <button type="submit" class="btn btn-primary mt-2">Save</button>
    <a href="{{ route('product.index') }}" class="btn btn-danger mt-2">Cancel</a>
</form>
@stop
