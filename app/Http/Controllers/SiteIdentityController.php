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
    public function show(SiteIdentity $siteIdentity)
    {
        return view('layouts.siteidentity.index', compact('siteIdentity'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SiteIdentity $siteIdentity)
    {
        return view('layouts.siteidentity.edit', compact('siteIdentity'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SiteIdentity $siteIdentity)
    {
        if ($request->hasFile('logoBlack')) {
            if ($siteIdentity->logo_black) {
                Storage::delete('public/logo/' . $siteIdentity->logo_black);
            }

            $imageName = 'logo_black' . "." . $request->logoBlack->extension();
            $request->file('logoBlack')->storeAs('public/logo', $imageName);

            $request['logo_black'] = $imageName;
        }

        if ($request->hasFile('logoLight')) {
            if ($siteIdentity->logo_light) {
                Storage::delete('public/logo/' . $siteIdentity->logo_light);
            }

            $imageName = 'logo_light' . "." . $request->logoLight->extension();
            $request->file('logoLight')->storeAs('public/logo', $imageName);

            $request['logo_light'] = $imageName;
        }

        if ($request->hasFile('adFile')) {
            if ($siteIdentity->ad) {
                Storage::delete('public/ad/' . $siteIdentity->ad);
            }

            $imageName = 'ad' . "." . $request->adFile->extension();
            $request->file('adFile')->storeAs('public/ad', $imageName);

            $request['ad'] = $imageName;
        }

        $siteIdentity->update($request->except(['logoBlack', 'logoLight', 'adFile']));

        return redirect()->route('site-identity.show', $siteIdentity->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
