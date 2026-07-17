<!DOCTYPE html>

<html class="light" lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Flowvent - Fitur Koordinasi Event Masa Depan</title>
<!-- Material Symbols -->
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<!-- Google Fonts: Inter -->
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet"/>
<!-- Tailwind CSS -->
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
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
        body {
            background-color: #F8FAFC;
            color: #0F172A;
            font-family: 'Inter', sans-serif;
            overflow-x: hidden;
        }

        .glass-card {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(226, 232, 240, 0.8);
        }

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            vertical-align: middle;
        }

        .hero-gradient {
            background: radial-gradient(circle at top right, #DBEAFE 0%, transparent 40%),
                        radial-gradient(circle at bottom left, #D1FAE5 0%, transparent 40%);
        }

        .bento-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .bento-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 24px -10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body class="bg-background">
<!-- TopNavBar -->
<header class="fixed top-0 w-full z-50 bg-surface-container-lowest dark:bg-inverse-surface border-b border-border-subtle dark:border-outline-variant shadow-sm h-16">
<div class="flex justify-between items-center h-16 px-margin-desktop max-w-container-max mx-auto">
<div class="text-headline-md font-headline-md text-primary dark:text-primary-fixed font-bold tracking-tight cursor-pointer" onclick="window.location.href='{{ route('landing') }}'">
                Flowvent
            </div>
<nav class="hidden md:flex space-x-stack-lg items-center h-full">
<a class="text-primary dark:text-primary-fixed font-bold border-b-2 border-primary h-full flex items-center px-2" href="{{ route('fitur') }}">Fitur</a>
<a class="text-on-surface-variant dark:text-on-surface-variant hover:text-primary transition-colors h-full flex items-center px-2" href="{{ route('solutions') }}">Solusi</a>
<a class="text-on-surface-variant dark:text-on-surface-variant hover:text-primary transition-colors h-full flex items-center px-2" href="{{ route('pricing') }}">Harga</a>
<a class="text-on-surface-variant dark:text-on-surface-variant hover:text-primary transition-colors h-full flex items-center px-2" href="{{ route('tentang') }}">Tentang</a>
<a class="text-on-surface-variant dark:text-on-surface-variant hover:text-primary transition-colors h-full flex items-center px-2" href="{{ route('kontak') }}">Kontak</a>
</nav>
<div class="flex items-center space-x-stack-md">
<a href="{{ route('login') }}" class="text-label-md font-label-md text-on-surface-variant hover:text-primary px-4 py-2 transition-all duration-200 active:scale-95">Login</a>
<a href="{{ route('register') }}" class="bg-primary text-on-primary px-5 py-2.5 rounded-lg text-label-md font-label-md shadow-sm transition-all duration-200 active:scale-95">Mulai Sekarang</a>
</div>
</div>
</header>
<main class="pt-24">
<!-- Hero Section -->
<section class="relative hero-gradient px-margin-desktop py-stack-lg overflow-hidden">
<div class="max-w-container-max mx-auto grid grid-cols-1 lg:grid-cols-2 gap-gutter items-center min-h-[614px]">
<div class="z-10">
<span class="bg-accent-blue text-primary px-3 py-1 rounded-full text-label-sm font-label-sm mb-4 inline-block">Koordinasi 2.0</span>
<h1 class="text-display-lg font-display-lg text-text-primary mb-stack-md">
                        Kendali Penuh di Ujung Jari Anda.
                    </h1>
<p class="text-body-lg font-body-lg text-text-secondary max-w-lg mb-stack-lg">
                        Flowvent menyatukan logistik, finansial, dan manajemen vendor dalam satu ekosistem AI yang cerdas untuk kelancaran event tanpa celah.
                    </p>
<div class="flex flex-wrap gap-stack-md">
<button class="bg-primary text-on-primary px-8 py-4 rounded-xl text-label-md font-label-md shadow-lg transition-all hover:scale-105 active:scale-95">
                            Coba Demo Gratis
                        </button>
<button class="border border-border-subtle bg-surface-card text-text-primary px-8 py-4 rounded-xl text-label-md font-label-md flex items-center gap-2 hover:bg-surface-container-low transition-all">
<span class="material-symbols-outlined">play_circle</span> Lihat Video
                        </button>
</div>
</div>
<div class="relative">
<div class="glass-card rounded-2xl p-4 shadow-2xl animate-pulse">
<div class="bg-cover bg-center aspect-video rounded-xl w-full h-full shadow-inner" data-alt="A sophisticated dashboard interface showing real-time event analytics with clean line charts, a 3D floor plan visualization, and vibrant status indicators. The UI is minimalist with a white background, primary blue accents, and a focus on high-stakes event coordination. Soft studio lighting and sharp digital rendering emphasize the professional SaaS aesthetic." style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAxlB7TItZRxliMGkkEF42oB3oFWZbrjQXjUn-dyt53o_15lCIJkdocvgQeBaN2iUU3tec4GlH1hEjqP5-MUoovvk5cKd884Bt93qQsKN7uz2V9JnLKqq-HGdHV0Qb9aJ4DiD5U0303K0nGQ5VReMpuUQYJ9F4-9lX3YneCcTRSvvZyLUHEnBoUXOSv-8aouVFnQEzqcRcmek-ZEHOMFrsNR9Rn7pg78pkejT5EIAWL6OVUxOLgtHOO6Q7m8TiBVO8wnzVSsqzQFco')"></div>
</div>
<!-- Floating Badge -->
<div class="absolute -bottom-6 -left-6 glass-card p-4 rounded-xl shadow-lg border border-border-subtle flex items-center gap-3">
<div class="w-10 h-10 bg-success/20 text-success rounded-full flex items-center justify-center">
<span class="material-symbols-outlined">bolt</span>
</div>
<div>
<p class="text-label-sm font-label-sm text-text-secondary">Uptime Sistem</p>
<p class="text-headline-sm font-headline-sm text-text-primary">99.99%</p>
</div>
</div>
</div>
</div>
</section>
<!-- Feature Bento Grid -->
<section class="px-margin-desktop py-20 max-w-container-max mx-auto">
<div class="text-center mb-16">
<h2 class="text-headline-lg font-headline-lg text-text-primary mb-4">Kemampuan Utama</h2>
<p class="text-body-md font-body-md text-text-secondary max-w-2xl mx-auto">
                    Arsitektur Flowvent dirancang untuk menangani kompleksitas koordinasi event berskala besar dengan kemudahan navigasi.
                </p>
</div>
<div class="grid grid-cols-1 md:grid-cols-12 gap-gutter">
<!-- AI Command Center -->
<div class="md:col-span-8 glass-card rounded-2xl p-8 bento-card border border-border-subtle flex flex-col justify-between overflow-hidden relative">
<div class="relative z-10">
<div class="w-12 h-12 bg-primary/10 text-primary rounded-lg flex items-center justify-center mb-6">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">auto_awesome</span>
</div>
<h3 class="text-headline-md font-headline-md text-text-primary mb-2">AI Command Center</h3>
<p class="text-body-md font-body-md text-text-secondary max-w-md">
                            Asisten cerdas yang memprediksi kemacetan logistik dan memberikan saran alokasi sumber daya secara otomatis sebelum masalah terjadi.
                        </p>
</div>
<div class="mt-12 -mb-8 -mr-8">
<div class="bg-surface-container-low rounded-tl-2xl p-4 border-t border-l border-border-subtle shadow-sm">
<div class="flex items-center gap-4 mb-4">
<div class="bg-accent-blue p-2 rounded text-primary text-[10px] font-bold">AI INSIGHT</div>
<div class="h-1 flex-1 bg-border-subtle rounded-full overflow-hidden">
<div class="h-full bg-primary w-2/3"></div>
</div>
</div>
<p class="text-label-sm font-label-sm text-text-primary italic">"Prediksi: Vendor Catering akan tiba 15 menit lebih awal. Siapkan area loading zone 2."</p>
</div>
</div>
</div>
<!-- Financial Health Score -->
<div class="md:col-span-4 bg-primary text-on-primary rounded-2xl p-8 bento-card flex flex-col justify-between">
<div>
<div class="w-12 h-12 bg-white/20 text-white rounded-lg flex items-center justify-center mb-6">
<span class="material-symbols-outlined">analytics</span>
</div>
<h3 class="text-headline-md font-headline-md mb-2">Financial Health Score</h3>
<p class="text-body-sm font-body-sm text-white/80">
                            Pantau ROI dan margin secara real-time dengan metrik kesehatan finansial yang akurat.
                        </p>
</div>
<div class="text-center mt-8">
<div class="inline-block relative">
<svg class="w-32 h-32 transform -rotate-90">
<circle class="text-white/10" cx="64" cy="64" fill="transparent" r="58" stroke="currentColor" stroke-width="8"></circle>
<circle class="text-white" cx="64" cy="64" fill="transparent" r="58" stroke="currentColor" stroke-dasharray="364.4" stroke-dashoffset="54.6" stroke-width="8"></circle>
</svg>
<div class="absolute inset-0 flex items-center justify-center">
<span class="text-headline-lg font-headline-lg">85</span>
</div>
</div>
<p class="text-label-sm font-label-sm mt-2 opacity-80">Excellent Margin</p>
</div>
</div>
<!-- Real-time Logistics Tracking -->
<div class="md:col-span-6 bg-surface-card rounded-2xl p-8 bento-card border border-border-subtle overflow-hidden">
<div class="w-12 h-12 bg-secondary/10 text-secondary rounded-lg flex items-center justify-center mb-6">
<span class="material-symbols-outlined">location_on</span>
</div>
<h3 class="text-headline-md font-headline-md text-text-primary mb-2">Real-time Logistics Tracking</h3>
<p class="text-body-md font-body-md text-text-secondary mb-8">
                        Lacak setiap peralatan dan armada pengiriman melalui integrasi GPS yang sinkron dengan timeline acara Anda.
                    </p>
<div class="rounded-xl overflow-hidden border border-border-subtle h-48 relative">
<div class="w-full h-full bg-cover bg-center" data-location="Jakarta" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAQJ_KRm7oPcdPcwUqUlInPLGuZ1JHyEL2UsO6l3BwHZQfIrElF_K1-8mnWyETxhE4kme091y-mKhmUNo7d_xqu5V8_WCRvitq8yd-wOWHFsygiKzwahBACHw64CgE46Nutn9D1FV5O8XE--1JV6u00J9syIADt9QOLrU5GUlCxgP8wYnSlfDqC7g9GSQ2fY0SoZF13T320Myog-ZX5QU7Gr1VgHGC9GkF1yUGeLObK3qdUSesDycUmVYz3teKURFekPDNmmgZ6Ygw')"></div>
<div class="absolute inset-0 bg-primary/10 pointer-events-none"></div>
<div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
<div class="relative">
<div class="w-4 h-4 bg-primary rounded-full animate-ping absolute"></div>
<div class="w-4 h-4 bg-primary rounded-full relative"></div>
</div>
</div>
</div>
</div>
<!-- Vendor Management -->
<div class="md:col-span-6 glass-card rounded-2xl p-8 bento-card border border-border-subtle flex flex-col">
<div class="flex justify-between items-start mb-6">
<div class="w-12 h-12 bg-warning/10 text-warning rounded-lg flex items-center justify-center">
<span class="material-symbols-outlined">handshake</span>
</div>
<div class="flex -space-x-2">
<img class="w-10 h-10 rounded-full border-2 border-white shadow-sm" data-alt="Close-up portrait of a professional female vendor partner, smiling, professional business attire, high-key office lighting, clean minimalist corporate photography style." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCFNwFrzlRdIF6ZyvTCeowoyUgw1ivOh2TEQl-fQS0Qsgq7RFVrhC0VMr-YxDcSapcXnRwyw7ipqijn9uewI7IiZOUt1edQSRiAIvYIiNCdZTjVUz-_HBWPrSeW-eMwIuo6m3txtBt8CquvzbJvBSTpc6mVK-NeUNVnlo-HY8aBl0GATYJtzoI1mJgR-d8qw_bFJNimxTzqsjIUcDqXwsdu7kErgbUWXXrOIFSJVOLJrteuBR-0uQ7LIrZv0YG8V7M4Rq6oVzbTDGw"/>
<img class="w-10 h-10 rounded-full border-2 border-white shadow-sm" data-alt="Close-up portrait of a diverse male vendor consultant, confident expression, minimalist background, studio lighting, professional enterprise look." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAVcMX1aNjQoSlGVSUum04gWgIYZh1XxFddZfP9tFAfuYmlXHBysIPwsrekbohnbN6FPqELNQzNuTYfhOYWdCxay6g-4DfHA4WGEo6ZMscfmDTQwMgPsBQzaIi01mmlAK9plE4_YS_H06k4WKAJe9Tayh7sPpjasGjbxoJBUHOjFKp6SuxIQhQJtwIFt1lKVt1AJtshl96hlVBxPvOjil9aNYiwtQmbRyFHWq2BuSnJYCrRbItZcYAUnGZKM8UHPBmbKHwonu6X0lY"/>
<div class="w-10 h-10 rounded-full border-2 border-white bg-surface-container-high flex items-center justify-center text-label-sm font-label-sm">+12</div>
</div>
</div>
<h3 class="text-headline-md font-headline-md text-text-primary mb-2">Vendor Management</h3>
<p class="text-body-md font-body-md text-text-secondary mb-6">
                        Hubungkan ribuan vendor dalam satu portal. Kontrak otomatis, invoice digital, dan rating performa dalam satu dashboard.
                    </p>
<div class="space-y-3">
<div class="flex items-center justify-between p-3 bg-surface-container-low rounded-lg">
<span class="text-label-md font-label-md">Catering Deluxe</span>
<span class="text-success flex items-center gap-1 text-label-sm font-label-sm">
<span class="material-symbols-outlined text-[16px]">verified</span> Terverifikasi
                            </span>
</div>
<div class="flex items-center justify-between p-3 bg-surface-container-low rounded-lg">
<span class="text-label-md font-label-md">AV Systems Ltd</span>
<span class="text-warning flex items-center gap-1 text-label-sm font-label-sm">
<span class="material-symbols-outlined text-[16px]">pending</span> Menunggu Invoice
                            </span>
</div>
</div>
</div>
</div>
</section>
<!-- CTA Section -->
<section class="px-margin-desktop py-20 bg-inverse-surface text-on-primary-container relative overflow-hidden">

<div class="max-w-container-max mx-auto text-center relative z-10">
<h2 class="text-display-lg font-display-lg text-white mb-stack-md">Siap mengorkestrasi event Anda?</h2>
<p class="text-body-lg font-body-lg text-white/70 max-w-xl mx-auto mb-stack-lg">
                    Dapatkan akses eksklusif ke platform koordinasi yang mengubah cara Anda bekerja. Cepat, aman, dan tanpa hambatan.
                </p>
<div class="flex flex-col sm:flex-row justify-center gap-stack-md">
<button class="bg-white text-primary px-10 py-4 rounded-xl text-label-md font-label-md font-bold shadow-xl hover:bg-opacity-90 transition-all">
                        Daftar Sekarang
                    </button>
<button class="border border-white/30 text-white px-10 py-4 rounded-xl text-label-md font-label-md font-bold hover:bg-white/10 transition-all">
                        Hubungi Tim Sales
                    </button>
</div>
</div>
</section>
</main>
<!-- Footer -->
<footer class="w-full py-stack-lg bg-surface-container-low dark:bg-inverse-surface border-t border-border-subtle dark:border-outline-variant">
<div class="grid grid-cols-1 md:grid-cols-4 gap-gutter px-margin-desktop max-w-container-max mx-auto">
<div class="col-span-1">
<div class="text-headline-sm font-headline-sm text-primary dark:text-primary-fixed font-bold mb-4">Flowvent</div>
<p class="text-body-sm font-body-sm text-on-surface-variant mb-4">
                    Solusi manajemen event berbasis AI untuk operasi tingkat tinggi.
                </p>
</div>
<div>
<h4 class="text-label-md font-label-md text-text-primary mb-4">Platform</h4>
<ul class="space-y-2">
<li><a class="text-body-sm font-body-sm text-on-surface-variant hover:text-primary transition-colors" href="#">Semua Fitur</a></li>
<li><a class="text-body-sm font-body-sm text-on-surface-variant hover:text-primary transition-colors" href="#">Keamanan</a></li>
<li><a class="text-body-sm font-body-sm text-on-surface-variant hover:text-primary transition-colors" href="#">API Documentation</a></li>
</ul>
</div>
<div>
<h4 class="text-label-md font-label-md text-text-primary mb-4">Perusahaan</h4>
<ul class="space-y-2">
<li><a class="text-body-sm font-body-sm text-on-surface-variant hover:text-primary transition-colors" href="#">Tentang Kami</a></li>
<li><a class="text-body-sm font-body-sm text-on-surface-variant hover:text-primary transition-colors" href="#">Karier</a></li>
<li><a class="text-body-sm font-body-sm text-on-surface-variant hover:text-primary transition-colors" href="#">Hubungi Kami</a></li>
</ul>
</div>
<div>
<h4 class="text-label-md font-label-md text-text-primary mb-4">Legal</h4>
<ul class="space-y-2">
<li><a class="text-body-sm font-body-sm text-on-surface-variant hover:text-primary transition-colors" href="#">Privacy Policy</a></li>
<li><a class="text-body-sm font-body-sm text-on-surface-variant hover:text-primary transition-colors" href="#">Terms of Service</a></li>
<li><a class="text-body-sm font-body-sm text-on-surface-variant hover:text-primary transition-colors" href="#">Cookie Settings</a></li>
</ul>
</div>
</div>
<div class="mt-12 px-margin-desktop max-w-container-max mx-auto text-center border-t border-border-subtle pt-8">
<p class="text-body-sm font-body-sm text-on-surface-variant">© 2024 Flowvent AI Operations. All rights reserved.</p>
</div>
</footer>
<script>
        // Smooth scroll interaction for nav
        document.querySelectorAll('nav a').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                // e.preventDefault(); (commented out because we have real links now)
                // Simple interaction effect
                this.style.opacity = '0.7';
                setTimeout(() => this.style.opacity = '1', 150);
            });
        });

        // Hover animation for bento cards
        document.querySelectorAll('.bento-card').forEach(card => {
            card.addEventListener('mouseenter', () => {
                const icon = card.querySelector('.material-symbols-outlined');
                if(icon) {
                    icon.style.transform = 'scale(1.1) rotate(-5deg)';
                    icon.style.transition = 'transform 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275)';
                }
            });
            card.addEventListener('mouseleave', () => {
                const icon = card.querySelector('.material-symbols-outlined');
                if(icon) {
                    icon.style.transform = 'scale(1) rotate(0deg)';
                }
            });
        });
    </script>
</body></html>
