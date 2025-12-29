<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Visitor;

class TrackVisitors
{
    public function handle(Request $request, Closure $next)
    {
        // Enregistre uniquement les visites du frontend (pas l'admin)
        if (!$this->isAdminRoute($request)) {
            Visitor::create([
                'ip_address' => $request->ip(),
                'user_agent' => $request->userAgent(),
                'visited_at' => now(),
            ]);
        }

        return $next($request);
    }

    /**
     * Vérifie si la route est une route d'administration
     */
    private function isAdminRoute(Request $request)
    {
        $path = $request->path();
        return str_starts_with($path, 'admin');
    }
}