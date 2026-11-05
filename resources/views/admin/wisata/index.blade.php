<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Wisata</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-100 text-slate-800">
    <div class="min-h-screen bg-[radial-gradient(circle_at_top,_rgba(16,185,129,0.18),transparent_40%),linear-gradient(180deg,#f8fafc_0%,#e2e8f0_100%)]">
        <nav class="border-b border-slate-200 bg-slate-900 text-white shadow-lg shadow-slate-900/20">
            <div class="mx-auto flex max-w-7xl items-center justify-between px-6 py-4">
                <div>
                    <h1 class="text-xl font-black tracking-wide">Admin Wisata Lampung</h1>
                </div>
                <div class="flex items-center gap-4 text-sm">
                    <a href="{{ route('home') }}" class="rounded-full border border-white/20 px-3 py-2 font-medium text-slate-200 transition hover:border-amber-300 hover:text-amber-300">Lihat Website</a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="rounded-full bg-amber-400 px-4 py-2 font-semibold text-slate-900 transition hover:bg-amber-300">Logout</button>
                    </form>
                </div>
            </div>
        </nav>

        <main class="mx-auto max-w-7xl px-6 py-10">
            <div class="mb-8 flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
                <div>
                    <p class="text-xs font-semibold uppercase tracking-[0.25em] text-emerald-600">Management</p>
                    <h2 class="mt-2 text-3xl font-black text-slate-900">Daftar Destinasi Wisata</h2>
                    <p class="mt-2 text-slate-600">Kelola semua destinasi lampung yang akan ditampilkan di website.</p>
                </div>
                <a href="{{ route('wisata.create') }}" class="inline-flex items-center justify-center rounded-full bg-emerald-600 px-5 py-3 text-sm font-semibold text-white shadow-lg shadow-emerald-600/25 transition hover:bg-emerald-500">+ Tambah Wisata</a>
            </div>

            @if (session('success'))
                <div class="mb-6 rounded-2xl border border-emerald-200 bg-emerald-50 px-4 py-3 text-sm font-medium text-emerald-700">
                    {{ session('success') }}
                </div>
            @endif

            <div class="overflow-hidden rounded-[1.75rem] border border-slate-200 bg-white shadow-xl shadow-slate-200/50">
                <table class="min-w-full divide-y divide-slate-200">
                    <thead class="bg-slate-50">
                        <tr>
                            <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-[0.2em] text-slate-500">Nama</th>
                            <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-[0.2em] text-slate-500">Kategori</th>
                            <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-[0.2em] text-slate-500">Lokasi</th>
                            <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-[0.2em] text-slate-500">Harga</th>
                            <th class="px-6 py-4 text-right text-xs font-semibold uppercase tracking-[0.2em] text-slate-500">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-200 bg-white">
                        @forelse ($wisata as $item)
                            <tr class="hover:bg-slate-50/50">
                                <td class="px-6 py-4 font-semibold text-slate-800">{{ $item->nama }}</td>
                                <td class="px-6 py-4 text-slate-600">{{ $item->kategori }}</td>
                                <td class="px-6 py-4 text-slate-600">{{ $item->lokasi }}</td>
                                <td class="px-6 py-4 font-medium text-emerald-700">{{ $item->harga }}</td>
                                <td class="px-6 py-4">
                                    <div class="flex justify-end gap-2">
                                        <a href="{{ route('wisata.show', $item->id) }}" class="rounded-full bg-sky-500 px-3 py-2 text-xs font-semibold text-white transition hover:bg-sky-400">Detail</a>
                                        <a href="{{ route('wisata.edit', $item->id) }}" class="rounded-full bg-amber-400 px-3 py-2 text-xs font-semibold text-slate-900 transition hover:bg-amber-300">Edit</a>
                                        <form action="{{ route('wisata.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Yakin hapus data wisata ini?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="rounded-full bg-rose-600 px-3 py-2 text-xs font-semibold text-white transition hover:bg-rose-500">Hapus</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="px-6 py-14 text-center text-slate-500">Belum ada data wisata. Klik tombol tambah untuk membuat destinasi baru.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</body>
</html>
