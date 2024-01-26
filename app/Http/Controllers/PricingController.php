<?php

namespace App\Http\Controllers;

use App\Models\Pricing;
use Illuminate\Http\Request;

class PricingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pricings = Pricing::get();

        return view('layouts.pricing.index', compact('pricings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return redirect()->route('pricing.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return redirect()->route('pricing.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return redirect()->route('pricing.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pricing $pricing)
    {
        return view('layouts.pricing.edit', compact('pricing'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pricing $pricing)
    {
        $validatedData = $request->validate([
            'price' => 'numeric'
        ]);

        $pricing->update($validatedData);
        return redirect()->route('pricing.index')->with('success', 'Harga Harian Berhasil Diubah !');;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pricing $pricing)
    {
        return redirect()->route('pricing.index');
    }
}
