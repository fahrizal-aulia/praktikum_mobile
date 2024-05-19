@extends('layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-5 pb-2 mb-3 border-bottom">
    <h1 class="h2">Add New Category</h1>
</div>

<div class="container">
    <div class="col-md-8 mb-5 mx-auto">
        <form action="/product-categories" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="product_category_name" class="form-label">Nama Category</label>
                <input type="text" class="form-control @error('product_category_name') is-invalid @enderror" id="product_category_name" name="product_category_name" required value="{{ old('product_category_name') }}">
                @error('product_category_name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
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
            <button type="submit" class="btn btn-primary float-end mb-3">Add Category</button>
        </form>
    </div>
</div>
@endsection


