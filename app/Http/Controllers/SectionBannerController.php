<?php

namespace App\Http\Controllers;

use App\Models\SectionBanner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class SectionBannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sectionBanner = SectionBanner::all();
        return view('layouts.banner.index', compact('sectionBanner'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return redirect()->route('banner.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return redirect()->route('banner.index');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        return redirect()->route('banner.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SectionBanner $banner)
    {
        return view('layouts.banner.edit', compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SectionBanner $banner)
    {
        if ($request->hasFile('image')) {
            // Delete the old image
            if ($banner->image) {
                Storage::delete('public/banner/' . $banner->image);
            }

            // Store the new image
            $imageName = Str::uuid() . time() . '.' . $request->file('image')->extension();
            $request->file('image')->storeAs('public/banner', $imageName);

            // Update the 'image' field in the SectionBanner model with only the filename
            $banner->update(['image' => $imageName]);
        }

        // Update other fields excluding 'image'
        $banner->update($request->except(['image']));

        return redirect()->route('banner.index')->with('success', 'Banner Berhasil diubah !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        return redirect()->route('banner.index');
    }
}
