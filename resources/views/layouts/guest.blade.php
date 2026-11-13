<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Wisata Lampung</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700,800,900&display=swap" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <style>
            body {
                margin: 0;
                background: linear-gradient(135deg, #dfeeea 0%, #d8ebe8 50%, #f0ead8 100%);
                font-family: 'Figtree', sans-serif;
            }
            .auth-shell {
                min-height: 100vh;
                display: flex;
                align-items: center;
                justify-content: center;
                padding: 28px;
            }
            .auth-layout {
                width: min(1200px, 100%);
                display: grid;
                grid-template-columns: 1.08fr 0.92fr;
                border-radius: 28px;
                overflow: hidden;
                background: rgba(255,255,255,0.4);
                box-shadow: 0 25px 75px -30px rgba(15, 23, 42, 0.25);
            }
            .left-panel {
                background: linear-gradient(135deg, rgba(11, 104, 101, 1), rgba(10, 96, 95, 1), rgba(5, 67, 84, 1));
                padding: 28px 34px 30px;
                color: white;
                display: flex;
                flex-direction: column;
                justify-content: space-between;
                min-height: 620px;
            }
            .brand-row {
                display: flex;
                align-items: center;
                gap: 14px;
            }
            .brand-badge {
                width: 42px;
                height: 42px;
                border-radius: 14px;
                background: rgba(255,255,255,0.1);
                border: 1px solid rgba(255,255,255,0.2);
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: 1.25rem;
            }
            .brand-text {
                font-size: 1.08rem;
                font-weight: 800;
                letter-spacing: 0.02em;
            }
            .hero-copy {
                max-width: 500px;
                margin-top: 26px;
            }
            .hero-copy .eyebrow {
                margin: 0 0 18px;
                font-size: 0.72rem;
                letter-spacing: 0.28em;
                font-weight: 800;
                text-transform: uppercase;
                color: rgba(224, 255, 250, 0.8);
            }
            .hero-copy h2 {
                margin: 0;
                font-size: clamp(2.7rem, 3.4vw, 4rem);
                line-height: 0.96;
                letter-spacing: -0.06em;
                font-weight: 900;
                color: white;
            }
            .hero-copy p {
                margin-top: 18px;
                font-size: 1.02rem;
                line-height: 1.8;
                color: rgba(255,255,255,0.78);
            }
            .destination-box {
                background: rgba(255,255,255,0.08);
                border: 1px solid rgba(255,255,255,0.12);
                border-radius: 18px;
                padding: 16px 18px;
                backdrop-filter: blur(6px);
                margin-top: 24px;
            }
            .destination-box span {
                display: block;
                font-size: 0.72rem;
                letter-spacing: 0.16em;
                text-transform: uppercase;
                color: rgba(220,255,246,0.7);
            }
            .destination-box .row {
                display: flex;
                align-items: center;
                justify-content: space-between;
                gap: 12px;
                margin-top: 10px;
            }
            .destination-box h3 {
                margin: 0;
                font-size: 1.15rem;
                font-weight: 800;
            }
            .destination-box b {
                font-size: 0.85rem;
                color: #f9e086;
            }
            .tags {
                display: flex;
                flex-wrap: wrap;
                gap: 10px;
                margin-top: 18px;
            }
            .tags span {
                display: inline-flex;
                align-items: center;
                justify-content: center;
                min-height: 32px;
                padding: 0 14px;
                border-radius: 9999px;
                background: rgba(255,255,255,0.08);
                border: 1px solid rgba(255,255,255,0.08);
                color: rgba(255,255,255,0.85);
                font-size: 0.72rem;
            }
            .right-panel {
                background: rgba(255,255,255,0.82);
                display: flex;
                align-items: center;
                justify-content: center;
                padding: 28px;
            }
            .form-card {
                width: min(100%, 440px);
                background: rgba(255,255,255,0.7);
                border: 1px solid rgba(167, 182, 188, 0.35);
                border-radius: 24px;
                padding: 26px 24px 22px;
                box-shadow: 0 20px 50px -30px rgba(15, 23, 42, 0.25);
            }
            .form-header {
                display: flex;
                align-items: center;
                justify-content: space-between;
                gap: 12px;
                margin-bottom: 18px;
            }
            .form-header .eyebrow {
                margin: 0;
                font-size: 0.62rem;
                letter-spacing: 0.28em;
                text-transform: uppercase;
                color: rgba(15, 118, 110, 0.75);
            }
            .form-header h3 {
                margin: 8px 0 0;
                font-size: 2rem;
                line-height: 1;
                letter-spacing: -0.05em;
                font-weight: 900;
                color: #1d2e35;
            }
            .form-icon {
                width: 46px;
                height: 46px;
                border-radius: 16px;
                background: linear-gradient(135deg, #f4e5a1, #d5f7eb);
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: 1.5rem;
            }
            .field-label {
                display: block;
                margin: 0 0 8px;
                color: #1f2d34;
                font-size: 0.8rem;
                font-weight: 700;
            }
            .input {
                width: 100%;
                height: 46px;
                border: 1px solid rgba(148, 163, 184, 0.5);
                border-radius: 12px;
                background: rgba(248,250,251,0.9);
                padding: 0 14px;
                font-size: 0.96rem;
                color: #1f2d34;
                outline: none;
            }
            .input:focus {
                border-color: rgba(13, 148, 136, 0.7);
                box-shadow: 0 0 0 3px rgba(20,184,166,0.12);
            }
            .form-group {
                margin-bottom: 16px;
            }
            .submit-btn {
                width: 100%;
                height: 48px;
                border: none;
                border-radius: 12px;
                margin-top: 6px;
                background: linear-gradient(135deg, #0d7d79, #f1ba36);
                color: white;
                font-size: 0.82rem;
                font-weight: 900;
                letter-spacing: 0.14em;
                text-transform: uppercase;
                cursor: pointer;
                box-shadow: 0 18px 30px -22px rgba(15, 118, 110, 0.8);
            }
            .login-link {
                display: block;
                margin-top: 18px;
                text-align: center;
                color: #1f2d34;
                font-size: 0.8rem;
            }
            .login-link a {
                color: #0d7d79;
                font-weight: 700;
                text-decoration: none;
            }
            @media (max-width: 920px) {
                .auth-layout {
                    grid-template-columns: 1fr;
                }
                .left-panel {
                    min-height: 420px;
                }
            }
        </style>
    </head>
    <body>
        <div class="auth-shell">
            <div class="auth-layout">
                <div class="left-panel">
                    <div>
                        <div class="brand-row">
                            <div class="brand-badge">🌴</div>
                            <div class="brand-text">Wisata Lampung</div>
                        </div>

                        <div class="hero-copy">
                            <p class="eyebrow">Nikmati perjalanan</p>
                            <h2>Mulai petualanganmu bersama kami.</h2>
                            <p>Temukan pantai, pegunungan, dan pengalaman wisata yang menawan di Lampung. Daftar sekarang untuk menjelajah lebih mudah dan lebih menyenangkan.</p>
                        </div>
                    </div>

                    <div>
                        <div class="destination-box">
                            <span>Popular destinations</span>
                            <div class="row">
                                <h3>Pantai Kiluan</h3>
                                <b>★ 4.9</b>
                            </div>
                        </div>

                        <div class="tags">
                            <span>Pantai</span>
                            <span>Gunung</span>
                            <span>Kuliner</span>
                        </div>
                    </div>
                </div>

                <div class="right-panel">
                    <div class="form-card">
                        <div class="form-header">
                            <div>
                                <p class="eyebrow">Akses member</p>
                                <h3>Daftar</h3>
                            </div>
                            <div class="form-icon">🏝️</div>
                        </div>

                        {{ $slot }}
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
