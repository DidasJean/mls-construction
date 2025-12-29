<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactMessage;
use App\Models\Realisation;
use App\Models\Service;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        // ===== STATISTIQUES GÉNÉRALES =====
        $stats = [
            // Messages
            'messages_total' => ContactMessage::count(),
            'messages_unread' => ContactMessage::where('status', 'unread')->count(),
            'messages_today' => ContactMessage::whereDate('created_at', Carbon::today())->count(),
            
            // Services
            'services_total' => Service::count(),
            'services_active' => Service::where('is_active', true)->count(),
            
            // Réalisations
            'realisations_total' => Realisation::count(),
            'realisations_featured' => Realisation::where('featured', true)->count(),
            
            // Visiteurs (exemple - à connecter à Google Analytics plus tard)
            'visitors_month' => 1248, // Exemple
            'visitors_today' => 56,   // Exemple
        ];
        
        // ===== ACTIVITÉ RÉCENTE =====
        $recentMessages = ContactMessage::latest()
            ->take(6)
            ->get(['id', 'name', 'email', 'status', 'created_at']);
        
        $recentRealisations = Realisation::latest()
            ->take(4)
            ->get(['id', 'title', 'location', 'created_at']);
        
        $recentServices = Service::latest()
            ->take(3)
            ->get(['id', 'title', 'is_active', 'created_at']);
        
        // ===== ÉVOLUTION DES MESSAGES (30 derniers jours) =====
        $messagesTrend = ContactMessage::select(
            DB::raw('DATE(created_at) as date'),
            DB::raw('COUNT(*) as count')
        )
        ->where('created_at', '>=', Carbon::now()->subDays(30))
        ->groupBy('date')
        ->orderBy('date')
        ->get();
        
        // ===== MESSAGES PAR STATUT =====
        $messagesByStatus = ContactMessage::select(
            'status',
            DB::raw('COUNT(*) as count')
        )
        ->groupBy('status')
        ->get()
        ->pluck('count', 'status');
        
        return view('admin.dashboard.index', compact(
            'stats',
            'recentMessages',
            'recentRealisations',
            'recentServices',
            'messagesTrend',
            'messagesByStatus'
        ));
    }
}