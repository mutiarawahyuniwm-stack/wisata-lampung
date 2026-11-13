<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Wisata Lampung</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <style>
            body {
                margin: 0;
                background:
                    radial-gradient(circle at top left, rgba(16, 185, 129, 0.18), transparent 22%),
                    radial-gradient(circle at bottom right, rgba(59, 130, 246, 0.12), transparent 20%),
                    #dfeeea;
                color: #10232d;
            }
            .site-shell {
                min-height: 100vh;
                background: transparent;
            }
            .topbar {
                position: sticky;
                top: 0;
                z-index: 20;
                background: rgba(18, 53, 61, 0.92);
                border-bottom: 1px solid rgba(255,255,255,0.08);
                backdrop-filter: blur(12px);
                box-shadow: 0 10px 28px -20px rgba(2, 6, 23, 0.8);
            }
            .topbar-inner {
                max-width: 1240px;
                margin: 0 auto;
                padding: 0 12px;
                display: flex;
                align-items: center;
                justify-content: space-between;
                min-height: 64px;
            }
            .brand {
                display: flex;
                align-items: center;
                gap: 12px;
                color: #fff;
                font-weight: 800;
                letter-spacing: 0.02em;
                font-size: 1rem;
            }
            .brand-badge {
                width: 28px;
                height: 28px;
                border-radius: 50%;
                background: linear-gradient(135deg, #f8dc67, #79e5d7, #50b5c8);
                border: 2px solid rgba(255,255,255,0.3);
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: 13px;
                color: #0c3c3a;
            }
            .nav-links {
                display: flex;
                align-items: center;
                gap: 2.2rem;
                color: rgba(255,255,255,0.92);
                font-size: 0.9rem;
            }
            .nav-links a {
                color: rgba(255,255,255,0.92);
                text-decoration: none;
                font-weight: 500;
            }
            .nav-actions {
                display: flex;
                align-items: center;
                gap: 12px;
            }
            .nav-btn {
                display: inline-flex;
                align-items: center;
                justify-content: center;
                min-height: 38px;
                padding: 0 18px;
                border-radius: 9999px;
                font-size: 0.88rem;
                font-weight: 700;
                text-decoration: none;
            }
            .nav-btn.secondary {
                background: rgba(255,255,255,0.12);
                color: white;
                border: 1px solid rgba(255,255,255,0.14);
            }
            .nav-btn.primary {
                background: linear-gradient(135deg, #5dcfc0, #90f0da);
                color: #10252a;
                box-shadow: 0 12px 20px -12px rgba(94, 234, 212, 0.9);
            }
            .nav-btn:hover,
            .action-btn:hover,
            .destination-footer a:hover,
            .cta-strip a:hover {
                transform: translateY(-2px);
                filter: brightness(1.04);
            }
            .content {
                max-width: 1240px;
                margin: 0 auto;
                padding: 32px 16px 60px;
            }
            .hero-card {
                position: relative;
                background: linear-gradient(135deg, rgba(20, 56, 60, 0.98), rgba(18, 52, 61, 0.98));
                border: 1px solid rgba(15, 23, 42, 0.08);
                border-radius: 34px;
                overflow: hidden;
                max-width: 1040px;
                margin: 0 auto;
                display: grid;
                grid-template-columns: 1.18fr 0.82fr;
                min-height: 430px;
                box-shadow: 0 25px 65px -35px rgba(15, 23, 42, 0.5);
            }
            .hero-card::before {
                content: '';
                position: absolute;
                right: -80px;
                top: -80px;
                width: 260px;
                height: 260px;
                border-radius: 50%;
                background: rgba(94, 234, 212, 0.12);
                filter: blur(14px);
            }
            .hero-copy {
                padding: 56px 52px 40px 52px;
                position: relative;
            }
            .hero-tag {
                display: inline-block;
                background: rgba(241, 249, 252, 0.12);
                border: 1px solid rgba(255,255,255,0.12);
                color: #d8fff8;
                font-size: 0.62rem;
                letter-spacing: 0.32em;
                padding: 8px 10px 7px;
                text-transform: uppercase;
                border-radius: 9999px;
                font-weight: 800;
            }
            .hero-copy h1 {
                font-size: clamp(2.8rem, 3vw, 4.1rem);
                line-height: 0.96;
                font-weight: 900;
                letter-spacing: -0.05em;
                color: white;
                margin: 24px 0 18px;
                max-width: 520px;
            }
            .hero-copy h1 span {
                color: #7be0d1;
            }
            .hero-copy p {
                font-size: 1.05rem;
                line-height: 1.8;
                margin: 0;
                max-width: 540px;
                color: rgba(255,255,255,0.78);
            }
            .hero-actions {
                display: flex;
                gap: 16px;
                margin-top: 24px;
                flex-wrap: wrap;
            }
            .action-btn {
                display: inline-flex;
                align-items: center;
                justify-content: center;
                min-height: 46px;
                padding: 0 24px;
                border-radius: 9999px;
                font-size: 0.86rem;
                font-weight: 800;
                text-decoration: none;
            }
            .action-btn.primary {
                background: #dffaf3;
                color: #103e4d;
            }
            .action-btn.secondary {
                background: rgba(255,255,255,0.09);
                border: 1px solid rgba(255,255,255,0.18);
                color: #fff;
            }
            .hero-stats {
                display: flex;
                gap: 16px;
                margin-top: 30px;
                flex-wrap: wrap;
            }
            .stat-box {
                min-width: 120px;
                background: rgba(255,255,255,0.06);
                border: 1px solid rgba(255,255,255,0.1);
                border-radius: 16px;
                padding: 14px 14px 10px;
                text-align: center;
                box-shadow: inset 0 1px 0 rgba(255,255,255,0.04);
            }
            .stat-box strong {
                display: block;
                font-size: 1.8rem;
                line-height: 1;
                font-weight: 900;
                color: white;
            }
            .stat-box span {
                display: block;
                margin-top: 6px;
                color: rgba(255,255,255,0.78);
                font-size: 0.74rem;
            }
            .hero-visual {
                position: relative;
                background: linear-gradient(135deg, rgba(164, 198, 205, 0.75), rgba(154, 170, 170, 0.6));
                min-height: 430px;
                display: flex;
                align-items: flex-end;
                justify-content: center;
                padding: 28px 28px 18px;
            }
            .hero-photo {
                position: absolute;
                inset: 0;
                background-image: url('https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=1200&q=80');
                background-size: cover;
                background-position: center;
                filter: saturate(0.9) brightness(0.9) contrast(1.05);
            }
            .project-card {
                position: relative;
                z-index: 1;
                width: 82%;
                background: rgba(22, 31, 34, 0.25);
                border: 1px solid rgba(255,255,255,0.14);
                backdrop-filter: blur(4px);
                border-radius: 18px;
                padding: 16px 18px 14px;
                color: white;
                box-shadow: 0 18px 35px -25px rgba(15, 23, 42, 0.7);
            }
            .project-card small {
                display: block;
                font-size: 0.6rem;
                font-weight: 800;
                letter-spacing: 0.26em;
                text-transform: uppercase;
                opacity: 0.9;
                color: #cfe8ef;
            }
            .project-card .row {
                display: flex;
                justify-content: space-between;
                align-items: center;
                gap: 14px;
                margin-top: 10px;
            }
            .project-card h3 {
                margin: 0;
                font-size: 1.05rem;
                line-height: 1.2;
                font-weight: 800;
            }
            .project-card p {
                margin: 4px 0 0;
                color: rgba(255,255,255,0.76);
                font-size: 0.72rem;
            }
            .price-pill {
                border-radius: 9999px;
                background: linear-gradient(135deg, #f6d576, #f1b63d);
                color: #102834;
                font-size: 0.8rem;
                font-weight: 800;
                padding: 8px 12px;
                white-space: nowrap;
            }
            .features {
                max-width: 1040px;
                margin: 50px auto 0;
                background: rgba(249, 251, 250, 0.8);
                border: 1px solid rgba(176, 196, 201, 0.38);
                border-radius: 32px;
                padding: 32px 28px 26px;
                box-shadow: 0 18px 50px -32px rgba(23, 33, 42, 0.22);
            }
            .section-heading {
                text-align: center;
                margin-bottom: 22px;
            }
            .section-heading p {
                margin: 0;
                color: #1c948d;
                font-size: 0.68rem;
                letter-spacing: 0.34em;
                font-weight: 800;
                text-transform: uppercase;
            }
            .section-heading h2 {
                margin: 12px 0 0;
                font-size: clamp(2rem, 3vw, 3rem);
                line-height: 1.1;
                letter-spacing: -0.04em;
                font-weight: 900;
                color: #1a2a32;
            }
            .feature-grid {
                display: grid;
                grid-template-columns: repeat(3, minmax(0, 1fr));
                gap: 18px;
            }
            .mini-card {
                background: rgba(255,255,255,0.72);
                border: 1px solid rgba(167, 193, 198, 0.42);
                border-radius: 24px;
                padding: 20px 18px 18px;
                min-height: 210px;
                transition: transform 0.25s ease, box-shadow 0.25s ease, border-color 0.25s ease;
            }
            .mini-card:hover {
                transform: translateY(-6px);
                border-color: rgba(20, 184, 166, 0.36);
                box-shadow: 0 18px 28px -20px rgba(15, 118, 110, 0.35);
            }
            .mini-icon {
                width: 46px;
                height: 46px;
                border-radius: 16px;
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: 1.5rem;
                background: linear-gradient(135deg, #dff7f6, #dfeef4);
                margin-bottom: 18px;
            }
            .mini-card h3 {
                margin: 0;
                font-size: 1.05rem;
                font-weight: 800;
                color: #1a2a32;
            }
            .mini-card p {
                margin: 10px 0 0;
                color: rgba(26, 42, 50, 0.72);
                font-size: 0.8rem;
                line-height: 1.7;
            }
            .destinations {
                max-width: 1240px;
                margin: 54px auto 0;
            }
            .destinations-header {
                display: flex;
                align-items: center;
                justify-content: space-between;
                gap: 1rem;
                margin-bottom: 18px;
            }
            .destinations-header p {
                margin: 0;
                font-size: 0.68rem;
                letter-spacing: 0.34em;
                font-weight: 800;
                color: #1ca1a0;
                text-transform: uppercase;
            }
            .destinations-header h2 {
                margin: 10px 0 0;
                font-size: clamp(2.2rem, 3vw, 3.2rem);
                line-height: 1.05;
                letter-spacing: -0.04em;
                font-weight: 900;
                color: #1f2e38;
            }
            .destinations-header a {
                text-decoration: none;
                background: rgba(255,255,255,0.8);
                border: 1px solid rgba(148, 163, 184, 0.35);
                color: #18242d;
                border-radius: 9999px;
                min-height: 42px;
                padding: 0 18px;
                display: inline-flex;
                align-items: center;
                justify-content: center;
                font-size: 0.8rem;
                font-weight: 700;
            }
            .cards {
                display: grid;
                grid-template-columns: repeat(3, minmax(0, 1fr));
                gap: 22px;
            }
            .destination-card {
                background: rgba(255,255,255,0.6);
                border: 1px solid rgba(170, 183, 189, 0.28);
                border-radius: 28px;
                overflow: hidden;
                box-shadow: 0 25px 50px -32px rgba(15, 23, 42, 0.25);
                min-height: 380px;
                transition: transform 0.25s ease, box-shadow 0.25s ease, border-color 0.25s ease;
            }
            .destination-card:hover {
                transform: translateY(-8px);
                border-color: rgba(20, 184, 166, 0.35);
                box-shadow: 0 26px 54px -32px rgba(15, 118, 110, 0.28);
            }
            .destination-photo {
                height: 200px;
                background-size: cover;
                background-position: center;
                position: relative;
            }
            .destination-tag {
                position: absolute;
                left: 16px;
                top: 16px;
                border-radius: 9999px;
                background: rgba(255,255,255,0.9);
                border: 1px solid rgba(148, 163, 184, 0.2);
                color: #0e6a63;
                font-size: 0.61rem;
                font-weight: 800;
                letter-spacing: 0.18em;
                padding: 7px 10px 6px;
                text-transform: uppercase;
            }
            .destination-body {
                padding: 18px 18px 16px;
            }
            .destination-body h3 {
                margin: 0;
                font-size: 1.1rem;
                font-weight: 900;
                color: #1c2730;
            }
            .location {
                display: flex;
                align-items: center;
                gap: 8px;
                margin-top: 10px;
                color: #52666d;
                font-size: 0.78rem;
            }
            .location-dot {
                width: 8px;
                height: 8px;
                border-radius: 50%;
                background: #ff6d6d;
                display: inline-block;
            }
            .destination-body p {
                margin: 14px 0 0;
                color: rgba(31, 41, 55, 0.72);
                font-size: 0.8rem;
                line-height: 1.7;
            }
            .destination-footer {
                display: flex;
                justify-content: space-between;
                align-items: center;
                margin-top: 18px;
                gap: 14px;
            }
            .destination-footer strong {
                font-size: 1.05rem;
                font-weight: 900;
                color: #0e7a6a;
            }
            .destination-footer a {
                text-decoration: none;
                background: #1e2d35;
                color: white;
                min-height: 38px;
                padding: 0 16px;
                border-radius: 9999px;
                display: inline-flex;
                align-items: center;
                justify-content: center;
                font-size: 0.75rem;
                font-weight: 700;
            }
            .cta-strip {
                max-width: 1240px;
                margin: 54px auto 0;
                padding: 20px 28px;
                border-radius: 26px;
                background: rgba(255,255,255,0.7);
                border: 1px solid rgba(167, 182, 188, 0.4);
                display: flex;
                align-items: center;
                justify-content: space-between;
                gap: 16px;
                box-shadow: 0 24px 44px -35px rgba(15, 118, 110, 0.45);
            }
            .cta-strip p {
                margin: 0;
                font-size: 0.7rem;
                letter-spacing: 0.28em;
                font-weight: 800;
                color: #1f8d87;
                text-transform: uppercase;
            }
            .cta-strip h3 {
                margin: 10px 0 0;
                font-size: clamp(2rem, 2.4vw, 2.8rem);
                line-height: 1.05;
                letter-spacing: -0.04em;
                font-weight: 900;
                color: #1a2a32;
            }
            .cta-strip a {
                display: inline-flex;
                align-items: center;
                justify-content: center;
                min-height: 52px;
                padding: 0 24px;
                border-radius: 9999px;
                text-decoration: none;
                font-weight: 800;
                background: linear-gradient(135deg, #3bc5ba, #64e4d6);
                color: #103b45;
                box-shadow: 0 18px 28px -18px rgba(33, 199, 182, 0.8);
            }
            @media (max-width: 980px) {
                .hero-card {
                    grid-template-columns: 1fr;
                }
                .hero-copy {
                    padding: 42px 24px 30px;
                }
                .hero-visual {
                    min-height: 320px;
                }
                .feature-grid,
                .cards {
                    grid-template-columns: 1fr;
                }
                .destinations-header,
                .cta-strip {
                    flex-direction: column;
                    align-items: flex-start;
                }
            }
            @media (max-width: 640px) {
                .nav-links {
                    display: none;
                }
                .topbar-inner {
                    justify-content: space-between;
                }
                .hero-copy h1 {
                    font-size: 2.6rem;
                }
                .hero-stats {
                    gap: 10px;
                }
                .stat-box {
                    min-width: calc(33.333% - 8px);
                }
            }
        </style>
    </head>
    <body>
        <div class="site-shell">
            <header class="topbar">
                <div class="topbar-inner">
                    <div class="brand">
                        <div class="brand-badge">🌴</div>
                        <span>Wisata Lampung</span>
                    </div>

                    <nav class="nav-links" aria-label="Main navigation">
                        <a href="#home">Beranda</a>
                        <a href="#wisata">Destinasi</a>
                        <a href="#fitur">Keunggulan</a>
                        <a href="#kontak">Kontak</a>
                    </nav>

                    <div class="nav-actions">
                        @auth
                            <a href="{{ route('dashboard') }}" class="nav-btn secondary">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="nav-btn secondary">Masuk</a>
                            <a href="{{ route('register') }}" class="nav-btn primary">Daftar</a>
                        @endauth
                    </div>
                </div>
            </header>

            <main id="home" class="content">
                <section class="hero-card">
                    <div class="hero-copy">
                        <div class="hero-tag">Explore Lampung</div>
                        <h1>Nikmati keindahan<br>alam <span>Lampung</span></h1>
                        <p>Temukan destinasi terbaik untuk liburan santai, petualangan, dan momen tak terlupakan bersama keluarga maupun teman.</p>

                        <div class="hero-actions">
                            <a href="#wisata" class="action-btn primary">Lihat Destinasi</a>
                            <a href="#kontak" class="action-btn secondary">Hubungi Kami</a>
                        </div>

                        <div class="hero-stats">
                            <div class="stat-box">
                                <strong>25+</strong>
                                <span>Destinasi</span>
                            </div>
                            <div class="stat-box">
                                <strong>4.9</strong>
                                <span>Rating</span>
                            </div>
                            <div class="stat-box">
                                <strong>1K+</strong>
                                <span>Wisatawan</span>
                            </div>
                        </div>
                    </div>

                    <div class="hero-visual">
                        <div class="hero-photo"></div>
                        <div class="project-card">
                            <small>Featured trip</small>
                            <div class="row">
                                <div>
                                    <h3>Pantai Kiluan</h3>
                                    <p>Tanggamus, Lampung</p>
                                </div>
                                <div class="price-pill">Rp 150K</div>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="fitur" class="features">
                    <div class="section-heading">
                        <p>Keunggulan</p>
                        <h2>Kenapa memilih Lampung?</h2>
                    </div>

                    <div class="feature-grid">
                        <div class="mini-card">
                            <div class="mini-icon">🌊</div>
                            <h3>Pantai eksotis</h3>
                            <p>Pemandangan laut yang tenang, sunset yang memukau, dan pengalaman santai yang tak terlupakan.</p>
                        </div>
                        <div class="mini-card">
                            <div class="mini-icon">⛰️</div>
                            <h3>Alam pegunungan</h3>
                            <p>Nikmati udara segar, trekking seru, dan panorama hijau yang menenangkan di balik pepohonan.</p>
                        </div>
                        <div class="mini-card">
                            <div class="mini-icon">🎒</div>
                            <h3>Trip mudah</h3>
                            <p>Rencana liburan yang praktis, aman, dan cocok untuk keluarga, rekan kerja, maupun traveler solo.</p>
                        </div>
                    </div>
                </section>

                <section id="wisata" class="destinations">
                    <div class="destinations-header">
                        <div>
                            <p>Destinasi</p>
                            <h2>Pilihan favorit</h2>
                        </div>
                        <a href="{{ route('wisata.index') }}">Lihat Admin</a>
                    </div>

                    @if ($wisata->isEmpty())
                        <div class="rounded-[1.75rem] border border-dashed border-slate-300 bg-white/80 p-12 text-center text-slate-500 shadow-[0_18px_40px_-30px_rgba(15,23,42,0.2)]">
                            Belum ada data wisata. Silakan tambahkan di panel admin.
                        </div>
                    @else
                        <div class="cards">
                            @foreach ($wisata as $item)
                                <article class="destination-card">
                                    <div class="destination-photo" style="background-image: url('{{ $item->gambar }}');">
                                        <div class="destination-tag">{{ strtoupper($item->kategori) }}</div>
                                    </div>
                                    <div class="destination-body">
                                        <h3>{{ $item->nama }}</h3>
                                        <div class="location"><span class="location-dot"></span> {{ $item->lokasi }}</div>
                                        <p>{{ Str::limit($item->deskripsi, 120) }}</p>
                                        <div class="destination-footer">
                                            <strong>{{ $item->harga }}</strong>
                                            <a href="{{ route('destination', ['slug' => $item->slug]) }}">Lihat detail</a>
                                        </div>
                                    </div>
                                </article>
                            @endforeach
                        </div>
                    @endif
                </section>

                <section class="cta-strip">
                    <div>
                        <p>READY TO TRAVEL?</p>
                        <h3>Mulai rencana liburan Anda hari ini</h3>
                    </div>
                    <a href="{{ route('register') }}">Daftar Sekarang</a>
                </section>
            </main>
        </div>
    </body>
</html>
