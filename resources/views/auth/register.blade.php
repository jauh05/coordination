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
      .material-symbols-outlined {
        font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
      }
      .glass-effect {
        backdrop-filter: blur(20px);
        background: rgba(255, 255, 255, 0.8);
      }
      .step-active {
        @apply border-primary-container text-primary-container;
      }
      .step-inactive {
        @apply border-outline-variant text-on-surface-variant;
      }
    </style>
</head>
<body class="bg-surface font-body-md text-on-surface min-h-screen flex flex-col">
<!-- TopNavBar -->
<header class="fixed top-0 w-full bg-white/70 dark:bg-slate-900/70 backdrop-blur-2xl border-b border-slate-200/50 dark:border-slate-700/50 shadow-sm z-50 transition-all duration-300">
    <div class="flex justify-between items-center px-6 py-4 max-w-[1536px] mx-auto">
        <a href="/" class="text-title-md font-title-md font-bold flex items-center gap-2 group">
            <div class="bg-gradient-to-tr from-primary to-blue-400 text-white p-1.5 rounded-lg group-hover:scale-105 transition-transform shadow-md">
                <span class="material-symbols-outlined text-[20px] block">hub</span>
            </div>
            <span class="bg-clip-text text-transparent bg-gradient-to-r from-primary to-blue-600 dark:from-blue-400 dark:to-blue-200 tracking-tight">Coordination</span>
        </a>
        <nav class="hidden md:flex gap-8">
            <a class="relative text-primary font-semibold font-body-md text-body-md group" href="#">
                Features
                <span class="absolute -bottom-1 left-0 w-full h-0.5 bg-primary rounded-full"></span>
            </a>
            <a class="relative text-on-surface-variant hover:text-primary transition-colors font-body-md text-body-md font-medium group" href="#">
                Solutions
                <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-primary rounded-full transition-all duration-300 group-hover:w-full"></span>
            </a>
            <a class="relative text-on-surface-variant hover:text-primary transition-colors font-body-md text-body-md font-medium group" href="#">
                Pricing
                <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-primary rounded-full transition-all duration-300 group-hover:w-full"></span>
            </a>
        </nav>
        <div class="flex items-center gap-2 md:gap-4">
            <a href="{{ route('login') }}" class="text-on-surface-variant font-medium hover:text-primary px-3 py-2 transition-all duration-200 hover:bg-primary/5 rounded-lg active:scale-95 inline-block text-center text-[13px] md:text-base whitespace-nowrap">Login</a>
            <a href="{{ route('register') }}" class="bg-gradient-to-r from-primary to-blue-600 text-on-primary px-4 md:px-6 py-1.5 md:py-2 rounded-full font-bold hover:shadow-lg hover:shadow-primary/30 hover:-translate-y-0.5 active:scale-95 transition-all duration-200 inline-block text-center border border-transparent hover:border-white/20 whitespace-nowrap text-[13px] md:text-base">Get Started</a>
        </div>
    </div>
</header>
<main class="flex-grow flex items-center justify-center pt-24 pb-12 px-margin-mobile md:px-margin-desktop">
<div class="w-full max-w-[1100px] grid grid-cols-1 lg:grid-cols-2 gap-stack-lg items-center">
<!-- Left Side: Form Content -->
<div class="order-2 lg:order-1">
<div class="bg-surface-card p-stack-lg md:p-12 rounded-xl shadow-sm border border-border-subtle relative overflow-hidden">
<!-- Progress Indicator -->
<nav aria-label="Progress" class="mb-stack-lg">
<ol class="flex items-center space-x-4" role="list">
<li class="flex items-center">
<span class="flex items-center justify-center w-8 h-8 rounded-full border-2 border-primary-container bg-primary-container text-white font-label-md text-label-md">1</span>
<span class="ml-2 font-label-md text-label-md text-primary">Akun</span>
</li>
<li class="flex items-center">
<div class="w-8 h-[2px] bg-outline-variant mx-2"></div>
<span class="flex items-center justify-center w-8 h-8 rounded-full border-2 border-outline-variant text-on-surface-variant font-label-md text-label-md">2</span>
<span class="ml-2 font-label-md text-label-md text-on-surface-variant">Event</span>
</li>
<li class="flex items-center">
<div class="w-8 h-[2px] bg-outline-variant mx-2"></div>
<span class="flex items-center justify-center w-8 h-8 rounded-full border-2 border-outline-variant text-on-surface-variant font-label-md text-label-md">3</span>
<span class="ml-2 font-label-md text-label-md text-on-surface-variant">Selesai</span>
</li>
</ol>
</nav>
<div class="mb-stack-lg">
<h1 class="font-headline-lg text-headline-lg text-text-primary mb-2">Buat profil profesional Anda</h1>
<p class="font-body-md text-body-md text-text-secondary">Mulai kelola event penting dengan presisi berbasis AI.</p>
</div>
<form method="POST" action="{{ route('register') }}" class="space-y-stack-md" id="registrationForm">
@csrf
<div class="grid grid-cols-1 md:grid-cols-2 gap-stack-md">
<div class="space-y-1">
<label class="font-label-md text-label-md text-on-surface-variant" for="first_name">Nama Depan</label>
<input class="w-full h-11 px-4 bg-surface-container-lowest border border-border-subtle rounded-lg focus:ring-2 focus:ring-primary-container focus:border-primary-container transition-all outline-none" id="first_name" name="first_name" placeholder="Budi" type="text" required/>
</div>
<div class="space-y-1">
<label class="font-label-md text-label-md text-on-surface-variant" for="last_name">Nama Belakang</label>
<input class="w-full h-11 px-4 bg-surface-container-lowest border border-border-subtle rounded-lg focus:ring-2 focus:ring-primary-container focus:border-primary-container transition-all outline-none" id="last_name" name="last_name" placeholder="Santoso" type="text" required/>
</div>
</div>
<!-- Laravel expects 'name' by default in Fortify/Breeze, but keeping first/last for design, will add a hidden name field for compatibility if needed, or just let it submit and the backend will need adjusting -->
<div class="space-y-1">
<label class="font-label-md text-label-md text-on-surface-variant" for="email">Email Bisnis</label>
<input class="w-full h-11 px-4 bg-surface-container-lowest border border-border-subtle rounded-lg focus:ring-2 focus:ring-primary-container focus:border-primary-container transition-all outline-none" id="email" name="email" placeholder="budi@perusahaan.com" type="email" required/>
@error('email')
<p class="text-[11px] text-danger mt-1">{{ $message }}</p>
@enderror
</div>
<div class="space-y-1">
<label class="font-label-md text-label-md text-on-surface-variant" for="password">Kata Sandi</label>
<div class="relative">
<input class="w-full h-11 px-4 bg-surface-container-lowest border border-border-subtle rounded-lg focus:ring-2 focus:ring-primary-container focus:border-primary-container transition-all outline-none" id="password" name="password" placeholder="••••••••" type="password" required/>
<button class="absolute right-3 top-1/2 -translate-y-1/2 text-on-surface-variant" type="button">
<span class="material-symbols-outlined text-sm">visibility</span>
</button>
</div>
@error('password')
<p class="text-[11px] text-danger mt-1">{{ $message }}</p>
@else
<p class="text-[11px] text-text-secondary mt-1">Minimal 8 karakter dengan setidaknya satu angka dan simbol.</p>
@enderror
</div>
<div class="space-y-1">
<label class="font-label-md text-label-md text-on-surface-variant" for="password_confirmation">Konfirmasi Kata Sandi</label>
<div class="relative">
<input class="w-full h-11 px-4 bg-surface-container-lowest border border-border-subtle rounded-lg focus:ring-2 focus:ring-primary-container focus:border-primary-container transition-all outline-none" id="password_confirmation" name="password_confirmation" placeholder="••••••••" type="password" required/>
</div>
</div>
<div class="pt-stack-md">
<button class="w-full h-12 bg-primary-container text-white font-label-md text-label-md rounded-lg shadow-sm hover:opacity-90 active:scale-[0.98] transition-all flex items-center justify-center gap-2" type="submit">
                                Lanjutkan ke Detail Event
                                <span class="material-symbols-outlined text-sm">arrow_forward</span>
</button>
</div>
<div class="flex items-center gap-2 py-2">
<input class="rounded border-border-subtle text-primary focus:ring-primary" id="terms" type="checkbox" required/>
<label class="font-body-sm text-body-sm text-on-surface-variant" for="terms">
                                Saya setuju dengan <a class="text-primary hover:underline" href="#">Syarat Layanan</a> dan <a class="text-primary hover:underline" href="#">Kebijakan Privasi</a>.
                            </label>
</div>
</form>
</div>
<!-- Trusted By Section -->
<div class="mt-stack-lg">
<p class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-widest text-center lg:text-left mb-stack-md">Dipercaya oleh Perusahaan Terkemuka</p>
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
<div class="absolute inset-0 z-10 bg-gradient-to-tr from-primary/40 to-transparent"></div>
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
<p class="font-caption text-[12px] text-text-secondary">Head of Global Events, TechCorp</p>
</div>
</div>
</div>
</div>
<div class="mt-stack-lg grid grid-cols-2 gap-4">
<div class="flex items-start gap-3">
<span class="material-symbols-outlined text-primary-container bg-accent-blue p-2 rounded-lg">verified_user</span>
<div>
<p class="font-label-md text-label-md text-text-primary">Keamanan Setingkat Bank</p>
<p class="text-[12px] text-text-secondary">Sesuai ISO 27001 & GDPR</p>
</div>
</div>
<div class="flex items-start gap-3">
<span class="material-symbols-outlined text-secondary bg-accent-emerald p-2 rounded-lg">bolt</span>
<div>
<p class="font-label-md text-label-md text-text-primary">Pengaturan Instan</p>
<p class="text-[12px] text-text-secondary">Siap di bawah 2 menit</p>
</div>
</div>
</div>
</div>
</div>
</main>
<!-- Footer (Shell Logic: Simplified for Registration) -->
<footer class="w-full bg-surface-container-lowest border-t border-outline-variant/30 mt-auto">
<div class="max-w-[1536px] mx-auto px-gutter py-8 flex flex-col md:flex-row justify-between items-center gap-4">
<p class="font-caption text-caption text-on-surface-variant">© 2024 Coordination AI. All rights reserved.</p>
<div class="flex items-center gap-6">
<a class="font-caption text-caption text-on-surface-variant hover:text-primary transition-colors" href="#">Privacy Policy</a>
<a class="font-caption text-caption text-on-surface-variant hover:text-primary transition-colors" href="#">Terms of Service</a>
<a class="font-caption text-caption text-on-surface-variant hover:text-primary transition-colors" href="#">Help Center</a>
</div>
</div>
</footer>
<script>
        // Simple Micro-interactions
        const form = document.getElementById('registrationForm');
        form.addEventListener('submit', (e) => {
            // Let the real Laravel form submit, just show loading state visually
            const btn = e.target.querySelector('button[type="submit"]');
            const originalContent = btn.innerHTML;
            
            // We shouldn't disable the button immediately or the form might not submit in some browsers,
            // but for UI feedback we can change the content
            btn.innerHTML = '<span class="material-symbols-outlined animate-spin">progress_activity</span> Processing...';
        });

        // Password Visibility Toggle
        const passToggle = document.querySelector('button[type="button"]');
        const passInput = document.getElementById('password');
        passToggle.addEventListener('click', () => {
            const isPass = passInput.type === 'password';
            passInput.type = isPass ? 'text' : 'password';
            passToggle.querySelector('span').innerText = isPass ? 'visibility_off' : 'visibility';
        });
    </script>
</body></html>
