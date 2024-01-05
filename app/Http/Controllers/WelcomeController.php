<?php

namespace App\Http\Controllers;

use App\Models\SectionBanner;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function show() {
        $bannerId = 1;
        $sectionBanner = SectionBanner::findOrFail($bannerId);
        return view('welcome', compact('sectionBanner'));
    }
}
