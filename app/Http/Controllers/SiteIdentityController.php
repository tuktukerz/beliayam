<?php

namespace App\Http\Controllers;

use App\Models\SiteIdentity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SiteIdentityController extends Controller
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
        $siteIdentity = SiteIdentity::findOrFail($id);
        return view('layouts.siteidentity.index', compact('siteIdentity'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $siteIdentity = SiteIdentity::findOrFail($id);
        return view('layouts.siteidentity.edit', compact('siteIdentity'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $siteIdentity = SiteIdentity::findOrFail($id);
        $imageName = '';
        if ($request->hasFile('file')) {
            $imageName = 'logo' . "." . $request->file->extension();
            $request->file->storeAs('public/logo', $imageName);
            if ($siteIdentity->logo) {
                Storage::delete('public/merchents/' . $siteIdentity->logo);
            }
        } else {
            $imageName = $siteIdentity->logo;
        }

        $request['logo'] = $imageName;
        $siteIdentity->update($request->except('file'));
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
