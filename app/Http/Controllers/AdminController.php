<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function showDashboard()
{
    $user = Auth::user()();

    if (!$user) {
        // Redirect ke login jika tidak ada pengguna yang login
        return redirect()->route('login');
    }

    return redirect('admin', compact('user'));
}

public function showpengguna()
{
    $user = Auth::user(); // Pengguna yang sedang login
    $totalUsers = User::count(); // Menghitung jumlah pengguna

    return redirect('admin', compact('user', 'totalUsers'));
}


}