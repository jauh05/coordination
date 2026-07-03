<!DOCTYPE html>
<html class="scroll-smooth" lang="id">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Coordination | Platform Operasi Event Enterprise</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class", 
            theme: {
                extend: {
                    colors: {
                        "tertiary-fixed": "#ffdbcd", background: "#faf8ff", primary: "#004ac6", "inverse-primary": "#b4c5ff", "surface-container-low": "#f2f3ff", "secondary-fixed-dim": "#4edea3", "outline-variant": "#c3c6d7", "surface-variant": "#dae2fd", "surface-dim": "#d2d9f4", "inverse-on-surface": "#eef0ff", "surface-container-highest": "#dae2fd", "secondary-container": "#6cf8bb", "primary-fixed-dim": "#b4c5ff", "surface-bright": "#faf8ff", "on-tertiary-fixed": "#360f00", "on-secondary-fixed": "#002113", "surface-container-lowest": "#ffffff", outline: "#737686", danger: "#EF4444", "border-subtle": "#E2E8F0", "inverse-surface": "#283044", "surface-container": "#eaedff", "on-surface": "#131b2e", "on-error": "#ffffff", "primary-fixed": "#dbe1ff", "on-background": "#131b2e", "on-surface-variant": "#434655", error: "#ba1a1a", tertiary: "#943700", secondary: "#006c49", "text-primary": "#0F172A", "on-secondary-fixed-variant": "#005236", "on-secondary": "#ffffff", "surface-tint": "#0053db", "on-primary-fixed": "#00174b", "text-secondary": "#64748B", "on-tertiary-container": "#ffede6", "secondary-fixed": "#6ffbbe", surface: "#faf8ff", "surface-container-high": "#e2e7ff", "on-secondary-container": "#00714d", "on-primary-container": "#eeefff", "error-container": "#ffdad6", "on-tertiary-fixed-variant": "#7d2d00", success: "#22C55E", "on-primary-fixed-variant": "#003ea8", "on-tertiary": "#ffffff", warning: "#F59E0B", "on-error-container": "#93000a", "tertiary-container": "#bc4800", "on-primary": "#ffffff", "tertiary-fixed-dim": "#ffb596", "primary-container": "#2563eb"
                    }, 
                    borderRadius: {
                        DEFAULT: "0.25rem", lg: "0.5rem", xl: "0.75rem", full: "9999px"
                    }, 
                    spacing: {
                        "stack-sm": "8px", "stack-md": "16px", "container-max": "1440px", gutter: "24px", "sidebar-width": "260px", "margin-page": "32px", unit: "8px", "stack-lg": "24px"
                    }, 
                    fontFamily: {
                        "label-md": ["Inter"], "headline-md": ["Inter"], "label-sm": ["Inter"], "headline-lg": ["Inter"], "body-sm": ["Inter"], "headline-xl": ["Inter"], "body-md": ["Inter"], "body-lg": ["Inter"], headline: ["Inter"], display: ["Inter"], body: ["Inter"], label: ["Inter"]
                    }, 
                    fontSize: {
                        "label-md": ["12px", {lineHeight: "16px", letterSpacing: "0.05em", fontWeight: "600"}], 
                        "headline-md": ["20px", {lineHeight: "28px", fontWeight: "600"}], 
                        "label-sm": ["11px", {lineHeight: "14px", fontWeight: "500"}], 
                        "headline-lg": ["24px", {lineHeight: "32px", letterSpacing: "-0.01em", fontWeight: "600"}], 
                        "body-sm": ["13px", {lineHeight: "18px", fontWeight: "400"}], 
                        "headline-xl": ["36px", {lineHeight: "44px", letterSpacing: "-0.02em", fontWeight: "700"}], 
                        "body-md": ["14px", {lineHeight: "20px", fontWeight: "400"}], 
                        "body-lg": ["16px", {lineHeight: "24px", fontWeight: "400"}]
                    }
                }
            }
        };
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            vertical-align: middle;
        }
        .glass-card {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(226, 232, 240, 0.8);
        }
        .bento-grid {
            display: grid;
            grid-template-columns: repeat(12, 1fr);
            gap: 24px;
        }
        .shadow-soft {
            box-shadow: 0px 1px 3px rgba(15, 23, 42, 0.08);
        }
        .shadow-float {
            box-shadow: 0px 10px 15px -3px rgba(15, 23, 42, 0.12);
        }
    </style>
</head>
<body class="bg-background text-on-surface font-body-md selection:bg-primary-fixed selection:text-on-primary-fixed overflow-x-hidden">
<!-- TopAppBar -->
<header class="h-16 sticky top-0 z-50 w-full bg-surface/80 backdrop-blur-md border-b border-border-subtle shadow-sm flex items-center">
    <div class="flex justify-between items-center px-margin-page w-full max-w-container-max mx-auto">
        <div class="flex items-center gap-stack-lg">
            <span class="font-headline-md text-headline-md font-bold text-on-surface flex items-center gap-2">
                <span class="material-symbols-outlined text-primary">bolt</span> Coordination
            </span>
            <nav class="hidden md:flex items-center gap-stack-md">
                <a class="font-label-md text-label-md text-primary border-b-2 border-primary py-1" href="#">Beranda</a>
                <a class="font-label-md text-label-md text-text-secondary hover:text-primary transition-colors" href="#features">Fitur</a>
                <a class="font-label-md text-label-md text-text-secondary hover:text-primary transition-colors" href="#pricing">Harga</a>
                <a class="font-label-md text-label-md text-text-secondary hover:text-primary transition-colors" href="#faq">Bantuan</a>
            </nav>
        </div>
        <div class="flex items-center gap-stack-md">
            <a href="{{ route('login') }}" class="hidden md:block font-label-md text-label-md text-text-secondary hover:text-primary px-stack-md py-stack-sm">Masuk</a>
            <a href="{{ route('register') }}" class="bg-primary text-on-primary font-label-md text-label-md px-stack-lg py-2 rounded-lg font-semibold hover:bg-primary/90 transition-transform active:scale-[0.98]">
                Mulai Gratis
            </a>
        </div>
    </div>
</header>
<main>
<!-- Hero Section -->
<section class="relative pt-24 pb-32 overflow-hidden">
    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-full h-full -z-10 pointer-events-none opacity-40">
    </div>
    <div class="max-w-container-max mx-auto px-margin-page text-center">
        <div class="inline-flex items-center gap-2 bg-primary-fixed text-on-primary-fixed px-3 py-1 rounded-full mb-stack-lg">
            <span class="material-symbols-outlined text-[18px]">auto_awesome</span>
            <span class="font-label-sm text-label-sm">Didukung oleh AI Terkini</span>
        </div>
        <h1 class="font-headline-xl text-[48px] md:text-[64px] leading-tight mb-stack-md text-on-background">
            Rencanakan Lebih Pintar. <span class="text-primary">Eksekusi Lebih Baik.</span>
        </h1>
        <p class="font-body-lg text-body-lg text-text-secondary max-w-2xl mx-auto mb-stack-lg">
            Sistem operasi utama untuk event enterprise. Optimalkan logistik Anda, kelola anggaran dengan AI, dan pantau setiap divisi secara real-time.
        </p>
        <div class="flex flex-col sm:flex-row items-center justify-center gap-stack-md mb-24">
            <a href="{{ route('register') }}" class="w-full sm:w-auto bg-primary text-on-primary px-8 py-4 rounded-xl font-headline-md text-headline-md shadow-float hover:scale-105 transition-transform text-center">
                Mulai Proyek Gratis
            </a>
            <a href="#features" class="w-full sm:w-auto flex items-center justify-center gap-2 border border-border-subtle bg-surface px-8 py-4 rounded-xl font-headline-md text-headline-md hover:bg-surface-container-low transition-colors text-center">
                <span class="material-symbols-outlined">play_circle</span>
                Lihat Cara Kerja
            </a>
        </div>
        <!-- Dashboard Mockup -->
        <div class="relative max-w-5xl mx-auto">
            <div class="rounded-2xl border border-border-subtle bg-white shadow-2xl overflow-hidden aspect-[16/10] relative">
                <!-- Sidebar Mock -->
                <div class="absolute left-0 top-0 w-48 h-full bg-surface-container border-r border-border-subtle hidden md:flex flex-col p-4 gap-4">
                    <div class="w-32 h-6 bg-surface-variant rounded animate-pulse"></div>
                    <div class="space-y-3 mt-6">
                        <div class="w-full h-8 bg-primary/10 rounded"></div>
                        <div class="w-full h-8 bg-surface-variant rounded opacity-50"></div>
                        <div class="w-full h-8 bg-surface-variant rounded opacity-50"></div>
                        <div class="w-full h-8 bg-surface-variant rounded opacity-50"></div>
                    </div>
                </div>
                <!-- Content Mock -->
                <div class="md:ml-48 h-full p-8 bg-background flex flex-col gap-6">
                    <div class="flex justify-between items-end">
                        <div class="space-y-2">
                            <div class="w-48 h-4 bg-outline-variant rounded"></div>
                            <div class="w-64 h-8 bg-on-surface rounded"></div>
                        </div>
                        <div class="flex gap-2">
                            <div class="w-10 h-10 rounded-full bg-surface-container-high"></div>
                            <div class="w-10 h-10 rounded-full bg-surface-container-high"></div>
                        </div>
                    </div>
                    <!-- Mock Stats -->
                    <div class="grid grid-cols-3 gap-4">
                        <div class="h-24 bg-white rounded-xl border border-border-subtle p-4 shadow-soft"></div>
                        <div class="h-24 bg-white rounded-xl border border-border-subtle p-4 shadow-soft"></div>
                        <div class="h-24 bg-white rounded-xl border border-border-subtle p-4 shadow-soft"></div>
                    </div>
                    <!-- Mock Chart/List -->
                    <div class="flex-grow bg-white rounded-xl border border-border-subtle p-6 shadow-soft flex flex-col gap-4">
                        <div class="w-1/3 h-6 bg-surface-variant rounded"></div>
                        <div class="space-y-4">
                            <div class="h-12 w-full bg-background rounded-lg border border-border-subtle flex items-center px-4">
                                <div class="w-8 h-8 rounded bg-primary/20 mr-4"></div>
                                <div class="flex-grow h-4 bg-surface-variant rounded max-w-md"></div>
                            </div>
                            <div class="h-12 w-full bg-background rounded-lg border border-border-subtle flex items-center px-4 opacity-70">
                                <div class="w-8 h-8 rounded bg-secondary/20 mr-4"></div>
                                <div class="flex-grow h-4 bg-surface-variant rounded max-w-sm"></div>
                            </div>
                            <div class="h-12 w-full bg-background rounded-lg border border-border-subtle flex items-center px-4 opacity-40">
                                <div class="w-8 h-8 rounded bg-tertiary/20 mr-4"></div>
                                <div class="flex-grow h-4 bg-surface-variant rounded max-w-md"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Floating Glass Action -->
                <div class="absolute right-12 bottom-12 w-64 h-24 glass-card rounded-2xl shadow-float p-4 flex items-center gap-4">
                    <div class="w-12 h-12 rounded-full bg-success/20 flex items-center justify-center text-success">
                        <span class="material-symbols-outlined">trending_up</span>
                    </div>
                    <div>
                        <p class="font-label-sm text-label-sm text-text-secondary uppercase">Efisiensi Budget</p>
                        <p class="font-headline-md text-headline-md text-on-surface">+18.4% YoY</p>
                    </div>
                </div>
            </div>
            <!-- Decorative Elements -->
            <div class="absolute -top-12 -right-12 w-32 h-32 bg-secondary/20 blur-3xl rounded-full"></div>
            <div class="absolute -bottom-12 -left-12 w-48 h-48 bg-primary/10 blur-3xl rounded-full"></div>
        </div>
    </div>
</section>
<!-- Social Proof -->
<section class="py-16 border-y border-border-subtle bg-white">
    <div class="max-w-container-max mx-auto px-margin-page">
        <p class="text-center font-label-md text-label-md text-text-secondary uppercase tracking-widest mb-12">Dipercaya oleh 2,000+ event organizer kelas dunia</p>
        <div class="flex flex-wrap justify-center items-center gap-x-20 gap-y-10 grayscale opacity-50">
            <span class="font-headline-lg font-bold">TECHCON</span>
            <span class="font-headline-lg font-bold">GLOBAL_EXPO</span>
            <span class="font-headline-lg font-bold">VORTEX_LIVE</span>
            <span class="font-headline-lg font-bold">EVENTUM</span>
            <span class="font-headline-lg font-bold">PLATINUM_PRO</span>
        </div>
    </div>
</section>
<!-- Features (Bento Grid) -->
<section class="py-32 bg-background" id="features">
    <div class="max-w-container-max mx-auto px-margin-page">
        <div class="mb-16">
            <span class="text-primary font-label-md text-label-md uppercase tracking-wide">Ekosistem Utama</span>
            <h2 class="font-headline-xl text-headline-xl mt-2">Direkayasa untuk Ketenangan Operasional</h2>
        </div>
        <div class="bento-grid">
            <!-- Feature 1: AI Health Score -->
            <div class="col-span-12 md:col-span-7 bg-white rounded-3xl p-8 border border-border-subtle shadow-soft relative overflow-hidden group">
                <div class="relative z-10">
                    <div class="w-12 h-12 bg-primary-fixed text-primary rounded-xl flex items-center justify-center mb-6">
                        <span class="material-symbols-outlined">auto_awesome</span>
                    </div>
                    <h3 class="font-headline-lg text-headline-lg mb-4">Skor Kesehatan Proyek AI</h3>
                    <p class="text-text-secondary font-body-lg text-body-lg max-w-md">Mesin neural kami memantau kecepatan tugas dan pengeluaran anggaran secara real-time, memprediksi hambatan sebelum terjadi.</p>
                </div>
                <div class="mt-12 flex items-center gap-4">
                    <div class="h-2 w-full bg-surface-container rounded-full overflow-hidden">
                        <div class="h-full bg-primary w-[88%] rounded-full shadow-[0_0_15px_rgba(0,74,198,0.4)]"></div>
                    </div>
                    <span class="font-label-md text-label-md text-primary">88% Sehat</span>
                </div>
                <div class="absolute right-0 bottom-0 translate-x-1/4 translate-y-1/4 opacity-10 group-hover:opacity-20 transition-opacity">
                    <span class="material-symbols-outlined text-[240px]">shield</span>
                </div>
            </div>
            <!-- Feature 2: Budget Planning -->
            <div class="col-span-12 md:col-span-5 bg-on-background rounded-3xl p-8 border border-outline-variant shadow-soft relative text-white overflow-hidden">
                <div class="w-12 h-12 bg-secondary-container text-on-secondary-container rounded-xl flex items-center justify-center mb-6">
                    <span class="material-symbols-outlined">payments</span>
                </div>
                <h3 class="font-headline-lg text-headline-lg mb-4">Anggaran Granular</h3>
                <p class="text-outline font-body-md text-body-md">Pelacakan presisi hingga invoice vendor terakhir. Dukungan manajemen RAB lengkap dengan rekonsiliasi otomatis.</p>
                <div class="mt-8 p-4 bg-white/5 rounded-xl border border-white/10">
                    <div class="flex justify-between mb-2">
                        <span class="text-label-sm">Estimasi</span>
                        <span class="text-label-sm">Rp 1,2M</span>
                    </div>
                    <div class="flex justify-between text-secondary-fixed">
                        <span class="text-label-sm">Aktual</span>
                        <span class="text-label-sm">Rp 1,14M</span>
                    </div>
                </div>
            </div>
            <!-- Feature 3: Division Management -->
            <div class="col-span-12 md:col-span-4 bg-white rounded-3xl p-8 border border-border-subtle shadow-soft">
                <div class="w-12 h-12 bg-tertiary-fixed text-tertiary rounded-xl flex items-center justify-center mb-6">
                    <span class="material-symbols-outlined">groups</span>
                </div>
                <h3 class="font-headline-lg text-headline-lg mb-4">Akses Divisi</h3>
                <p class="text-text-secondary font-body-md text-body-md">Pisahkan alur kerja namun tetap pertahankan visibilitas pusat. Sempurna untuk tim Sekretariat, Produksi, dan Pemasaran.</p>
            </div>
            <!-- Feature 4: Real-time Comms -->
            <div class="col-span-12 md:col-span-8 bg-surface-container-low rounded-3xl p-8 border border-border-subtle shadow-soft flex flex-col md:flex-row gap-8 items-center">
                <div class="flex-grow">
                    <h3 class="font-headline-lg text-headline-lg mb-4">Command Center Terpadu</h3>
                    <p class="text-text-secondary font-body-lg text-body-lg">Berhenti berpindah tab. Dapatkan pengarahan event, komunikasi vendor, timeline, dan persetujuan aset dalam satu tempat.</p>
                </div>
                <div class="w-full md:w-64 aspect-square bg-white rounded-2xl border border-border-subtle p-4 shadow-soft">
                    <div class="space-y-3">
                        <div class="h-3 w-3/4 bg-surface-variant rounded"></div>
                        <div class="h-3 w-1/2 bg-surface-variant rounded opacity-50"></div>
                        <div class="mt-4 flex -space-x-2">
                            <div class="w-8 h-8 rounded-full border-2 border-white bg-slate-200"></div>
                            <div class="w-8 h-8 rounded-full border-2 border-white bg-slate-300"></div>
                            <div class="w-8 h-8 rounded-full border-2 border-white bg-slate-400"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Testimonials -->
<section class="py-32 bg-white relative">
    <div class="max-w-container-max mx-auto px-margin-page">
        <div class="text-center mb-16">
            <h2 class="font-headline-xl text-headline-xl">Dicintai oleh Para Pemimpin Logistik</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Testimonial 1 -->
            <div class="p-8 rounded-2xl bg-background border border-border-subtle relative">
                <span class="material-symbols-outlined text-primary text-[40px] absolute -top-5 -left-2 bg-white px-2">format_quote</span>
                <p class="font-body-lg text-body-lg text-on-surface mb-8 italic">"Coordination mengubah cara kami menjalankan event tahunan. Alat manajemen divisi memungkinkan tim produksi kami tetap gesit tanpa kehilangan sinkronisasi dengan pemasaran."</p>
                <div class="flex items-center gap-4">
                    <img class="w-12 h-12 rounded-full object-cover" data-alt="Headshot of a professional event director" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDVotfX1eJaDDvcaZyF6S1yS0HtKk9H5O0mDilAXphkZle0rnw0tRa_GIOmgfDu0aBVqm1Ag8RUvbVyWO_iBAKWms32Ot7hQFfQ4wR8GrpyQ3okYA1jg3nLrQczD8GvVRwVjawjPHy9McO1irXUs_CNtbhkwyFZ2uEU3xK7Vvbjxi88PLKeybONsWYr6jFX_Q-eWEJFicOuGjnnvKIcBjtiQ8ta7dK8tcEsawIupmavJBpynkKJmCuomxvPOO_JXKYGwq5Ttmb0hao"/>
                    <div>
                        <p class="font-label-md text-label-md">Sarah Jenkins</p>
                        <p class="text-text-secondary text-[12px]">Director of Ops, TechCon</p>
                    </div>
                </div>
            </div>
            <!-- Testimonial 2 -->
            <div class="p-8 rounded-2xl bg-background border border-border-subtle relative">
                <span class="material-symbols-outlined text-primary text-[40px] absolute -top-5 -left-2 bg-white px-2">format_quote</span>
                <p class="font-body-lg text-body-lg text-on-surface mb-8 italic">"Skor kesehatan AI bukan sekadar gimmick—ini benar-benar mendeteksi keterlambatan vendor yang bisa menghentikan pembangunan panggung kami. Sangat esensial."</p>
                <div class="flex items-center gap-4">
                    <img class="w-12 h-12 rounded-full object-cover" data-alt="Close-up portrait of a young male professional" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA4bXFwhzLuixOfkmz60Ed5Oc5wfnfw_hJu0LSBpNw8aYot8C01kCgX5Xjq1a0_4vmhGokR39rSv_H6KcBU2LTe-hZbf4SOp7iiSM31-g3OiT82d1DRcOxVDIc04YypQx5tbXDQqfxk2xhgEwecOD9G_1lWirZ6hfb2QPfjfVNCBybxsK-2Of57WiPCIKEH9DC_UJoLJA1hOtStgkHdRuEX19zpz1rh6IQSfzp1jnu4qaxvlxZbhrV734Gg6Tv5sjljOC9oxUo1gmU"/>
                    <div>
                        <p class="font-label-md text-label-md">Marcus Thorne</p>
                        <p class="text-text-secondary text-[12px]">Lead Producer, Vortex Live</p>
                    </div>
                </div>
            </div>
            <!-- Testimonial 3 -->
            <div class="p-8 rounded-2xl bg-background border border-border-subtle relative">
                <span class="material-symbols-outlined text-primary text-[40px] absolute -top-5 -left-2 bg-white px-2">format_quote</span>
                <p class="font-body-lg text-body-lg text-on-surface mb-8 italic">"Akhirnya, ada platform yang memahami kerumitan anggaran event. Kami telah mengurangi waktu rekonsiliasi keuangan kami lebih dari 40%."</p>
                <div class="flex items-center gap-4">
                    <img class="w-12 h-12 rounded-full object-cover" data-alt="A portrait of a mature professional man" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDxG2tg85-4bFevxMZJZ2BFRmdl0iDQidbKDod7yf-ClpYSATKXdtgmWqkccXqWHhUDrCo9ivDzgFsRx0YW9aa-8RiKNfeRjOJa3TGgI-vUgsxAC8aJVqSgNx9_oq0mMN4tz-7Xd8IXJidoWzOPTrswKqRREIZgPSvdH9zvY6YySFdMs1uXeB_Un9Qr6NFqWJMCNhUknMUNac2tNplqRas_YLjcJxwyetynChyfa2jTr0Z2M2IJCV0hLfPAhWguJ8ZcHIv-qhC-HQQ"/>
                    <div>
                        <p class="font-label-md text-label-md">David Chen</p>
                        <p class="text-text-secondary text-[12px]">CFO, Global Expo Group</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Pricing Tiers -->
<section class="py-32 bg-background" id="pricing">
    <div class="max-w-container-max mx-auto px-margin-page">
        <div class="text-center max-w-2xl mx-auto mb-16">
            <h2 class="font-headline-xl text-headline-xl mb-4">Paket Skalabel untuk Setiap Skala</h2>
            <p class="text-text-secondary font-body-lg text-body-lg">Dari workshop butik hingga festival berskala global.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-stack-lg items-end">
            <!-- Starter -->
            <div class="bg-white rounded-3xl p-8 border border-border-subtle shadow-soft">
                <p class="font-label-md text-label-md text-text-secondary uppercase mb-2">Pemula</p>
                <div class="flex items-baseline gap-1 mb-6">
                    <span class="font-headline-xl text-[40px]">Gratis</span>
                </div>
                <ul class="space-y-4 mb-8">
                    <li class="flex items-center gap-3">
                        <span class="material-symbols-outlined text-success">check_circle</span>
                        <span class="text-body-md">Hingga 3 Event / Tahun</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <span class="material-symbols-outlined text-success">check_circle</span>
                        <span class="text-body-md">Budgeting Dasar</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <span class="material-symbols-outlined text-success">check_circle</span>
                        <span class="text-body-md">Daftar Tugas Bersama</span>
                    </li>
                </ul>
                <a href="{{ route('register') }}" class="block w-full py-3 rounded-xl border border-primary text-primary font-label-md text-label-md hover:bg-primary-fixed transition-colors text-center">Mulai Gratis</a>
            </div>
            <!-- Pro -->
            <div class="bg-on-background rounded-3xl p-10 border border-primary shadow-float relative transform scale-105 z-10 text-white">
                <div class="absolute top-0 right-8 -translate-y-1/2 bg-primary text-on-primary px-4 py-1 rounded-full text-label-sm font-bold uppercase">Paling Populer</div>
                <p class="font-label-md text-label-md text-outline uppercase mb-2">Operasional Pro</p>
                <div class="flex items-baseline gap-1 mb-6">
                    <span class="font-headline-xl text-[40px] text-white">Rp 199rb</span>
                    <span class="text-outline text-body-md">/bulan</span>
                </div>
                <ul class="space-y-4 mb-8">
                    <li class="flex items-center gap-3">
                        <span class="material-symbols-outlined text-secondary-fixed">check_circle</span>
                        <span class="text-body-md">Event Tidak Terbatas</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <span class="material-symbols-outlined text-secondary-fixed">check_circle</span>
                        <span class="text-body-md">Penilaian Kesehatan AI</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <span class="material-symbols-outlined text-secondary-fixed">check_circle</span>
                        <span class="text-body-md">Manajemen Divisi</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <span class="material-symbols-outlined text-secondary-fixed">check_circle</span>
                        <span class="text-body-md">Portal Vendor</span>
                    </li>
                </ul>
                <a href="{{ route('register') }}" class="block w-full py-4 rounded-xl bg-primary text-on-primary font-headline-md text-headline-md shadow-lg hover:bg-primary/90 transition-transform active:scale-[0.98] text-center">Pilih Pro Sekarang</a>
            </div>
            <!-- Enterprise -->
            <div class="bg-white rounded-3xl p-8 border border-border-subtle shadow-soft">
                <p class="font-label-md text-label-md text-text-secondary uppercase mb-2">Enterprise</p>
                <div class="flex items-baseline gap-1 mb-6">
                    <span class="font-headline-xl text-[40px]">Kustom</span>
                </div>
                <ul class="space-y-4 mb-8">
                    <li class="flex items-center gap-3">
                        <span class="material-symbols-outlined text-success">check_circle</span>
                        <span class="text-body-md">Dashboard White-label</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <span class="material-symbols-outlined text-success">check_circle</span>
                        <span class="text-body-md">Dukungan SLA Prioritas</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <span class="material-symbols-outlined text-success">check_circle</span>
                        <span class="text-body-md">Integrasi API Kustom</span>
                    </li>
                </ul>
                <a href="#" class="block w-full py-3 rounded-xl border border-on-surface text-on-surface font-label-md text-label-md hover:bg-surface-container transition-colors text-center">Hubungi Sales</a>
            </div>
        </div>
    </div>
</section>
<!-- FAQ -->
<section class="py-32 bg-white" id="faq">
    <div class="max-w-3xl mx-auto px-margin-page">
        <h2 class="font-headline-xl text-headline-xl text-center mb-16">Pertanyaan yang Sering Diajukan</h2>
        <div class="space-y-4">
            <details class="group border border-border-subtle rounded-2xl p-6 bg-background open:bg-white transition-all cursor-pointer">
                <summary class="flex justify-between items-center list-none font-headline-md text-headline-md">
                    Bagaimana cara kerja Skor Kesehatan AI?
                    <span class="material-symbols-outlined group-open:rotate-180 transition-transform">expand_more</span>
                </summary>
                <p class="mt-4 text-text-secondary font-body-lg text-body-lg">AI menganalisis lebih dari 50 titik data termasuk tingkat penyelesaian tugas, respons vendor, dan tren anggaran historis untuk menghitung persentase risiko real-time dari event Anda.</p>
            </details>
            <details class="group border border-border-subtle rounded-2xl p-6 bg-background open:bg-white transition-all cursor-pointer">
                <summary class="flex justify-between items-center list-none font-headline-md text-headline-md">
                    Bolehkah saya mengimpor spreadsheet yang ada?
                    <span class="material-symbols-outlined group-open:rotate-180 transition-transform">expand_more</span>
                </summary>
                <p class="mt-4 text-text-secondary font-body-lg text-body-lg">Ya! Coordination mendukung impor massal CSV dan Excel untuk daftar tugas, anggaran, dan daftar vendor. AI kami bahkan akan mencoba memetakan kolom Anda secara otomatis ke kolom kami.</p>
            </details>
            <details class="group border border-border-subtle rounded-2xl p-6 bg-background open:bg-white transition-all cursor-pointer">
                <summary class="flex justify-between items-center list-none font-headline-md text-headline-md">
                    Apakah ada aplikasi seluler untuk tim lapangan?
                    <span class="material-symbols-outlined group-open:rotate-180 transition-transform">expand_more</span>
                </summary>
                <p class="mt-4 text-text-secondary font-body-lg text-body-lg">Tentu saja. Platform kami didesain responsif untuk layar ponsel, dan kami juga memiliki aplikasi native iOS dan Android khusus untuk eksekusi lapangan.</p>
            </details>
        </div>
    </div>
</section>
<!-- CTA Section -->
<section class="py-24">
    <div class="max-w-container-max mx-auto px-margin-page">
        <div class="bg-primary rounded-[40px] p-12 md:p-24 text-center text-white relative overflow-hidden">
            <div class="absolute inset-0 opacity-20 pointer-events-none"></div>
            <div class="relative z-10">
                <h2 class="font-headline-xl text-[40px] md:text-[56px] leading-tight mb-8">Siap Membawa Keteraturan pada Event Anda?</h2>
                <p class="font-body-lg text-body-lg text-primary-fixed mb-12 max-w-2xl mx-auto">Bergabunglah dengan ribuan perencana yang telah memprofesionalkan operasi event mereka bersama Coordination.</p>
                <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                    <a href="{{ route('register') }}" class="w-full sm:w-auto bg-white text-primary px-10 py-5 rounded-2xl font-headline-md text-headline-md hover:scale-105 transition-transform shadow-xl inline-block">Mulai Gratis Sekarang</a>
                    <a href="#" class="w-full sm:w-auto border border-white/30 bg-white/10 backdrop-blur text-white px-10 py-5 rounded-2xl font-headline-md text-headline-md hover:bg-white/20 transition-colors inline-block">Jadwalkan Demo</a>
                </div>
            </div>
        </div>
    </div>
</section>
</main>
<!-- Footer -->
<footer class="bg-on-background pt-24 pb-12 text-white">
    <div class="max-w-container-max mx-auto px-margin-page">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-24">
            <div class="col-span-1 md:col-span-1">
                <span class="font-headline-lg text-headline-lg font-bold text-white mb-6 flex items-center gap-2">
                    <span class="material-symbols-outlined text-primary">bolt</span> Coordination
                </span>
                <p class="text-outline font-body-md text-body-md mb-8">Operasi event yang direkayasa secara presisi untuk enterprise modern.</p>
                <div class="flex gap-4">
                    <a class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center hover:bg-primary transition-colors" href="#">
                        <span class="material-symbols-outlined text-[20px]">hub</span>
                    </a>
                    <a class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center hover:bg-primary transition-colors" href="#">
                        <span class="material-symbols-outlined text-[20px]">public</span>
                    </a>
                    <a class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center hover:bg-primary transition-colors" href="#">
                        <span class="material-symbols-outlined text-[20px]">mail</span>
                    </a>
                </div>
            </div>
            <div>
                <h4 class="font-label-md text-label-md text-white mb-6 uppercase tracking-widest">Platform</h4>
                <ul class="space-y-4 text-outline font-body-md">
                    <li><a class="hover:text-white transition-colors" href="#">Kesehatan Event</a></li>
                    <li><a class="hover:text-white transition-colors" href="#">Logika Anggaran</a></li>
                    <li><a class="hover:text-white transition-colors" href="#">Sinkronisasi Divisi</a></li>
                    <li><a class="hover:text-white transition-colors" href="#">Integrasi API</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-label-md text-label-md text-white mb-6 uppercase tracking-widest">Perusahaan</h4>
                <ul class="space-y-4 text-outline font-body-md">
                    <li><a class="hover:text-white transition-colors" href="#">Tentang Kami</a></li>
                    <li><a class="hover:text-white transition-colors" href="#">Karir</a></li>
                    <li><a class="hover:text-white transition-colors" href="#">Privasi</a></li>
                    <li><a class="hover:text-white transition-colors" href="#">Syarat & Ketentuan</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-label-md text-label-md text-white mb-6 uppercase tracking-widest">Tetap Terkoneksi</h4>
                <p class="text-outline font-body-sm text-body-sm mb-4">Tips bulanan tentang presisi ops event.</p>
                <form class="flex gap-2">
                    <input class="bg-white/5 border border-white/10 rounded-lg px-4 py-2 text-body-sm flex-grow focus:ring-primary focus:border-primary outline-none" placeholder="Email" type="email"/>
                    <button class="bg-primary px-4 py-2 rounded-lg font-label-md text-label-md hover:bg-primary/90 transition-colors">Gabung</button>
                </form>
            </div>
        </div>
        <div class="pt-12 border-t border-white/10 flex flex-col md:flex-row justify-between items-center gap-4 text-outline font-body-sm text-body-sm">
            <p>© 2026 Coordination Enterprise Ops. Hak cipta dilindungi.</p>
            <div class="flex gap-8">
                <a class="hover:text-white" href="#">Status</a>
                <a class="hover:text-white" href="#">Bantuan</a>
                <a class="hover:text-white" href="#">Keamanan</a>
            </div>
        </div>
    </div>
</footer>
<script>
    // Micro-interactions and simple animations
    document.querySelectorAll('details').forEach((el) => {
        el.addEventListener('toggle', (e) => {
            if (el.open) {
                document.querySelectorAll('details').forEach((other) => {
                    if (other !== el) other.removeAttribute('open');
                });
            }
        });
    });

    // Add some "parallax" motion to decorative elements
    window.addEventListener('mousemove', (e) => {
        const moveX = (e.clientX - window.innerWidth / 2) * 0.01;
        const moveY = (e.clientY - window.innerHeight / 2) * 0.01;
        
        document.querySelectorAll('.blur-3xl').forEach(el => {
            el.style.transform = `translate(${moveX}px, ${moveY}px)`;
        });
    });
</script>
</body>
</html>
