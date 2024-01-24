<?php

namespace App\Http\Controllers;

use App\Models\Legal;
use App\Models\SiteIdentity;
use Illuminate\Http\Request;

class LegalController extends Controller
{
    public function listPrivacy()
    {
        $privacies = Legal::get()->where('type', 'privacy');
        $identities = SiteIdentity::latest()->first();

        return view('privacy', compact('privacies', 'identities'));
    }

    public function listTos()
    {
        $tos = Legal::get()->where('type', 'tos');
        $identities = SiteIdentity::latest()->first();

        return view('tos', compact('tos', 'identities'));
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $legals = Legal::all();

        return view('layouts.legal.index', compact(['legals']));
    }

    /** 
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.legal.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Legal::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(Legal $legal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Legal $legal)
    {
        return view('layouts.legal.edit', compact(['legal']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Legal $legal)
    {
        $legal->update($request->all());

        return redirect()->route('legal.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Legal $legal)
    {
        $legal->delete();

        return redirect()->route('legal.index');
    }
}
