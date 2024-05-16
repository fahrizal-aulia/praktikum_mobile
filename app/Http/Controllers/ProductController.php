<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Brand;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('product.index',[
            'products'=> Product::all()
            ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product.create',[
                'categories' => ProductCategory::all(),
                'brands' => Brand::all()
            ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        $validasi = $request->validate([
            'sku' => 'required',
            'product_category' => 'required|integer',
            'product_name' => 'required',
            'product_detail' => 'required',
            'product_brand' => 'required|integer',
            'product_price' => 'required|integer',
            'fileimages' => 'nullable|image',
            'status' => 'required',
            'deleted' => 'required',
            'slug' => 'required|unique:products,slug',
        ]);

        if ($request->hasFile('fileimages')) {
            $validasi['fileimages'] = $request->file('fileimages')->store('product-images');
        }

        Product::create($validasi);

        return redirect('/products')->with('success', 'Product added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
