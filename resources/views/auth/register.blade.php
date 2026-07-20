<!DOCTYPE html>
<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Register | Coordination</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet"/>
<!-- Tailwind Configuration -->
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
                    "headline-lg": ["Inter"],
                    "display-lg": ["Inter"]
            }
          }
        }
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
      .material-symbols-outlined {
        font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
      }
      .glass-effect {
        backdrop-filter: blur(24px);
        -webkit-backdrop-filter: blur(24px);
        background: rgba(255, 255, 255, 0.4);
        border: none;
        box-shadow: none;
      }
      .step-active {
        @apply border-primary-container text-primary-container;
      }
      .step-inactive {
        @apply border-outline-variant text-black;
      }
    </style>
</head>
<body class="bg-surface font-body-md text-on-surface min-h-screen flex flex-col">
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
            <a class="relative text-black hover:text-slate-900 transition-colors text-sm font-medium group" href="{{ route('solutions') }}">
                Solusi
                <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-primary rounded-full transition-all duration-300 group-hover:w-full"></span>
            </a>
            <a class="relative text-black hover:text-slate-900 transition-colors text-sm font-medium group" href="{{ route('pricing') }}">
                Harga
                <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-primary rounded-full transition-all duration-300 group-hover:w-full"></span>
            </a>
            <a class="relative text-black hover:text-slate-900 transition-colors text-sm font-medium group" href="{{ route('tentang') }}">
                Tentang
                <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-primary rounded-full transition-all duration-300 group-hover:w-full"></span>
            </a>
            <a class="relative text-black hover:text-slate-900 transition-colors text-sm font-medium group" href="{{ route('kontak') }}">
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
                <span class="material-symbols-outlined text-black">close</span>
            </button>
        </div>
        <nav class="flex flex-col gap-1">
            <a class="text-slate-900 font-semibold text-base py-3 px-4 rounded-xl bg-primary/5" href="{{ route('fitur') }}">Fitur</a>
            <a class="text-black font-medium text-base py-3 px-4 rounded-xl hover:bg-slate-50 transition-colors" href="{{ route('solutions') }}">Solusi</a>
            <a class="text-black font-medium text-base py-3 px-4 rounded-xl hover:bg-slate-50 transition-colors" href="{{ route('pricing') }}">Harga</a>
            <a class="text-black font-medium text-base py-3 px-4 rounded-xl hover:bg-slate-50 transition-colors" href="{{ route('tentang') }}">Tentang</a>
            <a class="text-black font-medium text-base py-3 px-4 rounded-xl hover:bg-slate-50 transition-colors" href="{{ route('kontak') }}">Kontak</a>
        </nav>
        <div class="mt-auto flex flex-col gap-3">
            <a href="{{ route('login') }}" class="text-center text-black font-medium py-3 px-4 rounded-full border border-slate-200 hover:bg-slate-50 transition-colors">Login</a>
            <a href="{{ route('register') }}" class="text-center bg-primary text-white py-3 px-4 rounded-full font-bold ">Get Started</a>
        </div>
    </div>
</div>
<main class="flex-grow flex items-center justify-center pt-24 pb-12 px-margin-mobile md:px-margin-desktop relative overflow-hidden">
<!-- Background Elements -->
<div class="absolute inset-0 w-full h-full bg-cover bg-no-repeat bg-pan-right" style="background-image: url('{{ asset('img/landing.png') }}'); z-index: -1;"></div>
<div class="absolute inset-0 w-full" style="background: linear-gradient(90deg, rgba(255,255,255,0.7) 0%, rgba(255,255,255,0.3) 100%); z-index: -1;"></div>
<div class="w-full max-w-[1100px] grid grid-cols-1 lg:grid-cols-2 gap-stack-lg items-center">
<!-- Left Side: Form Content -->
<div class="order-2 lg:order-1">
<div class="glass-effect p-stack-lg md:p-12 rounded-xl  relative overflow-hidden">
<!-- Progress Indicator -->
<nav aria-label="Progress" class="mb-stack-lg">
<ol class="flex items-center space-x-4" role="list">
<li class="flex items-center cursor-pointer" onclick="goToStep(1)">
<span id="node-1" class="flex items-center justify-center w-8 h-8 rounded-full border-2 border-primary-container bg-primary-container text-white font-label-md text-label-md transition-colors">1</span>
<span class="ml-2 font-label-md text-label-md text-primary" id="text-1">Akun</span>
</li>
<li class="flex items-center cursor-pointer" onclick="goToStep(2)">
<div class="w-8 h-[2px] bg-outline-variant mx-2" id="line-1"></div>
<span id="node-2" class="flex items-center justify-center w-8 h-8 rounded-full border-2 border-outline-variant text-black font-label-md text-label-md transition-colors">2</span>
<span class="ml-2 font-label-md text-label-md text-black" id="text-2">Event</span>
</li>
<li class="flex items-center cursor-pointer" onclick="goToStep(3)">
<div class="w-8 h-[2px] bg-outline-variant mx-2" id="line-2"></div>
<span id="node-3" class="flex items-center justify-center w-8 h-8 rounded-full border-2 border-outline-variant text-black font-label-md text-label-md transition-colors">3</span>
<span class="ml-2 font-label-md text-label-md text-black" id="text-3">Selesai</span>
</li>
</ol>
</nav>

<form method="POST" action="{{ route('register') }}" id="registrationForm">
@csrf

<!-- STEP 1: Akun -->
<div id="step-1" class="transition-all duration-500 opacity-100 translate-x-0 block">
    <div class="mb-stack-lg">
        <h1 class="font-headline-lg text-headline-lg text-text-primary mb-2">Buat profil profesional Anda</h1>
        <p class="font-body-md text-body-md text-black">Mulai kelola event penting dengan presisi berbasis AI.</p>
    </div>
    
    <div class="space-y-stack-md">
        <div class="space-y-1">
            <label class="font-label-md text-label-md text-black" for="name">Nama Lengkap</label>
            <input class="w-full h-11 px-4 bg-surface-container-lowest border border-border-subtle rounded-lg focus:ring-2 focus:ring-primary-container focus:border-primary-container transition-all outline-none" id="name" name="name" placeholder="Budi Santoso" type="text" required value="{{ old('name') }}"/>
            @error('name')
            <p class="text-[11px] text-danger mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="space-y-1">
            <label class="font-label-md text-label-md text-black" for="email">Email Bisnis</label>
            <input class="w-full h-11 px-4 bg-surface-container-lowest border border-border-subtle rounded-lg focus:ring-2 focus:ring-primary-container focus:border-primary-container transition-all outline-none" id="email" name="email" placeholder="budi@perusahaan.com" type="email" required value="{{ old('email') }}"/>
            @error('email')
            <p class="text-[11px] text-danger mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="space-y-1">
            <label class="font-label-md text-label-md text-black" for="password">Kata Sandi</label>
            <div class="relative">
                <input class="w-full h-11 px-4 bg-surface-container-lowest border border-border-subtle rounded-lg focus:ring-2 focus:ring-primary-container focus:border-primary-container transition-all outline-none" id="password" name="password" placeholder="••••••••" type="password" required/>
                <button class="absolute right-3 top-1/2 -translate-y-1/2 text-black pass-toggle" type="button">
                    <span class="material-symbols-outlined text-sm">visibility</span>
                </button>
            </div>
            @error('password')
            <p class="text-[11px] text-danger mt-1">{{ $message }}</p>
            @else
            <p class="text-[11px] text-black mt-1">Minimal 8 karakter dengan setidaknya satu angka dan simbol.</p>
            @enderror
        </div>

        <div class="space-y-1">
            <label class="font-label-md text-label-md text-black" for="password_confirmation">Konfirmasi Kata Sandi</label>
            <div class="relative">
                <input class="w-full h-11 px-4 bg-surface-container-lowest border border-border-subtle rounded-lg focus:ring-2 focus:ring-primary-container focus:border-primary-container transition-all outline-none" id="password_confirmation" name="password_confirmation" placeholder="••••••••" type="password" required/>
            </div>
            <p id="password_match_msg" class="text-[11px] text-danger mt-1 hidden">Kata sandi dan konfirmasi tidak cocok!</p>
        </div>

        <div class="pt-stack-md">
            <button onclick="goToStep(2)" class="w-full h-12 bg-primary-container text-white font-label-md text-label-md rounded-lg  hover:opacity-90 active:scale-[0.98] transition-all flex items-center justify-center gap-2" type="button">
                Lanjutkan ke Detail Event
                <span class="material-symbols-outlined text-sm">arrow_forward</span>
            </button>
        </div>
        <div class="flex items-center gap-2 py-2">
            <input class="rounded border-border-subtle text-primary focus:ring-primary" id="terms" type="checkbox" required/>
            <label class="font-body-sm text-body-sm text-black" for="terms">
                Saya setuju dengan <a class="text-primary hover:underline" href="#">Syarat Layanan</a> dan <a class="text-primary hover:underline" href="#">Kebijakan Privasi</a>.
            </label>
        </div>
    </div>
</div>

<!-- STEP 2: Event -->
<div id="step-2" class="transition-all duration-500 opacity-0 translate-x-20 hidden">
    <div class="mb-stack-lg flex justify-between items-start">
        <div>
            <h1 class="font-headline-lg text-headline-lg text-text-primary mb-2">Detail Event</h1>
            <p class="font-body-md text-body-md text-black">Lengkapi informasi dasar mengenai event Anda.</p>
        </div>
        <button class="text-primary font-label-md text-label-md hover:underline" onclick="goToStep(3)" type="button">Lewati</button>
    </div>
    
    <div class="space-y-stack-md">
        <div class="space-y-1">
            <label class="font-label-md text-label-md text-black">Nama Event</label>
            <input class="w-full h-11 px-4 bg-surface-container-lowest border border-border-subtle rounded-lg focus:ring-2 focus:ring-primary-container focus:border-primary-container transition-all outline-none" name="event_name" placeholder="contoh: Festival Musik Indonesia 2027" type="text"/>
        </div>
        <div class="space-y-1">
            <label class="font-label-md text-label-md text-black">Budget Perkiraan</label>
            <input id="event_budget" class="w-full h-11 px-4 bg-surface-container-lowest border border-border-subtle rounded-lg focus:ring-2 focus:ring-primary-container focus:border-primary-container transition-all outline-none" name="event_budget" placeholder="contoh: 500.000.000" type="text"/>
        </div>
        <div class="grid grid-cols-2 gap-stack-md">
            <div class="space-y-1">
                <label class="font-label-md text-label-md text-black">Tanggal Mulai</label>
                <input class="w-full h-11 px-4 bg-surface-container-lowest border border-border-subtle rounded-lg focus:ring-2 focus:ring-primary-container focus:border-primary-container transition-all outline-none" name="event_start" type="date"/>
            </div>
            <div class="space-y-1">
                <label class="font-label-md text-label-md text-black">Hari H Event</label>
                <input class="w-full h-11 px-4 bg-surface-container-lowest border border-border-subtle rounded-lg focus:ring-2 focus:ring-primary-container focus:border-primary-container transition-all outline-none" name="event_dday" type="date"/>
            </div>
        </div>
        <div class="space-y-1">
            <label class="font-label-md text-label-md text-black">Target Penonton</label>
            <input class="w-full h-11 px-4 bg-surface-container-lowest border border-border-subtle rounded-lg focus:ring-2 focus:ring-primary-container focus:border-primary-container transition-all outline-none" name="event_audience" placeholder="contoh: 5000 orang" type="text"/>
        </div>

        <div class="pt-stack-md flex gap-4">
            <button onclick="goToStep(1)" class="flex-1 h-12 border border-border-subtle bg-surface-container-lowest text-text-primary font-label-md text-label-md rounded-lg  hover:bg-surface-container-low active:scale-[0.98] transition-all" type="button">
                Kembali
            </button>
            <button onclick="goToStep(3)" class="flex-[2] h-12 bg-primary-container text-white font-label-md text-label-md rounded-lg  hover:opacity-90 active:scale-[0.98] transition-all flex items-center justify-center gap-2" type="button">
                Langkah Terakhir
                <span class="material-symbols-outlined text-sm">arrow_forward</span>
            </button>
        </div>
    </div>
</div>

<!-- STEP 3: Selesai -->
<div id="step-3" class="transition-all duration-500 opacity-0 translate-x-20 hidden text-center py-8">
    <div class="mb-stack-lg">
        <div class="w-24 h-24 bg-secondary-container text-on-secondary-container rounded-full flex items-center justify-center mx-auto mb-stack-md">
            <span class="material-symbols-outlined text-5xl" style="font-variation-settings: 'FILL' 1;">check_circle</span>
        </div>
        <h3 class="font-headline-lg text-headline-lg text-text-primary mb-2">Pendaftaran Selesai!</h3>
        <p class="font-body-md text-body-md text-black px-8">Event Anda telah berhasil dibuat. Ruang kerja (workspace) untuk event ini sudah siap digunakan oleh seluruh tim.</p>
    </div>
    <div class="pt-stack-md">
        <button class="w-full h-12 bg-primary text-white font-label-md text-label-md rounded-lg  hover:opacity-90 active:scale-[0.98] transition-all" type="submit">
            Daftar & Buka Dasbor Operasional
        </button>
    </div>
</div>
</form>
</div>
<!-- Trusted By Section -->
<div class="mt-stack-lg">
<p class="font-label-sm text-label-sm text-black uppercase tracking-widest text-center lg:text-left mb-stack-md">Dipercaya oleh Perusahaan Terkemuka</p>
<div class="flex flex-wrap justify-center lg:justify-start items-center gap-stack-lg opacity-40 grayscale hover:grayscale-0 transition-all duration-500">
<div class="h-6 w-24 bg-on-surface-variant/20 rounded"></div>
<div class="h-6 w-32 bg-on-surface-variant/20 rounded"></div>
<div class="h-6 w-28 bg-on-surface-variant/20 rounded"></div>
<div class="h-6 w-20 bg-on-surface-variant/20 rounded"></div>
</div>
</div>
</div>
<!-- Right Side: Marketing/Visual Panel -->
<div class="hidden lg:block order-1 lg:order-2 pl-stack-lg">
<div class="relative aspect-square rounded-3xl overflow-hidden shadow-2xl">
<div class="absolute inset-0 z-10 bg-primary/40"></div>
<img class="w-full h-full object-cover" data-alt="A professional high-key photography of a modern, sleek corporate event space with clean lines, minimalist furniture, and large windows overlooking a city skyline. The lighting is bright and airy, matching a premium enterprise SaaS brand aesthetic. Several high-end tablets and laptops are visible on tables, displaying clean data dashboards with blue and white color schemes. The atmosphere is sophisticated and organized, implying elite coordination and planning capabilities." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAbAJLtZm9e6hu-YfCNU7-u1yhgKAfy_Z8Ep2NPsu2NEfZnG9Z9Qct9WIqGBgZOUpYOTcVR3YRury8TpmgIr5QkbaJOBBrzGUDmXO1ru1TGp5RpZni1FSGY7F6kiJDCxu4pw6fro1-zLNF9MzfDqp-gP369fsTWlZhzSNU3uJfMnySbwWU_JgrCUbrynDKX1OUYMFT-IN0iV8okJQRlZMhH7QqlzvMPvJwuSRXCcgvcbRZJt9g0al5nIQ3MLICzy8tywj7yHW8Nzcw"/>
<!-- Floating Testimonial Card -->
<div class="absolute bottom-8 left-8 right-8 z-20 glass-effect p-6 rounded-2xl border border-white/20 shadow-xl">
<div class="flex items-center gap-1 text-warning mb-2">
<span class="material-symbols-outlined fill" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined fill" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined fill" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined fill" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined fill" style="font-variation-settings: 'FILL' 1;">star</span>
</div>
<p class="font-body-md text-body-md text-text-primary italic mb-4">"Coordination telah mengubah cara kami mengelola pertemuan global. Wawasan AI mengurangi waktu perencanaan kami hingga 40%."</p>
<div class="flex items-center gap-3">
<div class="w-10 h-10 rounded-full bg-primary-fixed flex items-center justify-center text-primary font-bold">SM</div>
<div>
<p class="font-label-md text-label-md text-text-primary">Sarah Mitchell</p>
<p class="font-caption text-[12px] text-black">Head of Global Events, TechCorp</p>
</div>
</div>
</div>
</div>
<div class="mt-stack-lg grid grid-cols-2 gap-4">
<div class="flex items-start gap-3">
<span class="material-symbols-outlined text-primary-container bg-accent-blue p-2 rounded-lg">verified_user</span>
<div>
<p class="font-label-md text-label-md text-text-primary">Keamanan Setingkat Bank</p>
<p class="text-[12px] text-black">Sesuai ISO 27001 & GDPR</p>
</div>
</div>
<div class="flex items-start gap-3">
<span class="material-symbols-outlined text-secondary bg-accent-emerald p-2 rounded-lg">bolt</span>
<div>
<p class="font-label-md text-label-md text-text-primary">Pengaturan Instan</p>
<p class="text-[12px] text-black">Siap di bawah 2 menit</p>
</div>
</div>
</div>
</div>
</div>
</main>
<!-- Footer (Shell Logic: Simplified for Registration) -->
<footer class="w-full bg-surface-container-lowest border-t border-outline-variant/30 mt-auto">
<div class="max-w-[1536px] mx-auto px-gutter py-8 flex flex-col md:flex-row justify-between items-center gap-4">
<p class="font-caption text-caption text-black">© 2024 Coordination AI. All rights reserved.</p>
<div class="flex items-center gap-6">
<a class="font-caption text-caption text-black hover:text-primary transition-colors" href="#">Privacy Policy</a>
<a class="font-caption text-caption text-black hover:text-primary transition-colors" href="#">Terms of Service</a>
<a class="font-caption text-caption text-black hover:text-primary transition-colors" href="#">Help Center</a>
</div>
</div>
</footer>
<script>
        function goToStep(step) {
            const step1 = document.getElementById('step-1');
            const step2 = document.getElementById('step-2');
            const step3 = document.getElementById('step-3');
            
            // Validate step 1 if trying to go to step 2 or 3
            if (step > 1) {
                const name = document.getElementById('name');
                const email = document.getElementById('email');
                const password = document.getElementById('password');
                const terms = document.getElementById('terms');
                
                if(!name.reportValidity() || !email.reportValidity() || !password.reportValidity() || !terms.reportValidity()) {
                    return;
                }
            }

            [step1, step2, step3].forEach(s => {
                s.classList.add('hidden');
                s.classList.remove('opacity-100', 'translate-x-0', 'block');
                s.classList.add('opacity-0', 'translate-x-20');
            });

            const current = document.getElementById('step-' + step);
            current.classList.remove('hidden');
            current.classList.add('block');
            // Allow DOM to update display:block before starting opacity transition
            setTimeout(() => {
                current.classList.remove('opacity-0', 'translate-x-20');
                current.classList.add('opacity-100', 'translate-x-0');
            }, 50);

            // Update Nodes
            const n1 = document.getElementById('node-1');
            const n2 = document.getElementById('node-2');
            const n3 = document.getElementById('node-3');
            const l1 = document.getElementById('line-1');
            const l2 = document.getElementById('line-2');
            const t2 = document.getElementById('text-2');
            const t3 = document.getElementById('text-3');

            if (step === 1) {
                n2.className = 'flex items-center justify-center w-8 h-8 rounded-full border-2 border-outline-variant text-black font-label-md text-label-md transition-colors';
                t2.className = 'ml-2 font-label-md text-label-md text-black';
                l1.className = 'w-8 h-[2px] bg-outline-variant mx-2 transition-colors';
            } else if (step === 2) {
                n2.className = 'flex items-center justify-center w-8 h-8 rounded-full border-2 border-primary-container bg-primary-container text-white font-label-md text-label-md transition-colors';
                t2.className = 'ml-2 font-label-md text-label-md text-primary';
                l1.className = 'w-8 h-[2px] bg-primary mx-2 transition-colors';
                n3.className = 'flex items-center justify-center w-8 h-8 rounded-full border-2 border-outline-variant text-black font-label-md text-label-md transition-colors';
                t3.className = 'ml-2 font-label-md text-label-md text-black';
                l2.className = 'w-8 h-[2px] bg-outline-variant mx-2 transition-colors';
            } else if (step === 3) {
                n2.className = 'flex items-center justify-center w-8 h-8 rounded-full border-2 border-primary-container bg-primary-container text-white font-label-md text-label-md transition-colors';
                t2.className = 'ml-2 font-label-md text-label-md text-primary';
                l1.className = 'w-8 h-[2px] bg-primary mx-2 transition-colors';
                n3.className = 'flex items-center justify-center w-8 h-8 rounded-full border-2 border-primary-container bg-primary-container text-white font-label-md text-label-md transition-colors';
                t3.className = 'ml-2 font-label-md text-label-md text-primary';
                l2.className = 'w-8 h-[2px] bg-primary mx-2 transition-colors';
            }
        }

        const form = document.getElementById('registrationForm');
        form.addEventListener('submit', (e) => {
            const btn = e.target.querySelector('button[type="submit"]');
            btn.innerHTML = '<span class="material-symbols-outlined text-sm animate-spin">progress_activity</span> Memproses...';
            
            // Save event dates for dashboard usage
            const evtStart = document.querySelector('input[name="event_start"]');
            const evtDday = document.querySelector('input[name="event_dday"]');
            if (evtStart && evtStart.value) localStorage.setItem('master_event_start', evtStart.value);
            if (evtDday && evtDday.value) localStorage.setItem('master_event_dday', evtDday.value);
            
            // Clear storage on submit
            Object.keys(sessionStorage).forEach(key => {
                if(key.startsWith('register_')) sessionStorage.removeItem(key);
            });
        });

        const passToggles = document.querySelectorAll('.pass-toggle');
        passToggles.forEach(toggle => {
            toggle.addEventListener('click', (e) => {
                const passInput = e.currentTarget.previousElementSibling;
                const isPass = passInput.type === 'password';
                passInput.type = isPass ? 'text' : 'password';
                e.currentTarget.querySelector('span').innerText = isPass ? 'visibility_off' : 'visibility';
            });
        });

        // Format Budget Perkiraan with thousands separators
        const budgetInput = document.getElementById('event_budget');
        if (budgetInput) {
            budgetInput.addEventListener('input', function(e) {
                // Remove any characters that aren't digits
                let val = this.value.replace(/\D/g, '');
                
                if (val) {
                    // Format number with dots as thousands separators
                    val = parseInt(val, 10).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
                    this.value = val;
                } else {
                    this.value = '';
                }
            });
        }

        // Password confirmation logic
        const pwInput = document.getElementById('password');
        const pwConfirmInput = document.getElementById('password_confirmation');
        const pwMatchMsg = document.getElementById('password_match_msg');

        function checkPasswordMatch() {
            if (pwConfirmInput.value === '') {
                pwMatchMsg.classList.add('hidden');
                return;
            }
            if (pwInput.value !== pwConfirmInput.value) {
                pwMatchMsg.classList.remove('hidden');
            } else {
                pwMatchMsg.classList.add('hidden');
            }
        }
        
        if (pwInput && pwConfirmInput) {
            pwInput.addEventListener('input', checkPasswordMatch);
            pwConfirmInput.addEventListener('input', checkPasswordMatch);
        }

        // Form persistence
        const allInputs = document.querySelectorAll('input:not([type="password"])');
        allInputs.forEach(input => {
            const inputName = input.name || input.id;
            if(!inputName || inputName === '_token') return;
            
            const savedValue = sessionStorage.getItem('register_' + inputName);
            if (savedValue !== null) {
                if (input.type === 'checkbox' || input.type === 'radio') {
                    input.checked = savedValue === 'true';
                } else {
                    input.value = savedValue;
                }
            }
            
            input.addEventListener('input', function() {
                if (input.type === 'checkbox' || input.type === 'radio') {
                    sessionStorage.setItem('register_' + inputName, input.checked);
                } else {
                    sessionStorage.setItem('register_' + inputName, input.value);
                }
            });
        });
    </script>
</body></html>
