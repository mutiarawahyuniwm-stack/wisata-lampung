<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Wisata Lampung</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased">
        <header class="sticky top-0 z-50 border-b border-white/10 bg-slate-900/80 backdrop-blur-xl">
            <div class="mx-auto flex max-w-7xl items-center justify-between px-4 py-4 sm:px-6 lg:px-8">
                <div class="flex items-center gap-3">
                    <div class="flex h-10 w-10 items-center justify-center rounded-full bg-gradient-to-br from-amber-300 via-emerald-400 to-cyan-400 text-lg shadow-lg shadow-emerald-500/20">🏝️</div>
                    <div>
                        <div class="text-lg font-bold tracking-wide text-white">Wisata Lampung</div>
                    </div>
                </div>

                <nav class="hidden items-center gap-8 text-sm font-medium text-slate-200 md:flex">
                    <a href="#home" class="transition hover:text-emerald-300">Beranda</a>
                    <a href="#wisata" class="transition hover:text-emerald-300">Destinasi</a>
                    <a href="#fitur" class="transition hover:text-emerald-300">Keunggulan</a>
                    <a href="#kontak" class="transition hover:text-emerald-300">Kontak</a>
                </nav>

                <div class="flex items-center gap-3">
                    @auth
                        <a href="{{ route('dashboard') }}" class="rounded-full bg-white px-4 py-2 text-sm font-semibold text-slate-900 transition hover:bg-amber-200">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="rounded-full border border-white/20 px-4 py-2 text-sm font-semibold text-white transition hover:border-emerald-300 hover:text-emerald-200">Masuk</a>
                        <a href="{{ route('register') }}" class="primary-button px-4 py-2 text-sm font-semibold text-white">Daftar</a>
                    @endauth
                </div>
            </div>
        </header>

        <main id="home" class="mx-auto max-w-7xl px-4 pb-20 pt-10 sm:px-6 lg:px-8">
            <section class="relative overflow-hidden rounded-[2.5rem] border border-white/40 bg-slate-900 px-5 py-8 shadow-[0_35px_90px_-30px_rgba(15,23,42,0.8)] md:px-8 lg:px-10 lg:py-10">
                <div class="absolute inset-0 bg-cover bg-center opacity-70" style="background-image: url('https://images.unsplash.com/photo-1501785888041-af3ef285b470?auto=format&fit=crop&w=1600&q=80');"></div>
                <div class="absolute inset-0 bg-gradient-to-r from-slate-900 via-slate-900/80 to-emerald-900/55"></div>
                <div class="hero-glow"></div>

                <div class="relative grid items-center gap-8 lg:grid-cols-[1.15fr_0.85fr]">
                    <div class="max-w-xl text-white">
                        <div class="mb-5 inline-flex items-center gap-2 rounded-full border border-emerald-200/40 bg-emerald-400/10 px-3 py-1.5 text-[10px] font-bold uppercase tracking-[0.28em] text-emerald-100">
                            Explore Lampung
                        </div>
                        <h1 class="text-4xl font-black leading-tight tracking-tight sm:text-5xl lg:text-6xl">
                            Nikmati keindahan alam <span class="bg-gradient-to-r from-emerald-300 via-cyan-300 to-amber-200 bg-clip-text text-transparent">Lampung</span>
                        </h1>
                        <p class="mt-6 text-base leading-8 text-slate-200 sm:text-lg">
                            Temukan destinasi terbaik untuk liburan santai, petualangan, dan momen tak terlupakan bersama keluarga maupun teman.
                        </p>

                        <div class="mt-8 flex flex-wrap items-center gap-4">
                            <a href="#wisata" class="primary-button px-6 py-3 text-sm font-bold text-white">Lihat Destinasi</a>
                            <a href="#kontak" class="secondary-button px-6 py-3 text-sm font-bold text-white border-white/20 bg-white/5">Hubungi Kami</a>
                        </div>

                        <div class="mt-10 flex flex-wrap gap-4 text-sm font-medium text-slate-200">
                            <div class="stat-badge rounded-2xl px-4 py-3 backdrop-blur-sm">
                                <span class="block text-2xl font-black text-emerald-300">25+</span>
                                Destinasi
                            </div>
                            <div class="stat-badge rounded-2xl px-4 py-3 backdrop-blur-sm">
                                <span class="block text-2xl font-black text-amber-300">4.9</span>
                                Rating
                            </div>
                            <div class="stat-badge rounded-2xl px-4 py-3 backdrop-blur-sm">
                                <span class="block text-2xl font-black text-sky-300">1K+</span>
                                Wisatawan
                            </div>
                        </div>
                    </div>

                    <div class="relative">
                        <div class="absolute -left-5 top-6 h-28 w-28 rounded-full bg-emerald-400/30 blur-3xl"></div>
                        <div class="absolute -right-5 bottom-4 h-28 w-28 rounded-full bg-violet-400/30 blur-3xl"></div>
                        <div class="relative overflow-hidden rounded-[2rem] border border-white/20 bg-white/10 p-3 backdrop-blur-sm shadow-[0_30px_80px_-25px_rgba(16,185,129,0.7)]">
                            <div class="relative">
                                <img src="https://images.unsplash.com/photo-1527631746610-bca00a040d60?auto=format&fit=crop&w=900&q=80" alt="Pantai Lampung" class="h-[420px] w-full rounded-[1.5rem] object-cover">
                                <div class="image-overlay"></div>
                            </div>
                            <div class="absolute bottom-8 left-8 right-8 rounded-2xl border border-white/20 bg-slate-900/55 p-4 text-white shadow-xl backdrop-blur-sm">
                                <p class="text-[10px] uppercase tracking-[0.25em] text-emerald-200">Featured trip</p>
                                <div class="mt-2 flex items-center justify-between gap-3">
                                    <div>
                                        <p class="text-xl font-bold">Pantai Kiluan</p>
                                        <p class="text-sm text-slate-200">Tanggamus, Lampung</p>
                                    </div>
                                    <div class="rounded-full bg-gradient-to-r from-amber-300 to-yellow-200 px-3 py-2 text-sm font-bold text-slate-900">Rp 150K</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="fitur" class="mt-20 section-shell rounded-[2rem] p-6 md:p-8">
                <div class="mb-8 text-center">
                    <p class="text-sm font-semibold uppercase tracking-[0.25em] text-emerald-600">Keunggulan</p>
                    <h2 class="mt-3 text-3xl font-black text-slate-900 sm:text-4xl">Kenapa memilih Lampung?</h2>
                </div>

                <div class="grid gap-6 md:grid-cols-3">
                    <div class="feature-card p-6">
                        <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-2xl bg-gradient-to-br from-emerald-100 to-emerald-50 text-2xl">🌊</div>
                        <h3 class="text-xl font-bold text-slate-900">Pantai eksotis</h3>
                        <p class="mt-3 text-slate-600">Pemandangan laut yang tenang, sunset yang memukau, dan pengalaman santai yang tak terlupakan.</p>
                    </div>

                    <div class="feature-card p-6">
                        <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-2xl bg-gradient-to-br from-amber-100 to-orange-50 text-2xl">⛰️</div>
                        <h3 class="text-xl font-bold text-slate-900">Alam pegunungan</h3>
                        <p class="mt-3 text-slate-600">Nikmati udara segar, trekking seru, dan panorama hijau yang menenangkan di balik pepohonan.</p>
                    </div>

                    <div class="feature-card p-6">
                        <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-2xl bg-gradient-to-br from-sky-100 to-cyan-50 text-2xl">🎒</div>
                        <h3 class="text-xl font-bold text-slate-900">Trip mudah</h3>
                        <p class="mt-3 text-slate-600">Rencana liburan yang praktis, aman, dan cocok untuk keluarga, rekan kerja, maupun traveler solo.</p>
                    </div>
                </div>
            </section>

            <section id="wisata" class="mt-20">
                <div class="mb-8 flex items-end justify-between gap-4">
                    <div>
                        <p class="text-sm font-semibold uppercase tracking-[0.25em] text-emerald-600">Destinasi</p>
                        <h2 class="mt-3 text-3xl font-black text-slate-900 sm:text-4xl">Pilihan favorit</h2>
                    </div>
                    <a href="{{ route('wisata.index') }}" class="hidden rounded-full border border-slate-300 bg-white px-4 py-2 text-sm font-semibold text-slate-700 hover:border-slate-400 md:inline-flex">Lihat Admin</a>
                </div>

                @if ($wisata->isEmpty())
                    <div class="rounded-[1.75rem] border border-dashed border-slate-300 bg-white/80 p-12 text-center text-slate-500 shadow-[0_18px_40px_-30px_rgba(15,23,42,0.2)]">
                        Belum ada data wisata. Silakan tambahkan di panel admin.
                    </div>
                @else
                    <div class="grid gap-6 md:grid-cols-2 xl:grid-cols-3">
                        @foreach ($wisata as $item)
                            <article class="destination-card group overflow-hidden rounded-[1.75rem] border border-slate-200 bg-white/85 shadow-[0_20px_50px_-30px_rgba(15,23,42,0.35)]">
                                <div class="relative h-56 overflow-hidden">
                                    <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('{{ $item->gambar }}');"></div>
                                    <div class="image-overlay"></div>
                                    <div class="absolute left-4 top-4 rounded-full bg-white/90 px-3 py-1 text-[10px] font-bold uppercase tracking-[0.2em] text-emerald-700 shadow-sm">{{ $item->kategori }}</div>
                                </div>
                                <div class="p-6">
                                    <h3 class="text-2xl font-bold text-slate-900">{{ $item->nama }}</h3>
                                    <p class="mt-3 text-sm text-slate-500">📍 {{ $item->lokasi }}</p>
                                    <p class="mt-4 line-clamp-3 text-slate-600">{{ Str::limit($item->deskripsi, 110) }}</p>
                                    <div class="mt-5 flex items-center justify-between gap-3">
                                        <span class="text-lg font-black text-emerald-700">{{ $item->harga }}</span>
                                        <a href="{{ route('destination', ['slug' => $item->slug]) }}" class="rounded-full bg-slate-900 px-4 py-2 text-sm font-semibold text-white transition hover:bg-emerald-700">Lihat detail</a>
                                    </div>
                                </div>
                            </article>
                        @endforeach
                    </div>
                @endif
            </section>

            <section class="mt-20 rounded-[2rem] border border-emerald-100 bg-gradient-to-r from-emerald-50 via-white to-sky-50 p-8 shadow-[0_20px_55px_-35px_rgba(16,185,129,0.55)]">
                <div class="flex flex-col gap-5 text-center md:flex-row md:items-center md:justify-between md:text-left">
                    <div>
                        <p class="text-xs font-bold uppercase tracking-[0.28em] text-emerald-600">Ready to travel?</p>
                        <h3 class="mt-2 text-3xl font-black text-slate-900">Mulai rencana liburan Anda hari ini</h3>
                    </div>
                    <a href="{{ route('register') }}" class="primary-button px-6 py-3 text-sm font-bold text-white">
                        Daftar Sekarang
                    </a>
                </div>
            </section>
        </main>

        <footer id="kontak" class="bg-slate-900 text-slate-200">
            <div class="mx-auto flex max-w-7xl flex-col gap-6 px-4 py-10 sm:px-6 lg:flex-row lg:items-center lg:justify-between lg:px-8">
                <div>
                    <div class="text-2xl font-black text-white">Wisata Lampung</div>
                    <p class="mt-2 max-w-md text-slate-400">Jelajahi keindahan alam Lampung dengan pengalaman liburan yang aman, menyenangkan, dan berkesan.</p>
                </div>
                <div class="flex flex-col gap-2 text-sm text-slate-300 sm:flex-row sm:gap-6">
                    <span>📍 Lampung, Indonesia</span>
                    <span>📞 +62 812-3456-7890</span>
                    <span>✉️ hello@wisatalampung.id</span>
                </div>
            </div>
        </footer>
    </body>
</html>
