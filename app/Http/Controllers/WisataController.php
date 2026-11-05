<?php

namespace App\Http\Controllers;

use App\Models\Wisata;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class WisataController extends Controller
{
    public function index()
    {
        $wisata = Wisata::latest()->get();

        return view('admin.wisata.index', compact('wisata'));
    }

    public function create()
    {
        return view('admin.wisata.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'kategori' => 'required|string|max:100',
            'lokasi' => 'required|string|max:255',
            'harga' => 'required|string|max:100',
            'deskripsi' => 'required|string',
            'gambar' => 'nullable|string|max:255',
        ]);

        Wisata::create([
            'nama' => $request->nama,
            'slug' => Str::slug($request->nama),
            'kategori' => $request->kategori,
            'lokasi' => $request->lokasi,
            'harga' => $request->harga,
            'deskripsi' => $request->deskripsi,
            'gambar' => $request->gambar ?? 'https://images.unsplash.com/photo-1501785888041-af3ef285b470?auto=format&fit=crop&w=1200&q=80',
        ]);

        return redirect()->route('wisata.index')->with('success', 'Data wisata berhasil ditambahkan.');
    }

    public function show(string $id)
    {
        $wisata = Wisata::findOrFail($id);

        return view('admin.wisata.show', compact('wisata'));
    }

    public function edit(string $id)
    {
        $wisata = Wisata::findOrFail($id);

        return view('admin.wisata.edit', compact('wisata'));
    }

    public function update(Request $request, string $id)
    {
        $wisata = Wisata::findOrFail($id);

        $request->validate([
            'nama' => 'required|string|max:255',
            'kategori' => 'required|string|max:100',
            'lokasi' => 'required|string|max:255',
            'harga' => 'required|string|max:100',
            'deskripsi' => 'required|string',
            'gambar' => 'nullable|string|max:255',
        ]);

        $wisata->update([
            'nama' => $request->nama,
            'slug' => Str::slug($request->nama),
            'kategori' => $request->kategori,
            'lokasi' => $request->lokasi,
            'harga' => $request->harga,
            'deskripsi' => $request->deskripsi,
            'gambar' => $request->gambar ?? $wisata->gambar,
        ]);

        return redirect()->route('wisata.index')->with('success', 'Data wisata berhasil diperbarui.');
    }

    public function destroy(string $id)
    {
        $wisata = Wisata::findOrFail($id);
        $wisata->delete();

        return redirect()->route('wisata.index')->with('success', 'Data wisata berhasil dihapus.');
    }
}
