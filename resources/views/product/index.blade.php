@extends('layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-5 pb-2 mb-3 border-bottom">
    <h1 class="h2">All Products</h1>
    <a href="{{ route('products.create') }}" class="btn btn-primary mb-3">Add New Product</a>
</div>

<div class="container">
    <div class="table-responsive col-lg-12">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Category</th>
                    <th scope="col">Brand</th>
                    <th scope="col">Price</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $product->product_name }}</td>
                    <td>{{ $product->category }}</td>
                    <td>{{ $product->brand }}</td>
                    <td>${{ $product->price }}</td>
                    <td>
                        <a href="{{ route('products.show', $product->id) }}" class="badge bg-info"><span data-feather="eye"></span></a>
                        <a href="{{ route('products.edit', $product->id) }}" class="badge bg-warning"><span data-feather="edit"></span></a>
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="badge bg-danger border-0" onclick="return confirm('Are you sure you want to delete this product?')"><span data-feather="x-circle"></span></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
