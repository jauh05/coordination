<!DOCTYPE html>

<html class="scroll-smooth" lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Pendaftaran | Coordination</title>
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
                    "secondary-fixed-dim": "#81d8ad",
                    "surface-container-high": "#dce9ff",
                    "tertiary": "#231fb5",
                    "error-critical": "#ba1a1a",
                    "tertiary-container": "#3e3fcc",
                    "secondary-container": "#9af2c5",
                    "on-primary-fixed": "#00174b",
                    "inverse-surface": "#213145",
                    "error-container": "#ffdad6",
                    "on-tertiary-fixed": "#06006c",
                    "surface-container": "#e5eeff",
                    "success-emerald": "#4edea3",
                    "secondary-fixed": "#9df4c8",
                    "surface-container-low": "#eff4ff",
                    "error": "#ba1a1a",
                    "warning-amber": "#FFB000",
                    "primary": "#003594",
                    "on-background": "#0b1c30",
                    "on-primary-fixed-variant": "#003ea8",
                    "on-secondary": "#ffffff",
                    "hero-gradient-end": "#2563eb",
                    "on-surface-variant": "#434654",
                    "surface-variant": "#d3e4fe",
                    "on-error-container": "#93000a",
                    "on-primary-container": "#b8c8ff",
                    "surface-dim": "#cbdbf5",
                    "surface-ice": "#f8f9ff",
                    "outline": "#737685",
                    "secondary": "#006c49",
                    "primary-container": "#004ac6",
                    "surface": "#f8f9ff",
                    "inverse-primary": "#b4c5ff",
                    "on-tertiary-fixed-variant": "#2e2dbe",
                    "on-tertiary": "#ffffff",
                    "surface-bright": "#f8f9ff",
                    "on-tertiary-container": "#c4c4ff",
                    "on-secondary-container": "#0c714d",
                    "on-primary": "#ffffff",
                    "background": "#f8f9ff",
                    "on-secondary-fixed": "#002113",
                    "tertiary-fixed": "#e1e0ff",
                    "on-secondary-fixed-variant": "#005236",
                    "surface-tint": "#1b55d0",
                    "surface-container-lowest": "#ffffff",
                    "on-surface": "#0b1c30",
                    "on-error": "#ffffff",
                    "primary-fixed-dim": "#b4c5ff",
                    "tertiary-fixed-dim": "#c0c1ff",
                    "inverse-on-surface": "#eaf1ff",
                    "outline-variant": "#c3c6d6",
                    "surface-container-highest": "#d3e4fe",
                    "primary-fixed": "#dbe1ff",
                    "hero-gradient-start": "#004ac6"
            },
            "borderRadius": {
                    "DEFAULT": "0.25rem",
                    "lg": "0.5rem",
                    "xl": "0.75rem",
                    "full": "9999px"
            },
            "spacing": {
                    "gutter": "24px",
                    "sm": "8px",
                    "lg": "24px",
                    "xl": "32px",
                    "xxl": "48px",
                    "md": "16px",
                    "xs": "4px",
                    "margin": "32px"
            },
            "fontFamily": {
                    "display-lg": ["Inter"],
                    "body-md": ["Inter"],
                    "body-lg": ["Inter"],
                    "headline-lg": ["Inter"],
                    "title-md": ["Inter"],
                    "headline-sm": ["Inter"],
                    "label-md": ["Inter"],
                    "caption": ["Inter"],
                    "headline-lg-mobile": ["Inter"],
                    "headline-md": ["Inter"]
            },
            "fontSize": {
                    "display-lg": ["48px", {"lineHeight": "56px", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                    "body-md": ["14px", {"lineHeight": "20px", "fontWeight": "500"}],
                    "body-lg": ["16px", {"lineHeight": "24px", "fontWeight": "400"}],
                    "headline-lg": ["32px", {"lineHeight": "40px", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                    "title-md": ["16px", {"lineHeight": "24px", "fontWeight": "600"}],
                    "headline-sm": ["20px", {"lineHeight": "28px", "fontWeight": "600"}],
                    "label-md": ["12px", {"lineHeight": "16px", "letterSpacing": "0.02em", "fontWeight": "600"}],
                    "caption": ["12px", {"lineHeight": "16px", "fontWeight": "400"}],
                    "headline-lg-mobile": ["24px", {"lineHeight": "32px", "letterSpacing": "-0.01em", "fontWeight": "700"}],
                    "headline-md": ["24px", {"lineHeight": "32px", "letterSpacing": "-0.01em", "fontWeight": "600"}]
            }
          },
        },
      }
    </script>
<style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8f9ff;
            color: #0b1c30;
        }

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            display: inline-block;
            vertical-align: middle;
        }

        .glass-panel {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(20px);
            border: 1px solid #e2e4e7;
        }

        .step-transition {
            transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .bento-card {
            background: #ffffff;
            border: 1px solid #e2e4e7;
            border-radius: 16px;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .bento-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
        }

        input:focus, select:focus {
            outline: none;
            border-color: #003594;
            box-shadow: 0 0 0 4px rgba(0, 53, 148, 0.1);
        }

        .shimmer {
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            background-size: 200% 100%;
            animation: shimmer 2s infinite;
        }

        @keyframes shimmer {
            0% { background-position: -200% 0; }
            100% { background-position: 200% 0; }
        }
    </style>
</head>
<body class="min-h-screen flex flex-col items-center justify-center p-md">
<!-- Top Navigation -->
<header class="fixed top-0 w-full z-50 flex justify-between items-center px-gutter py-md max-w-[1536px] mx-auto backdrop-blur-xl">
<div class="flex items-center gap-sm">
<span class="material-symbols-outlined text-primary text-3xl" style="font-variation-settings: 'FILL' 1;">hub</span>
<h1 class="text-title-md font-title-md font-bold text-primary">Coordination</h1>
</div>
<div>
<a class="font-body-md text-body-md text-on-surface-variant hover:text-primary transition-colors" href="{{ route('support') }}">
            Bantuan
        </a>
</div>
</header>
<!-- Main Registration Canvas -->
<main class="w-full max-w-[1200px] mt-xxl grid grid-cols-1 lg:grid-cols-12 gap-lg relative">
<!-- Left Side: Visual/Contextual Anchor -->
<section class="hidden lg:flex lg:col-span-5 flex-col justify-center space-y-xl pr-xl">
<div class="space-y-md">
<span class="inline-flex items-center px-md py-xs rounded-full bg-primary-fixed text-on-primary-fixed font-label-md text-label-md">
                Siap Untuk Perusahaan
            </span>
<h2 class="font-display-lg text-display-lg text-on-background leading-tight">
                Skalakan acara Anda dengan <span class="text-primary">presisi.</span>
</h2>
<p class="font-body-lg text-body-lg text-on-surface-variant">
                Bergabunglah dengan 500+ perusahaan global yang menggunakan Coordination AI untuk mengelola logistik acara dengan sinkronisasi nol-latensi.
            </p>
</div>
<!-- Mini Bento Proof Points -->
<div class="grid grid-cols-2 gap-md">
<div class="bento-card p-lg flex flex-col gap-sm">
<span class="material-symbols-outlined text-secondary" style="font-variation-settings: 'FILL' 1;">verified</span>
<p class="font-title-md text-title-md">Uptime 99,9%</p>
<p class="font-caption text-caption text-on-surface-variant">Keandalan misi kritis.</p>
</div>
<div class="bento-card p-lg flex flex-col gap-sm">
<span class="material-symbols-outlined text-primary" style="font-variation-settings: 'FILL' 1;">speed</span>
<p class="font-title-md text-title-md">Sinkronisasi Real-time</p>
<p class="font-caption text-caption text-on-surface-variant">Pembaruan koordinasi instan.</p>
</div>
</div>
</section>
<!-- Right Side: The Multi-Step Form -->
<section class="lg:col-span-7 flex flex-col items-center justify-center">
<div class="w-full max-w-[520px] glass-panel rounded-xl shadow-sm p-xl md:p-xxl relative overflow-hidden">
<!-- Stepper Progress Bar -->
<div class="flex items-center justify-between mb-xl relative">
<div class="absolute top-1/2 left-0 w-full h-[2px] bg-surface-container-high -translate-y-1/2 z-0"></div>
<div class="absolute top-1/2 left-0 w-0 h-[2px] bg-primary -translate-y-1/2 z-0 transition-all duration-500" id="step-line"></div>
<div class="relative z-10 flex flex-col items-center">
<div class="w-10 h-10 rounded-full flex items-center justify-center bg-primary text-white font-bold transition-colors" id="step-node-1">1</div>
<span class="mt-sm font-label-md text-label-md text-primary">Akun</span>
</div>
<div class="relative z-10 flex flex-col items-center">
<div class="w-10 h-10 rounded-full flex items-center justify-center bg-surface-container-high text-on-surface-variant font-bold transition-colors" id="step-node-2">2</div>
<span class="mt-sm font-label-md text-label-md text-on-surface-variant">Acara</span>
</div>
<div class="relative z-10 flex flex-col items-center">
<div class="w-10 h-10 rounded-full flex items-center justify-center bg-surface-container-high text-on-surface-variant font-bold transition-colors" id="step-node-3">3</div>
<span class="mt-sm font-label-md text-label-md text-on-surface-variant">Selesai</span>
</div>
</div>
<form class="space-y-xl" id="registration-form">
<!-- Step 1: Account Setup -->
<div class="step-transition opacity-100 transform translate-x-0" id="step-1-content">
<header class="mb-lg">
<h3 class="font-headline-md text-headline-md mb-xs">Buat akun Anda</h3>
<p class="font-body-md text-body-md text-on-surface-variant">Mulai perjalanan Anda dengan Flowvent enterprise.</p>
</header>
<div class="space-y-md">
<div class="space-y-xs">
<label class="font-label-md text-label-md text-on-surface">Nama Lengkap</label>
<input class="w-full px-lg py-md rounded-full bg-surface-container-low border border-outline-variant transition-all font-body-md" placeholder="contoh: Alexander Pierce" required="" type="text"/>
</div>
<div class="space-y-xs">
<label class="font-label-md text-label-md text-on-surface">Email Bisnis</label>
<input class="w-full px-lg py-md rounded-full bg-surface-container-low border border-outline-variant transition-all font-body-md" placeholder="nama@perusahaan.com" required="" type="email"/>
</div>
<div class="space-y-xs">
<label class="font-label-md text-label-md text-on-surface">Kata Sandi</label>
<div class="relative">
<input class="w-full px-lg py-md rounded-full bg-surface-container-low border border-outline-variant transition-all font-body-md" placeholder="••••••••" required="" type="password"/>
<button class="absolute right-4 top-1/2 -translate-y-1/2 text-outline" type="button">
<span class="material-symbols-outlined">visibility</span>
</button>
</div>
<p class="font-caption text-caption text-on-surface-variant pt-xs">Minimal 8 karakter dengan satu simbol.</p>
</div>
</div>
<div class="mt-xl">
<button class="w-full py-md bg-primary text-white rounded-full font-title-md text-title-md hover:opacity-90 active:scale-95 transition-all flex items-center justify-center gap-sm" onclick="goToStep(2)" type="button">
                            Lanjutkan
                            <span class="material-symbols-outlined">arrow_forward</span>
</button>
</div>
</div>
<!-- Step 2: Event Details -->
<div class="hidden step-transition opacity-0 transform translate-x-20" id="step-2-content">
<header class="mb-lg">
<div class="flex justify-between items-start">
<div>
<h3 class="font-headline-md text-headline-md mb-xs">Konteks Acara</h3>
<p class="font-body-md text-body-md text-on-surface-variant">Beritahu kami apa yang Anda koordinasikan.</p>
</div>
<button class="text-primary font-label-md text-label-md hover:underline" onclick="goToStep(3)" type="button">Lewati</button>
</div>
</header>
<div class="space-y-md">
<div class="space-y-xs">
<label class="font-label-md text-label-md text-on-surface">Nama Acara Berikutnya</label>
<input class="w-full px-lg py-md rounded-full bg-surface-container-low border border-outline-variant transition-all font-body-md" placeholder="contoh: Global Tech Summit 2024" type="text"/>
</div>
<div class="space-y-xs">
<label class="font-label-md text-label-md text-on-surface">Estimasi Peserta</label>
<select class="w-full px-lg py-md rounded-full bg-surface-container-low border border-outline-variant transition-all font-body-md appearance-none">
<option>Pilih rentang</option>
<option>Di bawah 500</option>
<option>500 - 2.500</option>
<option>2.500 - 10.000</option>
<option>10.000+</option>
</select>
</div>
<div class="space-y-xs">
<label class="font-label-md text-label-md text-on-surface">Tujuan Utama</label>
<div class="grid grid-cols-2 gap-sm">
<button class="p-md rounded-xl border border-outline-variant text-left hover:border-primary transition-colors group" type="button">
<span class="material-symbols-outlined text-outline group-hover:text-primary mb-xs">hub</span>
<p class="font-label-md text-label-md">Logistik</p>
</button>
<button class="p-md rounded-xl border border-outline-variant text-left hover:border-primary transition-colors group" type="button">
<span class="material-symbols-outlined text-outline group-hover:text-primary mb-xs">campaign</span>
<p class="font-label-md text-label-md">Keterlibatan</p>
</button>
</div>
</div>
</div>
<div class="mt-xl flex gap-md">
<button class="flex-1 py-md bg-surface-container-high text-on-surface rounded-full font-title-md text-title-md hover:bg-surface-variant active:scale-95 transition-all" onclick="goToStep(1)" type="button">
                            Kembali
                        </button>
<button class="flex-[2] py-md bg-primary text-white rounded-full font-title-md text-title-md hover:opacity-90 active:scale-95 transition-all flex items-center justify-center gap-sm" onclick="goToStep(3)" type="button">
                            Langkah Terakhir
                            <span class="material-symbols-outlined">arrow_forward</span>
</button>
</div>
</div>
<!-- Step 3: Success / Finishing Up -->
<div class="hidden step-transition opacity-0 transform translate-x-20 text-center" id="step-3-content">
<div class="mb-xl">
<div class="w-24 h-24 bg-secondary-container text-on-secondary-container rounded-full flex items-center justify-center mx-auto mb-lg">
<span class="material-symbols-outlined text-5xl" style="font-variation-settings: 'FILL' 1;">check_circle</span>
</div>
<h3 class="font-headline-md text-headline-md mb-xs">Hampir selesai!</h3>
<p class="font-body-md text-body-md text-on-surface-variant px-xl">Kami telah mengirimkan tautan verifikasi ke email Anda. Klik tautan tersebut untuk mengaktifkan dasbor Mission Control Anda.</p>
</div>
<div class="space-y-md">
<button class="w-full py-md bg-primary text-white rounded-full font-title-md text-title-md hover:opacity-90 active:scale-95 transition-all" type="submit">
                            Buka Dasbor
                        </button>
<button class="w-full py-md border border-outline-variant text-on-surface rounded-full font-title-md text-title-md hover:bg-surface-container-low transition-all" type="button">
                            Kirim Ulang Email
                        </button>
</div>
</div>
</form>
<div class="mt-xxl pt-lg border-t border-outline-variant text-center">
<p class="font-body-md text-body-md text-on-surface-variant">
                    Sudah punya akun? 
                    <a class="text-primary font-bold hover:underline" href="{{ route('login') }}">Masuk</a>
</p>
</div>
</div>
<!-- Trust Badges -->
<div class="mt-xl flex items-center gap-xl opacity-60 grayscale hover:grayscale-0 transition-all duration-700">
<span class="font-label-md text-label-md uppercase tracking-widest text-on-surface-variant">Dipercaya Oleh</span>
<div class="flex gap-lg items-center">
<span class="font-bold text-lg">VERTEX</span>
<span class="font-bold text-lg">NOVA</span>
<span class="font-bold text-lg">QUANTUM</span>
</div>
</div>
</section>
</main>
<!-- Footer -->
<footer class="mt-xxl w-full max-w-[1536px] px-gutter py-xl border-t border-outline-variant/30 flex flex-col md:flex-row justify-between items-center gap-md opacity-70">
<p class="font-caption text-caption text-on-surface-variant">© 2024 Coordination AI. Seluruh hak cipta dilindungi undang-undang.</p>
<div class="flex gap-lg">
<a class="font-caption text-caption text-on-surface-variant hover:text-primary" href="#">Kebijakan Privasi</a>
<a class="font-caption text-caption text-on-surface-variant hover:text-primary" href="#">Ketentuan Layanan</a>
<a class="font-caption text-caption text-on-surface-variant hover:text-primary" href="#">Pengaturan Cookie</a>
</div>
</footer>
<!-- Background Decoration -->
<div class="fixed top-0 right-0 -z-10 w-[600px] h-[600px] bg-primary/5 rounded-full blur-[120px] -mr-64 -mt-64"></div>
<div class="fixed bottom-0 left-0 -z-10 w-[400px] h-[400px] bg-secondary/5 rounded-full blur-[100px] -ml-32 -mb-32"></div>
<script>
    function goToStep(step) {
        const step1 = document.getElementById('step-1-content');
        const step2 = document.getElementById('step-2-content');
        const step3 = document.getElementById('step-3-content');
        const stepLine = document.getElementById('step-line');
        const node2 = document.getElementById('step-node-2');
        const node3 = document.getElementById('step-node-3');

        // Reset classes
        [step1, step2, step3].forEach(s => {
            s.classList.add('hidden');
            s.classList.remove('opacity-100', 'translate-x-0');
            s.classList.add('opacity-0', 'translate-x-20');
        });

        if (step === 1) {
            step1.classList.remove('hidden');
            setTimeout(() => {
                step1.classList.remove('opacity-0', 'translate-x-20');
                step1.classList.add('opacity-100', 'translate-x-0');
            }, 10);
            stepLine.style.width = '0%';
            node2.classList.replace('bg-primary', 'bg-surface-container-high');
            node2.classList.replace('text-white', 'text-on-surface-variant');
        } else if (step === 2) {
            step2.classList.remove('hidden');
            setTimeout(() => {
                step2.classList.remove('opacity-0', 'translate-x-20');
                step2.classList.add('opacity-100', 'translate-x-0');
            }, 10);
            stepLine.style.width = '50%';
            node2.classList.replace('bg-surface-container-high', 'bg-primary');
            node2.classList.replace('text-on-surface-variant', 'text-white');
            node3.classList.replace('bg-primary', 'bg-surface-container-high');
            node3.classList.replace('text-white', 'text-on-surface-variant');
        } else if (step === 3) {
            step3.classList.remove('hidden');
            setTimeout(() => {
                step3.classList.remove('opacity-0', 'translate-x-20');
                step3.classList.add('opacity-100', 'translate-x-0');
            }, 10);
            stepLine.style.width = '100%';
            node3.classList.replace('bg-surface-container-high', 'bg-primary');
            node3.classList.replace('text-on-surface-variant', 'text-white');
        }
    }

    // Simple form handling
    document.getElementById('registration-form').addEventListener('submit', (e) => {
        e.preventDefault();
        window.location.href = "{{ route('dashboard') }}";
    });
</script>
</body></html>
