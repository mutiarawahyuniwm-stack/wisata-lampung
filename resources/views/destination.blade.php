<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ $destination->nama }} | Wisata Lampung</title>
        <style>
            :root {
                --primary: #0f766e;
                --primary-dark: #115e59;
                --accent: #f59e0b;
                --soft: #ecfeff;
                --text: #1f2937;
                --muted: #6b7280;
                --bg: #f4fbf9;
            }

            * { box-sizing: border-box; }
            body {
                margin: 0;
                font-family: Arial, Helvetica, sans-serif;
                background:
                    radial-gradient(circle at top left, rgba(16,185,129,0.12), transparent 25%),
                    radial-gradient(circle at bottom right, rgba(14,165,233,0.12), transparent 25%),
                    var(--bg);
                color: var(--text);
            }

            a { text-decoration: none; }
            .container { width: min(1100px, calc(100% - 32px)); margin: 0 auto; }

            header {
                background: linear-gradient(135deg, rgba(15, 118, 110, 0.96), rgba(14, 116, 144, 0.92));
                color: white;
                padding: 18px 0;
                box-shadow: 0 18px 45px -30px rgba(15, 118, 110, 0.8);
            }

            .nav {
                display: flex;
                justify-content: space-between;
                align-items: center;
                gap: 16px;
            }

            .brand { font-size: 1.4rem; font-weight: 700; }
            .nav-links { display: flex; align-items: center; gap: 18px; }
            .nav-links a { color: white; opacity: 0.95; }

            .btn {
                display: inline-block;
                padding: 12px 22px;
                border-radius: 999px;
                font-weight: 700;
            }
            .btn-primary {
                background: linear-gradient(135deg, #fbbf24, #f59e0b);
                color: #111827;
                box-shadow: 0 18px 40px -20px rgba(245, 158, 11, 0.7);
            }

            .hero {
                padding: 42px 0 32px;
            }

            .hero-card {
                display: grid;
                grid-template-columns: 1.1fr 0.9fr;
                gap: 30px;
                background: rgba(255,255,255,0.82);
                border: 1px solid rgba(15,118,110,0.12);
                border-radius: 30px;
                overflow: hidden;
                box-shadow: 0 26px 70px -35px rgba(15, 23, 42, 0.28);
                backdrop-filter: blur(5px);
            }

            .hero-image {
                min-height: 420px;
                background-size: cover;
                background-position: center;
                position: relative;
            }

            .hero-image::after {
                content: '';
                position: absolute;
                inset: 0;
                background: linear-gradient(180deg, rgba(15, 23, 42, 0.08), rgba(15, 23, 42, 0.2));
            }

            .hero-content {
                padding: 30px 28px;
            }

            .tag {
                display: inline-block;
                background: linear-gradient(135deg, #ecfeff, #ecfdf5);
                color: var(--primary-dark);
                border-radius: 999px;
                padding: 8px 12px;
                font-weight: 700;
                margin-bottom: 12px;
            }

            h1 {
                margin: 0 0 12px;
                font-size: clamp(2rem, 3vw, 3rem);
                color: #0f172a;
            }

            .meta {
                color: var(--muted);
                font-size: 0.98rem;
                line-height: 1.7;
                margin-bottom: 18px;
            }

            .price {
                display: inline-block;
                font-size: 1.2rem;
                font-weight: 800;
                color: var(--primary-dark);
                background: rgba(16,185,129,0.08);
                border: 1px solid rgba(16,185,129,0.1);
                padding: 10px 14px;
                border-radius: 12px;
                margin-bottom: 20px;
            }

            .description {
                color: var(--muted);
                line-height: 1.8;
                margin-bottom: 24px;
            }

            .feature-list {
                margin: 0;
                padding-left: 18px;
                color: var(--text);
                line-height: 2;
            }

            .bottom-bar {
                display: flex;
                gap: 14px;
                flex-wrap: wrap;
                margin-top: 22px;
            }

            .secondary {
                background: #e2e8f0;
                color: #0f172a;
            }

            @media (max-width: 860px) {
                .hero-card {
                    grid-template-columns: 1fr;
                }

                .nav {
                    flex-direction: column;
                    align-items: flex-start;
                }
            }
        </style>
    </head>
    <body>
        <header>
            <div class="container nav">
                <div class="brand">Wisata Lampung</div>
                <nav class="nav-links">
                    <a href="{{ route('home') }}">Beranda</a>
                    <a href="{{ route('home') }}#wisata">Wisata</a>
                    <a href="{{ route('home') }}#kontak">Kontak</a>
                </nav>
            </div>
        </header>

        <main class="container hero">
            <section class="hero-card">
                <div class="hero-image" style="background-image: url('{{ $destination->gambar }}');"></div>
                <div class="hero-content">
                    <span class="tag">{{ $destination->kategori }}</span>
                    <h1>{{ $destination->nama }}</h1>
                    <div class="meta">
                        <div>📍 {{ $destination->lokasi }}</div>
                        <div>🕒 Wisata alam & keluarga</div>
                    </div>
                    <div class="price">{{ $destination->harga }}</div>
                    <p class="description">{{ $destination->deskripsi }}</p>

                    <ul class="feature-list">
                        @foreach ($features as $feature)
                            <li>{{ $feature }}</li>
                        @endforeach
                    </ul>

                    <div class="bottom-bar">
                        <a href="{{ route('home') }}#wisata" class="btn secondary">Kembali</a>
                        <a href="#" class="btn btn-primary">Pesan Sekarang</a>
                    </div>
                </div>
            </section>
        </main>
    </body>
</html>
