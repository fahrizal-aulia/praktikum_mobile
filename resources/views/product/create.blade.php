@extends('layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-5 pb-2 mb-3 border-bottom">
    <h1 class="h2">Add New Product</h1>
</div>

<div class="container">
    <div class="col-md-8 mb-5 mx-auto">
        <form action="/products" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="sku" class="form-label">SKU</label>
                <input type="text" class="form-control @error('sku') is-invalid @enderror" id="sku" name="sku" required value="{{ old('sku') }}">
                @error('sku')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="product_category" class="form-label">Category</label>
                <select class="form-select @error('product_category') is-invalid @enderror" id="product_category" name="product_category" required>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ old('product_category') == $category->id ? 'selected' : '' }}>
                            {{ $category->product_category_name }}
                        </option>
                    @endforeach
                </select>
                @error('product_category')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="product_name" class="form-label">Product Name</label>
                <input type="text" class="form-control @error('product_name') is-invalid @enderror" id="product_name" name="product_name" required value="{{ old('product_name') }}">
                @error('product_name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="product_detail" class="form-label">Product Detail</label>
                <textarea class="form-control @error('product_detail') is-invalid @enderror" id="product_detail" name="product_detail" rows="3" required>{{ old('product_detail') }}</textarea>
                @error('product_detail')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="product_brand" class="form-label">Brand</label>
                <select class="form-select @error('product_brand') is-invalid @enderror" id="product_brand" name="product_brand" required>
                    @foreach($brands as $brand)
                        <option value="{{ $brand->id }}" {{ old('product_brand') == $brand->id ? 'selected' : '' }}>
                            {{ $brand->product_brand }}
                        </option>
                    @endforeach
                </select>
                @error('product_brand')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="product_price" class="form-label">Price</label>
                <input type="number" class="form-control @error('product_price') is-invalid @enderror" id="product_price" name="product_price" required value="{{ old('product_price') }}">
                @error('product_price')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="fileimages" class="form-label">Product Image</label>
                <input type="file" class="form-control" id="fileimages" name="fileimages">
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select class="form-select @error('status') is-invalid @enderror" id="status" name="status" required>
                    <option value="Active" {{ old('status') == 'Active' ? 'selected' : '' }}>Active</option>
                    <option value="Inactive" {{ old('status') == 'Inactive' ? 'selected' : '' }}>Inactive</option>
                </select>
                @error('status')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="deleted" class="form-label">Deleted</label>
                <select class="form-select @error('deleted') is-invalid @enderror" id="deleted" name="deleted" required>
                    <option value="false" {{ old('deleted') == 'false' ? 'selected' : '' }}>False</option>
                    <option value="true" {{ old('deleted') == 'true' ? 'selected' : '' }}>True</option>
                </select>
                @error('deleted')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" required value="{{ old('slug') }}">
                @error('slug')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary float-end mb-3">Add Product</button>
        </form>
    </div>
</div>
@endsection


