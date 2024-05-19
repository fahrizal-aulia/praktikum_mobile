<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('product.index',[
            'products'=> Product::with('category', 'brand')->get()
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
    public function store(Request $request)
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

        if ($request->file('fileimages')) {
            $validasi['fileimages'] = $request->file('fileimages')->store('upload-gambar');
        }

        Product::create($validasi);

        return redirect('products')->with('success', 'Product Telah Ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('product.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $categories = ProductCategory::all();
        $brands = Brand::all();
        return view('product.edit', compact('product', 'categories', 'brands'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $validasi = $request->validate([
            'sku' => 'required|string|max:255',
            'product_category' => 'required|exists:product_categories,id',
            'product_name' => 'required|string|max:255',
            'product_detail' => 'required|string',
            'product_brand' => 'required|exists:brands,id',
            'product_price' => 'required|integer',
            'fileimages' => 'image|file|max:1024',
            'status' => 'required|string',
            'deleted' => 'required|string',
            'slug' => 'required|string|max:255|unique:products,slug,' . $product->id,
        ]);

        if ($request->file('fileimages')) {
            if ($product->fileimages) {
                Storage::delete($product->fileimages);
            }
            $validasi['fileimages'] = $request->file('fileimages')->store('product-images');
        }

        $product->update($validasi);

        return redirect('/products')->with('success', 'Product Berhasil Diupadate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect('/products')->with('success', 'Product Berhasil Dihapus');
    }
}
