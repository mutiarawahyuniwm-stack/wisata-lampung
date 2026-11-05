<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $wisata->nama }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-100 text-slate-800">
    <div class="mx-auto max-w-5xl px-6 py-10">
        <div class="mb-6 flex items-center justify-between">
            <div>
                <h2 class="text-3xl font-bold">Detail Wisata</h2>
            </div>
            <a href="{{ route('wisata.index') }}" class="rounded-xl bg-slate-800 px-4 py-2 text-white">Kembali</a>
        </div>

        <div class="overflow-hidden rounded-2xl bg-white shadow-lg">
            <div class="h-72 bg-cover bg-center" style="background-image: url('{{ $wisata->gambar }}');"></div>
            <div class="p-8">
                <div class="mb-3 inline-block rounded-full bg-emerald-100 px-3 py-1 text-sm font-medium text-emerald-700">{{ $wisata->kategori }}</div>
                <h3 class="text-3xl font-bold text-slate-900">{{ $wisata->nama }}</h3>
                <p class="mt-2 text-lg text-slate-500">📍 {{ $wisata->lokasi }}</p>
                <p class="mt-4 text-xl font-semibold text-emerald-700">{{ $wisata->harga }}</p>
                <p class="mt-6 text-base leading-7 text-slate-600">{{ $wisata->deskripsi }}</p>
            </div>
        </div>
    </div>
</body>
</html>
