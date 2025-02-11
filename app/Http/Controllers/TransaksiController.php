<?php

namespace App\Http\Controllers;

use App\Models\Penyewaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransaksiController extends Controller
{
    //
    public function index(Penyewaan $penyewaan)
    {
    return view('transaksi.index', compact('penyewaan'));
    }

    public function show(Penyewaan $penyewaan)
    {
        // Pastikan penyewaan milik user yang login
        if ($penyewaan->user_id !== Auth::id()) {
            abort(403, 'Unauthorized action.');
        }

        return view('transaksi.show', compact('penyewaan'));
    }

    // Proses pembayaran
    public function prosesPembayaran(Request $request, Penyewaan $penyewaan)
    {
        // Validasi input
        $request->validate([
            'metode_pembayaran' => 'required|in:transfer_bank,bayar_ditempat,e_wallet',
            'bukti_pembayaran' => $request->metode_pembayaran === 'bayar_ditempat' ? 'nullable' : 'required|file|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Simpan bukti pembayaran jika bukan "Bayar Ditempat"
        $buktiPath = null;
        if ($request->hasFile('bukti_pembayaran')) {
            $buktiPath = $request->file('bukti_pembayaran')->store('bukti_pembayaran', 'public');
        }

        // Update status penyewaan
        $penyewaan->update([
            'metode_pembayaran' => $request->metode_pembayaran,
            'bukti_pembayaran' => $buktiPath,
            'status' => $request->metode_pembayaran === 'bayar_ditempat' ? 'dikonfirmasi' : 'menunggu_verifikasi',
        ]);

        // Redirect ke halaman konfirmasi pembayaran
        return redirect()->route('transaksi.show', $penyewaan)->with('success', 'Pembayaran berhasil diproses!');
    }
}
