<!DOCTYPE html>
<html class="light" lang="id" style="">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Coordination - Mission Control Elite</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=block" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script id="tailwind-config">
        try{
            tailwind.config = {
                darkMode: "class",
                theme: {
                    extend: {
                        "colors": {
                            "outline-variant": "#c3c6d6",
                            "secondary-fixed": "#9df4c8",
                            "background": "#f8f9ff",
                            "surface-container-lowest": "#ffffff",
                            "on-surface": "#0b1c30",
                            "tertiary": "#231fb5",
                            "on-secondary-fixed-variant": "#005236",
                            "on-primary-container": "#b8c8ff",
                            "surface-container-highest": "#d3e4fe",
                            "on-error-container": "#93000a",
                            "outline": "#737685",
                            "on-tertiary-fixed-variant": "#2e2dbe",
                            "surface-variant": "#d3e4fe",
                            "on-tertiary-container": "#c4c4ff",
                            "surface-ice": "#f8f9ff",
                            "on-secondary": "#ffffff",
                            "tertiary-fixed-dim": "#c0c1ff",
                            "on-secondary-container": "#0c714d",
                            "warning-amber": "#FFB000",
                            "on-surface-variant": "#434654",
                            "tertiary-container": "#3e3fcc",
                            "on-primary-fixed": "#00174b",
                            "on-secondary-fixed": "#002113",
                            "surface-tint": "#1b55d0",
                            "inverse-primary": "#b4c5ff",
                            "hero-gradient-start": "#004ac6",
                            "secondary-container": "#9af2c5",
                            "secondary-fixed-dim": "#81d8ad",
                            "surface": "#f8f9ff",
                            "inverse-surface": "#213145",
                            "tertiary-fixed": "#e1e0ff",
                            "on-error": "#ffffff",
                            "primary-fixed-dim": "#b4c5ff",
                            "error-container": "#ffdad6",
                            "surface-container-low": "#eff4ff",
                            "surface-dim": "#cbdbf5",
                            "on-primary-fixed-variant": "#003ea8",
                            "error-critical": "#ba1a1a",
                            "inverse-on-surface": "#eaf1ff",
                            "hero-gradient-end": "#2563eb",
                            "error": "#ba1a1a",
                            "surface-bright": "#f8f9ff",
                            "surface-container": "#e5eeff",
                            "primary-fixed": "#dbe1ff",
                            "success-emerald": "#4edea3",
                            "primary-container": "#004ac6",
                            "on-background": "#0b1c30",
                            "on-tertiary-fixed": "#06006c",
                            "secondary": "#006c49",
                            "surface-container-high": "#dce9ff",
                            "on-primary": "#ffffff",
                            "on-tertiary": "#ffffff",
                            "primary": "#003594"
                        },
                        "borderRadius": {
                            "DEFAULT": "0.25rem",
                            "lg": "0.5rem",
                            "xl": "0.75rem",
                            "full": "9999px"
                        },
                        "spacing": {
                            "xs": "4px",
                            "sm": "8px",
                            "margin": "32px",
                            "xl": "32px",
                            "lg": "24px",
                            "gutter": "24px",
                            "xxl": "48px",
                            "md": "16px"
                        },
                        "fontFamily": {
                            "body-md": ["Inter"],
                            "headline-lg-mobile": ["Inter"],
                            "title-md": ["Inter"],
                            "headline-sm": ["Inter"],
                            "display-lg": ["Inter"],
                            "label-md": ["Inter"],
                            "body-lg": ["Inter"],
                            "headline-lg": ["Inter"],
                            "caption": ["Inter"],
                            "headline-md": ["Inter"]
                        },
                        "fontSize": {
                            "body-md": ["14px", {"lineHeight": "20px", "fontWeight": "500"}],
                            "headline-lg-mobile": ["24px", {"lineHeight": "32px", "letterSpacing": "-0.01em", "fontWeight": "700"}],
                            "title-md": ["16px", {"lineHeight": "24px", "fontWeight": "600"}],
                            "headline-sm": ["20px", {"lineHeight": "28px", "fontWeight": "600"}],
                            "display-lg": ["48px", {"lineHeight": "56px", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                            "label-md": ["12px", {"lineHeight": "16px", "letterSpacing": "0.02em", "fontWeight": "600"}],
                            "body-lg": ["16px", {"lineHeight": "24px", "fontWeight": "400"}],
                            "headline-lg": ["32px", {"lineHeight": "40px", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                            "caption": ["12px", {"lineHeight": "16px", "fontWeight": "400"}],
                            "headline-md": ["24px", {"lineHeight": "32px", "letterSpacing": "-0.01em", "fontWeight": "600"}]
                        }
                    },
                },
            }
        }catch(_e){}
    </script>
    <style>
        @keyframes bgZoomOut {
            0% { transform: scale(1.15); }
            100% { transform: scale(1); }
        }
        .bg-animate {
            animation: bgZoomOut 1.5s cubic-bezier(0.25, 1, 0.5, 1) forwards;
        }

        @keyframes popUp {
            0% { opacity: 0; transform: translateY(40px) scale(0.95); }
            100% { opacity: 1; transform: translateY(0) scale(1); }
        }
        .animate-popup {
            opacity: 0;
            animation: popUp 0.8s cubic-bezier(0.16, 1, 0.3, 1) forwards;
        }
        
        .delay-100 { animation-delay: 0.1s; }
        .delay-200 { animation-delay: 0.2s; }
        .delay-300 { animation-delay: 0.3s; }
        .delay-400 { animation-delay: 0.4s; }
        .delay-500 { animation-delay: 0.5s; }

        @media (min-width: 768px) {
            #hero-glass-panel {
                background: rgba(255,255,255,0.55);
                backdrop-filter: blur(20px);
                -webkit-backdrop-filter: blur(20px);
                border: 1px solid rgba(255,255,255,0.45);
            }
        }
    </style>
</head>
<body class="bg-background text-on-background font-body-md selection:bg-primary/20">

<!-- TopNavBar (Floating Glass Navigation) -->
<header class="fixed top-[20px] left-1/2 -translate-x-1/2 w-[90%] max-w-[1400px] h-[72px] z-50 rounded-full shadow-[0_8px_32px_rgba(0,0,0,0.05)] transition-all duration-300 flex items-center" style="background: rgba(255,255,255,0.55); backdrop-filter: blur(20px); -webkit-backdrop-filter: blur(20px); border: 1px solid rgba(255,255,255,0.45);">
    <div class="flex justify-between items-center w-full px-6 lg:px-8">
        <a href="/" class="font-bold flex items-center gap-2 group">
            <div class="bg-primary text-white p-1.5 rounded-full group-hover:scale-105 transition-transform shadow-md">
                <span class="material-symbols-outlined text-[20px] block">hub</span>
            </div>
            <span class="text-slate-900 font-extrabold tracking-tight text-base">Coordination</span>
        </a>
        <nav class="hidden lg:flex gap-8">
            <a class="relative text-slate-900 font-semibold text-sm group" href="{{ route('fitur') }}">
                Fitur
                <span class="absolute -bottom-1 left-0 w-full h-0.5 bg-primary rounded-full"></span>
            </a>
            <a class="relative text-slate-800/80 hover:text-slate-900 transition-colors text-sm font-medium group" href="{{ route('solutions') }}">
                Solusi
                <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-primary rounded-full transition-all duration-300 group-hover:w-full"></span>
            </a>
            <a class="relative text-slate-800/80 hover:text-slate-900 transition-colors text-sm font-medium group" href="{{ route('pricing') }}">
                Harga
                <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-primary rounded-full transition-all duration-300 group-hover:w-full"></span>
            </a>
            <a class="relative text-slate-800/80 hover:text-slate-900 transition-colors text-sm font-medium group" href="{{ route('tentang') }}">
                Tentang
                <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-primary rounded-full transition-all duration-300 group-hover:w-full"></span>
            </a>
            <a class="relative text-slate-800/80 hover:text-slate-900 transition-colors text-sm font-medium group" href="{{ route('kontak') }}">
                Kontak
                <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-primary rounded-full transition-all duration-300 group-hover:w-full"></span>
            </a>
        </nav>
        <div class="hidden lg:flex items-center gap-3">
            <a href="{{ route('login') }}" class="text-slate-800/90 font-medium hover:text-slate-900 px-4 py-2 transition-all duration-200 hover:bg-white/20 rounded-full active:scale-95 text-sm">Login</a>
            <a href="{{ route('register') }}" class="bg-primary text-white px-5 py-2.5 rounded-full font-bold hover:shadow-[0_4px_14px_rgba(0,118,255,0.39)] hover:-translate-y-0.5 active:scale-95 transition-all duration-200 text-sm">Get Started</a>
        </div>
        <!-- Mobile Hamburger -->
        <button id="mobile-menu-btn" class="lg:hidden flex items-center justify-center w-10 h-10 rounded-full hover:bg-white/20 transition-colors">
            <span class="material-symbols-outlined text-slate-900 text-[24px]" id="menu-icon">menu</span>
        </button>
    </div>
</header>

<!-- Mobile Menu Overlay -->
<div id="mobile-menu" class="fixed inset-0 z-[60] hidden">
    <div class="absolute inset-0 bg-black/30 backdrop-blur-sm" id="mobile-menu-backdrop"></div>
    <div class="absolute top-0 right-0 w-[280px] h-full shadow-2xl p-8 flex flex-col gap-6 transform translate-x-full transition-transform duration-300" id="mobile-menu-panel" style="background: rgba(255,255,255,0.65); backdrop-filter: blur(24px); -webkit-backdrop-filter: blur(24px); border-left: 1px solid rgba(255,255,255,0.3);">
        <div class="flex justify-between items-center mb-4">
            <span class="font-extrabold text-slate-900 text-lg">Menu</span>
            <button id="mobile-menu-close" class="w-10 h-10 rounded-full hover:bg-slate-100 flex items-center justify-center transition-colors">
                <span class="material-symbols-outlined text-slate-700">close</span>
            </button>
        </div>
        <nav class="flex flex-col gap-1">
            <a class="text-slate-900 font-semibold text-base py-3 px-4 rounded-xl bg-primary/5" href="{{ route('fitur') }}">Fitur</a>
            <a class="text-slate-700 font-medium text-base py-3 px-4 rounded-xl hover:bg-slate-50 transition-colors" href="{{ route('solutions') }}">Solusi</a>
            <a class="text-slate-700 font-medium text-base py-3 px-4 rounded-xl hover:bg-slate-50 transition-colors" href="{{ route('pricing') }}">Harga</a>
            <a class="text-slate-700 font-medium text-base py-3 px-4 rounded-xl hover:bg-slate-50 transition-colors" href="{{ route('tentang') }}">Tentang</a>
            <a class="text-slate-700 font-medium text-base py-3 px-4 rounded-xl hover:bg-slate-50 transition-colors" href="{{ route('kontak') }}">Kontak</a>
        </nav>
        <div class="mt-auto flex flex-col gap-3">
            <a href="{{ route('login') }}" class="text-center text-slate-700 font-medium py-3 px-4 rounded-full border border-slate-200 hover:bg-slate-50 transition-colors">Login</a>
            <a href="{{ route('register') }}" class="text-center bg-primary text-white py-3 px-4 rounded-full font-bold shadow-sm">Get Started</a>
        </div>
    </div>
</div>

<main>
    <!-- Hero Section -->
    <section class="relative h-[100vh] min-h-[700px] w-full flex flex-col overflow-hidden">
        
        <!-- Animated Video Background -->
        <video class="absolute inset-0 w-full h-full object-cover" autoplay muted playsinline onended="this.pause()">
            <source src="{{ asset('img/landing_animasi.mp4') }}" type="video/mp4">
        </video>
        <!-- Subtle White Gradient Overlay (15-20%) -->
        <div class="absolute inset-0 w-full sm:w-2/3 lg:w-1/2" style="background: linear-gradient(90deg, rgba(255,255,255,0.2) 0%, rgba(255,255,255,0.15) 40%, transparent 100%);"></div>

        <div class="relative z-10 w-full max-w-[1536px] mx-auto px-6 lg:px-gutter flex-1 flex flex-col items-start justify-start pt-[100px] md:justify-center md:pt-[92px]">
            
            <!-- Hero Content (Glass on desktop only) -->
            <div class="max-w-[560px] md:p-10 md:rounded-[32px] md:shadow-[0_10px_40px_-10px_rgba(0,0,0,0.06)]" style="" id="hero-glass-panel">
                
                <h1 class="text-[26px] sm:text-[36px] md:text-[48px] lg:text-[56px] font-extrabold leading-[1.15] tracking-tight mb-3 md:mb-4 text-slate-900 animate-popup delay-100">
                    Event Hebat Dimulai dari<br/>
                    Koordinasi yang Tepat
                </h1>
                
                <p class="text-sm sm:text-base md:text-lg leading-relaxed mb-6 md:mb-8 font-medium max-w-md animate-popup delay-200" style="color: rgba(15,23,42,0.82);">
                    Kelola setiap detail event dalam satu platform. Pantau progres, anggaran, timeline, vendor, dan seluruh divisi secara real-time untuk membantu meminimalisir risiko kegagalan event.
                </p>
                
                <div class="flex flex-row gap-2 sm:gap-4 animate-popup delay-300">
                    <a href="{{ route('register') }}" class="inline-flex items-center justify-center bg-blue-600 text-white px-5 sm:px-8 py-3 sm:py-3.5 rounded-full font-bold shadow-[0_4px_14px_rgba(0,118,255,0.39)] hover:bg-blue-700 hover:shadow-[0_6px_20px_rgba(0,118,255,0.23)] transition-all text-xs sm:text-base whitespace-nowrap">
                        Mulai Sekarang
                    </a>
                    <button class="inline-flex items-center justify-center px-5 sm:px-8 py-3 sm:py-3.5 rounded-full text-slate-900 font-bold transition-all hover:bg-white/40 bg-white/20 border border-white/40 text-xs sm:text-base whitespace-nowrap" style="backdrop-filter: blur(10px);">
                        Lihat Demo
                    </button>
                </div>
            </div>

        </div>

        <!-- Floating Feature Cards (Inside hero, pinned to bottom) -->
        <div class="relative z-20 w-full max-w-[1536px] mx-auto px-6 lg:px-gutter pb-8 lg:pb-12">
            <!-- Desktop: 4 columns, Tablet: 2 columns, Mobile: horizontal scroll -->
            <div class="hidden md:grid md:grid-cols-2 lg:grid-cols-4 gap-4 lg:gap-6">
                
                <!-- Card 1 -->
                <div class="p-5 flex items-center gap-4 shadow-[0_8px_30px_rgb(0,0,0,0.04)] hover:-translate-y-1 transition-transform cursor-default animate-popup delay-200" style="background: rgba(255,255,255,0.22); backdrop-filter: blur(20px); -webkit-backdrop-filter: blur(20px); border: 1px solid rgba(255,255,255,0.3); border-radius: 24px;">
                    <div class="w-10 h-10 rounded-full bg-white/70 shadow-sm flex items-center justify-center text-slate-800 shrink-0">
                        <span class="material-symbols-outlined text-[20px]">shield_locked</span>
                    </div>
                    <div>
                        <p class="font-bold text-slate-900 text-sm">Aman & Terpercaya</p>
                        <p class="text-[11px] text-slate-700 font-medium">Data terenkripsi penuh</p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="p-5 flex items-center gap-4 shadow-[0_8px_30px_rgb(0,0,0,0.04)] hover:-translate-y-1 transition-transform cursor-default animate-popup delay-300" style="background: rgba(255,255,255,0.22); backdrop-filter: blur(20px); -webkit-backdrop-filter: blur(20px); border: 1px solid rgba(255,255,255,0.3); border-radius: 24px;">
                    <div class="w-10 h-10 rounded-full bg-white/70 shadow-sm flex items-center justify-center text-slate-800 shrink-0">
                        <span class="material-symbols-outlined text-[20px]">monitoring</span>
                    </div>
                    <div>
                        <p class="font-bold text-slate-900 text-sm">Real-time Monitor</p>
                        <p class="text-[11px] text-slate-700 font-medium">Pantau progres instan</p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="p-5 flex items-center gap-4 shadow-[0_8px_30px_rgb(0,0,0,0.04)] hover:-translate-y-1 transition-transform cursor-default animate-popup delay-400" style="background: rgba(255,255,255,0.22); backdrop-filter: blur(20px); -webkit-backdrop-filter: blur(20px); border: 1px solid rgba(255,255,255,0.3); border-radius: 24px;">
                    <div class="w-10 h-10 rounded-full bg-white/70 shadow-sm flex items-center justify-center text-slate-800 shrink-0">
                        <span class="material-symbols-outlined text-[20px]">groups</span>
                    </div>
                    <div>
                        <p class="font-bold text-slate-900 text-sm">Koordinasi Tim</p>
                        <p class="text-[11px] text-slate-700 font-medium">Konektivitas terpusat</p>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="p-5 flex items-center gap-4 shadow-[0_8px_30px_rgb(0,0,0,0.04)] hover:-translate-y-1 transition-transform cursor-default animate-popup delay-500" style="background: rgba(255,255,255,0.22); backdrop-filter: blur(20px); -webkit-backdrop-filter: blur(20px); border: 1px solid rgba(255,255,255,0.3); border-radius: 24px;">
                    <div class="w-10 h-10 rounded-full bg-white/70 shadow-sm flex items-center justify-center text-slate-800 shrink-0">
                        <span class="material-symbols-outlined text-[20px]">auto_graph</span>
                    </div>
                    <div>
                        <p class="font-bold text-slate-900 text-sm">Laporan Otomatis</p>
                        <p class="text-[11px] text-slate-700 font-medium">Akurat tanpa jeda</p>
                    </div>
                </div>

            </div>
            <!-- Mobile: horizontal scroll -->
            <div class="flex md:hidden gap-3 overflow-x-auto pb-2 -mx-2 px-2 snap-x snap-mandatory" style="-webkit-overflow-scrolling: touch;">
                <div class="p-4 flex items-center gap-3 snap-start shrink-0 w-[200px] animate-popup delay-200" style="background: rgba(255,255,255,0.22); backdrop-filter: blur(20px); border: 1px solid rgba(255,255,255,0.3); border-radius: 20px;">
                    <div class="w-9 h-9 rounded-full bg-white/70 shadow-sm flex items-center justify-center text-slate-800 shrink-0">
                        <span class="material-symbols-outlined text-[18px]">shield_locked</span>
                    </div>
                    <div>
                        <p class="font-bold text-slate-900 text-xs">Aman & Terpercaya</p>
                        <p class="text-[10px] text-slate-700">Data aman</p>
                    </div>
                </div>
                <div class="p-4 flex items-center gap-3 snap-start shrink-0 w-[200px] animate-popup delay-300" style="background: rgba(255,255,255,0.22); backdrop-filter: blur(20px); border: 1px solid rgba(255,255,255,0.3); border-radius: 20px;">
                    <div class="w-9 h-9 rounded-full bg-white/70 shadow-sm flex items-center justify-center text-slate-800 shrink-0">
                        <span class="material-symbols-outlined text-[18px]">monitoring</span>
                    </div>
                    <div>
                        <p class="font-bold text-slate-900 text-xs">Real-time Monitor</p>
                        <p class="text-[10px] text-slate-700">Progres instan</p>
                    </div>
                </div>
                <div class="p-4 flex items-center gap-3 snap-start shrink-0 w-[200px] animate-popup delay-400" style="background: rgba(255,255,255,0.22); backdrop-filter: blur(20px); border: 1px solid rgba(255,255,255,0.3); border-radius: 20px;">
                    <div class="w-9 h-9 rounded-full bg-white/70 shadow-sm flex items-center justify-center text-slate-800 shrink-0">
                        <span class="material-symbols-outlined text-[18px]">groups</span>
                    </div>
                    <div>
                        <p class="font-bold text-slate-900 text-xs">Koordinasi Tim</p>
                        <p class="text-[10px] text-slate-700">Terhubung</p>
                    </div>
                </div>
                <div class="p-4 flex items-center gap-3 snap-start shrink-0 w-[200px] animate-popup delay-500" style="background: rgba(255,255,255,0.22); backdrop-filter: blur(20px); border: 1px solid rgba(255,255,255,0.3); border-radius: 20px;">
                    <div class="w-9 h-9 rounded-full bg-white/70 shadow-sm flex items-center justify-center text-slate-800 shrink-0">
                        <span class="material-symbols-outlined text-[18px]">auto_graph</span>
                    </div>
                    <div>
                        <p class="font-bold text-slate-900 text-xs">Laporan Otomatis</p>
                        <p class="text-[10px] text-slate-700">Akurat</p>
                    </div>
                </div>
            </div>
        </div>
        
    </section>

    <!-- Value Proposition / Scenarios -->
    <section class="bg-surface-container-low/50 py-xxl">
        <div class="max-w-[1536px] mx-auto px-gutter">
            <div class="text-center mb-xxl">
                <h2 class="font-headline-lg text-headline-lg text-on-surface">Solusi Presisi untuk Setiap Skala</h2>
                <p class="text-on-surface-variant font-body-lg mt-md">Dirancang untuk Event Director yang menuntut kesempurnaan.</p>
            </div>
            <div class="grid md:grid-cols-3 gap-lg">
                <!-- Scenario 1 -->
                <div class="p-xl rounded-[24px] hover:translate-y-[-8px] transition-all duration-300 shadow-sm hover:shadow-md" style="background: rgba(255, 255, 255, 0.8); backdrop-filter: blur(12px); border: 1px solid rgba(226, 228, 231, 0.5);">
                    <div class="w-12 h-12 bg-primary-container rounded-xl flex items-center justify-center text-on-primary mb-lg">
                        <span class="material-symbols-outlined">theater_comedy</span>
                    </div>
                    <h3 class="font-headline-sm text-headline-sm mb-sm text-on-surface">Konser & Festival</h3>
                    <p class="text-on-surface-variant mb-lg">Anti-Gagal Konser dengan tracking Riders Artis yang detail, manajemen vendor panggung, dan monitoring kesehatan finansial real-time.</p>
                    <div class="flex items-center text-primary font-bold gap-xs group cursor-pointer">
                        <span class="">Pelajari Lebih Lanjut</span>
                        <span class="material-symbols-outlined group-hover:translate-x-1 transition-transform">arrow_forward</span>
                    </div>
                </div>
                <!-- Scenario 2 -->
                <div class="p-xl rounded-[24px] hover:translate-y-[-8px] transition-all duration-300 shadow-sm hover:shadow-md" style="background: rgba(255, 255, 255, 0.8); backdrop-filter: blur(12px); border: 1px solid rgba(226, 228, 231, 0.5);">
                    <div class="w-12 h-12 bg-secondary-container rounded-xl flex items-center justify-center text-on-secondary-container mb-lg">
                        <span class="material-symbols-outlined">inventory_2</span>
                    </div>
                    <h3 class="font-headline-sm text-headline-sm mb-sm text-on-surface">Logistik & Expo</h3>
                    <p class="text-on-surface-variant mb-lg">Kelola ribuan item inventaris, jadwal loading yang ketat, dan koordinasi vendor teknis dalam satu pusat kendali yang terintegrasi.</p>
                    <div class="flex items-center text-primary font-bold gap-xs group cursor-pointer">
                        <span class="">Pelajari Lebih Lanjut</span>
                        <span class="material-symbols-outlined group-hover:translate-x-1 transition-transform">arrow_forward</span>
                    </div>
                </div>
                <!-- Scenario 3 -->
                <div class="p-xl rounded-[24px] hover:translate-y-[-8px] transition-all duration-300 shadow-sm hover:shadow-md" style="background: rgba(255, 255, 255, 0.8); backdrop-filter: blur(12px); border: 1px solid rgba(226, 228, 231, 0.5);">
                    <div class="w-12 h-12 bg-tertiary-container rounded-xl flex items-center justify-center text-on-tertiary-container mb-lg">
                        <span class="material-symbols-outlined">corporate_fare</span>
                    </div>
                    <h3 class="font-headline-sm text-headline-sm mb-sm text-on-surface">Corporate Events</h3>
                    <p class="text-on-surface-variant mb-lg">Pastikan standar brand terpenuhi dengan manajemen tamu VIP, tracking akomodasi, dan pelaporan biaya yang transparan untuk audit.</p>
                    <div class="flex items-center text-primary font-bold gap-xs group cursor-pointer">
                        <span class="">Pelajari Lebih Lanjut</span>
                        <span class="material-symbols-outlined group-hover:translate-x-1 transition-transform">arrow_forward</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Feature Showcase (Bento Grid) -->
    <section class="py-xxl max-w-[1536px] mx-auto px-gutter">
        <div class="mb-xxl max-w-2xl">
            <h2 class="font-headline-lg text-headline-lg mb-md">Fitur Utama Command Center</h2>
            <p class="text-on-surface-variant font-body-lg">Kendalikan setiap detail tanpa rasa khawatir. Dari Guest List hingga Price List Vendor, semuanya ada dalam satu dashboard.</p>
        </div>
        <div class="grid grid-cols-12 gap-lg">
            <!-- Large Feature: Financial Health -->
            <div class="col-span-12 lg:col-span-8 bg-surface-container-highest rounded-[24px] p-xl border border-outline-variant/30 flex flex-col md:flex-row gap-lg items-center group overflow-hidden">
                <div class="md:w-1/2 space-y-md">
                    <div class="inline-block px-sm py-xs bg-error/10 text-error rounded font-label-md">RISK MITIGATION</div>
                    <h3 class="font-headline-md text-headline-md">Financial Risk Real-Time Alerts</h3>
                    <p class="text-on-surface-variant">Sistem AI kami mendeteksi potensi pembengkakan biaya sebelum terjadi. Dapatkan peringatan otomatis saat realisasi pengeluaran mendekati 85% dari budget rencana.</p>
                    <div class="p-md bg-surface/50 rounded-xl border border-outline-variant/20">
                        <div class="flex justify-between mb-sm">
                            <span class="font-bold">Budget Health Score</span>
                            <span class="text-warning-amber">73 / 100</span>
                        </div>
                        <div class="w-full bg-outline-variant/20 h-2 rounded-full overflow-hidden">
                            <div class="bg-warning-amber h-full w-[73%]"></div>
                        </div>
                    </div>
                </div>
                <div class="md:w-1/2 relative">
                    <div class="relative w-full h-64 flex items-center justify-center overflow-visible">
                        <div class="absolute inset-0 bg-primary/5 rounded-full blur-3xl"></div>
                        <div class="relative z-10 flex flex-wrap justify-center items-center gap-lg">
                            <div class="p-lg bg-white rounded-2xl shadow-xl border border-outline-variant/20 transform -rotate-6 hover:rotate-0 transition-transform duration-500"><span class="material-symbols-outlined text-primary text-[48px]">groups</span></div>
                            <div class="p-md bg-primary text-on-primary rounded-2xl shadow-lg transform rotate-12 hover:rotate-0 transition-transform duration-500"><span class="material-symbols-outlined text-[32px]">hub</span></div>
                            <div class="p-md bg-secondary-container text-on-secondary-container rounded-2xl shadow-md transform -translate-y-8 hover:translate-y-0 transition-transform duration-500"><span class="material-symbols-outlined text-[24px]">security</span></div>
                            <div class="p-sm bg-white/80 backdrop-blur-md rounded-xl border border-outline-variant/30 shadow-sm transform translate-x-4 translate-y-4 hover:translate-0 transition-transform duration-500"><span class="material-symbols-outlined text-primary-container text-[20px]">settings_input_component</span></div>
                            <div class="absolute -top-4 -right-4 p-sm bg-warning-amber/20 text-warning-amber rounded-full animate-pulse"><span class="material-symbols-outlined text-[18px]">monitoring</span></div>
                            <div class="absolute -bottom-8 left-1/2 -translate-x-1/2 p-xs bg-success-emerald/10 text-success-emerald rounded-full opacity-60"><span class="material-symbols-outlined text-[40px]">query_stats</span></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-span-12 md:col-span-6 lg:col-span-4 bg-white rounded-[24px] p-xl border border-outline-variant/30 shadow-sm hover:shadow-md transition-shadow">
                <span class="material-symbols-outlined text-primary mb-md text-[32px]">database</span>
                <h3 class="font-headline-sm text-headline-sm mb-sm">Vendor Master Database</h3>
                <p class="text-on-surface-variant mb-lg">Akses katalog harga standar vendor panggung, lighting, dan sound. Hindari harga 'markup' dan pastikan efisiensi biaya sejak fase perencanaan.</p>
                <div class="flex flex-wrap gap-2">
                    <span class="px-md py-xs bg-surface-container rounded-full text-caption">Standardized Price Lists</span>
                    <span class="px-md py-xs bg-surface-container rounded-full text-caption">Verified Vendors</span>
                </div>
            </div>

            <!-- Small Feature: Rider Management -->
            <div class="col-span-12 md:col-span-6 lg:col-span-4 bg-white rounded-[24px] p-xl border border-outline-variant/30 shadow-sm hover:shadow-md transition-shadow">
                <span class="material-symbols-outlined text-primary mb-md text-[32px]">hotel</span>
                <h3 class="font-headline-sm text-headline-sm mb-sm">Riders & Guest Fulfillment</h3>
                <p class="text-on-surface-variant mb-lg">Lacak setiap kebutuhan spesifik artis dan tamu VIP. Dari detail hotel, jadwal flight, hingga diet khusus, tidak ada detail yang terlewat.</p>
                <div class="space-y-sm">
                    <div class="flex items-center gap-md p-sm bg-success-emerald/5 rounded-lg border border-success-emerald/10">
                        <span class="material-symbols-outlined text-success-emerald">check_circle</span>
                        <span class="text-caption">Akomodasi Hotel Bintang 5</span>
                    </div>
                    <div class="flex items-center gap-md p-sm bg-outline-variant/5 rounded-lg border border-outline-variant/10">
                        <span class="material-symbols-outlined text-outline">pending</span>
                        <span class="text-caption">Transportasi VIP Alphard</span>
                    </div>
                </div>
            </div>

            <!-- Feature Detail: Command Center -->
            <div class="col-span-12 lg:col-span-8 bg-inverse-surface rounded-[24px] p-xl text-inverse-on-surface flex flex-col md:flex-row gap-lg items-center overflow-hidden relative">
                <div class="absolute top-0 left-0 w-full h-full opacity-20 pointer-events-none"></div>
                <div class="md:w-3/5 space-y-md relative z-10">
                    <h3 class="font-headline-md text-headline-md">Multi-user Mission Control</h3>
                    <p class="text-on-surface-variant opacity-80">Koordinasikan seluruh divisi dalam satu dashboard pusat. Divisi Produksi, Sponsorship, Marketing, hingga Logistik bekerja dalam satu timeline yang sinkron.</p>
                    <ul class="grid grid-cols-2 gap-sm">
                        <li class="flex items-center gap-2"><span class="material-symbols-outlined text-success-emerald">verified</span> Real-time Sync</li>
                        <li class="flex items-center gap-2"><span class="material-symbols-outlined text-success-emerald">verified</span> Approval Berjenjang</li>
                        <li class="flex items-center gap-2"><span class="material-symbols-outlined text-success-emerald">verified</span> Laporan Otomatis</li>
                        <li class="flex items-center gap-2"><span class="material-symbols-outlined text-success-emerald">verified</span> Whitelabel Access</li>
                    </ul>
                </div>
                <div class="md:w-2/5 relative z-10">
                    <div class="w-full h-48 bg-white/10 backdrop-blur-md rounded-xl flex items-center justify-center border border-white/20">
                        <div class="relative w-full h-full p-md flex flex-col justify-center gap-sm">
                            <div class="flex items-center gap-2 bg-white/5 p-sm rounded border border-white/10">
                                <div class="w-8 h-8 rounded-full bg-primary/20 flex items-center justify-center"><span class="material-symbols-outlined text-primary text-[18px]">person</span></div>
                                <div class="flex-grow">
                                    <div class="h-2 w-24 bg-white/20 rounded"></div>
                                    <div class="h-1.5 w-16 bg-white/10 rounded mt-1"></div>
                                </div>
                                <span class="material-symbols-outlined text-success-emerald text-[18px]">sync</span>
                            </div>
                            <div class="flex items-center gap-2 bg-white/5 p-sm rounded border border-white/10 opacity-60">
                                <div class="w-8 h-8 rounded-full bg-secondary-container/20 flex items-center justify-center"><span class="material-symbols-outlined text-secondary-fixed text-[18px]">person</span></div>
                                <div class="flex-grow">
                                    <div class="h-2 w-20 bg-white/20 rounded"></div>
                                    <div class="h-1.5 w-12 bg-white/10 rounded mt-1"></div>
                                </div>
                                <span class="material-symbols-outlined text-success-emerald text-[18px]">sync</span>
                            </div>
                            <div class="absolute -right-4 top-1/2 -translate-y-1/2 bg-primary p-md rounded-xl shadow-xl border border-white/20 animate-pulse"><span class="material-symbols-outlined text-on-primary">bolt</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section class="py-xxl bg-surface">
        <div class="max-w-[1536px] mx-auto px-gutter">
            <div class="text-center mb-xxl">
                <h2 class="font-headline-lg text-headline-lg text-on-surface">Pilih Kekuatan Operasional Anda</h2>
                <p class="text-on-surface-variant font-body-lg mt-md">Investasi cerdas untuk event yang minim resiko dan maksimal profit.</p>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-lg">
                <!-- Pricing Card 1 -->
                <div class="bg-white rounded-[24px] p-xl border border-outline-variant/30 flex flex-col hover:border-primary/30 transition-colors">
                    <div class="mb-lg">
                        <h3 class="font-headline-sm text-headline-sm text-on-surface">Gratis</h3>
                        <p class="text-caption text-on-surface-variant">Solo Op</p>
                    </div>
                    <div class="mb-lg">
                        <span class="font-display-lg text-[40px] text-primary">Rp 0</span>
                        <span class="text-on-surface-variant">/event</span>
                    </div>
                    <ul class="space-y-md mb-xxl flex-grow">
                        <li class="flex items-start gap-sm"><span class="material-symbols-outlined text-primary text-[20px]">check</span> 1 Active Event</li>
                        <li class="flex items-start gap-sm"><span class="material-symbols-outlined text-primary text-[20px]">check</span> Basic Guest List</li>
                        <li class="flex items-start gap-sm"><span class="material-symbols-outlined text-primary text-[20px]">check</span> Standard Budgeting</li>
                    </ul>
                    <button class="w-full py-md rounded-full border border-primary text-primary font-bold hover:bg-primary/5 transition-colors">Mulai Gratis</button>
                </div>
                <!-- Pricing Card 2 -->
                <div class="bg-white rounded-[24px] p-xl border border-outline-variant/30 flex flex-col hover:border-primary/30 transition-colors">
                    <div class="mb-lg">
                        <h3 class="font-headline-sm text-headline-sm text-on-surface">Logistics Pro</h3>
                        <p class="text-caption text-on-surface-variant">Best for Operations</p>
                    </div>
                    <div class="mb-lg">
                        <span class="font-display-lg text-[40px] text-primary">100rb</span>
                        <span class="text-on-surface-variant">/bln/evt</span>
                    </div>
                    <ul class="space-y-md mb-xxl flex-grow">
                        <li class="flex items-start gap-sm"><span class="material-symbols-outlined text-primary text-[20px]">check</span> Full Rider Management</li>
                        <li class="flex items-start gap-sm"><span class="material-symbols-outlined text-primary text-[20px]">check</span> Vendor Price Lists</li>
                        <li class="flex items-start gap-sm"><span class="material-symbols-outlined text-primary text-[20px]">check</span> Inventory Tracking</li>
                    </ul>
                    <button class="w-full py-md rounded-full border border-primary text-primary font-bold hover:bg-primary/5 transition-colors">Pilih Pro</button>
                </div>
                <!-- Pricing Card 3 (Popular) -->
                <div class="bg-primary-container rounded-[24px] p-xl border border-primary/20 flex flex-col relative shadow-xl shadow-primary/20 scale-105 z-10">
                    <div class="absolute top-0 right-xl -translate-y-1/2 px-md py-xs bg-warning-amber text-on-surface font-bold text-caption rounded-full">POPULER</div>
                    <div class="mb-lg">
                        <h3 class="font-headline-sm text-headline-sm text-on-primary">Team Command</h3>
                        <p class="text-caption text-on-primary-container">Collaboration Focus</p>
                    </div>
                    <div class="mb-lg">
                        <span class="font-display-lg text-[40px] text-on-primary">150rb</span>
                        <span class="text-on-primary-container">/bln/evt</span>
                    </div>
                    <ul class="space-y-md mb-xxl flex-grow text-on-primary">
                        <li class="flex items-start gap-sm"><span class="material-symbols-outlined text-secondary-fixed text-[20px]">done_all</span> Multi-user Collaboration</li>
                        <li class="flex items-start gap-sm"><span class="material-symbols-outlined text-secondary-fixed text-[20px]">done_all</span> Financial Health AI</li>
                        <li class="flex items-start gap-sm"><span class="material-symbols-outlined text-secondary-fixed text-[20px]">done_all</span> Real-time Team Chat</li>
                        <li class="flex items-start gap-sm"><span class="material-symbols-outlined text-secondary-fixed text-[20px]">done_all</span> Budget Real-time Sync</li>
                    </ul>
                    <button class="w-full py-md rounded-full bg-on-primary text-primary font-bold hover:bg-surface-ice transition-colors">Pilih Team</button>
                </div>
                <!-- Pricing Card 4 -->
                <div class="bg-white rounded-[24px] p-xl border border-outline-variant/30 flex flex-col hover:border-primary/30 transition-colors">
                    <div class="mb-lg">
                        <h3 class="font-headline-sm text-headline-sm text-on-surface">Agency Elite</h3>
                        <p class="text-caption text-on-surface-variant">Whitelabel Power</p>
                    </div>
                    <div class="mb-lg">
                        <span class="font-display-lg text-[40px] text-primary">300rb</span>
                        <span class="text-on-surface-variant">/bln/evt</span>
                    </div>
                    <ul class="space-y-md mb-xxl flex-grow">
                        <li class="flex items-start gap-sm"><span class="material-symbols-outlined text-primary text-[20px]">check</span> Whitelabel Dashboards</li>
                        <li class="flex items-start gap-sm"><span class="material-symbols-outlined text-primary text-[20px]">check</span> Dedicated Support</li>
                        <li class="flex items-start gap-sm"><span class="material-symbols-outlined text-primary text-[20px]">check</span> Custom API Integration</li>
                        <li class="flex items-start gap-sm"><span class="material-symbols-outlined text-primary text-[20px]">check</span> Unlimited Team Members</li>
                    </ul>
                    <button class="w-full py-md rounded-full border border-primary text-primary font-bold hover:bg-primary/5 transition-colors">Pilih Elite</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Trust & Social Proof -->
    <section class="py-xxl bg-surface-container-low/30">
        <div class="max-w-[1536px] mx-auto px-gutter text-center">
            <p class="font-label-md text-label-md text-on-surface-variant mb-xl tracking-widest uppercase">TRUSTED BY INDUSTRY LEADERS</p>
            <div class="flex flex-wrap justify-center items-center gap-xxl opacity-50 mb-xxl">
                <div class="font-bold text-headline-sm">EVENTRA</div>
                <div class="font-bold text-headline-sm">FESTIVALPRO</div>
                <div class="font-bold text-headline-sm">CONCERTMASTER</div>
                <div class="font-bold text-headline-sm">LOGISTIX</div>
                <div class="font-bold text-headline-sm">AGENCYHUB</div>
            </div>
            <div class="grid md:grid-cols-2 gap-lg max-w-4xl mx-auto">
                <div class="p-xl rounded-xl text-left border-l-4 border-l-primary" style="background: rgba(255, 255, 255, 0.8); backdrop-filter: blur(12px); border: 1px solid rgba(226, 228, 231, 0.5); border-left: 4px solid #004ac6;">
                    <p class="italic text-on-surface-variant font-body-lg mb-lg">"Coordination mengubah cara kami mengelola Riders artis. Tidak ada lagi permintaan mendadak yang terlewat, dan budget kami tetap sehat sampai hari-H."</p>
                    <div class="flex items-center gap-md">
                        <div class="w-12 h-12 bg-outline-variant rounded-full overflow-hidden">
                            <img class="w-full h-full object-cover" data-alt="A professional headshot of a senior event director in his late 40s, wearing a sleek black polo shirt, with a blurred modern office background. The lighting is soft and corporate, highlighting a confident smile. The image style is clean, sharp, and high-fidelity, matching a premium business profile." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBkOFc8TrwDZZwMLNbx6d8qIMdbbcxCoPzvq9kbeZ6rB8LXuMSOXqOnN0fKZ4Zl6Q7_1q3RgMjUiCNECLyJlkitaWFrRWwPdlAaac6njX9yUWBgwGImekcRn0rVO1XjdO_vCVWPz4n8387eAUYOL3FvjaW5w1-_wmkGPncLZgz_XBl_gMWLV35rqyZOl6wgaBCQGdu87anCA0iJzYiz7Ewy3VpVkBJaqJi2PWVwviyiD2HcCdcB-E_jxPruDk8JxynCW1kDDQ7RZM8">
                        </div>
                        <div>
                            <p class="font-bold">Andi Pratama</p>
                            <p class="text-caption text-on-surface-variant">Event Director, SoundWave Festival</p>
                        </div>
                    </div>
                </div>
                <div class="p-xl rounded-xl text-left border-l-4 border-l-secondary-container" style="background: rgba(255, 255, 255, 0.8); backdrop-filter: blur(12px); border: 1px solid rgba(226, 228, 231, 0.5); border-left: 4px solid #9af2c5;">
                    <p class="italic text-on-surface-variant font-body-lg mb-lg">"Dashboard Financial Health-nya sangat membantu. Kami bisa melihat potensi budget blow-out 2 minggu lebih awal dan segera mengambil tindakan korektif."</p>
                    <div class="flex items-center gap-md">
                        <div class="w-12 h-12 bg-outline-variant rounded-full overflow-hidden">
                            <img class="w-full h-full object-cover" data-alt="A professional headshot of a middle-aged woman in a modern corporate setting, wearing a sophisticated dark blue blazer. She has a warm, professional expression. The background is a brightly lit, high-end office lobby with architectural glass elements, consistent with a high-performance executive image." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDXORM1muWA6dxPF9JMn-CgIL27c4yrNOtzUHVf0BpHM5A6Q4zxohxsfUmgXvlmjA70osQ0LbPJ0b6N_wqOrBJSmBigKh_msLR876UI1_nmoGK62brIXjP6062OouLEkfcRKL853QY_WtJMC2FD2Pm5yW4ejglC5emIuwX9ExnVfLj7adB_XGAC1pNE57U83445A_2m64UxKWFKtiKiNsVVDqGDyHGNIqDimEFiqhm_mufC5x9zbhPQ0PcK8dnbrJoM8cqOVmhalB8">
                        </div>
                        <div>
                            <p class="font-bold">Sari Wijaya</p>
                            <p class="text-caption text-on-surface-variant">Project Manager, ExpoXpert</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-xxl px-gutter">
        <div class="max-w-[1200px] mx-auto bg-primary rounded-[48px] p-xxl text-center relative overflow-hidden shadow-2xl shadow-primary/30">
            <div class="absolute inset-0 opacity-10 pointer-events-none"></div>
            <div class="relative z-10 space-y-lg">
                <h2 class="font-headline-lg text-display-lg text-on-primary">Siap Mengambil Kendali?</h2>
                <p class="text-on-primary-container text-body-lg max-w-xl mx-auto">Bergabunglah dengan ribuan event planner yang sudah beralih ke operasional berbasis data dan AI.</p>
                <div class="flex flex-wrap justify-center gap-md pt-lg">
                    <a href="{{ route('register') }}" class="inline-block bg-on-primary text-primary px-xxl py-lg rounded-full font-bold text-title-md hover:shadow-xl transition-all active:scale-95">Mulai Sekarang</a>
                    <button class="px-xxl py-lg rounded-full border border-on-primary text-on-primary font-bold text-title-md hover:bg-white/10 transition-all">Hubungi Tim Sales</button>
                </div>
            </div>
        </div>
    </section>
</main>

<!-- Footer -->
<footer class="bg-surface-container-lowest dark:bg-on-surface border-t border-outline-variant">
    <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-lg px-gutter py-xxl max-w-[1536px] mx-auto">
        <div class="col-span-2">
            <div class="text-headline-sm font-headline-sm font-bold text-on-surface mb-md">Coordination AI</div>
            <p class="text-on-surface-variant font-caption text-caption pr-lg">High-performance coordination platform for large-scale event management. Precise, authoritative, and dependable.</p>
        </div>
        <div class="">
            <h4 class="font-bold mb-md text-on-surface">Product</h4>
            <nav class="flex flex-col gap-sm">
                <a class="text-on-surface-variant hover:text-primary transition-all duration-150 font-caption text-caption hover:underline" href="#">Features</a>
                <a class="text-on-surface-variant hover:text-primary transition-all duration-150 font-caption text-caption hover:underline" href="#">Integrations</a>
                <a class="text-on-surface-variant hover:text-primary transition-all duration-150 font-caption text-caption hover:underline" href="#">Security</a>
            </nav>
        </div>
        <div>
            <h4 class="font-bold mb-md text-on-surface">Company</h4>
            <nav class="flex flex-col gap-sm">
                <a class="text-on-surface-variant hover:text-primary transition-all duration-150 font-caption text-caption hover:underline" href="#">About Us</a>
                <a class="text-on-surface-variant hover:text-primary transition-all duration-150 font-caption text-caption hover:underline" href="#">Careers</a>
                <a class="text-on-surface-variant hover:text-primary transition-all duration-150 font-caption text-caption hover:underline" href="#">Blog</a>
            </nav>
        </div>
        <div class="">
            <h4 class="font-bold mb-md text-on-surface">Legal</h4>
            <nav class="flex flex-col gap-sm">
                <a class="text-on-surface-variant hover:text-primary transition-all duration-150 font-caption text-caption hover:underline" href="#">Privacy Policy</a>
                <a class="text-on-surface-variant hover:text-primary transition-all duration-150 font-caption text-caption hover:underline" href="#">Terms of Service</a>
            </nav>
        </div>
        <div class="">
            <h4 class="font-bold mb-md text-on-surface">Social</h4>
            <nav class="flex flex-col gap-sm">
                <a class="text-on-surface-variant hover:text-primary transition-all duration-150 font-caption text-caption hover:underline" href="#">Twitter</a>
                <a class="text-on-surface-variant hover:text-primary transition-all duration-150 font-caption text-caption hover:underline" href="#">LinkedIn</a>
            </nav>
        </div>
    </div>
    <div class="px-gutter py-lg border-t border-outline-variant/30 text-center text-on-surface-variant font-caption text-caption">
        &copy; 2024 Coordination AI. All rights reserved.
    </div>
</footer>
<script>
    // Mobile Menu Toggle
    const menuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    const mobileMenuPanel = document.getElementById('mobile-menu-panel');
    const mobileMenuClose = document.getElementById('mobile-menu-close');
    const mobileMenuBackdrop = document.getElementById('mobile-menu-backdrop');

    function openMenu() {
        mobileMenu.classList.remove('hidden');
        setTimeout(() => {
            mobileMenuPanel.style.transform = 'translateX(0)';
        }, 10);
    }
    function closeMenu() {
        mobileMenuPanel.style.transform = 'translateX(100%)';
        setTimeout(() => {
            mobileMenu.classList.add('hidden');
        }, 300);
    }

    menuBtn.addEventListener('click', openMenu);
    mobileMenuClose.addEventListener('click', closeMenu);
    mobileMenuBackdrop.addEventListener('click', closeMenu);
</script>
</body>
</html>
