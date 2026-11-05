<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700,800&display=swap" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased text-slate-800">
        <div class="min-h-screen bg-gradient-to-br from-[#ecfeff] via-white to-[#fef3c7] p-4 sm:p-6 lg:p-10">
            <div class="mx-auto grid max-w-6xl overflow-hidden rounded-[32px] border border-white/60 bg-white/70 shadow-[0_20px_60px_rgba(15,118,110,0.12)] backdrop-blur-sm lg:grid-cols-[1.1fr_0.9fr]">
                <div class="relative hidden overflow-hidden bg-gradient-to-br from-[#0f766e] via-[#115e59] to-[#0f172a] p-10 text-white lg:flex lg:flex-col lg:justify-between">
                    <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_left,_rgba(251,191,36,0.35),transparent_30%),radial-gradient(circle_at_bottom_right,_rgba(45,212,191,0.30),transparent_30%)]"></div>
                    <div class="relative">
                        <div class="mb-8 flex items-center gap-3">
                            <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-white/10 text-2xl shadow-lg backdrop-blur-sm">🌴</div>
                            <div>
                                <p class="text-xs uppercase tracking-[0.3em] text-teal-100/80">Wisata</p>
                                <h1 class="text-2xl font-extrabold tracking-tight">Lampung</h1>
                            </div>
                        </div>

                        <div class="max-w-md">
                            <p class="mb-4 text-sm uppercase tracking-[0.25em] text-teal-100/80">Nikmati perjalanan</p>
                            <h2 class="text-4xl font-black leading-tight">Mulai petualanganmu bersama kami.</h2>
                            <p class="mt-5 text-base leading-7 text-teal-50/80">
                                Temukan pantai, pegunungan, dan pengalaman wisata yang menawan di Lampung.
                                Daftar sekarang untuk menjelajah lebih mudah dan lebih menyenangkan.
                            </p>
                        </div>
                    </div>

                    <div class="relative grid gap-4">
                        <div class="rounded-2xl border border-white/15 bg-white/5 p-4 backdrop-blur-sm">
                            <p class="text-sm text-teal-100/80">Popular destinations</p>
                            <div class="mt-3 flex items-center justify-between text-lg font-semibold">
                                <span>Pantai Kiluan</span>
                                <span>⭐ 4.9</span>
                            </div>
                        </div>
                        <div class="flex gap-3 text-sm text-teal-50/80">
                            <span class="rounded-full border border-white/15 bg-white/5 px-3 py-1">Pantai</span>
                            <span class="rounded-full border border-white/15 bg-white/5 px-3 py-1">Gunung</span>
                            <span class="rounded-full border border-white/15 bg-white/5 px-3 py-1">Kuliner</span>
                        </div>
                    </div>
                </div>

                <div class="flex items-center justify-center bg-white/60 p-5 sm:p-8 lg:p-10">
                    <div class="w-full max-w-md rounded-[28px] border border-slate-200 bg-white/90 p-6 shadow-[0_18px_45px_rgba(15,23,42,0.08)] sm:p-8">
                        <div class="mb-8 flex items-center justify-between">
                            <div>
                                <p class="text-xs font-semibold uppercase tracking-[0.3em] text-teal-700/70">Akses member</p>
                                <h3 class="mt-2 text-2xl font-bold text-slate-900">{{ request()->routeIs('login') ? 'Masuk' : 'Daftar' }}</h3>
                            </div>
                            <a href="/" class="inline-flex h-11 w-11 items-center justify-center rounded-full bg-amber-100 text-xl shadow-sm transition hover:bg-amber-200">🏝️</a>
                        </div>

                        {{ $slot }}
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
