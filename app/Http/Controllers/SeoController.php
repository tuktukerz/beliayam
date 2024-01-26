<?php

namespace App\Http\Controllers;

use App\Models\Seo;
use Illuminate\Http\Request;

class SeoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $seo = Seo::all();
        return view("layouts.seo.index", compact(['seo']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.seo.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Seo::create($request->all());

        return redirect()->route('seo.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Seo $seo)
    {
        return view('layouts.seo.edit', compact(['seo']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Seo $seo)
    {
        $seo->update($request->all());

        return redirect()->route('seo.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Seo $seo)
    {
        $seo->delete();

        return redirect()->route('seo.index');
    }
}
