@extends('layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Produk</h1>
</div>

<div class="container pb-5 mb-5">
    <div class="col-md-8 mb-5 mx-auto mb-5">
        <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="sku" class="form-label">SKU</label>
                <input type="text" class="form-control @error('sku') is-invalid @enderror" id="sku" name="sku" required value="{{ $product->sku }}">
                @error('sku')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="product_category" class="form-label">Kategori</label>
                <select class="form-select @error('product_category') is-invalid @enderror" id="product_category" name="product_category" required>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ $product->product_category == $category->id ? 'selected' : '' }}>
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
                <label for="product_name" class="form-label">Nama Produk</label>
                <input type="text" class="form-control @error('product_name') is-invalid @enderror" id="product_name" name="product_name" required value="{{ $product->product_name }}">
                @error('product_name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="product_detail" class="form-label">Detail Produk</label>
                <textarea class="form-control @error('product_detail') is-invalid @enderror" id="product_detail" name="product_detail" rows="3" required>{{ $product->product_detail }}</textarea>
                @error('product_detail')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="product_brand" class="form-label">Merek</label>
                <select class="form-select @error('product_brand') is-invalid @enderror" id="product_brand" name="product_brand" required>
                    @foreach($brands as $brand)
                        <option value="{{ $brand->id }}" {{ $product->product_brand == $brand->id ? 'selected' : '' }}>
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
                <label for="product_price" class="form-label">Harga</label>
                <input type="number" class="form-control @error('product_price') is-invalid @enderror" id="product_price" name="product_price" required value="{{ $product->product_price }}">
                @error('product_price')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="fileimages" class="form-label">Gambar Produk</label>
                <input type="file" class="form-control" id="fileimages" name="fileimages">
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select class="form-select @error('status') is-invalid @enderror" id="status" name="status" required>
                    <option value="Actiive" {{ $product->status == 'Actiive' ? 'selected' : '' }}>Active</option>
                    <option value="Inactiive" {{ $product->status == 'Inactiive' ? 'selected' : '' }}>Inactiive</option>
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
                    <option value="false" {{ $product->deleted == 'false' ? 'selected' : '' }}>False</option>
                    <option value="true" {{ $product->deleted == 'true' ? 'selected' : '' }}>True</option>
                </select>
                @error('deleted')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" required value="{{ $product->slug }}">
                @error('slug')
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
