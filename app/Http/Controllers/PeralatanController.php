<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peralatan;
use Illuminate\Support\Facades\Storage;

class PeralatanController extends Controller
{

    // GET: Tampilkan semua peralatan di halaman web
    public function index()
    {
        $peralatan = Peralatan::all();
        return view('Admin.peralatan.peralatanIndex', compact('peralatan'));
    }

    // GET: Form tambah peralatan
    public function create()
    {
        return view('Admin.peralatan.create');
    }

    // POST: Simpan peralatan baru melalui form web
    public function store(Request $request)
    {
        $request->validate([
            'namaPeralatan' => 'required|string',
            'jenis' => 'required|string',
            'deskripsi' => 'required|json',
            'ketersediaan' => 'required|integer',
            'harga' => 'required|integer',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $fotoPath = null;
        if
        ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $namaFile = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('image'), $namaFile);
            $fotoPath = 'image/' . $namaFile;
        }

        Peralatan::create([
            'namaPeralatan' => $request->namaPeralatan,
            'jenis' => $request->jenis,
            'deskripsi' => $request->deskripsi,
            'ketersediaan' => $request->ketersediaan,
            'harga' => $request->harga,
            'foto' => $fotoPath
        ]);

        return redirect()->route('admin.peralatan.index')->with('success', 'Peralatan berhasil ditambahkan!');
    }

    // GET: Form edit peralatan
    public function edit($id)
    {
        $peralatan = Peralatan::findOrFail($id);
        return view('Admin.peralatan.edit', compact('peralatan'));
    }

    // PUT: Update peralatan dari form web
    public function update(Request $request, $id)
    {
        $peralatan = Peralatan::findOrFail($id);

        $request->validate([
            'namaPeralatan' => 'required|string',
            'jenis' => 'required|string',
            'ketersediaan' => 'required|integer',
            'harga' => 'required|integer',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        if ($request->hasFile('foto')) {
            // Hapus foto lama jika ada
            if ($peralatan->foto && file_exists(public_path($peralatan->foto))) {
                unlink(public_path($peralatan->foto));
            }

            // Simpan foto baru
            $file = $request->file('foto');
            $namaFile = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('image'), $namaFile);
            $peralatan->foto = 'image/' . $namaFile;
        }

        $peralatan->update($request->except(['foto']));

        return redirect()->route('admin.peralatan.index')->with('success', 'Peralatan berhasil diperbarui!');
    }

    // DELETE: Hapus peralatan
    public function destroy($id)
    {
        $peralatan = Peralatan::findOrFail($id);
        if ($peralatan->foto) {
            Storage::disk('public')->delete($peralatan->foto);
        }
        $peralatan->delete();

        return redirect()->route('admin.peralatan.index')->with('success', 'Peralatan berhasil dihapus!');
    }
}
