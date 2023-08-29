@extends('layouts.app')
  
@section('title', 'Edit Product')
  
@section('contents')
    <h1 class="mb-0">Edit Product</h1>
    <hr />
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Category Id</label>
                <input type="text" name="category_id" class="form-control" placeholder="Category Id" value="{{ $product->category_id }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Product Name</label>
                <input type="text" name="product_name" class="form-control" placeholder="Product Name" value="{{ $product->product_name }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Price</label>
                <input type="text" name="price" class="form-control" placeholder="Price" value="{{ $product->price }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Product Code</label>
                <input type="text" name="product_id" class="form-control" placeholder="Product Id" value="{{ $product->product_id }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Description</label>
                <textarea class="form-control" name="description" placeholder="Descriptoin" >{{ $product->description }}</textarea>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection