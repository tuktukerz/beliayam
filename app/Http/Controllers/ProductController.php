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
        $validated = $request->validate([
            'price' => 'numeric',
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

        return redirect()->route('product.index');
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
        $validated = $request->validate([
            'price' => 'numeric',
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

        return redirect()->route('product.index');
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

        return redirect()->route('product.index');
    }

    public function showListProduct()
    {
        $seo = Seo::where('page', 'product')->first();
        $products = Product::all();
        $identities = SiteIdentity::latest()->first();

        return view('product_list', compact('seo', 'products', 'identities'));
    }
}
