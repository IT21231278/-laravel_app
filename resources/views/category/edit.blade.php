@extends('layouts.app')
  
@section('title', 'Edit Category')
  
@section('contents')
    <h1 class="mb-0">Edit Category</h1>
    <hr />
    <form action="{{ route('category.update', $category->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Category Id</label>
                <input type="text" name="category_id" class="form-control" placeholder="Category Id" value="{{ $category->category_id }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Category Name</label>
                <input type="text" name="category_name" class="form-control" placeholder="Category Name" value="{{ $category->category_name }}" >
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection