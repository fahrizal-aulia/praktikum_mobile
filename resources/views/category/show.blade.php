@extends('layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-5 pb-2 mb-3 border-bottom">
    <h1 class="h2">Category Details</h1>
</div>

<div class="container">
    <div class="card">
        <div class="card-body">
            <p class="card-text">Nama Category: {{ $productCategory->product_category_name }}</p>
            <p class="card-text">Status: {{ $productCategory->status }}</p>
            <a href="/product-categories/" class="btn btn-warning">Back</a>
        </div>
    </div>
</div>
@endsection
