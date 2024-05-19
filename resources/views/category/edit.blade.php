@extends('layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-5 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Produk</h1>
</div>

<div class="container pb-5 mb-5">
    <div class="col-md-8 mb-5 mx-auto mb-5">
        <form action="/product-categories/{{ $productCategory->id }}" method="Post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="product_category_name" class="form-label">Nama Category</label>
                <input type="text" class="form-control @error('product_category_name') is-invalid @enderror" id="product_category_name" name="product_category_name" required value="{{ $productCategory->product_category_name }}">
                @error('product_category_name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select class="form-select @error('status') is-invalid @enderror" id="status" name="status" required>
                    <option value="Active" {{ $productCategory->status == 'Active' ? 'selected' : '' }}>Active</option>
                    <option value="Inactive" {{ $productCategory->status == 'Inactive' ? 'selected' : '' }}>Inactive</option>
                </select>
                @error('status')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="deleted" class="form-label">Dihapus</label>
                <select class="form-select @error('deleted') is-invalid @enderror" id="deleted" name="deleted" required>
                    <option value="false" {{ $productCategory->deleted == 'false' ? 'selected' : '' }}>false</option>
                    <option value="true" {{ $productCategory->deleted == 'true' ? 'selected' : '' }}>True</option>
                </select>
                @error('deleted')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary float-end mb-5 ">Perbarui Produk</button>
        </form>
    </div>
</div>
@endsection
