@extends('layouts.app')

@section('content_body')
<form action="{{ route('product.update', $product->id) }}" method="post">
    @csrf
    @method('PUT')
    <div class="form-row">
        <div class="form-group col-md-6 mt-4">
            <label for="name">Product Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}" required>
        </div>
        <div class="form-group col-md-6 mt-4">
            <label for="description">Description</label>
            <input type="text" class="form-control" id="description" name="description" value="{{ $product->description }}" required>
        </div>
        <div class="form-group col-md-6">
            <label for="sku">Sku</label>
            <input type="text" class="form-control" id="sku" name="sku" value="{{ $product->sku }}" required>
        </div>
        <div class="form-group col-md-6">
            <label for="price">Price</label>
            <input type="number" class="form-control" id="price" name="price" value="{{ $product->price }}" required>
        </div>
        <input type="hidden" class="form-control" id="category_id" name="category_id" value="{{ $product->category_id }}">
    </div>
    <button type="submit" class="btn btn-primary mt-2">Update</button>
    <a href="{{ route('product.index') }}" class="btn btn-danger mt-2">Cancel</a>
</form>
@stop
