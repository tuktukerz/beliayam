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
        $form = FormOrder::latest()->first();


        // Create a new DOMDocument
        $dom = new DOMDocument;

        // Load the HTML string
        $dom->loadHTML($form->link);

        // Get the first iframe element
        $iframe = $dom->getElementsByTagName('iframe')->item(0);

        // Get the src, width, and height attributes
        $src = $iframe->getAttribute('src');

        $form['link'] = $src;

        return view('layouts.form.index', compact(['form']));
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
    public function show(FormOrder $form)
    {
        return view('layouts.form.index', compact(['form']));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FormOrder $form)
    {
        return view('layouts.form.edit', compact(['form']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, FormOrder $form)
    {
        $form->update($request->all());

        return redirect()->route('form.index')->with('success', 'Link form order Berhasil diupdate !');;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FormOrder $form)
    {
        return redirect()->route('form.index');
    }
}
