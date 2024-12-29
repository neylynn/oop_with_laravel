@extends('layouts.app')

@section('content_body')
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
<a href="{{ route('product.create') }}" class="btn btn-success mt-2 mb-2" style="float: right;">Add New Product</a>
<table class="table table-striped">
  <thead>
    <tr>
      <th>#</th>
      <th>Product Name</th>
      <th>Description</th>
      <th>SKU</th>
      <th>Price</th>
      <th>Category Name</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    @if(count($products) > 0)
        @foreach($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->description }}</td>
                <td>{{ $product->sku }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->category->name }}</td>
                <td>
                  <a href="{{ route('product.edit', $product->id) }}" class="btn btn-success mt-2 mb-2">Edit</a>
                  <form action="{{ route('product.destroy', $product->id) }}" method="POST" style="display:inline-block;">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this product?')">Delete</button>
                  </form>
                </td>
            </tr>
        @endforeach
    @else
        <td colspan="7"><p style="text-align: center;">No products found.</p></td>
    @endif
  </tbody>
  @if(isset($products))
    <div class="d-flex justify-content-center">
        {{ $products->links() }}
    </div>
  @endif
</table>
@stop
