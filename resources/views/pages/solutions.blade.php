<!DOCTYPE html>
<html class="light" lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Coordination - Solusi Manajemen Acara Strategis</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            "colors": {
                    "secondary": "#006c49",
                    "accent-emerald": "#D1FAE5",
                    "outline-variant": "#c3c6d7",
                    "on-surface-variant": "#434655",
                    "danger": "#EF4444",
                    "on-primary-fixed": "#00174b",
                    "on-secondary": "#ffffff",
                    "error": "#ba1a1a",
                    "tertiary-fixed-dim": "#ffb596",
                    "on-tertiary-fixed-variant": "#7d2d00",
                    "surface-container-low": "#f2f4f6",
                    "on-secondary-container": "#00714d",
                    "error-container": "#ffdad6",
                    "surface-variant": "#e0e3e5",
                    "primary-container": "#2563eb",
                    "accent-blue": "#DBEAFE",
                    "primary-fixed-dim": "#b4c5ff",
                    "on-tertiary-fixed": "#360f00",
                    "surface-bright": "#f7f9fb",
                    "text-secondary": "#64748B",
                    "surface-tint": "#0053db",
                    "inverse-on-surface": "#eff1f3",
                    "on-background": "#191c1e",
                    "surface-container-high": "#e6e8ea",
                    "background": "#f7f9fb",
                    "surface": "#f7f9fb",
                    "on-primary": "#ffffff",
                    "on-error-container": "#93000a",
                    "tertiary-container": "#bc4800",
                    "outline": "#737686",
                    "on-tertiary-container": "#ffede6",
                    "text-primary": "#0F172A",
                    "success": "#22C55E",
                    "on-surface": "#191c1e",
                    "primary-fixed": "#dbe1ff",
                    "on-error": "#ffffff",
                    "warning": "#F59E0B",
                    "surface-container-lowest": "#ffffff",
                    "on-tertiary": "#ffffff",
                    "surface-dim": "#d8dadc",
                    "secondary-fixed": "#6ffbbe",
                    "on-primary-fixed-variant": "#003ea8",
                    "tertiary-fixed": "#ffdbcd",
                    "surface-container-highest": "#e0e3e5",
                    "surface-card": "#FFFFFF",
                    "on-secondary-fixed-variant": "#005236",
                    "tertiary": "#943700",
                    "secondary-container": "#6cf8bb",
                    "border-subtle": "#E2E8F0",
                    "inverse-primary": "#b4c5ff",
                    "on-secondary-fixed": "#002113",
                    "primary": "#004ac6",
                    "inverse-surface": "#2d3133",
                    "on-primary-container": "#eeefff",
                    "secondary-fixed-dim": "#4edea3",
                    "surface-container": "#eceef0"
            },
            "borderRadius": {
                    "DEFAULT": "0.25rem",
                    "lg": "0.5rem",
                    "xl": "0.75rem",
                    "full": "9999px"
            },
            "spacing": {
                    "stack-sm": "8px",
                    "margin-desktop": "40px",
                    "gutter": "24px",
                    "unit": "4px",
                    "stack-lg": "32px",
                    "stack-md": "16px",
                    "margin-mobile": "16px",
                    "container-max": "1440px"
            },
            "fontFamily": {
                    "label-sm": ["Inter"],
                    "label-md": ["Inter"],
                    "display-lg": ["Inter"],
                    "body-md": ["Inter"],
                    "headline-lg-mobile": ["Inter"],
                    "headline-sm": ["Inter"],
                    "body-lg": ["Inter"],
                    "body-sm": ["Inter"],
                    "headline-md": ["Inter"],
                    "headline-lg": ["Inter"]
            },
            "fontSize": {
                    "label-sm": ["12px", {"lineHeight": "1", "fontWeight": "600"}],
                    "label-md": ["14px", {"lineHeight": "1", "letterSpacing": "0.01em", "fontWeight": "600"}],
                    "display-lg": ["48px", {"lineHeight": "1.2", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                    "body-md": ["16px", {"lineHeight": "1.5", "fontWeight": "500"}],
                    "headline-lg-mobile": ["24px", {"lineHeight": "1.3", "fontWeight": "700"}],
                    "headline-sm": ["20px", {"lineHeight": "1.4", "fontWeight": "600"}],
                    "body-lg": ["18px", {"lineHeight": "1.6", "fontWeight": "400"}],
                    "body-sm": ["14px", {"lineHeight": "1.5", "fontWeight": "400"}],
                    "headline-md": ["24px", {"lineHeight": "1.3", "fontWeight": "600"}],
                    "headline-lg": ["32px", {"lineHeight": "1.25", "letterSpacing": "-0.01em", "fontWeight": "700"}]
            }
          },
        },
      }
    </script>
<style>
        body { font-family: 'Inter', sans-serif; background-color: #f7f9fb; }
        .glass-nav {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
        }
        .bento-grid {
            display: grid;
            grid-template-columns: repeat(12, 1fr);
            gap: 24px;
        }
        .bento-item {
            border-radius: 24px;
            overflow: hidden;
            background: white;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .bento-item:hover {
            transform: translateY(-4px);
            box-shadow: 0px 12px 32px rgba(15, 23, 42, 0.08);
        }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
</head>
<body class="text-on-surface">

<!-- TopNavBar (Floating Glass Navigation) -->
<header class="fixed top-[20px] left-1/2 -translate-x-1/2 w-[90%] max-w-[1400px] h-[72px] z-50 rounded-full shadow-[0_8px_32px_rgba(0,0,0,0.05)] transition-all duration-300 flex items-center" style="background: rgba(255,255,255,0.7); backdrop-filter: blur(18px); -webkit-backdrop-filter: blur(18px); border: 1px solid rgba(226,232,240,0.5);">
    <div class="flex justify-between items-center w-full px-6 lg:px-8">
        <a href="/" class="font-bold flex items-center gap-2 group">
            <div class="bg-primary text-white p-1.5 rounded-full group-hover:scale-105 transition-transform shadow-md">
                <span class="material-symbols-outlined text-[20px] block">hub</span>
            </div>
            <span class="text-slate-900 font-extrabold tracking-tight text-base">Coordination</span>
        </a>
        <nav class="hidden lg:flex gap-8">
            <a class="relative text-slate-800/80 hover:text-slate-900 transition-colors text-sm font-medium group" href="{{ route('fitur') }}">
                Fitur
                <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-primary rounded-full transition-all duration-300 group-hover:w-full"></span>
            </a>
            <a class="relative text-slate-900 font-semibold text-sm group" href="{{ route('solutions') }}">
                Solusi
                <span class="absolute -bottom-1 left-0 w-full h-0.5 bg-primary rounded-full"></span>
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
        <button id="mobile-menu-btn" class="lg:hidden flex items-center justify-center w-10 h-10 rounded-full hover:bg-white/20 transition-colors">
            <span class="material-symbols-outlined text-slate-900 text-[24px]">menu</span>
        </button>
    </div>
</header>
<div id="mobile-menu" class="fixed inset-0 z-[60] hidden">
    <div class="absolute inset-0 bg-black/30 backdrop-blur-sm" id="mobile-menu-backdrop"></div>
    <div class="absolute top-0 right-0 w-[280px] h-full bg-white shadow-2xl p-8 flex flex-col gap-6 transform translate-x-full transition-transform duration-300" id="mobile-menu-panel">
        <div class="flex justify-between items-center mb-4">
            <span class="font-extrabold text-slate-900 text-lg">Menu</span>
            <button id="mobile-menu-close" class="w-10 h-10 rounded-full hover:bg-slate-100 flex items-center justify-center transition-colors">
                <span class="material-symbols-outlined text-slate-700">close</span>
            </button>
        </div>
        <nav class="flex flex-col gap-1">
            <a class="text-slate-700 font-medium text-base py-3 px-4 rounded-xl hover:bg-slate-50 transition-colors" href="{{ route('fitur') }}">Fitur</a>
            <a class="text-slate-900 font-semibold text-base py-3 px-4 rounded-xl bg-primary/5" href="{{ route('solutions') }}">Solusi</a>
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
<main class="pt-32 pb-24">
<!-- Hero Section -->
<section class="max-w-container-max mx-auto px-margin-desktop mb-24">
<div class="max-w-3xl">
<h1 class="text-display-lg font-display-lg text-text-primary mb-6">Solusi Terpadu untuk Setiap Skala Acara Anda</h1>
<p class="text-body-lg font-body-lg text-text-secondary mb-8">Dari festival musik yang membahana hingga konferensi korporat yang presisi, Coordination AI memberikan kontrol penuh dan intelijen real-time untuk kesuksesan operasional Anda.</p>
<div class="flex flex-wrap gap-4">
<span class="px-4 py-2 bg-accent-blue text-primary text-label-sm font-label-sm rounded-full">#SmartCoordination</span>
<span class="px-4 py-2 bg-accent-emerald text-secondary text-label-sm font-label-sm rounded-full">#ScaleReady</span>
<span class="px-4 py-2 bg-surface-container-high text-on-surface-variant text-label-sm font-label-sm rounded-full">#EnterpriseReady</span>
</div>
</div>
</section>
<!-- Bento Grid Solutions -->
<section class="max-w-container-max mx-auto px-margin-desktop space-y-gutter">
<!-- Solution 1: Musik & Festival -->
<div class="bento-grid">
<div class="col-span-12 md:col-span-8 bento-item relative min-h-[500px]">
<div class="absolute inset-0 z-0">
<img class="w-full h-full object-cover" data-alt="A high-energy outdoor music festival scene at dusk" src="https://images.unsplash.com/photo-1540039155732-6761b54f22ce?auto=format&fit=crop&q=80&w=2000"/>
<div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
</div>
<div class="absolute bottom-0 p-10 z-10 text-white">
<div class="flex items-center gap-2 mb-4">
<span class="material-symbols-outlined text-accent-emerald" style="font-variation-settings: 'FILL' 1;">music_note</span>
<span class="text-label-md font-label-md uppercase tracking-widest text-accent-emerald">Konser &amp; Festival Musik</span>
</div>
<h2 class="text-headline-lg font-headline-lg mb-4">Harmoni dalam Kekacauan</h2>
<p class="text-body-md font-body-md text-white/80 max-w-xl">Koordinasi ribuan kru dan vendor secara real-time. Kelola logistik panggung, jadwal artis, dan keamanan kerumunan dalam satu dashboard cerdas.</p>
</div>
</div>
<div class="col-span-12 md:col-span-4 bento-item p-10 flex flex-col justify-center border border-border-subtle bg-white">
<div class="mb-8 p-4 bg-accent-blue/30 rounded-2xl w-fit">
<span class="material-symbols-outlined text-primary text-4xl">analytics</span>
</div>
<h3 class="text-headline-sm font-headline-sm mb-4">Studi Kasus: Starlight Fest</h3>
<p class="text-body-sm font-body-sm text-text-secondary mb-6 italic border-l-4 border-primary pl-4">"Coordination membantu kami mengurangi keterlambatan jadwal panggung hingga 45% melalui sistem peringatan dini bertenaga AI."</p>
<ul class="space-y-3">
<li class="flex items-center gap-3 text-body-sm font-body-sm">
<span class="material-symbols-outlined text-success text-sm" style="font-variation-settings: 'FILL' 1;">check_circle</span>
                            Manajemen Alur Massa Real-time
                        </li>
<li class="flex items-center gap-3 text-body-sm font-body-sm">
<span class="material-symbols-outlined text-success text-sm" style="font-variation-settings: 'FILL' 1;">check_circle</span>
                            Koordinasi Komunikasi Radio &amp; Chat
                        </li>
</ul>
</div>
</div>
<!-- Solution 2: Eksibisi & Expo -->
<div class="bento-grid">
<div class="col-span-12 md:col-span-5 bento-item p-10 flex flex-col justify-between border border-border-subtle bg-surface-container-low">
<div>
<div class="flex items-center gap-2 mb-6">
<span class="material-symbols-outlined text-primary">storefront</span>
<span class="text-label-md font-label-md text-primary">Eksibisi &amp; Expo Bisnis</span>
</div>
<h2 class="text-headline-lg font-headline-lg mb-4">Presisi Skala Makro</h2>
<p class="text-body-md font-body-md text-text-secondary">Otomatisasi pemetaan booth, pendaftaran eksibitor, dan pelacakan interaksi pengunjung untuk ROI yang terukur.</p>
</div>
<div class="mt-12 space-y-4">
<div class="p-6 bg-white rounded-xl shadow-sm">
<div class="text-headline-sm font-headline-sm text-primary mb-1">98%</div>
<div class="text-body-sm font-body-sm text-text-secondary">Kepuasan Eksibitor</div>
</div>
<div class="p-6 bg-white rounded-xl shadow-sm">
<div class="text-headline-sm font-headline-sm text-secondary mb-1">12k+</div>
<div class="text-body-sm font-body-sm text-text-secondary">Lead Terkoneksi</div>
</div>
</div>
</div>
<div class="col-span-12 md:col-span-7 bento-item relative overflow-hidden group">
<img class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" data-alt="A futuristic and brightly lit international business expo hall" src="https://images.unsplash.com/photo-1540575467063-178a50c2df87?auto=format&fit=crop&q=80&w=2000"/>
<div class="absolute top-6 right-6 px-4 py-2 glass-nav rounded-full shadow-lg border border-white/20">
<div class="flex items-center gap-2">
<span class="w-2 h-2 bg-success rounded-full animate-pulse"></span>
<span class="text-label-sm font-label-sm text-text-primary">Live Booth Monitoring</span>
</div>
</div>
</div>
</div>
<!-- Solution 3: Acara Korporat -->
<div class="bento-grid">
<div class="col-span-12 md:col-span-12 bento-item p-1 pb-0 bg-text-primary overflow-hidden">
<div class="grid md:grid-cols-2">
<div class="p-12 text-white flex flex-col justify-center">
<div class="flex items-center gap-2 mb-6">
<span class="material-symbols-outlined text-primary-fixed">corporate_fare</span>
<span class="text-label-md font-label-md text-primary-fixed uppercase">Acara Korporat Besar</span>
</div>
<h2 class="text-display-lg font-display-lg mb-6 leading-tight">Elevasi Citra Brand Anda</h2>
<p class="text-body-lg font-body-lg text-white/60 mb-8">Konferensi tingkat tinggi dan peluncuran produk global menuntut kesempurnaan. Coordination memastikan setiap detail VIP, protokol keamanan, dan agenda berjalan tanpa cela.</p>
<button class="w-fit px-8 py-4 bg-primary text-on-primary rounded-xl font-bold flex items-center gap-3 hover:bg-surface-tint transition-all group">
                                Pelajari Fitur Enterprise
                                <span class="material-symbols-outlined group-hover:translate-x-1 transition-transform">arrow_forward</span>
</button>
</div>
<div class="relative min-h-[400px]">
<div class="absolute inset-0 p-8">
<div class="w-full h-full rounded-2xl overflow-hidden shadow-2xl rotate-3 translate-y-12">
<img class="w-full h-full object-cover" data-alt="A sophisticated corporate ballroom" src="https://images.unsplash.com/photo-1515187029135-18ee286d815b?auto=format&fit=crop&q=80&w=2000"/>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Use Case Visual Tabs / Interactive Logic -->
<section class="max-w-container-max mx-auto px-margin-desktop mt-stack-lg">
<div class="bg-white rounded-[32px] p-12 border border-border-subtle shadow-sm">
<div class="text-center max-w-2xl mx-auto mb-16">
<h2 class="text-headline-lg font-headline-lg mb-4">Pilih Alur Kerja Anda</h2>
<p class="text-body-md font-body-md text-text-secondary">Lihat bagaimana Coordination menyesuaikan antarmuka sesuai dengan kebutuhan spesifik industri Anda.</p>
</div>
<div class="grid lg:grid-cols-3 gap-8">
<!-- Feature Pillar 1 -->
<div class="space-y-6">
<div class="w-14 h-14 bg-accent-blue rounded-2xl flex items-center justify-center">
<span class="material-symbols-outlined text-primary text-3xl">assignment_turned_in</span>
</div>
<h3 class="text-headline-sm font-headline-sm">Pre-Event Intelligence</h3>
<p class="text-body-sm font-body-sm text-text-secondary">Prediksi kebutuhan sumber daya dan manajemen aset otomatis sebelum acara dimulai.</p>
</div>
<!-- Feature Pillar 2 -->
<div class="space-y-6">
<div class="w-14 h-14 bg-accent-emerald rounded-2xl flex items-center justify-center">
<span class="material-symbols-outlined text-secondary text-3xl">hub</span>
</div>
<h3 class="text-headline-sm font-headline-sm">Live Command Center</h3>
<p class="text-body-sm font-body-sm text-text-secondary">Pusat kendali operasional terpadu yang menyatukan data dari semua departemen secara instan.</p>
</div>
<!-- Feature Pillar 3 -->
<div class="space-y-6">
<div class="w-14 h-14 bg-tertiary-fixed rounded-2xl flex items-center justify-center">
<span class="material-symbols-outlined text-tertiary text-3xl">insights</span>
</div>
<h3 class="text-headline-sm font-headline-sm">Post-Event Analytics</h3>
<p class="text-body-sm font-body-sm text-text-secondary">Laporan komprehensif tentang efisiensi operasional dan dampak finansial acara Anda.</p>
</div>
</div>
</div>
</section>
<!-- CTA Section -->
<section class="max-w-container-max mx-auto px-margin-desktop mt-stack-lg">
<div class="relative bg-primary rounded-[32px] p-12 md:p-24 overflow-hidden text-center">
<!-- Background Effect -->
<div class="absolute inset-0 opacity-10 pointer-events-none">
<div class="absolute top-0 left-0 w-full h-full bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] from-white via-transparent to-transparent"></div>
</div>
<h2 class="text-display-lg font-display-lg text-on-primary mb-6 relative z-10">Siap Mengubah Cara Anda Mengelola Acara?</h2>
<p class="text-body-lg font-body-lg text-on-primary/80 mb-12 max-w-2xl mx-auto relative z-10">Bergabunglah dengan ratusan penyelenggara acara global yang telah mempercayakan operasional mereka pada Coordination.</p>
<div class="flex flex-col md:flex-row justify-center gap-6 relative z-10">
<a href="{{ route('register') }}" class="px-10 py-5 bg-white text-primary rounded-2xl font-bold text-lg hover:shadow-xl transition-all active:scale-95">Jadwalkan Demo Gratis</a>
<a href="{{ route('kontak') }}" class="px-10 py-5 border-2 border-white text-white rounded-2xl font-bold text-lg hover:bg-white/10 transition-all active:scale-95">Hubungi Penjualan</a>
</div>
</div>
</section>
</main>
<!-- Footer -->
<footer class="w-full py-stack-lg border-t border-border-subtle bg-surface-container-low">
<div class="grid grid-cols-1 md:grid-cols-4 gap-gutter px-margin-desktop max-w-container-max mx-auto">
<div class="col-span-1 md:col-span-1">
<div class="text-headline-sm font-headline-sm text-primary font-bold mb-6">Coordination</div>
<p class="text-body-sm font-body-sm text-on-surface-variant mb-6">Platform AI Operations paling andal untuk manajemen acara skala besar dan strategis.</p>
</div>
<div>
<h4 class="font-bold text-text-primary mb-6">Produk</h4>
<ul class="space-y-4">
<li><a class="text-on-surface-variant hover:text-primary transition-colors text-body-sm" href="{{ route('fitur') }}">Fitur Utama</a></li>
<li><a class="text-on-surface-variant hover:text-primary transition-colors text-body-sm" href="#">Keamanan Data</a></li>
<li><a class="text-on-surface-variant hover:text-primary transition-colors text-body-sm" href="#">Integrasi API</a></li>
</ul>
</div>
<div>
<h4 class="font-bold text-text-primary mb-6">Solusi</h4>
<ul class="space-y-4">
<li><a class="text-on-surface-variant hover:text-primary transition-colors text-body-sm" href="#">Festival Musik</a></li>
<li><a class="text-on-surface-variant hover:text-primary transition-colors text-body-sm" href="#">Eksibisi Bisnis</a></li>
<li><a class="text-on-surface-variant hover:text-primary transition-colors text-body-sm" href="#">Konferensi Korporat</a></li>
</ul>
</div>
<div>
<h4 class="font-bold text-text-primary mb-6">Dukungan</h4>
<ul class="space-y-4">
<li><a class="text-on-surface-variant hover:text-primary transition-colors text-body-sm" href="#">Pusat Bantuan</a></li>
<li><a class="text-on-surface-variant hover:text-primary transition-colors text-body-sm" href="#">Dokumentasi</a></li>
<li><a class="text-on-surface-variant hover:text-primary transition-colors text-body-sm" href="{{ route('kontak') }}">Kontak Kami</a></li>
</ul>
</div>
</div>
<div class="max-w-container-max mx-auto px-margin-desktop mt-16 pt-8 border-t border-border-subtle flex flex-col md:flex-row justify-between items-center gap-4">
<p class="text-body-sm font-body-sm text-on-surface-variant">© 2026 Coordination AI Operations. All rights reserved.</p>
<div class="flex gap-6">
<a class="text-on-surface-variant hover:underline text-body-sm" href="#">Privacy Policy</a>
<a class="text-on-surface-variant hover:underline text-body-sm" href="#">Terms of Service</a>
<a class="text-on-surface-variant hover:underline text-body-sm" href="#">Cookie Settings</a>
</div>
</div>
</footer>
<script>
        // Micro-interaction for scroll effects
        window.addEventListener('scroll', () => {
            const nav = document.querySelector('header');
            if (window.scrollY > 20) {
                nav.classList.add('shadow-md');
            } else {
                nav.classList.remove('shadow-md');
            }
        });

        // Simple Fade-in Observer
        const observerOptions = {
            threshold: 0.1
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('opacity-100', 'translate-y-0');
                    entry.target.classList.remove('opacity-0', 'translate-y-10');
                }
            });
        }, observerOptions);

        document.querySelectorAll('.bento-item').forEach(item => {
            item.classList.add('transition-all', 'duration-700', 'opacity-0', 'translate-y-10');
            observer.observe(item);
        });
    </script>
<script>
    const menuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    const mobileMenuPanel = document.getElementById('mobile-menu-panel');
    const mobileMenuClose = document.getElementById('mobile-menu-close');
    const mobileMenuBackdrop = document.getElementById('mobile-menu-backdrop');
    function openMenu() { mobileMenu.classList.remove('hidden'); setTimeout(() => { mobileMenuPanel.style.transform = 'translateX(0)'; }, 10); }
    function closeMenu() { mobileMenuPanel.style.transform = 'translateX(100%)'; setTimeout(() => { mobileMenu.classList.add('hidden'); }, 300); }
    menuBtn.addEventListener('click', openMenu);
    mobileMenuClose.addEventListener('click', closeMenu);
    mobileMenuBackdrop.addEventListener('click', closeMenu);
</script>
</body>
</html>
