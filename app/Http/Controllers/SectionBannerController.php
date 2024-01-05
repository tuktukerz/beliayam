<?php

namespace App\Http\Controllers;

use App\Models\SectionBanner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SectionBannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $sectionBanner = SectionBanner::findOrFail($id);
        return view('layouts.banner.index', compact('sectionBanner'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $sectionBanner = SectionBanner::findOrFail($id);
        return view('layouts.banner.edit', compact('sectionBanner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $sectionBanner = SectionBanner::findOrFail($id);
        // Loop through each banner and update if a new file is provided
        for ($i = 1; $i <= 3; $i++) {
            $bannerFieldName = 'banner' . $i;

            // Check if the request has the current banner file
            if ($request->hasFile($bannerFieldName)) {
                // Generate a unique name for the image
                $imageName = $bannerFieldName . '.' . $request->file($bannerFieldName)->extension();

                // Store the image in the 'public/banner' directory
                $request->file($bannerFieldName)->storeAs('public/banner', $imageName);

                // Delete the old banner if it exists
                if ($sectionBanner->$bannerFieldName) {
                    Storage::delete('public/banner/' . $sectionBanner->$bannerFieldName);
                }

                // Update the current banner field in the SectionBanner model
                $sectionBanner->update([$bannerFieldName => $imageName]);
            }
        }

        // Update other fields excluding 'banner1', 'banner2', 'banner3'
        $sectionBanner->update($request->except(['banner1', 'banner2', 'banner3']));

        return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
