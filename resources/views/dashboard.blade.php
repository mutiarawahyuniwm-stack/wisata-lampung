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
                    {{ __('Dashboard User') }}
                </h2>
            </div>
            <span class="rounded-full border border-emerald-200 bg-emerald-50 px-3 py-1 text-xs font-bold uppercase tracking-[0.2em] text-emerald-700">
                Ready
            </span>
        </div>
    </x-slot>

    <div class="dashboard-shell py-10">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="glass-panel relative mb-8 overflow-hidden rounded-[2rem] border border-white/40 bg-slate-900 shadow-[0_25px_60px_-20px_rgba(15,23,42,0.9)]">
                <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=1200&q=80'); filter: brightness(0.55);"></div>
                <div class="absolute inset-0 bg-gradient-to-r from-slate-900 via-slate-900/80 to-emerald-900/50"></div>

                <div class="relative grid gap-6 p-6 md:grid-cols-[1.45fr_0.95fr] md:p-8 lg:p-10">
                    <div class="flex flex-col justify-center text-white">
                        <p class="mb-3 text-xs font-bold uppercase tracking-[0.35em] text-emerald-300">Wisata Lampung</p>
                        <h3 class="text-3xl font-black leading-tight sm:text-4xl">Jelajahi liburan yang nyaman, santai, dan berkesan.</h3>
                        <p class="mt-4 max-w-xl text-sm text-slate-200 sm:text-base">Lihat rekomendasi destinasi, rencanakan jadwal perjalanan, dan pilih tempat favoritmu dari daftar wisata terbaik Lampung.</p>

                        <div class="mt-6 flex flex-wrap gap-3">
                            <a href="{{ url('/') }}#wisata" class="inline-flex items-center justify-center rounded-full bg-emerald-500 px-5 py-3 text-sm font-bold text-white shadow-lg shadow-emerald-500/30 transition hover:bg-emerald-400">
                                Jelajahi Wisata
                            </a>
                            <a href="{{ route('profile.edit') }}" class="inline-flex items-center justify-center rounded-full border border-white/30 bg-white/10 px-5 py-3 text-sm font-bold text-white backdrop-blur-sm transition hover:bg-white/15">
                                Profil Saya
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
                        <p class="text-[0.7rem] font-bold uppercase tracking-[0.28em] text-emerald-100">Favorit</p>
                        <span class="rounded-full bg-white/15 p-2 backdrop-blur-sm">❤</span>
                    </div>
                    <h3 class="mt-6 text-4xl font-black tracking-tight">12</h3>
                    <p class="mt-3 text-sm text-emerald-50">destinasi disimpan</p>
                </div>

                <div class="group overflow-hidden rounded-[1.9rem] bg-gradient-to-br from-amber-400 via-orange-500 to-red-500 p-6 text-white shadow-[0_20px_50px_-15px_rgba(249,115,22,0.55)] transition duration-300 hover:-translate-y-1">
                    <div class="flex items-center justify-between">
                        <p class="text-[0.7rem] font-bold uppercase tracking-[0.28em] text-amber-50">Trip Plan</p>
                        <span class="rounded-full bg-white/15 p-2 backdrop-blur-sm">✈️</span>
                    </div>
                    <h3 class="mt-6 text-4xl font-black tracking-tight">04</h3>
                    <p class="mt-3 text-sm text-amber-50">jadwal perjalanan</p>
                </div>

                <div class="group overflow-hidden rounded-[1.9rem] bg-gradient-to-br from-sky-500 via-indigo-600 to-blue-700 p-6 text-white shadow-[0_20px_50px_-15px_rgba(59,130,246,0.55)] transition duration-300 hover:-translate-y-1">
                    <div class="flex items-center justify-between">
                        <p class="text-[0.7rem] font-bold uppercase tracking-[0.28em] text-sky-100">Rating</p>
                        <span class="rounded-full bg-white/15 p-2 backdrop-blur-sm">★</span>
                    </div>
                    <h3 class="mt-6 text-4xl font-black tracking-tight">4.9</h3>
                    <p class="mt-3 text-sm text-sky-100">pengalaman wisata</p>
                </div>
            </div>

            <div class="grid gap-6 lg:grid-cols-[1.1fr_0.9fr]">
                <div class="rounded-[2rem] border border-slate-200 bg-white p-6 shadow-[0_18px_40px_-20px_rgba(15,23,42,0.25)]">
                    <div class="mb-5 flex items-center justify-between gap-4">
                        <div>
                            <p class="text-xs font-bold uppercase tracking-[0.25em] text-emerald-600">Rekomendasi</p>
                            <h3 class="mt-2 text-2xl font-black text-slate-800">Wisata untukmu</h3>
                        </div>
                        <a href="{{ url('/') }}#wisata" class="rounded-full border border-slate-200 px-3 py-2 text-xs font-bold uppercase tracking-[0.2em] text-slate-600">Lihat semua</a>
                    </div>

                    <div class="space-y-4">
                        @foreach($wisata as $item)
                            <div class="flex gap-4 rounded-2xl border border-slate-200 bg-slate-50 p-3">
                                <img src="{{ $item->gambar }}" alt="{{ $item->nama }}" class="h-20 w-20 rounded-2xl object-cover">
                                <div class="flex-1">
                                    <div class="flex items-center justify-between gap-3">
                                        <h4 class="text-lg font-bold text-slate-800">{{ $item->nama }}</h4>
                                        <span class="rounded-full bg-emerald-100 px-2 py-1 text-[10px] font-bold uppercase tracking-[0.2em] text-emerald-700">{{ $item->kategori }}</span>
                                    </div>
                                    <p class="mt-2 text-sm text-slate-500">📍 {{ $item->lokasi }}</p>
                                    <p class="mt-1 text-sm font-semibold text-emerald-700">{{ $item->harga }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="rounded-[2rem] border border-slate-200 bg-gradient-to-br from-slate-50 via-white to-amber-50 p-6 shadow-[0_18px_40px_-20px_rgba(15,23,42,0.25)]">
                    <p class="text-xs font-bold uppercase tracking-[0.25em] text-amber-600">Aktivitas</p>
                    <h3 class="mt-2 text-2xl font-black text-slate-800">Progress perjalanan</h3>

                    <div class="mt-6 space-y-5">
                        <div>
                            <div class="mb-2 flex items-center justify-between text-sm font-semibold text-slate-600">
                                <span>Persiapan paket</span>
                                <span>80%</span>
                            </div>
                            <div class="h-2.5 rounded-full bg-slate-200">
                                <div class="h-2.5 w-[80%] rounded-full bg-gradient-to-r from-emerald-500 to-teal-500"></div>
                            </div>
                        </div>

                        <div>
                            <div class="mb-2 flex items-center justify-between text-sm font-semibold text-slate-600">
                                <span>Booking tiket</span>
                                <span>64%</span>
                            </div>
                            <div class="h-2.5 rounded-full bg-slate-200">
                                <div class="h-2.5 w-[64%] rounded-full bg-gradient-to-r from-amber-400 to-orange-500"></div>
                            </div>
                        </div>

                        <div>
                            <div class="mb-2 flex items-center justify-between text-sm font-semibold text-slate-600">
                                <span>Checklist kebutuhan</span>
                                <span>92%</span>
                            </div>
                            <div class="h-2.5 rounded-full bg-slate-200">
                                <div class="h-2.5 w-[92%] rounded-full bg-gradient-to-r from-sky-500 to-blue-600"></div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8 rounded-2xl border border-dashed border-emerald-200 bg-emerald-50 p-4 text-sm text-emerald-800">
                        <strong>Tips liburan:</strong> pilih jadwal pagi untuk menikmati sunrise dan cuaca lebih sejuk di pantai maupun pegunungan.
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
