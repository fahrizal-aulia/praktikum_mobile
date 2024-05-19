@extends('layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Product Details</h1>
</div>

<div class="container">
    <div class="card">
        <img src="https://via.placeholder.com/150" class="card-img-top " alt="{{ $product->product_name }}">
        <div class="card-body">
            <h5 class="card-title">{{ $product->product_name }}</h5>
            <p class="card-text">Category: {{ $product->category->product_category_name }}</p>
            <p class="card-text">Brand: {{ $product->brand->product_brand }}</p>
            <p class="card-text">Price: ${{ $product->product_price }}</p>
            <a href="/products/" class="btn btn-warning">Back</a>
        </div>
    </div>
</div>
@endsection
