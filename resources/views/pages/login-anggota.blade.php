<!DOCTYPE html>
<html class="light" lang="en">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Login Anggota Divisi | Coordination</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            "colors": {
                    "on-primary-fixed-variant": "#003ea8",
                    "tertiary-container": "#bc4800",
                    "on-secondary-fixed": "#002113",
                    "surface-dim": "#d8dadc",
                    "surface-container-low": "#f2f4f6",
                    "on-secondary-fixed-variant": "#005236",
                    "surface-container-high": "#e6e8ea",
                    "on-error": "#ffffff",
                    "secondary-container": "#6cf8bb",
                    "success": "#22C55E",
                    "on-surface": "#191c1e",
                    "text-primary": "#0F172A",
                    "secondary": "#006c49",
                    "secondary-fixed": "#6ffbbe",
                    "on-tertiary": "#ffffff",
                    "on-primary-container": "#eeefff",
                    "accent-blue": "#DBEAFE",
                    "tertiary": "#943700",
                    "on-background": "#191c1e",
                    "on-primary-fixed": "#00174b",
                    "background": "#f7f9fb",
                    "on-surface-variant": "#434655",
                    "inverse-on-surface": "#eff1f3",
                    "inverse-surface": "#2d3133",
                    "surface-bright": "#f7f9fb",
                    "surface-tint": "#0053db",
                    "surface-card": "#FFFFFF",
                    "secondary-fixed-dim": "#4edea3",
                    "outline-variant": "#c3c6d7",
                    "border-subtle": "#E2E8F0",
                    "surface-container-lowest": "#ffffff",
                    "surface": "#f7f9fb",
                    "surface-container": "#eceef0",
                    "on-tertiary-fixed-variant": "#7d2d00",
                    "primary-fixed": "#dbe1ff",
                    "on-secondary": "#ffffff",
                    "tertiary-fixed": "#ffdbcd",
                    "outline": "#737686",
                    "on-tertiary-fixed": "#360f00",
                    "surface-variant": "#e0e3e5",
                    "danger": "#EF4444",
                    "accent-emerald": "#D1FAE5",
                    "surface-container-highest": "#e0e3e5",
                    "on-tertiary-container": "#ffede6",
                    "tertiary-fixed-dim": "#ffb596",
                    "inverse-primary": "#b4c5ff",
                    "on-error-container": "#93000a",
                    "primary-fixed-dim": "#b4c5ff",
                    "on-secondary-container": "#00714d",
                    "primary-container": "#2563eb",
                    "primary": "#004ac6",
                    "error-container": "#ffdad6",
                    "text-secondary": "#64748B",
                    "on-primary": "#ffffff",
                    "warning": "#F59E0B",
                    "error": "#ba1a1a"
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
                    "container-max": "1440px",
                    "margin-mobile": "16px",
                    "stack-md": "16px",
                    "stack-lg": "32px",
                    "gutter": "24px",
                    "unit": "4px"
            },
            "fontFamily": {
                    "body-md": ["Inter"],
                    "body-lg": ["Inter"],
                    "label-sm": ["Inter"],
                    "headline-md": ["Inter"],
                    "headline-sm": ["Inter"],
                    "body-sm": ["Inter"],
                    "label-md": ["Inter"],
                    "headline-lg-mobile": ["Inter"],
                    "headline-lg": ["Inter"],
                    "display-lg": ["Inter"]
            },
            "fontSize": {
                    "body-md": ["16px", {"lineHeight": "1.5", "fontWeight": "500"}],
                    "body-lg": ["18px", {"lineHeight": "1.6", "fontWeight": "400"}],
                    "label-sm": ["12px", {"lineHeight": "1", "fontWeight": "600"}],
                    "headline-md": ["24px", {"lineHeight": "1.3", "fontWeight": "600"}],
                    "headline-sm": ["20px", {"lineHeight": "1.4", "fontWeight": "600"}],
                    "body-sm": ["14px", {"lineHeight": "1.5", "fontWeight": "400"}],
                    "label-md": ["14px", {"lineHeight": "1", "letterSpacing": "0.01em", "fontWeight": "600"}],
                    "headline-lg-mobile": ["24px", {"lineHeight": "1.3", "fontWeight": "700"}],
                    "headline-lg": ["32px", {"lineHeight": "1.25", "letterSpacing": "-0.01em", "fontWeight": "700"}],
                    "display-lg": ["48px", {"lineHeight": "1.2", "letterSpacing": "-0.02em", "fontWeight": "700"}]
            }
          },
        },
      }
    </script>
<style>
        @keyframes panRight {
            0% { background-position: 0% 50%; }
            100% { background-position: 100% 50%; }
        }
        .bg-pan-right {
            transform: scale(1.1);
            animation: panRight 25s ease-in-out infinite alternate;
        }
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f7f9fb;
            overflow-x: hidden;
        }
        .glass-panel {
            background: rgba(255, 255, 255, 0.4);
            backdrop-filter: blur(24px);
            -webkit-backdrop-filter: blur(24px);
            border: 1px solid rgba(255, 255, 255, 0.5);
            box-shadow: 0 12px 40px rgba(15, 23, 42, 0.08);
        }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .input-focus-ring:focus {
            outline: none;
            border-color: #2563eb;
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.15);
        }
        .technical-grid {
            background-image: radial-gradient(#cbd5e1 0.5px, transparent 0.5px);
            background-size: 24px 24px;
        }
        @keyframes subtle-float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }
        .float-animation {
            animation: subtle-float 6s ease-in-out infinite;
        }
    </style>
</head>
<body class="min-h-screen flex flex-col selection:bg-primary-fixed-dim selection:text-on-primary-fixed">
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

<!-- Main Content Area -->
<main class="flex-grow flex items-center justify-center pt-24 pb-12 px-margin-mobile md:px-margin-desktop technical-grid relative overflow-hidden">
<!-- Background Elements -->
<div class="absolute inset-0 w-full h-full bg-cover bg-no-repeat bg-pan-right" style="background-image: url('{{ asset('img/landing.png') }}'); z-index: -1;"></div>
<div class="absolute inset-0 w-full sm:w-2/3 lg:w-1/2" style="background: linear-gradient(90deg, rgba(255,255,255,0.2) 0%, rgba(255,255,255,0.15) 40%, transparent 100%); z-index: -1;"></div>
<div class="w-full max-w-[1200px] grid lg:grid-cols-2 gap-stack-lg items-center z-10">
<!-- Left Side: Branding & Info -->
<div class="hidden lg:flex flex-col gap-stack-lg pr-12">
<div>
<span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-accent-blue text-primary font-label-md text-label-md mb-4 border border-primary/10">
<span class="material-symbols-outlined text-[16px]" style="font-variation-settings: 'FILL' 1;">security</span>
                        Otorisasi Anggota Divisi
                    </span>
<h1 class="font-display-lg text-display-lg text-text-primary leading-tight mb-stack-md">
                        Portal <span class="text-primary">Operasional</span> Staf
                    </h1>
<p class="font-body-lg text-body-lg text-text-secondary max-w-lg">
                        Akses tugas pribadi, kirim kemajuan harian, dan unggah dokumentasi lapangan dengan aman.
                    </p>
</div>
<div class="grid grid-cols-2 gap-stack-md">
<div class="glass-panel p-stack-md rounded-xl">
<span class="material-symbols-outlined text-primary mb-2">analytics</span>
<h3 class="font-label-md text-label-md text-text-primary">Koordinasi Real-time</h3>
<p class="font-body-sm text-body-sm text-text-secondary">Sinkronisasi data latensi rendah lintas divisi.</p>
</div>
<div class="glass-panel p-stack-md rounded-xl">
<span class="material-symbols-outlined text-secondary mb-2">verified</span>
<h3 class="font-label-md text-label-md text-text-primary">Token Terenkripsi</h3>
<p class="font-body-sm text-body-sm text-text-secondary">Enkripsi kunci asimetris end-to-end untuk semua sesi.</p>
</div>
</div>
<div class="flex items-center gap-4 mt-4">
<div class="flex -space-x-3">
<img class="w-10 h-10 rounded-full border-2 border-white shadow-sm object-cover" data-alt="A professional headshot of a corporate executive woman in a sharp white blazer, set against a clean minimalist studio background, high-end photography, soft directional lighting." src="https://lh3.googleusercontent.com/aida-public/AB6AXuD_wcw8XIA7i-Tst7YzEF5QQoNYhGtj0ozuomNY_exvWfnut-uIBHMBlQicLHrgQn5ku5yWqp--MUZPvI4uGUYGdVeDBt86LdkO5bzDB3pMaR-vNhXSMvUgRFoatZVGD8wTvRIyi0aFJWe3HNYcXwuFawV4GdUFo3KGfmHtUkb_86Ywos0HZV5KoM0BR43bbZN2lQ3rjgGxk5UWLmF-ABFqwxZLaCJprz-dRdV_DgoLF_kxBMvBTg_xaz8Xg9Q7lLgadVAriwUBoWk"/>
<img class="w-10 h-10 rounded-full border-2 border-white shadow-sm object-cover" data-alt="A professional headshot of a senior technology officer with glasses, wearing a premium navy blue sweater, minimalist clean office environment background, natural daylight, professional corporate aesthetic." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCYxyymmDAzEzTX8Y2fmiCnEr8dSc4QQciU53YZhgHos8zwlHytpQdz0rzdEgZ_8GYNAGC4qoD8vMY85MZOtQ-jXcN_SNi_FpcruDvJC7RXQLVchJ-9Rb6flCxb3KURrUriYocPkvbS03nEL3TEW8PrlIh-KyNBA5csAMf62sWx9z454kMTUgy8_z8tpxKsOL7tsPo-fKJiNJ3u-a3msLO7X_DAXCteqyphmmV4A0NSVBYBwNF-FL1ZffSlp4LzFfZbtN3xsOKVp8Y"/>
<img class="w-10 h-10 rounded-full border-2 border-white shadow-sm object-cover" data-alt="A professional headshot of a young male division head in a modern minimalist suit, looking confident and focused, high-key lighting, bright light-mode studio setting." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDhSl0c1_Y9NO7F3JG1FFFvRFWEIU3XDqD45JdEAd7iXVAy3JBVo2pK3weJ9E7cAelRhGHEH8AohoDxooBOFhutFaX24Eh_G8hjybVCBuZwqMtzyaZtOtNW5t474J0BlYmwqi9fFvF01OK1_ROKqBbTEVCJ4-oE5aVyptRXZvh6rKJffnnGyPo-kjj3ukFD5FeW0IHZxo_Wt7h5Vm8L4Oo7yoxTB8SXLPfkWo63vsQ0cnSy61Cy_gSLjp6BKDbjC9JsOmjbZSk4wOQ"/>
<div class="w-10 h-10 rounded-full bg-surface-container-high border-2 border-white flex items-center justify-center text-[10px] font-bold text-text-secondary shadow-sm">+12</div>
</div>
<p class="font-body-sm text-body-sm text-text-secondary italic">Saat ini mengawasi sesi Komando Aktif.</p>
</div>
</div>
<!-- Right Side: Login Card -->
<div class="w-full max-w-[480px] mx-auto">
<div class="glass-panel p-stack-lg md:p-12 rounded-[24px] border-t-4 border-t-primary relative overflow-hidden">

<div class="flex items-center p-1.5 bg-slate-100 dark:bg-slate-800/50 rounded-xl mb-stack-lg relative z-20 shadow-inner">
    <a href="{{ route('login') }}" class="flex-1 py-2 text-center rounded-lg font-medium text-sm text-slate-500 hover:text-primary hover:bg-slate-200/50 dark:text-slate-400 dark:hover:bg-slate-700/50 transition-all duration-300">Event</a>
    <a href="{{ route('login.ketua') }}" class="flex-1 py-2 text-center rounded-lg font-medium text-sm text-slate-500 hover:text-primary hover:bg-slate-200/50 dark:text-slate-400 dark:hover:bg-slate-700/50 transition-all duration-300">Ketua Divisi</a>
    <a href="{{ route('login.anggota') }}" class="flex-1 py-2 text-center rounded-lg font-bold text-sm bg-white dark:bg-slate-700 text-primary dark:text-white shadow-[0_2px_8px_-2px_rgba(0,0,0,0.1)] transition-all duration-300">Anggota</a>
</div>



<div class="mb-stack-lg">
<h2 class="font-headline-lg text-headline-lg text-text-primary mb-2">Login Aman</h2>
<p class="font-body-md text-body-md text-text-secondary">Masukkan kredensial untuk memulai sesi aman.</p>
</div>
<form action="{{ route('dashboard') }}" class="flex flex-col gap-stack-md" id="secure-login-form">
<!-- Officer ID -->
<div class="flex flex-col gap-2">
<label class="font-label-md text-label-md text-text-primary flex items-center justify-between" for="officer-id">
                                ID Anggota
                                <span class="text-[10px] font-bold text-outline uppercase tracking-wider">Wajib</span>
</label>
<div class="relative group">
<span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-outline group-focus-within:text-primary transition-colors">badge</span>
<input class="w-full h-[48px] pl-12 pr-4 bg-surface-container-lowest border border-outline-variant rounded-lg font-body-md text-body-md text-text-primary placeholder:text-outline/50 input-focus-ring transition-all" id="officer-id" placeholder="ID-MEMBER-001" type="text" required/>
</div>
</div>
<!-- Kode Akses -->
<div class="flex flex-col gap-2">
<label class="font-label-md text-label-md text-text-primary flex items-center justify-between" for="access-keycode">
                                Kode Akses
                                <a class="text-primary hover:underline text-[12px]" href="#">Minta OTP</a>
</label>
<div class="relative group">
<span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-outline group-focus-within:text-primary transition-colors">lock</span>
<input class="w-full h-[48px] pl-12 pr-4 bg-surface-container-lowest border border-outline-variant rounded-lg font-body-md text-body-md text-text-primary placeholder:text-outline/50 input-focus-ring transition-all" id="access-keycode" placeholder="••••••••••••" type="password" required/>
</div>
</div>
<!-- Event Token -->
<div class="flex flex-col gap-2">
<label class="font-label-md text-label-md text-text-primary flex items-center justify-between" for="event-token">
                                Specific Event Token
                                <span class="material-symbols-outlined text-[14px] text-outline cursor-help" title="The unique hash provided for your specific active event assignment.">help_outline</span>
</label>
<div class="relative group">
<span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-outline group-focus-within:text-primary transition-colors">token</span>
<input class="w-full h-[48px] pl-12 pr-4 bg-surface-container-lowest border border-outline-variant rounded-lg font-body-md text-body-md text-text-primary placeholder:text-outline/50 input-focus-ring transition-all uppercase" id="event-token" placeholder="EVT-0XF382-77" type="text" required/>
</div>
</div>
<div class="flex items-center gap-2 py-2">
<input class="w-4 h-4 rounded border-outline-variant text-primary focus:ring-primary/20" id="biometric" type="checkbox"/>
<label class="font-body-sm text-body-sm text-text-secondary" for="biometric">Enable Biometric Secondary Layer</label>
</div>
<button class="mt-4 w-full h-[52px] bg-primary text-on-primary font-bold rounded-lg hover:opacity-90 active:scale-[0.98] transition-all flex items-center justify-center gap-2 shadow-lg shadow-primary/20" type="submit">
<span class="material-symbols-outlined">verified_user</span>
                            Authorize Access
                        </button>
</form>
<div class="mt-stack-lg pt-stack-lg border-t border-outline-variant/30 text-center">
<p class="font-body-sm text-body-sm text-text-secondary">
                            Access Problems? Contact <a class="text-primary font-semibold hover:underline" href="#">Security Division Hub</a>.
                        </p>
</div>
</div>
<!-- Subtle Status Indicator Below Card -->
<div class="mt-stack-md flex items-center justify-center gap-6">
<div class="flex items-center gap-1.5">
<div class="w-2 h-2 rounded-full bg-success"></div>
<span class="font-label-sm text-label-sm text-text-secondary uppercase">System Operational</span>
</div>
<div class="flex items-center gap-1.5">
<div class="w-2 h-2 rounded-full bg-outline-variant"></div>
<span class="font-label-sm text-label-sm text-text-secondary uppercase">Last Scan: 2m ago</span>
</div>
</div>
</div>
</div>
</main>
<!-- Footer (Shared Component Reference) -->
<footer class="bg-surface-container-lowest border-t border-outline-variant">
<div class="max-w-[1536px] mx-auto grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-lg px-gutter py-stack-lg">
<div class="col-span-2">
<span class="text-headline-sm font-headline-sm font-bold text-on-surface">Coordination AI</span>
<p class="mt-2 font-caption text-caption text-on-surface-variant max-w-xs">Empowering executive coordination with high-precision AI and military-grade security infrastructure.</p>
</div>
<div class="flex flex-col gap-2">
<span class="text-primary font-semibold font-caption text-caption">Product</span>
<a class="text-on-surface-variant hover:text-primary transition-all duration-150 hover:underline font-caption text-caption" href="#">Dashboard</a>
<a class="text-on-surface-variant hover:text-primary transition-all duration-150 hover:underline font-caption text-caption" href="#">Security</a>
<a class="text-on-surface-variant hover:text-primary transition-all duration-150 hover:underline font-caption text-caption" href="#">Integrations</a>
</div>
<div class="flex flex-col gap-2">
<span class="text-primary font-semibold font-caption text-caption">Company</span>
<a class="text-on-surface-variant hover:text-primary transition-all duration-150 hover:underline font-caption text-caption" href="#">About Us</a>
<a class="text-on-surface-variant hover:text-primary transition-all duration-150 hover:underline font-caption text-caption" href="#">Compliance</a>
<a class="text-on-surface-variant hover:text-primary transition-all duration-150 hover:underline font-caption text-caption" href="#">Careers</a>
</div>
<div class="flex flex-col gap-2">
<span class="text-primary font-semibold font-caption text-caption">Legal</span>
<a class="text-on-surface-variant hover:text-primary transition-all duration-150 hover:underline font-caption text-caption" href="#">Privacy Policy</a>
<a class="text-on-surface-variant hover:text-primary transition-all duration-150 hover:underline font-caption text-caption" href="#">Terms of Service</a>
<a class="text-on-surface-variant hover:text-primary transition-all duration-150 hover:underline font-caption text-caption" href="#">SLA</a>
</div>
<div class="flex flex-col gap-2">
<span class="text-primary font-semibold font-caption text-caption">Social</span>
<a class="text-on-surface-variant hover:text-primary transition-all duration-150 hover:underline font-caption text-caption" href="#">Twitter</a>
<a class="text-on-surface-variant hover:text-primary transition-all duration-150 hover:underline font-caption text-caption" href="#">LinkedIn</a>
</div>
</div>
<div class="border-t border-outline-variant/30 py-4 px-gutter text-center">
<p class="font-caption text-caption text-on-surface-variant">© 2024 Coordination AI. All rights reserved. Managed by SecureSystems Intl.</p>
</div>
</footer>
<!-- Interactive Micro-Interactions Script -->
<script>
        document.getElementById('secure-login-form').addEventListener('submit', function(e) {
            e.preventDefault();
            const btn = this.querySelector('button');
            const originalContent = btn.innerHTML;
            
            btn.disabled = true;
            btn.innerHTML = `
                <svg class="animate-spin h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                </svg>
                Initialising Secure Session...
            `;

            // Simulating authentication delay
            setTimeout(() => {
                btn.classList.replace('bg-primary', 'bg-success');
                btn.innerHTML = `
                    <span class="material-symbols-outlined">check_circle</span>
                    Access Granted
                `;
                
                // Visual feedback of success
                document.body.style.transition = 'opacity 0.5s ease-in-out';
                setTimeout(() => {
                    // alert('Session Authorized. Welcome, Division Head.');
                    btn.disabled = false;
                    btn.innerHTML = originalContent;
                    btn.classList.replace('bg-success', 'bg-primary');
                    window.location.href = "{{ route('dashboard') }}";
                }, 500);
            }, 2000);
        });

        // Focus field logic
        const inputs = document.querySelectorAll('input');
        inputs.forEach(input => {
            input.addEventListener('focus', () => {
                input.parentElement.classList.add('scale-[1.01]');
            });
            input.addEventListener('blur', () => {
                input.parentElement.classList.remove('scale-[1.01]');
            });
        });
    </script>
</body></html>
