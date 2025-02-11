@extends('layouts.main')

@section('title', 'Konfirmasi Penyewaan')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-2xl font-bold mb-6">Konfirmasi Penyewaan</h1>
    <div class="bg-white p-6 rounded shadow">
        <h2 class="text-xl font-semibold mb-4">Detail Penyewaan</h2>
        <p><strong>Peralatan:</strong> {{ $penyewaan->peralatan->namaPeralatan }}</p>
        <p><strong>Durasi:</strong> {{ $penyewaan->durasi }} hari</p>
        <p><strong>Total Harga:</strong> Rp {{ number_format($penyewaan->total_harga, 0, ',', '.') }}</p>
        <p><strong>Metode Pembayaran:</strong> {{ ucfirst(str_replace('_', ' ', $penyewaan->metode_pembayaran)) }}</p>
        <p><strong>Lokasi Pengambilan:</strong> Jl. Contoh No. 123, Kota Contoh</p>
        <p class="mt-4">Silakan selesaikan pembayaran dan ambil barang di lokasi yang telah ditentukan.</p>
    </div>
</div>
@endsection