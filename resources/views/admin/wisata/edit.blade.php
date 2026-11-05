<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Wisata</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-100 text-slate-800">
    <div class="min-h-screen bg-[radial-gradient(circle_at_top,_rgba(245,158,11,0.12),transparent_36%),linear-gradient(180deg,#f8fafc_0%,#e2e8f0_100%)] py-10">
        <div class="mx-auto max-w-4xl px-4 sm:px-6 lg:px-8">
            <div class="mb-6 flex items-center justify-between gap-4">
                <div>
                    <p class="text-xs font-semibold uppercase tracking-[0.25em] text-amber-600">Perbarui data</p>
                    <h2 class="mt-2 text-3xl font-black text-slate-900">Edit Destinasi</h2>
                </div>
                <a href="{{ route('wisata.index') }}" class="rounded-full border border-slate-300 bg-white px-4 py-2 text-sm font-semibold text-slate-700 transition hover:border-slate-400">Kembali</a>
            </div>

            <form action="{{ route('wisata.update', $wisata->id) }}" method="POST" class="rounded-[2rem] border border-slate-200 bg-white p-6 shadow-xl shadow-slate-200/50 sm:p-8">
                @csrf
                @method('PUT')

                <div class="grid gap-5 md:grid-cols-2">
                    <div class="md:col-span-2">
                        <label class="mb-2 block text-sm font-semibold text-slate-700">Nama Wisata</label>
                        <input type="text" name="nama" value="{{ old('nama', $wisata->nama) }}" class="w-full rounded-2xl border border-slate-300 bg-slate-50 px-4 py-3 focus:border-amber-400 focus:outline-none focus:ring-2 focus:ring-amber-200" required>
                    </div>

                    <div>
                        <label class="mb-2 block text-sm font-semibold text-slate-700">Kategori</label>
                        <input type="text" name="kategori" value="{{ old('kategori', $wisata->kategori) }}" class="w-full rounded-2xl border border-slate-300 bg-slate-50 px-4 py-3 focus:border-amber-400 focus:outline-none focus:ring-2 focus:ring-amber-200" required>
                    </div>

                    <div>
                        <label class="mb-2 block text-sm font-semibold text-slate-700">Lokasi</label>
                        <input type="text" name="lokasi" value="{{ old('lokasi', $wisata->lokasi) }}" class="w-full rounded-2xl border border-slate-300 bg-slate-50 px-4 py-3 focus:border-amber-400 focus:outline-none focus:ring-2 focus:ring-amber-200" required>
                    </div>

                    <div>
                        <label class="mb-2 block text-sm font-semibold text-slate-700">Harga</label>
                        <input type="text" name="harga" value="{{ old('harga', $wisata->harga) }}" class="w-full rounded-2xl border border-slate-300 bg-slate-50 px-4 py-3 focus:border-amber-400 focus:outline-none focus:ring-2 focus:ring-amber-200" required>
                    </div>

                    <div>
                        <label class="mb-2 block text-sm font-semibold text-slate-700">Gambar URL</label>
                        <input type="text" name="gambar" value="{{ old('gambar', $wisata->gambar) }}" class="w-full rounded-2xl border border-slate-300 bg-slate-50 px-4 py-3 focus:border-amber-400 focus:outline-none focus:ring-2 focus:ring-amber-200">
                    </div>

                    <div class="md:col-span-2">
                        <label class="mb-2 block text-sm font-semibold text-slate-700">Deskripsi</label>
                        <textarea name="deskripsi" rows="6" class="w-full rounded-2xl border border-slate-300 bg-slate-50 px-4 py-3 focus:border-amber-400 focus:outline-none focus:ring-2 focus:ring-amber-200" required>{{ old('deskripsi', $wisata->deskripsi) }}</textarea>
                    </div>
                </div>

                <div class="mt-8 flex justify-end">
                    <button type="submit" class="rounded-full bg-amber-500 px-6 py-3 text-sm font-semibold text-white shadow-lg shadow-amber-500/25 transition hover:bg-amber-400">Update Destinasi</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
