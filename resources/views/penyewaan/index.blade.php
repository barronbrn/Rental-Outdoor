@extends('layouts.main')

@section('title', 'Penyewaan Peralatan')

@section('content')
<div class="min-h-screen bg-gray-100 py-8">
    <div class="max-w-6xl mx-auto bg-white rounded-lg shadow-lg p-8">
        <h1 class="text-3xl font-bold text-center mb-8">Penyewaan Peralatan</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Form Penyewaan -->
            <div>
                <form action="{{ route('penyewaan.store') }}" method="POST" class="space-y-6">
                    @csrf
                    <!-- Pilih Peralatan -->
                    <div>
                        <label for="peralatan_id" class="block text-lg font-medium text-gray-700 mb-2">Pilih Peralatan</label>
                        <select name="peralatan_id" id="peralatan_id" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200">
                            @foreach ($peralatan as $item)
                                <option value="{{ $item->id }}">{{ $item->namaPeralatan }} - Rp {{ number_format($item->harga, 0, ',', '.') }}/hari</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Durasi Penyewaan -->
                    <div>
                        <label for="durasi" class="block text-lg font-medium text-gray-700 mb-2">Durasi Penyewaan (hari)</label>
                        <input type="number" name="durasi" id="durasi" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200" min="1" required>
                    </div>

                    <!-- Metode Pembayaran -->
                    <div>
                        <label for="metode_pembayaran" class="block text-lg font-medium text-gray-700 mb-2">Metode Pembayaran</label>
                        <select name="metode_pembayaran" id="metode_pembayaran" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200" required>
                            <option value="transfer_bank">Transfer Bank</option>
                            <option value="kartu_kredit">Kartu Kredit</option>
                            <option value="e_wallet">E-Wallet</option>
                        </select>
                    </div>

                    <!-- Tombol Submit -->
                    <div class="text-center">
                        <button type="submit" class="w-full bg-blue-600 text-white py-3 px-6 rounded-lg hover:bg-blue-700 focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition duration-200">
                            Sewa Sekarang
                        </button>
                    </div>
                </form>
            </div>

            <!-- Detail Peralatan -->
            <div class="bg-gray-50 p-6 rounded-lg">
                <h2 class="text-2xl font-semibold mb-4">Detail Peralatan</h2>
                <div id="peralatan-detail" class="space-y-4">
                    <!-- Gambar Peralatan -->
                    <img id="peralatan-gambar" src="{{ asset('img/nophoto.jpg') }}" alt="Gambar Peralatan" class="w-full h-48 object-cover rounded-lg shadow-sm">

                    <!-- Nama Peralatan -->
                    <h3 id="peralatan-nama" class="text-xl font-bold text-gray-800"></h3>

                    <!-- Deskripsi Peralatan -->
                    <div id="peralatan-deskripsi" class="text-gray-600 space-y-2">
                        <!-- Deskripsi akan diisi oleh JavaScript -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript untuk Menampilkan Detail Peralatan -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const peralatanSelect = document.getElementById('peralatan_id');
        const peralatanGambar = document.getElementById('peralatan-gambar');
        const peralatanNama = document.getElementById('peralatan-nama');
        const peralatanDeskripsi = document.getElementById('peralatan-deskripsi');

        // Data peralatan dari backend
        const peralatanData = {!! json_encode($peralatan) !!};

        // Fungsi untuk mengupdate detail peralatan
        function updatePeralatanDetail() {
            const selectedId = peralatanSelect.value;
            const selectedPeralatan = peralatanData.find(item => item.id == selectedId);

            if (selectedPeralatan) {
                // Update gambar
                const fotoPath = selectedPeralatan.foto ? 
                    (selectedPeralatan.foto.startsWith('http') ? selectedPeralatan.foto : "{{ asset('') }}" + selectedPeralatan.foto) 
                    : "{{ asset('img/nophoto.jpg') }}";
                peralatanGambar.src = fotoPath;

                // Update nama
                peralatanNama.textContent = selectedPeralatan.namaPeralatan;

                // Update deskripsi
                let deskripsi = selectedPeralatan.deskripsi;
                if (typeof deskripsi === 'string') {
                    deskripsi = JSON.parse(deskripsi); // Konversi string JSON ke array
                }
                peralatanDeskripsi.innerHTML = deskripsi.map(item => `<p>- ${item}</p>`).join('');
            }
        }

        // Update detail saat halaman pertama kali dimuat
        updatePeralatanDetail();

        // Update detail saat peralatan dipilih
        peralatanSelect.addEventListener('change', updatePeralatanDetail);
    });
</script>
@endsection