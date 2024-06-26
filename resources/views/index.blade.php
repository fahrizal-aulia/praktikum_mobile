@extends('layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-5 pb-2 mb-3 border-bottom">
    <h1 class="h2"></h1>
</div>


<div class="container">
    <section class="hero bg-light text-center py-5">
        <div class="container">
            <h1 class="display-4">Welcome to TokoOnline Uwp</h1>
        </div>
    </section>

    <!-- Products Section -->
    <section class="products py-5">
        <div class="container">
            <h2 class="text-center mb-4">All Products</h2>
            <div class="row">
                @foreach ($products as $product)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="https://via.placeholder.com/150" class="card-img-top" alt="Product 1">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->product_name }}</h5>
                            <p class="card-text">{{ $product->category->product_category_name}}</p>
                            <p class="card-text">{{ $product->brand->product_brand}}</p>
                            <p class="card-text">{{ $product->product_price }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    </section>
</div>

@endsection
