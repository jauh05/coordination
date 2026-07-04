<!DOCTYPE html>
<html class="scroll-smooth" lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Login Anggota Divisi | Coordination</title>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet"/>
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
            "borderRadius": { "DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px" },
            "spacing": { "gutter": "24px", "sm": "8px", "lg": "24px", "xl": "32px", "xxl": "48px", "md": "16px", "xs": "4px", "margin": "32px" },
            "fontFamily": { "display-lg": ["Inter"], "body-md": ["Inter"], "body-lg": ["Inter"], "headline-lg": ["Inter"], "title-md": ["Inter"], "headline-sm": ["Inter"], "label-md": ["Inter"], "caption": ["Inter"], "headline-lg-mobile": ["Inter"], "headline-md": ["Inter"] },
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
    body { font-family: 'Inter', sans-serif; background-color: #f8f9ff; color: #0b1c30; }
    .material-symbols-outlined { font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24; display: inline-block; vertical-align: middle; }
    .glass-panel { background: rgba(255, 255, 255, 0.8); backdrop-filter: blur(20px); border: 1px solid #e2e4e7; }
    .bento-card { background: #ffffff; border: 1px solid #e2e4e7; border-radius: 16px; transition: transform 0.2s ease, box-shadow 0.2s ease; }
    .bento-card:hover { transform: translateY(-2px); box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1); }
    input:focus, select:focus { outline: none; border-color: #003594; box-shadow: 0 0 0 4px rgba(0, 53, 148, 0.1); }
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
        <a class="font-body-md text-body-md text-on-surface-variant hover:text-primary transition-colors" href="{{ route('support') }}">Bantuan</a>
    </div>
</header>

<!-- Main Login Canvas -->
<main class="w-full max-w-[1200px] mt-xxl grid grid-cols-1 lg:grid-cols-12 gap-lg relative">

    <!-- Left Side: Visual/Contextual Anchor -->
    <section class="hidden lg:flex lg:col-span-5 flex-col justify-center space-y-xl pr-xl">
        <div class="space-y-md">
            <span class="inline-flex items-center px-md py-xs rounded-full bg-tertiary-fixed text-on-tertiary-fixed font-label-md text-label-md">
                Portal Anggota Divisi
            </span>
            <h2 class="font-display-lg text-display-lg text-on-background leading-tight">
                Selesaikan task, kirim <span class="text-primary">laporan harian.</span>
            </h2>
            <p class="font-body-lg text-body-lg text-on-surface-variant">
                Akses workspace divisi Anda untuk mengerjakan task, upload dokumen, dan mengirim laporan progress harian ke Ketua Divisi.
            </p>
        </div>
        <!-- Mini Bento Proof Points -->
        <div class="grid grid-cols-2 gap-md">
            <div class="bento-card p-lg flex flex-col gap-sm">
                <span class="material-symbols-outlined text-secondary" style="font-variation-settings: 'FILL' 1;">assignment_turned_in</span>
                <p class="font-title-md text-title-md">Task Management</p>
                <p class="font-caption text-caption text-on-surface-variant">Buat, assign, dan pantau task.</p>
            </div>
            <div class="bento-card p-lg flex flex-col gap-sm">
                <span class="material-symbols-outlined text-primary" style="font-variation-settings: 'FILL' 1;">summarize</span>
                <p class="font-title-md text-title-md">Laporan AI</p>
                <p class="font-caption text-caption text-on-surface-variant">AI merangkum laporan anggota.</p>
            </div>
        </div>
    </section>

    <!-- Right Side: Login Form -->
    <section class="lg:col-span-7 flex flex-col items-center justify-center">
        <div class="w-full max-w-[520px] glass-panel rounded-xl shadow-sm p-xl md:p-xxl relative overflow-hidden">

            <!-- Role Navigation -->
            <div class="flex items-center gap-sm mb-xl p-xs bg-surface-container-low rounded-full">
                <a href="{{ route('login') }}" class="flex-1 py-sm text-center rounded-full font-label-md text-label-md text-on-surface-variant hover:text-primary transition-all">Perusahaan</a>
                <a href="{{ route('login.ketua') }}" class="flex-1 py-sm text-center rounded-full font-label-md text-label-md text-on-surface-variant hover:text-primary transition-all">Ketua Divisi</a>
                <a href="{{ route('login.anggota') }}" class="flex-1 py-sm text-center rounded-full font-label-md text-label-md bg-primary text-white shadow-sm transition-all">Anggota</a>
            </div>

            <form action="{{ route('dashboard') }}" class="space-y-xl">
                <header class="mb-lg">
                    <h3 class="font-headline-md text-headline-md mb-xs">Login Anggota Divisi</h3>
                    <p class="font-body-md text-body-md text-on-surface-variant">Masuk untuk mengerjakan task dan mengirim laporan harian.</p>
                </header>
                <div class="space-y-md">
                    <div class="space-y-xs">
                        <label class="font-label-md text-label-md text-on-surface">Kode Event</label>
                        <input class="w-full px-lg py-md rounded-full bg-surface-container-low border border-outline-variant transition-all font-body-md" placeholder="contoh: GTS-2024" required type="text"/>
                    </div>
                    <div class="space-y-xs">
                        <label class="font-label-md text-label-md text-on-surface">ID Anggota</label>
                        <input class="w-full px-lg py-md rounded-full bg-surface-container-low border border-outline-variant transition-all font-body-md" placeholder="contoh: AGT-PRD-001" required type="text"/>
                    </div>
                    <div class="space-y-xs">
                        <label class="font-label-md text-label-md text-on-surface">Nama Divisi</label>
                        <select class="w-full px-lg py-md rounded-full bg-surface-container-low border border-outline-variant transition-all font-body-md appearance-none" required>
                            <option value="">Pilih Divisi</option>
                            <option>Produksi</option>
                            <option>Marketing</option>
                            <option>Logistik</option>
                            <option>Sponsorship</option>
                            <option>Dokumentasi</option>
                            <option>Keuangan</option>
                            <option>Acara</option>
                        </select>
                    </div>
                    <div class="space-y-xs">
                        <label class="font-label-md text-label-md text-on-surface flex justify-between">
                            <span>Kata Sandi</span>
                            <a href="#" class="text-primary hover:underline font-label-md text-label-md">Lupa sandi?</a>
                        </label>
                        <div class="relative">
                            <input class="w-full px-lg py-md rounded-full bg-surface-container-low border border-outline-variant transition-all font-body-md" placeholder="••••••••" required type="password" id="password-field"/>
                            <button class="absolute right-4 top-1/2 -translate-y-1/2 text-outline hover:text-primary transition-colors" type="button" onclick="togglePassword()">
                                <span class="material-symbols-outlined" id="toggle-icon">visibility</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="mt-xl">
                    <button class="w-full py-md bg-primary text-white rounded-full font-title-md text-title-md hover:opacity-90 active:scale-95 transition-all flex items-center justify-center gap-sm" type="submit">
                        Masuk ke Workspace
                        <span class="material-symbols-outlined">arrow_forward</span>
                    </button>
                </div>
            </form>

            <div class="mt-xxl pt-lg border-t border-outline-variant text-center">
                <p class="font-body-md text-body-md text-on-surface-variant">
                    Akun dibuat oleh Ketua Divisi. Hubungi Ketua Divisi Anda jika belum memiliki akses.
                </p>
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
    </div>
</footer>

<!-- Background Decoration -->
<div class="fixed top-0 right-0 -z-10 w-[600px] h-[600px] bg-tertiary/5 rounded-full blur-[120px] -mr-64 -mt-64"></div>
<div class="fixed bottom-0 left-0 -z-10 w-[400px] h-[400px] bg-secondary/5 rounded-full blur-[100px] -ml-32 -mb-32"></div>

<script>
function togglePassword() {
    const field = document.getElementById('password-field');
    const icon = document.getElementById('toggle-icon');
    if (field.type === 'password') { field.type = 'text'; icon.textContent = 'visibility_off'; }
    else { field.type = 'password'; icon.textContent = 'visibility'; }
}
</script>
</body></html>
