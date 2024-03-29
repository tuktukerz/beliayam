<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\Pricing;
use App\Models\Product;
use App\Models\SectionBanner;
use App\Models\Seo;
use App\Models\SiteIdentity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::get();
        return view('layouts.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.product.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'price' => 'numeric',
            'productImage' => 'file|max:5000'
        ]);

        $imageName = null;

        if ($request->hasFile('productImage')) {
            $path = 'public/product';
            $imageName = Str::uuid() . time() . '.' . $request->file('productImage')->extension();
            $request->file('productImage')->storeAs($path, $imageName);
        }

        $data = $request->except(['productImage']);
        if ($imageName) {
            $data['image'] = $imageName;
        }

        Product::create($data);

        return redirect()->route('product.index')->with('success', 'Product ' . $request->name . ' Berhasil dibuat !');;
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        return redirect()->route('product.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('layouts.product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $request['is_show'] = filter_var($request->input('is_show'), FILTER_VALIDATE_BOOLEAN);

        $request->validate([
            'price' => 'numeric',
            'productImage' => 'file|max:5000',
            'is_show' => 'boolean',
        ]);

        if ($request->hasFile('productImage')) {
            if ($product->image) {
                Storage::delete('public/product/' . $product->image);
            }

            $imageName = Str::uuid() . time() . '.' . $request->file('productImage')->extension();
            $request->file('productImage')->storeAs('public/product', $imageName);

            $request['image'] = $imageName;
        }

        $product->update($request->except(['productImage']));

        return redirect()->route('product.index')->with('success', 'Product ' . $product->name . ' Berhasil diubah !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        // Define the path
        $path = 'public/product/';

        // Delete the image before deleting the content
        if ($product->image) {
            Storage::delete($path . $product->image);
        }

        // Delete the content
        $product->delete();

        return redirect()->route('product.index')->with('success', 'Product ' . $product->name . ' Berhasil dihapus !');;
    }

    public function showListProduct()
    {
        $seo = Seo::where('page', 'product')->first();
        $products = Product::all();
        $identities = SiteIdentity::latest()->first();

        $formattedPhone = preg_replace('/(\d{4})/', '$1 ',$identities['phone']);

        return view('product_list', compact('seo', 'products', 'identities', 'formattedPhone'));
    }
}
