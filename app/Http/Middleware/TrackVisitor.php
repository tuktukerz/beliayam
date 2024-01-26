<?php

namespace App\Http\Middleware;

use Closure;
use Stevebauman\Location\Facades\Location;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TrackVisitor
{
    /**
     * Handle an incoming request.
     *
     * @param \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response) $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Get the current route (page)
        $page = $request->path();

        // Get IP address
        $ipAddress = $request->ip();


        // Get location information
        $location = Location::get($ipAddress);

        // Check if location retrieval was successful
        if ($location && is_object($location)) {
            // Get country from location
            $country = $location->countryName ?? null; // Use null if 'country' is not set
        } else {
            // Set country to null or handle it as needed
            $country = null;
        }

        // Get device information (you can use a more sophisticated method if needed)
        $device = $request->userAgent();


        // Get current timestamp
        $visitAt = now();

        // Track the visit in the database
        \App\Models\TrackVisitor::create([
            'page' => $page,
            'ip_address' => $ipAddress,
            'country' => $country,
            'device' => $device,
            'visit_at' => $visitAt,
        ]);

        return $next($request);
    }
}
