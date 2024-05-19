@extends('layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-5 pb-2 mb-3 border-bottom">
    <h1 class="h2">All Brand</h1>
    <a href="/brands/create" class="btn btn-primary mb-3">Add New Brand</a>
</div>

@if (session()->has('success'))
<div class="alert alert-success alert-dismissible fade show col-lg-8" role="alert">
    {{ session('success')}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<div class="container">
    <div class="table-responsive col-lg-12">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Brand</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($brands as $brand)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $brand->product_brand }}</td>
                    <td>{{ $brand->status }}</td>
                    <td>
                        <a href="/brands/{{ $brand->id }}" class="badge bg-info">
                            <span data-feather="eye"></span>
                        </a>
                        <a href="/brands/{{ $brand->id }}/edit" class="badge bg-warning">
                            <span data-feather="edit"></span>
                        </a>
                        <form action="/brands/{{ $brand->id }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="badge bg-danger border-0" onclick="return confirm('yakin menghapus data ini?')">
                                <span data-feather="x-circle"></span>
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
