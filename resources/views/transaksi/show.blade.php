@extends('layouts.main')

@section('title', 'Transaksi Penyewaan')

@section('content')
<div class="min-h-screen bg-gray-100 py-8">
    <div class="max-w-4xl mx-auto bg-white rounded-lg shadow-md p-8">
        <h1 class="text-2xl font-semibold text-center text-gray-800 mb-6">Transaksi Penyewaan</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Detail Penyewaan -->
            <div>
                <h2 class="text-lg font-medium text-gray-700 mb-4">Detail Penyewaan</h2>
                <div class="space-y-2 text-gray-600">
                    <p><strong>Peralatan:</strong> {{ $penyewaan->peralatan->namaPeralatan }}</p>
                    <p><strong>Durasi:</strong> {{ $penyewaan->durasi }} hari</p>
                    <p><strong>Total Harga:</strong> Rp {{ number_format($penyewaan->total_harga, 0, ',', '.') }}</p>
                    <p><strong>Status:</strong> <span class="text-gray-800">{{ ucfirst(str_replace('_', ' ', $penyewaan->status)) }}</span></p>
                </div>
            </div>

            <!-- Nomor Rekening / Tujuan Pembayaran -->
            @if ($penyewaan->status === 'pending')
                <div class="bg-gray-50 p-5 rounded-md border border-gray-200">
                    <h2 class="text-lg font-medium text-gray-700 mb-4">Tujuan Pembayaran</h2>
                    <div class="space-y-2 text-gray-600">
                        <p><strong>Bank:</strong> BCA</p>
                        <p><strong>No. Rekening:</strong> <span class="font-semibold text-gray-800">1234-5678-9012</span></p>
                        <p><strong>Atas Nama:</strong> PT Outdoor Adventure</p>
                        <hr class="my-3 border-gray-300">
                        <p><strong>E-Wallet:</strong> GoPay / OVO / Dana</p>
                        <p><strong>No. HP:</strong> <span class="font-semibold text-gray-800">0812-3456-7890</span></p>
                    </div>
                </div>
            @endif
        </div>

        <!-- Form Pembayaran -->
        @if ($penyewaan->status === 'pending')
            <form id="paymentForm" action="{{ route('transaksi.pembayaran', $penyewaan) }}" method="POST" enctype="multipart/form-data" class="space-y-6 mt-6">
                @csrf
                <!-- Metode Pembayaran -->
                <div>
                    <label for="metode_pembayaran" class="block text-sm font-medium text-gray-700 mb-2">Metode Pembayaran</label>
                    <select name="metode_pembayaran" id="metode_pembayaran" class="w-full p-3 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500 transition duration-200" required onchange="toggleBuktiPembayaran()">
                        <option value="transfer_bank">Transfer Bank</option>
                        <option value="bayar_ditempat">Bayar Ditempat</option>
                        <option value="e_wallet">E-Wallet</option>
                    </select>
                </div>

                <!-- Upload Bukti Pembayaran -->
                <div id="bukti_pembayaran_container">
                    <label for="bukti_pembayaran" class="block text-sm font-medium text-gray-700 mb-2">Upload Bukti Pembayaran</label>
                    <input type="file" name="bukti_pembayaran" id="bukti_pembayaran" class="w-full p-3 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500 transition duration-200" required>
                </div>

                <!-- Tombol Submit -->
                <div class="text-center">
                    <button type="submit" class="w-full bg-blue-500 text-white py-3 px-6 rounded-md hover:bg-blue-600 focus:ring-2 focus:ring-blue-400 transition duration-200">
                        Konfirmasi Pembayaran
                    </button>
                </div>
            </form>
        @else
            <!-- Informasi Pengambilan Barang -->
            <div class="bg-gray-50 p-6 rounded-md border border-gray-200 mt-6">
                <h2 class="text-lg font-medium text-gray-700 mb-4">Informasi Pengambilan Barang</h2>
                <div class="space-y-2 text-gray-600">
                    <p><strong>Alamat Pengambilan:</strong> Jl. Contoh No. 123, Kota Contoh</p>
                    <p><strong>Batas Waktu Pengambilan:</strong> {{ now()->addDays(1)->format('d M Y H:i') }}</p>
                </div>
            </div>
        @endif
    </div>
</div>

<script>
    function toggleBuktiPembayaran() {
        var metodePembayaran = document.getElementById("metode_pembayaran").value;
        var buktiContainer = document.getElementById("bukti_pembayaran_container");
        var buktiInput = document.getElementById("bukti_pembayaran");

        if (metodePembayaran === "bayar_ditempat") {
            buktiContainer.style.display = "none"; // Sembunyikan upload bukti
            buktiInput.removeAttribute("required"); // Hapus atribut required
        } else {
            buktiContainer.style.display = "block"; // Tampilkan upload bukti
            buktiInput.setAttribute("required", "required"); // Tambahkan atribut required
        }
    }

    // Panggil fungsi ini saat halaman dimuat untuk memastikan kondisi awal
    document.addEventListener("DOMContentLoaded", toggleBuktiPembayaran);
</script>

@endsection
