@extends('layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Brand Details</h1>
</div>

<div class="container">
    <div class="card">
        <div class="card-body">
            <p class="card-text">Nama Brand: {{ $brand->product_brand }}</p>
            <p class="card-text">Status: {{ $brand->status }}</p>
            <p class="card-text">Deleted: {{ $brand->deleted }}</p>
            <a href="/brands/" class="btn btn-warning">Back</a>
        </div>
    </div>
</div>
@endsection
