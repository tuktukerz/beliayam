<?php

namespace App\Http\Controllers;

use App\Models\TrackVisitor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $visitor = TrackVisitor::select(DB::raw('COUNT(DISTINCT ip_address) as unique_visitors'), DB::raw('COUNT(*) as total_visit'))
            ->where('page', 'NOT LIKE', 'admin%')
            ->where('page', '!=', 'dashboard')
            ->whereMonth('visit_at', now()->month)
            ->whereYear('visit_at', now()->year)
            ->first();

        $topPage = TrackVisitor::select('page', DB::raw('COUNT(*) as total_visited'))
            ->where('page', 'NOT LIKE', 'admin%')
            ->where('page', '!=', 'dashboard')
            ->whereMonth('visit_at', now()->month)
            ->whereYear('visit_at', now()->year)
            ->groupBy('page')
            ->orderByDesc('total_visited')
            ->limit(3)
            ->get();

        return view('layouts.dashboard', compact(['visitor', 'topPage']));
    }
}
