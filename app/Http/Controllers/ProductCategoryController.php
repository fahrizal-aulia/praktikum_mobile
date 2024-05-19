<?php

namespace App\Http\Controllers;

use App\Models\ProductCategory;
use Illuminate\Http\Request;


class ProductCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('category.index',[
            'category'=> ProductCategory::all()
            ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('category.create',[
            'category'=> ProductCategory::all()
            ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasi = $request->validate([
            'product_category_name'=>'required',
            'status' => 'required',
            'deleted' => 'required'
        ]);
        ProductCategory::create($validasi);
        return redirect('product-categories')->with('success', 'Category Telah Ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(ProductCategory $productCategory)
    {
        return view('category.show',compact('productCategory'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProductCategory $productCategory)
    {
        return view('category.edit',compact('productCategory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProductCategory $productCategory)
    {
        $validasi = $request->validate([
            'product_category_name'=>'required',
            'status' => 'required',
            'deleted' => 'required'
        ]);
        $productCategory->update($validasi);
        return redirect('product-categories')->with('success', 'Category Telah DiUpdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProductCategory $productCategory)
    {
        $productCategory->delete();
        return redirect('product-categories')->with('success', 'Brand Berhasil Dihapus');
    }
}
