<?php

namespace App\Http\Controllers;

use App\Models\Peralatan;
use Illuminate\Http\Request;

class PenyewaanController extends Controller
{
    public function index()
    {
        //
        $peralatan = Peralatan::all(); // Mengambil semua data dari tabel peralatan
        return view('penyewaan.index', compact('peralatan')); 
    }

}
