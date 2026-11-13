<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ $destination->nama }} | Wisata Lampung</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <style>
            * { box-sizing: border-box; }
            body {
                margin: 0;
                background: #dfeeea;
                color: #1f2d34;
                font-family: 'Inter', sans-serif;
            }
            a { text-decoration: none; }
            .topbar {
                background: rgba(18, 53, 61, 0.96);
                border-bottom: 1px solid rgba(255,255,255,0.08);
            }
            .topbar-inner {
                max-width: 1240px;
                margin: 0 auto;
                padding: 0 18px;
                min-height: 64px;
                display: flex;
                align-items: center;
                justify-content: space-between;
                gap: 18px;
            }
            .brand {
                display: flex;
                align-items: center;
                gap: 12px;
                color: #fff;
                font-weight: 800;
                font-size: 1rem;
            }
            .brand-badge {
                width: 28px;
                height: 28px;
                border-radius: 50%;
                background: linear-gradient(135deg, #e5d44d, #64d6c5);
                border: 2px solid rgba(255,255,255,0.4);
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: 13px;
            }
            .nav-links {
                display: flex;
                align-items: center;
                gap: 28px;
                font-size: 0.9rem;
            }
            .nav-links a {
                color: rgba(255,255,255,0.9);
                font-weight: 500;
            }
            .content {
                max-width: 1240px;
                margin: 0 auto;
                padding: 30px 18px 60px;
            }
            .detail-wrapper {
                max-width: 1040px;
                margin: 0 auto;
                display: grid;
                grid-template-columns: 1.1fr 0.9fr;
                gap: 0;
                border-radius: 26px;
                overflow: hidden;
                background: rgba(255,255,255,0.12);
            }
            .detail-image {
                min-height: 430px;
                background-size: cover;
                background-position: center;
                border-radius: 26px 0 0 26px;
                box-shadow: 0 25px 55px -35px rgba(15, 23, 42, 0.35);
            }
            .detail-card {
                background: rgba(255,255,255,0.72);
                padding: 28px 30px 24px;
                border-radius: 0 26px 26px 0;
                border: 1px solid rgba(162,179,183,0.35);
                border-left: none;
                box-shadow: 0 25px 55px -35px rgba(15, 23, 42, 0.35);
            }
            .category {
                display: inline-block;
                background: rgba(17, 89, 82, 0.08);
                color: #0a5a53;
                padding: 8px 12px;
                border-radius: 9999px;
                font-size: 0.72rem;
                letter-spacing: 0.16em;
                font-weight: 800;
                text-transform: uppercase;
            }
            .detail-card h1 {
                margin: 18px 0 16px;
                font-size: clamp(2.2rem, 3vw, 3.1rem);
                line-height: 1.03;
                font-weight: 900;
                letter-spacing: -0.04em;
                color: #1e2b33;
            }
            .meta {
                display: flex;
                flex-direction: column;
                gap: 7px;
                color: #4d5f69;
                font-size: 0.9rem;
            }
            .meta-item {
                display: flex;
                align-items: center;
                gap: 10px;
            }
            .dot {
                width: 9px;
                height: 9px;
                border-radius: 50%;
                background: #10b981;
                display: inline-block;
            }
            .price-box {
                display: inline-flex;
                align-items: center;
                justify-content: center;
                min-height: 42px;
                padding: 0 18px;
                margin-top: 20px;
                border-radius: 12px;
                background: rgba(93, 220, 196, 0.18);
                color: #0d5f5a;
                font-size: 1.05rem;
                font-weight: 900;
            }
            .description {
                margin-top: 18px;
                color: rgba(31, 45, 52, 0.8);
                font-size: 0.95rem;
                line-height: 1.8;
            }
            .feature-list {
                margin: 20px 0 0;
                padding-left: 18px;
                color: #1f2d34;
                line-height: 2;
                font-size: 0.95rem;
            }
            .actions {
                display: flex;
                gap: 14px;
                margin-top: 24px;
            }
            .btn {
                display: inline-flex;
                align-items: center;
                justify-content: center;
                min-height: 44px;
                padding: 0 20px;
                border-radius: 9999px;
                border: 1px solid rgba(148,163,184,0.35);
                font-size: 0.8rem;
                font-weight: 800;
            }
            .btn.secondary {
                background: rgba(255,255,255,0.85);
                color: #1f2d34;
            }
            .btn.primary {
                background: linear-gradient(135deg, #f5d76d, #f0b742);
                color: #10232d;
                border: none;
            }
            @media (max-width: 860px) {
                .detail-wrapper { grid-template-columns: 1fr; }
                .detail-image, .detail-card { border-radius: 26px; border-left: 1px solid rgba(162,179,183,0.35); }
                .nav-links { display: none; }
            }
        </style>
    </head>
    <body>
        <header class="topbar">
            <div class="topbar-inner">
                <div class="brand">
                    <div class="brand-badge">🌴</div>
                    <span>Wisata Lampung</span>
                </div>
                <nav class="nav-links" aria-label="Main navigation">
                    <a href="{{ route('home') }}">Beranda</a>
                    <a href="{{ route('home') }}#wisata">Wisata</a>
                    <a href="{{ route('home') }}#kontak">Kontak</a>
                </nav>
            </div>
        </header>

        <main class="content">
            <section class="detail-wrapper">
                <div class="detail-image" style="background-image: url('{{ $destination->gambar }}');"></div>

                <div class="detail-card">
                    <span class="category">{{ $destination->kategori }}</span>
                    <h1>{{ $destination->nama }}</h1>

                    <div class="meta">
                        <div class="meta-item"><span class="dot"></span> {{ $destination->lokasi }}</div>
                        <div class="meta-item"><span class="dot"></span> Wisata alam & keluarga</div>
                    </div>

                    <div class="price-box">{{ $destination->harga }}</div>
                    <div class="description">{{ $destination->deskripsi }}</div>

                    <ul class="feature-list">
                        <li>Pemandangan alam yang menawan dan tenang.</li>
                        <li>Cocok untuk liburan keluarga, teman, maupun solo traveler.</li>
                        <li>Spot foto yang instagramable dan pengalaman tak terlupakan.</li>
                    </ul>

                    <div class="actions">
                        <a href="{{ route('home') }}#wisata" class="btn secondary">Kembali</a>
                        <a href="{{ route('register') }}" class="btn primary">Pesan Sekarang</a>
                    </div>
                </div>
            </section>
        </main>
    </body>
</html>
