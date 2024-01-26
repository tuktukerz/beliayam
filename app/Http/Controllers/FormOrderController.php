<?php

namespace App\Http\Controllers;

use App\Models\FormOrder;
use DOMDocument;
use Illuminate\Http\Request;

class FormOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $formOrder = FormOrder::latest()->first();


        // Create a new DOMDocument
        $dom = new DOMDocument;

        // Load the HTML string
        $dom->loadHTML($formOrder->link);

        // Get the first iframe element
        $iframe = $dom->getElementsByTagName('iframe')->item(0);

        // Get the src, width, and height attributes
        $src = $iframe->getAttribute('src');

        $formOrder['link'] = $src;

        return view('layouts.form.index', compact(['formOrder']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return redirect()->route('form.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return redirect()->route('form.index');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        return redirect()->route('form.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $formOrder = FormOrder::findOrFail($id);
        return view('layouts.form.edit', compact(['formOrder']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $formOrder = FormOrder::findOrFail($id);
        $formOrder->update($request->all());

        return redirect()->route('form.index')->with('success', 'Link form order Berhasil diupdate !');;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FormOrder $formOrder)
    {
        return redirect()->route('form.index');
    }
}
