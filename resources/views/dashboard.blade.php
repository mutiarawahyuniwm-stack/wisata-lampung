<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between gap-3">
            <div class="flex items-center gap-3">
                <div class="flex h-9 w-9 items-center justify-center rounded-xl bg-gradient-to-br from-emerald-500 via-teal-500 to-cyan-500 text-white shadow-md shadow-emerald-500/30">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M4 6.75A2.75 2.75 0 016.75 4h10.5A2.75 2.75 0 0120 6.75v10.5A2.75 2.75 0 0117.25 20H6.75A2.75 2.75 0 014 17.25V6.75zm3.5 1.5h9m-9 4h9m-9 4h6" />
                    </svg>
                </div>
                <h2 class="text-xl font-black tracking-tight text-slate-800">Wisata Lampung</h2>
            </div>
            <span class="rounded-full border border-emerald-200 bg-emerald-50 px-2.5 py-1 text-[10px] font-bold uppercase tracking-[0.2em] text-emerald-700">Ready</span>
        </div>
    </x-slot>

    <div x-data="{
        selectedDay: 2,
        favorite: true,
        booked: false,
        dayPlan: {
            1: { title: 'Pantai Kiluan', time: '08.00 - 12.00', badge: 'Selesai' },
            2: { title: 'Way Kambas', time: '09.00 - 13.00', badge: 'Hari ini' },
            3: { title: 'Makan khas Lampung', time: '12.30 - 13.30', badge: 'Rencana' },
            4: { title: 'Danau Ranau', time: '08.30 - 11.30', badge: 'Booking' },
            5: { title: 'Sunset point', time: '17.00 - 19.00', badge: 'Agenda' },
            6: { title: 'Museum Lampung', time: '10.00 - 12.00', badge: 'Baru' },
            7: { title: 'Pulang', time: '11.00 - 13.00', badge: 'Check out' }
        },
        getBadgeClass(badge) {
            if (badge === 'Selesai') return 'bg-emerald-100 text-emerald-700';
            if (badge === 'Hari ini') return 'bg-sky-100 text-sky-700';
            if (badge === 'Booking') return 'bg-amber-100 text-amber-700';
            if (badge === 'Check out') return 'bg-slate-200 text-slate-700';
            return 'bg-slate-100 text-slate-600';
        }
    }" class="dashboard-shell bg-[#eef5f3] py-5">
        <div class="mx-auto max-w-[1180px] px-4 sm:px-6">
            <div class="grid gap-5 lg:grid-cols-[1.22fr_0.78fr]">
                <div class="space-y-5">
                    @php
                        $leftCards = $wisata->take(3);
                    @endphp

                    @foreach ($leftCards as $item)
                        <div class="overflow-hidden rounded-[24px] border border-slate-200 bg-white shadow-[0_14px_30px_-24px_rgba(15,23,42,0.35)]">
                            <div class="flex items-center justify-between border-b border-slate-200 bg-white px-4 py-2.5">
                                <span class="text-[10px] font-bold uppercase tracking-[0.28em] text-emerald-600">{{ strtoupper($item->kategori) }}</span>
                                <span class="text-[11px] font-semibold text-slate-500">{{ $item->lokasi }}</span>
                            </div>
                            <div class="relative h-[240px] bg-cover bg-center" style="background-image: url('{{ $item->gambar }}');">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/35 via-black/5 to-transparent"></div>
                                <div class="absolute inset-x-0 bottom-0 flex items-end justify-between p-4 text-white">
                                    <div>
                                        <p class="text-[10px] font-bold uppercase tracking-[0.26em] text-emerald-100">{{ $item->kategori }}</p>
                                        <h3 class="mt-1 text-[1.8rem] font-black leading-none tracking-tight">{{ $item->nama }}</h3>
                                    </div>
                                    <span class="rounded-full bg-white/15 px-2.5 py-1 text-xs font-bold backdrop-blur-sm">{{ $item->harga }}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <aside class="rounded-[26px] border border-slate-200 bg-[#f3f7f6] p-5 shadow-[0_14px_30px_-24px_rgba(15,23,42,0.35)]">
                    <div class="mb-6">
                        <p class="text-[10px] font-bold uppercase tracking-[0.28em] text-emerald-600">Aktivitas</p>
                        <h3 class="mt-2 text-[2rem] font-black leading-none tracking-tight text-slate-800">Progress perjalanan</h3>
                    </div>

                    <div class="space-y-5">
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

                    <div class="mt-6 rounded-[20px] border border-dashed border-emerald-200 bg-emerald-50 p-4 text-sm leading-relaxed text-emerald-800">
                        <strong class="font-bold">Tips liburan:</strong> pilih jadwal pagi agar perjalanan lebih nyaman, cuaca sejuk, dan pengalaman wisata lebih maksimal.
                    </div>
                </aside>
            </div>

            <div class="mt-6 grid gap-4 md:grid-cols-4">
                <div class="rounded-[20px] border border-slate-200 bg-white p-4 shadow-[0_12px_24px_-20px_rgba(15,23,42,0.35)]">
                    <p class="text-[10px] font-bold uppercase tracking-[0.24em] text-slate-400">Budget</p>
                    <div class="mt-3 flex items-end justify-between">
                        <h4 class="text-2xl font-black text-slate-800">Rp 1,6Jt</h4>
                        <span class="rounded-full bg-emerald-100 px-2 py-1 text-[10px] font-bold text-emerald-700">Hemat</span>
                    </div>
                </div>

                <div class="rounded-[20px] border border-slate-200 bg-white p-4 shadow-[0_12px_24px_-20px_rgba(15,23,42,0.35)]">
                    <p class="text-[10px] font-bold uppercase tracking-[0.24em] text-slate-400">Cuaca</p>
                    <div class="mt-3 flex items-end justify-between">
                        <h4 class="text-2xl font-black text-slate-800">28°C</h4>
                        <span class="text-xl">☀️</span>
                    </div>
                </div>

                <div class="rounded-[20px] border border-slate-200 bg-white p-4 shadow-[0_12px_24px_-20px_rgba(15,23,42,0.35)]">
                    <p class="text-[10px] font-bold uppercase tracking-[0.24em] text-slate-400">Checklist</p>
                    <div class="mt-3 flex items-end justify-between">
                        <h4 class="text-2xl font-black text-slate-800">12/15</h4>
                        <span class="rounded-full bg-sky-100 px-2 py-1 text-[10px] font-bold text-sky-700">Siap</span>
                    </div>
                </div>

                <div class="rounded-[20px] border border-slate-200 bg-white p-4 shadow-[0_12px_24px_-20px_rgba(15,23,42,0.35)]">
                    <p class="text-[10px] font-bold uppercase tracking-[0.24em] text-slate-400">Jadwal</p>
                    <div class="mt-3 flex items-end justify-between">
                        <h4 class="text-2xl font-black text-slate-800">3 Hari</h4>
                        <span class="text-xl">📅</span>
                    </div>
                </div>
            </div>

            <div class="mt-6 rounded-[24px] border border-slate-200 bg-white p-5 shadow-[0_14px_30px_-24px_rgba(15,23,42,0.35)]">
                <div class="mb-4 flex items-center justify-between">
                    <div>
                        <p class="text-[10px] font-bold uppercase tracking-[0.24em] text-emerald-600">Agenda</p>
                        <h4 class="mt-2 text-xl font-black text-slate-800">Rencana hari ini</h4>
                    </div>
                    <button class="rounded-full border border-slate-200 px-3 py-1.5 text-[10px] font-bold uppercase tracking-[0.22em] text-slate-600">Tambah</button>
                </div>

                <div class="space-y-3">
                    <div class="flex items-center justify-between rounded-2xl border border-slate-200 bg-slate-50 px-4 py-3">
                        <div>
                            <p class="text-sm font-bold text-slate-800">Pantai Kiluan</p>
                            <p class="text-xs text-slate-500">08.00 - 11.00</p>
                        </div>
                        <span class="rounded-full bg-emerald-100 px-2 py-1 text-[10px] font-bold text-emerald-700">Selesai</span>
                    </div>

                    <div class="flex items-center justify-between rounded-2xl border border-slate-200 bg-slate-50 px-4 py-3">
                        <div>
                            <p class="text-sm font-bold text-slate-800">Makan siang khas Lampung</p>
                            <p class="text-xs text-slate-500">12.30 - 13.30</p>
                        </div>
                        <span class="rounded-full bg-amber-100 px-2 py-1 text-[10px] font-bold text-amber-700">Menunggu</span>
                    </div>

                    <div class="flex items-center justify-between rounded-2xl border border-slate-200 bg-slate-50 px-4 py-3">
                        <div>
                            <p class="text-sm font-bold text-slate-800">Sunset point</p>
                            <p class="text-xs text-slate-500">17.00 - 19.00</p>
                        </div>
                        <span class="rounded-full bg-sky-100 px-2 py-1 text-[10px] font-bold text-sky-700">Rencana</span>
                    </div>
                </div>
            </div>

            <div class="mt-6 grid gap-4 lg:grid-cols-[1.15fr_0.85fr]">
                <div class="rounded-[24px] border border-slate-200 bg-white p-5 shadow-[0_14px_30px_-24px_rgba(15,23,42,0.35)]">
                    <div class="mb-4 flex items-center justify-between">
                        <div>
                            <p class="text-[10px] font-bold uppercase tracking-[0.24em] text-rose-500">Favorit</p>
                            <h4 class="mt-2 text-xl font-black text-slate-800">Destinasi saya</h4>
                        </div>
                        <span class="text-xs font-bold uppercase tracking-[0.2em] text-slate-400">3 item</span>
                    </div>

                    <div class="space-y-3">
                        @foreach ($leftCards as $item)
                            <div class="flex items-center gap-3 rounded-2xl border border-slate-200 bg-slate-50 p-3">
                                <img src="{{ $item->gambar }}" alt="{{ $item->nama }}" class="h-14 w-14 rounded-2xl object-cover" />
                                <div class="flex-1">
                                    <p class="text-sm font-bold text-slate-800">{{ $item->nama }}</p>
                                    <p class="text-xs text-slate-500">{{ $item->lokasi }}</p>
                                </div>
                                <span class="rounded-full bg-emerald-100 px-2 py-1 text-[10px] font-bold text-emerald-700">Saved</span>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="rounded-[24px] border border-slate-200 bg-gradient-to-br from-slate-900 via-slate-800 to-emerald-900 p-5 text-white shadow-[0_16px_32px_-20px_rgba(15,23,42,0.7)]">
                    <p class="text-[10px] font-bold uppercase tracking-[0.24em] text-emerald-200">Trip summary</p>
                    <h4 class="mt-2 text-xl font-black">Ringkasan perjalanan</h4>

                    <div class="mt-5 space-y-4">
                        <div class="flex items-center justify-between rounded-2xl bg-white/10 px-3 py-2">
                            <span class="text-sm text-slate-200">Total destinasi</span>
                            <strong class="text-lg font-black">3</strong>
                        </div>
                        <div class="flex items-center justify-between rounded-2xl bg-white/10 px-3 py-2">
                            <span class="text-sm text-slate-200">Sisa budget</span>
                            <strong class="text-lg font-black">Rp 650K</strong>
                        </div>
                        <div class="flex items-center justify-between rounded-2xl bg-white/10 px-3 py-2">
                            <span class="text-sm text-slate-200">Jarak rute</span>
                            <strong class="text-lg font-black">4 lokasi</strong>
                        </div>
                    </div>

                    <button class="mt-5 w-full rounded-full bg-gradient-to-r from-emerald-400 to-teal-500 px-4 py-3 text-sm font-black text-slate-900 shadow-lg shadow-emerald-500/30" @click="booked = !booked" x-text="booked ? 'Sudah dipesan' : 'Mulai perjalanan'" :class="booked ? 'opacity-90' : ''"></button>
                </div>
            </div>

            <div class="mt-6 grid gap-4 lg:grid-cols-[1.08fr_0.92fr]">
                <div class="rounded-[24px] border border-slate-200 bg-white p-5 shadow-[0_14px_30px_-24px_rgba(15,23,42,0.35)]">
                    <div class="mb-4 flex items-center justify-between">
                        <div>
                            <p class="text-[10px] font-bold uppercase tracking-[0.24em] text-sky-500">Planner</p>
                            <h4 class="mt-2 text-xl font-black text-slate-800">Kalender perjalanan</h4>
                        </div>
                        <button class="rounded-full border border-slate-200 px-3 py-1.5 text-[10px] font-bold uppercase tracking-[0.2em] text-slate-600" @click="selectedDay = (selectedDay % 7) + 1">Ganti hari</button>
                    </div>

                    <div class="grid grid-cols-7 gap-2 text-center">
                        @foreach (['Sen', 'Sel', 'Rab', 'Kam', 'Jum', 'Sab', 'Min'] as $index => $day)
                            <button
                                type="button"
                                class="rounded-2xl px-2 py-3 text-xs font-bold transition"
                                :class="selectedDay === {{ $index + 1 }} ? 'bg-emerald-500 text-white shadow-lg shadow-emerald-500/20' : 'bg-slate-100 text-slate-600 hover:bg-slate-200'"
                                @click="selectedDay = {{ $index + 1 }}"
                            >
                                {{ $day }}
                            </button>
                        @endforeach
                    </div>

                    <div class="mt-5 rounded-[20px] border border-slate-200 bg-slate-50 p-4" x-show="dayPlan[selectedDay]">
                        <div class="flex items-center justify-between gap-3">
                            <div>
                                <p class="text-[10px] font-bold uppercase tracking-[0.22em] text-slate-500">Agenda terpilih</p>
                                <h5 class="mt-2 text-lg font-black text-slate-800" x-text="dayPlan[selectedDay].title"></h5>
                            </div>
                            <span class="rounded-full px-2 py-1 text-[10px] font-bold" :class="getBadgeClass(dayPlan[selectedDay].badge)" x-text="dayPlan[selectedDay].badge"></span>
                        </div>
                        <p class="mt-3 text-sm text-slate-600" x-text="dayPlan[selectedDay].time"></p>
                    </div>
                </div>

                <div class="rounded-[24px] border border-slate-200 bg-white p-5 shadow-[0_14px_30px_-24px_rgba(15,23,42,0.35)]">
                    <div class="mb-4 flex items-center justify-between">
                        <div>
                            <p class="text-[10px] font-bold uppercase tracking-[0.24em] text-amber-500">Aksi cepat</p>
                            <h4 class="mt-2 text-xl font-black text-slate-800">Status trip</h4>
                        </div>
                        <span class="rounded-full bg-emerald-100 px-2 py-1 text-[10px] font-bold text-emerald-700" x-text="favorite ? 'Favorit' : 'Belum disimpan'"></span>
                    </div>

                    <div class="space-y-3">
                        <button type="button" class="flex w-full items-center justify-between rounded-2xl border border-slate-200 bg-slate-50 px-4 py-3 text-left transition hover:border-emerald-200 hover:bg-emerald-50" @click="favorite = !favorite">
                            <div>
                                <p class="text-sm font-bold text-slate-800">Simpan destinasi</p>
                                <p class="text-xs text-slate-500">Tambahkan ke daftar favorit</p>
                            </div>
                            <span class="text-xl" x-text="favorite ? '❤' : '♡'" :class="favorite ? 'text-rose-500' : 'text-slate-400'"></span>
                        </button>

                        <button type="button" class="flex w-full items-center justify-between rounded-2xl border border-slate-200 bg-slate-50 px-4 py-3 text-left transition hover:border-sky-200 hover:bg-sky-50" @click="booked = !booked">
                            <div>
                                <p class="text-sm font-bold text-slate-800">Booking tiket</p>
                                <p class="text-xs text-slate-500">Status reservasi perjalanan</p>
                            </div>
                            <span class="rounded-full px-2 py-1 text-[10px] font-bold" :class="booked ? 'bg-emerald-100 text-emerald-700' : 'bg-slate-200 text-slate-700'" x-text="booked ? 'Booked' : 'Pending'"></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
