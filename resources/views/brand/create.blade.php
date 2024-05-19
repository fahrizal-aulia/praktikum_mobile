@extends('layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-5 pb-2 mb-3 border-bottom">
    <h1 class="h2">Add New Brand</h1>
</div>

<div class="container">
    <div class="col-md-8 mb-5 mx-auto">
        <form action="/brands" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="product_brand" class="form-label">Nama Brand</label>
                <input type="text" class="form-control @error('product_brand') is-invalid @enderror" id="product_brand" name="product_brand" required value="{{ old('product_brand') }}">
                @error('product_brand')
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
            <button type="submit" class="btn btn-primary float-end mb-3">Add Brand</button>
        </form>
    </div>
</div>
@endsection


