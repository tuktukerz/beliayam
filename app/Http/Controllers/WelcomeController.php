<?php

namespace App\Http\Controllers;

use App\Models\Pricing;
use App\Models\SectionBanner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WelcomeController extends Controller
{
    public function show()
    {
        $pricings = Pricing::latest()->first();
        $series = json_decode(file_get_contents(public_path('json/mapKey.json')), true);

        $mapSeriesSorted = [];

        // adding pricings value to the value of each data from the series
        foreach ($series as $island) {
            $mapSeriesSorted[] = [
                'name' => $island['name'] ?? null,
                'data' => array_map(function ($code) use ($island, $pricings) {
                    return [
                        'code' => $code,
                        'value' => $pricings[$island['alias']] ?? null,
                    ];
                }, $island['data'] ?? []),
                'color' => $island['color'] ?? null
            ];
        }

        usort($mapSeriesSorted, function($a, $b) {
            $valueA = $a['data'][0]['value'] ?? 0;
            $valueB = $b['data'][0]['value'] ?? 0; 
        
            return $valueB - $valueA;
        });

        $sectionBanner = SectionBanner::latest()
            ->first();
        return view('welcome', compact('sectionBanner', 'mapSeriesSorted'));
    }
}
