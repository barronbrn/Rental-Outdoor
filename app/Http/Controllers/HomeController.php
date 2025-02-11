<?php

namespace App\Http\Controllers;

use App\Models\Peralatan;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $peralatan = Peralatan::all(); // Mengambil semua data dari tabel peralatan
        return view('home', compact('peralatan')); 
    }

    public function indexCatalog()
    {
        $peralatan = Peralatan::all(); // Ambil semua peralatan
        return view('catalogProduk', compact('peralatan'));
    }

    public function filterByCategory($jenis)
    {
        $peralatan = Peralatan::where('jenis', $jenis)->get(); // Ambil produk berdasarkan jenis
        return view('catalogProduk', compact('peralatan', 'jenis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
