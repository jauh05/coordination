<!DOCTYPE html>
<html class="scroll-smooth" lang="id">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Login | Coordination</title>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet"/>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#003594",
                        "on-primary": "#ffffff",
                        "primary-fixed": "#dbe1ff",
                        "on-primary-fixed": "#00174b",
                        "secondary": "#006c49",
                        "background": "#f8f9ff",
                        "on-background": "#0b1c30",
                        "surface": "#f8f9ff",
                        "on-surface": "#0b1c30",
                        "surface-container-low": "#eff4ff",
                        "surface-container-high": "#dce9ff",
                        "on-surface-variant": "#434654",
                        "outline-variant": "#c3c6d6",
                        "outline": "#737685",
                    },
                    spacing: {
                        "sm": "8px", "md": "16px", "lg": "24px", "xl": "32px", "xxl": "48px", "gutter": "24px"
                    },
                    fontFamily: {
                        "display-lg": ["Inter"], "title-md": ["Inter"], "body-md": ["Inter"], "body-lg": ["Inter"], "label-md": ["Inter"], "caption": ["Inter"]
                    }
                }
            }
        }
    </script>
    <style>
        body { font-family: 'Inter', sans-serif; background-color: #f8f9ff; color: #0b1c30; }
        .material-symbols-outlined { font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24; display: inline-block; vertical-align: middle; }
        .glass-panel { background: rgba(255, 255, 255, 0.8); backdrop-filter: blur(20px); border: 1px solid #e2e4e7; }
        [x-cloak] { display: none !important; }
    </style>
</head>
<body class="min-h-screen flex flex-col items-center justify-center p-md relative overflow-hidden" x-data="{ role: 'perusahaan' }">
    
    <!-- Background Decoration -->
    <div class="fixed top-0 right-0 -z-10 w-[600px] h-[600px] bg-primary/5 rounded-full blur-[120px] -mr-64 -mt-64"></div>
    <div class="fixed bottom-0 left-0 -z-10 w-[400px] h-[400px] bg-secondary/5 rounded-full blur-[100px] -ml-32 -mb-32"></div>

    <!-- Top Navigation -->
    <header class="fixed top-0 w-full z-50 flex justify-between items-center px-gutter py-md max-w-[1536px] mx-auto backdrop-blur-xl">
        <div class="flex items-center gap-sm">
            <span class="material-symbols-outlined text-primary text-3xl" style="font-variation-settings: 'FILL' 1;">hub</span>
            <h1 class="text-[16px] font-bold text-primary">Coordination</h1>
        </div>
        <div>
            <a class="text-[14px] text-on-surface-variant hover:text-primary transition-colors font-medium" href="{{ route('support') }}">
                Bantuan
            </a>
        </div>
    </header>

    <main class="w-full max-w-[1000px] grid grid-cols-1 md:grid-cols-2 gap-xl relative z-10 mt-10">
        
        <!-- Left Side: Branding -->
        <section class="hidden md:flex flex-col justify-center space-y-lg pr-lg">
            <span class="inline-flex items-center px-md py-1 rounded-full bg-primary-fixed text-on-primary-fixed text-[12px] font-bold w-max">
                Portal Akses Terpusat
            </span>
            <h2 class="text-[40px] font-bold text-on-background leading-tight tracking-tight">
                Selamat Datang Kembali di <span class="text-primary">Mission Control.</span>
            </h2>
            <p class="text-[16px] text-on-surface-variant leading-relaxed">
                Akses dashboard sesuai dengan otorisasi peran Anda. Pastikan komunikasi dan logistik event tetap tersinkronisasi.
            </p>
        </section>

        <!-- Right Side: Login Form -->
        <section class="flex flex-col items-center justify-center">
            <div class="w-full glass-panel rounded-2xl shadow-sm p-xl">
                
                <!-- Role Selector Tabs -->
                <div class="flex p-1 bg-surface-container-low rounded-xl mb-xl w-full">
                    <button @click="role = 'perusahaan'" 
                            :class="role === 'perusahaan' ? 'bg-white shadow-sm text-primary font-bold' : 'text-on-surface-variant hover:text-on-surface'"
                            class="flex-1 py-2 text-[13px] rounded-lg transition-all duration-200">
                        Perusahaan
                    </button>
                    <button @click="role = 'ketua'" 
                            :class="role === 'ketua' ? 'bg-white shadow-sm text-primary font-bold' : 'text-on-surface-variant hover:text-on-surface'"
                            class="flex-1 py-2 text-[13px] rounded-lg transition-all duration-200">
                        Ketua Divisi
                    </button>
                    <button @click="role = 'anggota'" 
                            :class="role === 'anggota' ? 'bg-white shadow-sm text-primary font-bold' : 'text-on-surface-variant hover:text-on-surface'"
                            class="flex-1 py-2 text-[13px] rounded-lg transition-all duration-200">
                        Anggota
                    </button>
                </div>

                <form action="{{ route('dashboard') }}" class="space-y-lg">
                    
                    <div class="space-y-sm">
                        <label class="text-[13px] font-bold text-on-surface block">
                            <span x-show="role === 'perusahaan'">Email Bisnis</span>
                            <span x-show="role === 'ketua'" x-cloak>Email atau ID Divisi</span>
                            <span x-show="role === 'anggota'" x-cloak>ID Anggota</span>
                        </label>
                        <div class="relative">
                            <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-outline text-[20px]">
                                <span x-show="role === 'perusahaan'">business</span>
                                <span x-show="role === 'ketua'" x-cloak>badge</span>
                                <span x-show="role === 'anggota'" x-cloak>person</span>
                            </span>
                            <input class="w-full pl-11 pr-4 py-3 rounded-xl bg-surface-container-low border border-outline-variant text-[14px] focus:ring-2 focus:ring-primary/20 transition-all" 
                                   :placeholder="role === 'perusahaan' ? 'nama@perusahaan.com' : (role === 'ketua' ? 'ID Ketua Divisi' : 'ID Anggota')" 
                                   required type="text"/>
                        </div>
                    </div>

                    <!-- Extra field for Anggota -->
                    <div x-show="role === 'anggota'" x-collapse x-cloak class="space-y-sm">
                        <label class="text-[13px] font-bold text-on-surface block">Kode Event</label>
                        <div class="relative">
                            <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-outline text-[20px]">qr_code</span>
                            <input class="w-full pl-11 pr-4 py-3 rounded-xl bg-surface-container-low border border-outline-variant text-[14px] focus:ring-2 focus:ring-primary/20 transition-all" 
                                   placeholder="Contoh: GTS-2024" type="text"/>
                        </div>
                    </div>

                    <div class="space-y-sm">
                        <div class="flex justify-between items-center block">
                            <label class="text-[13px] font-bold text-on-surface">Kata Sandi</label>
                            <a href="#" class="text-[12px] text-primary hover:underline font-medium">Lupa sandi?</a>
                        </div>
                        <div class="relative" x-data="{ show: false }">
                            <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-outline text-[20px]">lock</span>
                            <input class="w-full pl-11 pr-11 py-3 rounded-xl bg-surface-container-low border border-outline-variant text-[14px] focus:ring-2 focus:ring-primary/20 transition-all" 
                                   placeholder="••••••••" required :type="show ? 'text' : 'password'"/>
                            <button @click="show = !show" type="button" class="absolute right-4 top-1/2 -translate-y-1/2 text-outline hover:text-primary transition-colors">
                                <span class="material-symbols-outlined text-[20px]" x-text="show ? 'visibility_off' : 'visibility'"></span>
                            </button>
                        </div>
                    </div>

                    <div class="pt-2">
                        <button class="w-full py-3 bg-primary text-white rounded-xl font-bold text-[15px] hover:opacity-90 active:scale-95 transition-all flex items-center justify-center gap-2" type="submit">
                            Masuk Mission Control
                            <span class="material-symbols-outlined text-[18px]">login</span>
                        </button>
                    </div>

                    <!-- Register Link (only for Perusahaan) -->
                    <div x-show="role === 'perusahaan'" x-collapse class="text-center pt-4">
                        <p class="text-[14px] text-on-surface-variant">
                            Belum punya akun? 
                            <a class="text-primary font-bold hover:underline" href="{{ route('register') }}">Daftar Perusahaan</a>
                        </p>
                    </div>
                </form>
            </div>
        </section>

    </main>
</body>
</html>
