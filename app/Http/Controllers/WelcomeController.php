<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\Pricing;
use App\Models\SectionBanner;
use App\Models\Seo;
use App\Models\SiteIdentity;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
    public function show()
    {
        $seo = Seo::where('page', 'home')->first();
        $priceAverageByisland = Pricing::select('island', DB::raw('AVG(price) as total_price'), 'color')
            ->groupBy('island')
            ->groupBy('color')
            ->orderByDesc('total_price', 'desc')
            ->get();
        $identities = SiteIdentity::latest()->first();
        $pricings = Pricing::get()->toArray();
        $values = Content::where('type', 'value')->get();
        $supports = Content::where('type', 'support')->get();
        $howto = Content::where('type', 'howto')->latest()->first();
        $customers = Content::where('type', 'customer')->get();

        $groupedPricings = [];

        // grouping the price by island with hash table
        foreach ($pricings as $data) {
            if (isset($groupedPricings[$data['island']])) {
                $groupedPricings[$data['island']]['data'][] = [
                    'code' => $data['hc_key'],
                    'value' => $data['price'],
                ];
            } else {
                $groupedPricings[$data['island']] = [
                    'name' => $data['island'],
                    'color' => $data['color'],
                    'data' => [
                        [
                            'code' => $data['hc_key'],
                            'value' => $data['price'],
                        ],
                    ],
                ];
            }
        }

        $sectionBanner = SectionBanner::latest()
            ->first();
        return view('welcome', compact('seo', 'sectionBanner', 'groupedPricings', 'priceAverageByisland', 'values', 'supports', 'howto', 'customers', 'identities'));
    }
}
