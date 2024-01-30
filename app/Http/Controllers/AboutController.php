<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Content;
use App\Models\Seo;
use App\Models\SiteIdentity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AboutController extends Controller
{
    public function aboutView() {
        $seo = Seo::where('page', 'about')->first();
        $types = ['vision', 'mission', 'place', 'story', 'activities', 'roadmap'];

        // Retrieve all records for the specified types
        $aboutByType = About::whereIn('type', $types)->get();
        
        // Separate the records based on type
        $visions = $aboutByType->where('type', 'vision');
        $missions = $aboutByType->where('type', 'mission');
        $places = $aboutByType->where('type', 'place');
        $story = $aboutByType->where('type', 'story')->first();
        $activities = $aboutByType->where('type', 'activities')->first();
        $roadmap = $aboutByType->where('type', 'roadmap')->first();

        $supports = Content::where('type', 'support')->get();


        $identities = SiteIdentity::latest()->first();

        $formattedPhone = preg_replace('/(\d{4})/', '$1 ',$identities['phone']);

        return view('about', compact(['seo', 'visions', 'missions', 'places', 'story', 'activities', 'roadmap', 'identities', 'supports', 'formattedPhone']));
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $abouts = About::get();

        return view('layouts.about.index', compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.about.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $oneType = ['story', 'activities', 'roadmap'];

        foreach ($oneType as $type) {
            if ($request['type'] == $type) {
                $ItemCount = About::where('type', $type)->count();
                if ($ItemCount > 0) {
                    return back()->withErrors(["type" => $type . " element is already present. Please remove or edit it"])->withInput();
                }
            }
        }

        if ($request->hasFile('imageFile')) {
            $path = 'public/' . $request->input('type') . '/';
            $imageName = Str::uuid() . time() . '.' . $request->imageFile->extension();
            $request->file('imageFile')->storeAs($path, $imageName);
            $request['image'] = $imageName;
        }

        About::create($request->except(['imageFile']));
        return redirect()->route('about.index')->with('success', 'About ' . $request->type . ' Berhasil ditambahkan !');
    }

    /**
     * Display the specified resource.
     */
    public function show(About $about)
    {
        return redirect()->route('about.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(About $about)
    {
        return view('layouts.about.edit', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, About $about)
    {
        // Handle image file update if needed
        if ($request->hasFile('imageFile')) {
            $path = 'public/' . $request->input('type') . '/';

            // Delete the old image if it exists
            if ($about->image) {
                Storage::delete($path . $about->image);
            }

            $imageName = Str::uuid() . time() . '.' . $request->imageFile->extension();
            $request->file('imageFile')->storeAs($path, $imageName);
            $request['image'] = $imageName;
        }

        $about->update($request->except(['imageFile']));

        return redirect()->route('about.index')->with('success', 'About ' . $about->type . ' Berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(About $about)
    {
        $path = 'public/' . $about->type . '/';

        // Delete the old banner if it exists
        if ($about->image) {
            Storage::delete($path . $about->image);
        }

        // Delete the about
        $about->delete();

        return redirect()->route('about.index')->with('success', 'About ' . $about->type . ' Berhasil diubah');

    }
}
