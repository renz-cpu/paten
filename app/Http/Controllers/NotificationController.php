<?php

namespace App\Http\Controllers;

use App\Models\bktp;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function getNotifications() {
        $notifications = bktp::where('is_read', false)
            ->orderBy('created_at', 'desc')
            ->take(10) // Ambil 10 notifikasi terbaru
            ->get();
    
        return response()->json($notifications);
    }    
}
