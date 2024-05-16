@extends('layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-5 pb-2 mb-3 border-bottom">
    <h1 class="h2">Add New Product</h1>
</div>

<div class="container">
    <div class="col-md-8 mb-5">
    <form action="/products/" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="sku" class="form-label">SKU</label>
            <input type="text" class="form-control" id="sku" name="sku" required>
        </div>
        <div class="mb-3">
            <label for="product_category" class="form-label">Category</label>
                <select class="form-control" id="product_category" name="product_category" required>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->product_category_name }}</option>
                    @endforeach
                </select>
        </div>
        <div class="mb-3">
            <label for="product_name" class="form-label">Product Name</label>
            <input type="text" class="form-control" id="product_name" name="product_name" required>
        </div>
        <div class="mb-3">
            <label for="product_detail" class="form-label">Product Detail</label>
            <textarea class="form-control" id="product_detail" name="product_detail" rows="3" required></textarea>
        </div>
        <div class="mb-3">
            <label for="product_brand" class="form-label">Brand</label>
                <select class="form-control" id="product_brand" name="product_brand" required>
                    @foreach($brands as $brand)
                        <option value="{{ $brand->id }}">{{ $brand->product_brand }}</option>
                    @endforeach
                </select>
        </div>
        <div class="mb-3">
            <label for="product_price" class="form-label">Price</label>
            <input type="number" class="form-control" id="product_price" name="product_price" required>
        </div>
        <div class="mb-3">
            <label for="fileimages" class="form-label">Product Image</label>
            <input type="file" class="form-control" id="fileimages" name="fileimages">
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select class="form-control" id="status" name="status" required>
                <option value="available">Available</option>
                <option value="unavailable">Unavailable</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="deleted" class="form-label">Deleted</label>
            <select class="form-control" id="deleted" name="deleted" required>
                <option value="false">False</option>
                <option value="true">True</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control" id="slug" name="slug" required>
        </div>
        <button type="submit" class="btn btn-primary ">Add Product</button>
    </form>
    </div>
</div>
@endsection
