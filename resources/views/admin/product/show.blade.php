@extends('layouts.app')

@section('content_body')
    <div class="form-row">
        <div class="form-group col-md-6 mt-4">
            <label for="name">Product Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}" disabled>
        </div>
        <div class="form-group col-md-6 mt-4">
            <label for="description">Description</label>
            <input type="text" class="form-control" id="description" name="description" value="{{ $product->description }}" disabled>
        </div>
        <div class="form-group col-md-6">
            <label for="sku">SKU</label>
            <input type="text" class="form-control" id="sku" name="sku" value="{{ $product->sku }}" disabled>
        </div>
        <div class="form-group col-md-6">
            <label for="price">Price</label>
            <input type="number" class="form-control" id="price" name="price" value="{{ $product->price }}" disabled>
        </div>
        <div class="form-group col-md-6">
            <label for="category_id">Category Name</label>
            <input type="text" class="form-control" id="category_id" name="category_id" value="{{ $product->category->name }}" disabled>
        </div>
        <div class="form-group col-md-6">
            <label for="image">Product Image</label><br>
            @if ($product->image)
                <img src="{{ asset('storage/' . $product->image) }}" style="width:400px; height:300px;" class="img-fluid rounded-start" alt="{{ $product->name }}">
            @else
                <img src="{{ asset('images/placeholder.png') }}" class="img-fluid rounded-start" alt="No Image Available">
            @endif
        </div>
    </div>
    <a href="{{ route('product.index') }}" class="btn btn-primary mt-2">Back</a>
@stop
