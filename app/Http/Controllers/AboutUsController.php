<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\FormOrder;
use App\Models\Seo;
use App\Models\SiteIdentity;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function show()
    {
        $seo = Seo::where('page', 'about')->first();
        $identities = SiteIdentity::latest()->first();

        return view('about', compact(['seo', 'identities']));
    }
}
