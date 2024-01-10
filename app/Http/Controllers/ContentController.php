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
        if ($request->hasFile('imageFile')) {
            $path = 'public/' . $request->input('type') . '/';
            $imageName = Str::uuid() . time() . '.' . $request->imageFile->extension();
            $request->file('imageFile')->storeAs($path, $imageName);
            $request['image'] = $imageName;
        }

        Content::create($request->except(['imageFile']));
        return redirect()->route('content.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Content $content)
    {
        //
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

        return redirect()->route('content.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Content $content)
    {
        // Delete the image before deleting the content
        if ($content->image) {
            Storage::delete($content->image);
        }

        // Delete the content
        $content->delete();

        return redirect()->route('content.index');
    }
}