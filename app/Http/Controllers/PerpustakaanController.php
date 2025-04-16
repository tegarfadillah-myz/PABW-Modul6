<?php

namespace App\Http\Controllers;

use App\Models\Perpustakaan;

class PerpustakaanController extends Controller
{
    public function index()
    {
        // Ambil semua perpustakaan dan relasi buku-nya
        $perpustakaans = Perpustakaan::with('bukus')->get();

        // Kirim ke view
        return view('perpustakaan.index', compact('perpustakaans'));
    }
}
