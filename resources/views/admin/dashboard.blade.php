<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between gap-4">
            <div class="flex items-center gap-3">
                <div class="flex h-11 w-11 items-center justify-center rounded-2xl bg-gradient-to-br from-emerald-500 via-teal-500 to-cyan-500 text-white shadow-lg shadow-emerald-500/30">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M4 6.75A2.75 2.75 0 016.75 4h10.5A2.75 2.75 0 0120 6.75v10.5A2.75 2.75 0 0117.25 20H6.75A2.75 2.75 0 014 17.25V6.75zm3.5 1.5h9m-9 4h9m-9 4h6" />
                    </svg>
                </div>
                <h2 class="text-2xl font-black leading-tight tracking-tight text-slate-800">
                    {{ __('Dashboard Admin') }}
                </h2>
            </div>
            <span class="rounded-full border border-emerald-200 bg-emerald-50 px-3 py-1 text-xs font-bold uppercase tracking-[0.2em] text-emerald-700">
                Live
            </span>
        </div>
    </x-slot>

    <div class="dashboard-shell py-10">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="glass-panel relative mb-8 overflow-hidden rounded-[2rem] border border-white/40 bg-slate-900 shadow-[0_25px_60px_-20px_rgba(15,23,42,0.9)]">
                <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=1200&q=80'); filter: brightness(0.55);"></div>
                <div class="absolute inset-0 bg-gradient-to-r from-slate-900 via-slate-900/80 to-emerald-900/50"></div>

                <div class="relative grid gap-6 p-6 md:grid-cols-[1.5fr_0.9fr] md:p-8 lg:p-10">
                    <div class="flex flex-col justify-center text-white">
                        <p class="mb-3 text-xs font-bold uppercase tracking-[0.35em] text-emerald-300">Wisata Lampung</p>
                        <h3 class="text-3xl font-black leading-tight sm:text-4xl">Kelola destinasi favoritmu dengan tampilan yang lebih hidup.</h3>
                        <p class="mt-4 max-w-xl text-sm text-slate-200 sm:text-base">Pantau data wisata, kategori, dan status sistem secara cepat dengan dashboard yang lebih modern dan estetik.</p>

                        <div class="mt-6 flex flex-wrap gap-3">
                            <a href="{{ route('wisata.index') }}" class="inline-flex items-center justify-center rounded-full bg-emerald-500 px-5 py-3 text-sm font-bold text-white shadow-lg shadow-emerald-500/30 transition hover:bg-emerald-400">
                                Admin Wisata
                            </a>
                            <a href="{{ url('/') }}" class="inline-flex items-center justify-center rounded-full border border-white/30 bg-white/10 px-5 py-3 text-sm font-bold text-white backdrop-blur-sm transition hover:bg-white/15">
                                Lihat Website
                            </a>
                        </div>
                    </div>

                    <div class="flex items-center justify-center">
                        <div class="w-full max-w-sm overflow-hidden rounded-[1.8rem] border border-white/20 bg-white/10 p-2 shadow-2xl backdrop-blur-md">
                            <img src="https://images.unsplash.com/photo-1527631746610-bca00a040d60?auto=format&fit=crop&w=900&q=80" alt="Destinasi wisata Lampung" class="h-72 w-full rounded-[1.3rem] object-cover">
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-8 grid gap-6 md:grid-cols-3">
                <div class="group overflow-hidden rounded-[1.9rem] bg-gradient-to-br from-emerald-500 via-teal-600 to-emerald-700 p-6 text-white shadow-[0_20px_50px_-15px_rgba(16,185,129,0.55)] transition duration-300 hover:-translate-y-1">
                    <div class="flex items-center justify-between">
                        <p class="text-[0.7rem] font-bold uppercase tracking-[0.28em] text-emerald-100">Total Wisata</p>
                        <span class="rounded-full bg-white/15 p-2 backdrop-blur-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M3 12l9-9 9 9-9 9-9-9zm0 0h18" />
                            </svg>
                        </span>
                    </div>
                    <h3 class="mt-6 text-4xl font-black tracking-tight">{{ \App\Models\Wisata::count() }}</h3>
                    <p class="mt-3 text-sm text-emerald-50">data destinasi aktif</p>
                </div>

                <div class="group overflow-hidden rounded-[1.9rem] bg-gradient-to-br from-amber-400 via-orange-500 to-red-500 p-6 text-white shadow-[0_20px_50px_-15px_rgba(249,115,22,0.55)] transition duration-300 hover:-translate-y-1">
                    <div class="flex items-center justify-between">
                        <p class="text-[0.7rem] font-bold uppercase tracking-[0.28em] text-amber-50">Kategori</p>
                        <span class="rounded-full bg-white/15 p-2 backdrop-blur-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M5 7.5A2.5 2.5 0 017.5 5h9A2.5 2.5 0 0119 7.5v9A2.5 2.5 0 0116.5 19h-9A2.5 2.5 0 015 16.5v-9zm7 2.5h5m-5 4h5M9 9h.01M9 13h.01" />
                            </svg>
                        </span>
                    </div>
                    <h3 class="mt-6 text-4xl font-black tracking-tight">{{ \App\Models\Wisata::distinct('kategori')->count('kategori') }}</h3>
                    <p class="mt-3 text-sm text-amber-50">jenis wisata</p>
                </div>

                <div class="group overflow-hidden rounded-[1.9rem] bg-gradient-to-br from-sky-500 via-indigo-600 to-blue-700 p-6 text-white shadow-[0_20px_50px_-15px_rgba(59,130,246,0.55)] transition duration-300 hover:-translate-y-1">
                    <div class="flex items-center justify-between">
                        <p class="text-[0.7rem] font-bold uppercase tracking-[0.28em] text-sky-100">Status</p>
                        <span class="rounded-full bg-white/15 p-2 backdrop-blur-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </span>
                    </div>
                    <h3 class="mt-6 text-4xl font-black tracking-tight">Aktif</h3>
                    <p class="mt-3 text-sm text-sky-100">sistem berjalan normal</p>
                </div>
            </div>

            <div class="rounded-[2rem] border border-slate-200 bg-gradient-to-r from-slate-50 via-white to-emerald-50 p-6 shadow-[0_18px_40px_-20px_rgba(15,23,42,0.25)] ring-1 ring-slate-100">
                <div class="flex flex-col gap-5 sm:flex-row sm:items-center sm:justify-between">
                    <div>
                        <p class="text-xs font-bold uppercase tracking-[0.25em] text-emerald-600">Management</p>
                        <h3 class="mt-2 text-3xl font-black text-slate-800">Kelola destinasi</h3>
                        <p class="mt-3 max-w-2xl text-base text-slate-600">Tambah, ubah, dan hapus data wisata Lampung dengan cepat, rapi, dan lebih terstruktur.</p>
                    </div>
                    <a href="{{ route('wisata.index') }}" class="inline-flex items-center justify-center rounded-full bg-gradient-to-r from-emerald-500 to-teal-600 px-6 py-3.5 text-sm font-bold text-white shadow-lg shadow-emerald-500/25 transition hover:scale-[1.02] hover:from-emerald-400 hover:to-teal-500">
                        Ke Admin Wisata
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
