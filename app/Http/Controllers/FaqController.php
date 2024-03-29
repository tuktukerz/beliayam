<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\SiteIdentity;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function faqView() {
        $faqs = Faq::all();
        $identities = SiteIdentity::latest()->first();

        $formattedPhone = preg_replace('/(\d{4})/', '$1 ',$identities['phone']);

        return view('faq', compact(['faqs', 'identities', 'formattedPhone']));
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $faqs = Faq::all();

        return view('layouts.faq.index', compact(['faqs']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.faq.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Faq::create($request->all());

        return redirect()->route('faq.index')->with('success', 'FAQ Berhasil dibuat !');;
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        return redirect()->route('faq.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Faq $faq)
    {
        return view('layouts.faq.edit', compact(['faq']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Faq $faq)
    {
        $faq->update($request->all());

        return redirect()->route('faq.index')->with('success', 'FAQ Berhasil diupdate !');;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Faq $faq)
    {
        $faq->delete();

        return redirect()->route('faq.index')->with('success', 'FAQ Berhasil dihapus !');;
    }
}
