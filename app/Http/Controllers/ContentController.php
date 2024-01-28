<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contents = Content::get();

        return view('layouts.contentView.index', compact('contents'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.contentView.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request['type'] == 'howto') {
            $howtoCount = Content::where('type', 'howto')->count();
            if ($howtoCount > 0) {
                return back()->withErrors(["type" => "Howto element is already present. Please remove or edit it"])->withInput();
            }
        }

        if ($request->hasFile('imageFile')) {
            $path = 'public/' . $request->input('type') . '/';
            $imageName = Str::uuid() . time() . '.' . $request->imageFile->extension();
            $request->file('imageFile')->storeAs($path, $imageName);
            $request['image'] = $imageName;
        }

        Content::create($request->except(['imageFile']));
        return redirect()->route('content.index')->with('success', 'Konten ' . $request->type . ' Berhasil ditambahkan !');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        return redirect()->route('content.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Content $content)
    {
        return view('layouts.contentView.edit', compact('content'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Content $content)
    {
        // Handle image file update if needed
        if ($request->hasFile('imageFile')) {
            $path = 'public/' . $request->input('type') . '/';

            // Delete the old image if it exists
            if ($content->image) {
                Storage::delete($path . $content->image);
            }

            $imageName = Str::uuid() . time() . '.' . $request->imageFile->extension();
            $request->file('imageFile')->storeAs($path, $imageName);
            $request['image'] = $imageName;
        }

        $content->update($request->except(['imageFile']));

        return redirect()->route('content.index')->with('success', 'Konten ' . $content->type . ' Berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Content $content)
    {
        $path = 'public/' . $content->type . '/';

        // Delete the old banner if it exists
        if ($content->image) {
            Storage::delete($path . $content->image);
        }

        // Delete the content
        $content->delete();

        return redirect()->route('content.index')->with('success', 'Konten ' . $content->type . ' Berhasil Dihapus');
    }
}
