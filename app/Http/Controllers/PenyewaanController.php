<?php

namespace App\Http\Controllers;

use App\Models\Penyewaan;
use App\Models\Peralatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PenyewaanController extends Controller
{

    // Tampilkan halaman penyewaan
    public function index()
    {
        $peralatan = Peralatan::where('ketersediaan', '>', 0)->get(); // Ambil peralatan yang stoknya tersedia
        return view('penyewaan.index', compact('peralatan'));
    }

    // Proses penyewaan
    public function store(Request $request)
    {
        $request->validate([
            'peralatan_id' => 'required|exists:peralatans,id',
            'durasi' => 'required|integer|min:1',
            'tanggal_penyewaan' => 'required',
        ]);

        // Ambil data peralatan
        $peralatan = Peralatan::findOrFail($request->peralatan_id);

        // Hitung total harga
        $total_harga = $peralatan->harga * $request->durasi;

        // Simpan data penyewaan
        $penyewaan = Penyewaan::create([
            'user_id' => Auth::id(),
            'peralatan_id' => $request->peralatan_id,
            'durasi' => $request->durasi,
            'total_harga' => $total_harga,
            'metode_pembayaran' => 'Menunggu Pembayaran',
            'tanggal_penyewaan' => now(), // Simpan waktu sekarang
            'status' => 'pending', // Status awal
        ]);

        // Redirect ke halaman konfirmasi dengan data penyewaan
        return redirect()->route('transaksi.show', $penyewaan->id);
    }

    // Tampilkan halaman konfirmasi penyewaan
    public function confirm($id)
    {
        $penyewaan = Penyewaan::with('peralatan')->findOrFail($id);
        return view('penyewaan.confirm', compact('penyewaan'));
    }

}
