<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Halaman Login
    public function login()
    {
        return view('login');
    }

    // Proses Login (Redirect ke Dashboard dengan username)
    public function authenticate(Request $request)
    {
        $username = $request->input('username');
        return redirect()->route('dashboard', ['username' => $username]);
    }

    // Dashboard
    public function dashboard(Request $request)
    {
        $username = $request->query('username');
        
        // Data Statistik Dummy
        $statistik = [
            'total_penjualan' => 125,
            'pesanan_hari_ini' => 15,
            'varian_es' => 5
        ];

        return view('dashboard', compact('username', 'statistik'));
    }

    // Profile
    public function profile(Request $request)
    {
        $username = $request->query('username');
        return view('profile', compact('username'));
    }

    // Pengelolaan Data Es Kristal
    public function pengelolaan()
    {
        $data_es = [
            ['id' => 1, 'nama' => 'Es Kristal Mangga', 'harga' => 'Rp 10.000', 'terjual' => 25, 'is_terlaris' => true],
            ['id' => 2, 'nama' => 'Es Kristal Stroberi', 'harga' => 'Rp 12.000', 'terjual' => 40, 'is_terlaris' => true],
            ['id' => 3, 'nama' => 'Es Kristal Melon', 'harga' => 'Rp 11.000', 'terjual' => 18, 'is_terlaris' => false]
        ];

        return view('pengelolaan', compact('data_es'));
    }
}