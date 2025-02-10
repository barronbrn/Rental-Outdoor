@extends('Admin.layouts.main')

@section('title', 'Edit Peralatan')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Edit Peralatan</h1>
        <div class="card mb-4">
            <div class="card-header">
                Form Edit Peralatan
            </div>
            <div class="card-body">
                <form action="{{ route('admin.peralatan.update', $peralatan->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="namaPeralatan" class="form-label">Nama Peralatan</label>
                        <input type="text" class="form-control" id="namaPeralatan" name="namaPeralatan"
                            value="{{ $peralatan->namaPeralatan }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="jenis" class="form-label">Jenis</label>
                        <input type="text" class="form-control" id="jenis" name="jenis"
                            value="{{ $peralatan->jenis }}" required>
                    </div>
                    <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi (JSON)</label>
                    <textarea class="form-control" id="deskripsi" name="deskripsi" required>{{ $peralatan->deskripsi }}</textarea>
                    <small class="text-muted">Contoh: {"kapasitas": "4 orang", "bahan": "Polyester"}</small>
                </div>
                    <div class="mb-3">
                        <label for="ketersediaan" class="form-label">Stok / Ketersediaan</label>
                        <input type="number" class="form-control" id="ketersediaan" name="ketersediaan" value="{{ $peralatan->ketersediaan }}"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="harga" class="form-label">Harga</label>
                        <input type="number" class="form-control" id="harga" name="harga"
                            value="{{ $peralatan->harga }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="foto" class="form-label">Foto</label>
                        @if ($peralatan->foto)
                            @if (filter_var($peralatan->foto, FILTER_VALIDATE_URL))
                                {{-- Jika format foto adalah URL (gambar online) --}}
                                <img src="{{ $peralatan->foto }}" alt="Foto" style="width: 100px;">
                            @elseif ($peralatan->foto && file_exists(public_path($peralatan->foto)))
                                {{-- Jika foto tersimpan di folder public/image --}}
                                <img src="{{ asset($peralatan->foto) }}" alt="Foto" style="width: 100px;">
                            @else
                                {{-- Jika tidak ada gambar --}}
                                <img src="{{ asset('img/nophoto.jpg') }}" alt="No Photo" style="width: 100px;">
                            @endif
                        @endif
                        <input type="file" class="form-control" id="foto" name="foto">
                    </div>
                    <button type="submit" class="btn btn-primary">Update peralatan</button>
                </form>
            </div>
        </div>
    </div>
@endsection
