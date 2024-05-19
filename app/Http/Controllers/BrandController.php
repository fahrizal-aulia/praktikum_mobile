<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;


class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('brand.index',[
            'brands'=> Brand::all()
            ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('brand.create',[
            'brands'=> Brand::all()
            ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasi = $request->validate([
            'product_brand'=>'required',
            'status' => 'required',
            'deleted' => 'required'
        ]);
        Brand::create($validasi);
        return redirect('brands')->with('success', 'Brand Telah Ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Brand $brand)
    {
        return view('brand.show',compact('brand'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Brand $brand)
    {
        return view('brand.edit',compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Brand $brand)
    {
        $validasi = $request->validate([
            'product_brand'=>'required',
            'status' => 'required',
            'deleted' => 'required'
        ]);
        $brand->update($validasi);
        return redirect('brands')->with('success', 'Brand Telah DiUpdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Brand $brand)
    {
        $brand->delete();
        return redirect('/brands')->with('success', 'Brand Berhasil Dihapus');
    }
}
