<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\FormOrder;
use App\Models\SiteIdentity;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function show() {
        $faqs = Faq::all();
        $identities = SiteIdentity::latest()->first();
        $formOrder = FormOrder::latest()->first();

        return view('about', compact(['faqs', 'identities', 'formOrder']));
    }
}
