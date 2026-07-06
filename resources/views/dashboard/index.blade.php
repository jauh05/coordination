<x-layouts.app title="Mission Control | Coordination">
<div class="flex-grow p-margin max-w-screen-2xl mx-auto w-full space-y-lg">
    <!-- Hero Section: Welcome & Core KPIs -->
    <section class="grid grid-cols-1 lg:grid-cols-3 gap-lg">
        <div class="lg:col-span-2 hero-gradient rounded-2xl p-xl shadow-lg relative overflow-hidden text-on-primary">
            
            <div class="relative z-10 space-y-md">
                <div class="flex justify-between items-start">
                    <div>
                        <h2 class="font-headline-lg text-headline-lg">Selamat pagi, Jauhar 👋</h2>
                        <p class="font-body-lg text-body-lg opacity-90">Festival Musik Indonesia 2027 — Operasi berjalan sesuai rencana.</p>
                    </div>
                    <div class="bg-white/10 backdrop-blur-md px-md py-sm rounded-xl border border-white/20 text-center">
                        <span class="block text-headline-sm font-bold">H-18</span>
                        <span class="text-caption font-caption uppercase tracking-wider">Menuju Event</span>
                    </div>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-lg pt-xl border-t border-white/10">
                    <div>
                        <p class="text-caption font-caption opacity-80 mb-xs">Skor Kesehatan</p>
                        <div class="flex items-center gap-sm">
                            <span class="text-headline-sm font-bold">89/100</span>
                            <span class="w-3 h-3 bg-[#4edea3] rounded-full shadow-[0_0_8px_#4edea3]"></span>
                        </div>
                    </div>
                    <div>
                        <p class="text-caption font-caption opacity-80 mb-xs">Progress Global</p>
                        <span class="text-headline-sm font-bold">74%</span>
                    </div>
                    <div class="col-span-2 md:col-span-2">
                        <p class="text-caption font-caption opacity-80 mb-xs">Realisasi Anggaran</p>
                        <div class="flex items-end gap-sm">
                            <span class="text-headline-sm font-bold">Rp318M</span>
                            <span class="text-caption font-caption opacity-80 mb-xs pb-0.5">/ Rp520M</span>
                        </div>
                    </div>
                </div>
                <div class="flex gap-md pt-md">
                    <a href="{{ route('events') }}" class="bg-white text-primary px-lg py-md rounded-xl font-label-md shadow-sm hover:shadow-md transition-all active:scale-95 inline-block">Lihat Detail Event</a>
                    <a href="{{ route('planning') }}" class="bg-white/10 hover:bg-white/20 text-white border border-white/20 px-lg py-md rounded-xl font-label-md transition-all active:scale-95 inline-block">Buka Workspace</a>
                </div>
            </div>
        </div>

        <!-- Event Health Gauge & Breakdown -->
        <div class="bg-surface-container-lowest border border-outline-variant/30 rounded-2xl p-xl shadow-sm flex flex-col items-center justify-center space-y-md">
            <div class="relative w-40 h-40 flex items-center justify-center">
                <svg class="w-full h-full transform -rotate-90">
                    <circle class="text-surface-container-high" cx="80" cy="80" fill="transparent" r="70" stroke="currentColor" stroke-width="12"></circle>
                    <circle class="text-primary" cx="80" cy="80" fill="transparent" r="70" stroke="currentColor" stroke-dasharray="440" stroke-dashoffset="48" stroke-width="12"></circle>
                </svg>
                <div class="absolute inset-0 flex flex-col items-center justify-center">
                    <span class="text-display-lg font-display-lg text-on-surface leading-none">89</span>
                    <span class="text-label-md font-label-md text-secondary tracking-widest font-bold">AMAN</span>
                </div>
            </div>
            <div class="w-full grid grid-cols-2 gap-x-lg gap-y-sm">
                <div class="flex justify-between items-center"><span class="text-caption font-caption text-on-surface-variant">Timeline</span><span class="text-label-md font-bold">95%</span></div>
                <div class="flex justify-between items-center"><span class="text-caption font-caption text-on-surface-variant">Budget</span><span class="text-label-md font-bold">92%</span></div>
                <div class="flex justify-between items-center"><span class="text-caption font-caption text-on-surface-variant">Produksi</span><span class="text-label-md font-bold">81%</span></div>
                <div class="flex justify-between items-center"><span class="text-caption font-caption text-on-surface-variant">Sponsor</span><span class="text-label-md font-bold text-error">72%</span></div>
                <div class="flex justify-between items-center"><span class="text-caption font-caption text-on-surface-variant">Vendor</span><span class="text-label-md font-bold">84%</span></div>
                <div class="flex justify-between items-center"><span class="text-caption font-caption text-on-surface-variant">SDM</span><span class="text-label-md font-bold">88%</span></div>
            </div>
        </div>
    </section>

    <!-- Mission Briefing & AI Insights (Bento Style) -->
    <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-lg">
        
        <!-- AI Mission Briefing -->
        <div class="bg-surface-container-lowest border border-outline-variant/30 rounded-2xl p-xl shadow-sm space-y-md">
            <div class="flex items-center gap-md">
                <div class="w-10 h-10 rounded-xl bg-tertiary/10 flex items-center justify-center text-tertiary">
                    <span class="material-symbols-outlined">assignment_turned_in</span>
                </div>
                <h3 class="font-title-md text-title-md">Mission Briefing Hari Ini</h3>
            </div>
            <p class="text-body-md text-on-surface-variant">Hari ini terdapat 5 prioritas utama yang membutuhkan perhatian Anda segera.</p>
            <ul class="space-y-sm">
                <li class="flex items-center gap-md p-md bg-surface-container hover:bg-surface-container-high transition-all rounded-xl cursor-pointer border border-transparent hover:border-outline-variant/30">
                    <span class="material-symbols-outlined text-primary">circle</span>
                    <span class="font-body-md">Finalisasi Vendor Lighting</span>
                </li>
                <li class="flex items-center gap-md p-md bg-surface-container hover:bg-surface-container-high transition-all rounded-xl cursor-pointer border border-transparent hover:border-outline-variant/30">
                    <span class="material-symbols-outlined text-primary">circle</span>
                    <span class="font-body-md">Review 3 Invoice Produksi</span>
                </li>
                <li class="flex items-center gap-md p-md bg-surface-container hover:bg-surface-container-high transition-all rounded-xl cursor-pointer border border-transparent hover:border-outline-variant/30">
                    <span class="material-symbols-outlined text-primary">circle</span>
                    <span class="font-body-md">Meeting Sponsor: Telkomsel</span>
                </li>
            </ul>
        </div>

        <!-- AI Insight Card -->
        <div class="bg-surface-container-lowest border border-outline-variant/30 rounded-2xl p-xl shadow-sm relative overflow-hidden group">
            <div class="absolute top-0 right-0 w-32 h-32 bg-tertiary/5 rounded-full -mr-16 -mt-16 blur-3xl group-hover:scale-150 transition-all duration-700"></div>
            <div class="flex items-center justify-between mb-md">
                <div class="flex items-center gap-md">
                    <div class="w-10 h-10 rounded-xl bg-primary/10 flex items-center justify-center text-primary">
                        <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">smart_toy</span>
                    </div>
                    <h3 class="font-title-md text-title-md">Wawasan AI</h3>
                </div>
                <span class="text-label-md text-primary font-bold">3 Peringatan</span>
            </div>
            <div class="space-y-md">
                <div class="p-md rounded-xl bg-error-container/20 border border-error/10">
                    <p class="text-label-md font-bold text-on-error-container flex items-center gap-sm">
                        <span class="material-symbols-outlined text-[18px]">warning</span> Vendor LED Belum Terkonfirmasi
                    </p>
                    <p class="text-caption text-on-surface-variant mt-1">Estimasi keterlambatan instalasi jika tidak difinalisasi hari ini: 48 jam.</p>
                </div>
                <div class="p-md rounded-xl bg-surface-container-low border border-outline-variant/30">
                    <p class="text-label-md font-bold text-on-surface flex items-center gap-sm">
                        <span class="material-symbols-outlined text-[18px] text-tertiary">lightbulb</span> Optimasi Budget Produksi
                    </p>
                    <p class="text-caption text-on-surface-variant mt-1">AI menyarankan realokasi Rp12M dari marketing ke vendor sound untuk menutupi kenaikan kurs.</p>
                </div>
            </div>
            <button class="w-full mt-lg py-md border border-primary/20 text-primary rounded-xl font-label-md hover:bg-primary-container/10 transition-all">Lihat Semua Rekomendasi</button>
        </div>

        <!-- Waiting Approval Summary -->
        <div class="bg-surface-container-lowest border border-outline-variant/30 rounded-2xl p-xl shadow-sm">
            <h3 class="font-title-md text-title-md mb-lg">Menunggu Persetujuan</h3>
            <div class="grid grid-cols-2 gap-md">
                <a href="{{ route('approval') }}" class="p-lg bg-surface-container rounded-2xl border border-outline-variant/20 hover:border-primary/30 transition-all cursor-pointer block">
                    <span class="text-display-lg font-display-lg block leading-none mb-2">03</span>
                    <span class="text-label-md font-label-md text-on-surface-variant uppercase tracking-tighter">Budget</span>
                </a>
                <a href="{{ route('approval') }}" class="p-lg bg-surface-container rounded-2xl border border-outline-variant/20 hover:border-primary/30 transition-all cursor-pointer block">
                    <span class="text-display-lg font-display-lg block leading-none mb-2">02</span>
                    <span class="text-label-md font-label-md text-on-surface-variant uppercase tracking-tighter">Vendor</span>
                </a>
                <a href="{{ route('approval') }}" class="p-lg bg-surface-container rounded-2xl border border-outline-variant/20 hover:border-primary/30 transition-all cursor-pointer block">
                    <span class="text-display-lg font-display-lg block leading-none mb-2">05</span>
                    <span class="text-label-md font-label-md text-on-surface-variant uppercase tracking-tighter">Invoice</span>
                </a>
                <a href="{{ route('approval') }}" class="p-lg bg-surface-container rounded-2xl border border-outline-variant/20 hover:border-primary/30 transition-all cursor-pointer block">
                    <span class="text-display-lg font-display-lg block leading-none mb-2">01</span>
                    <span class="text-label-md font-label-md text-on-surface-variant uppercase tracking-tighter">Kontrak</span>
                </a>
            </div>
        </div>

    </section>

    <!-- Quick Actions Bar -->
    <section class="flex gap-lg overflow-x-auto no-scrollbar pb-xs">
        <button class="flex-shrink-0 flex items-center gap-md bg-white border border-outline-variant/30 px-lg py-md rounded-2xl hover:shadow-md transition-all active:scale-95 group">
            <div class="w-10 h-10 rounded-full bg-emerald-100 flex items-center justify-center text-emerald-700 group-hover:scale-110 transition-transform">
                <span class="material-symbols-outlined">receipt_long</span>
            </div>
            <span class="font-label-md">Input Invoice</span>
        </button>
        <button class="flex-shrink-0 flex items-center gap-md bg-white border border-outline-variant/30 px-lg py-md rounded-2xl hover:shadow-md transition-all active:scale-95 group">
            <div class="w-10 h-10 rounded-full bg-primary-container/20 flex items-center justify-center text-primary group-hover:scale-110 transition-transform">
                <span class="material-symbols-outlined">person_add</span>
            </div>
            <span class="font-label-md">Tambah Vendor</span>
        </button>
        <button class="flex-shrink-0 flex items-center gap-md bg-white border border-outline-variant/30 px-lg py-md rounded-2xl hover:shadow-md transition-all active:scale-95 group">
            <div class="w-10 h-10 rounded-full bg-amber-50 flex items-center justify-center text-amber-700 group-hover:scale-110 transition-transform">
                <span class="material-symbols-outlined">upload_file</span>
            </div>
            <span class="font-label-md">Upload Dokumen</span>
        </button>
        <button class="flex-shrink-0 flex items-center gap-md bg-white border border-outline-variant/30 px-lg py-md rounded-2xl hover:shadow-md transition-all active:scale-95 group">
            <div class="w-10 h-10 rounded-full bg-surface-container-high flex items-center justify-center text-on-surface group-hover:scale-110 transition-transform">
                <span class="material-symbols-outlined">analytics</span>
            </div>
            <span class="font-label-md">Buat Laporan</span>
        </button>
    </section>

    <!-- Main Workspace Area: Timeline & Division Overview -->
    <section class="grid grid-cols-1 xl:grid-cols-4 gap-lg">
        
        <!-- Timeline & Budget Progress -->
        <div class="xl:col-span-3 space-y-lg">
            
            <!-- Horizontal Timeline -->
            <div class="bg-surface-container-lowest border border-outline-variant/30 rounded-2xl p-xl shadow-sm overflow-hidden relative">
                <div class="flex items-center justify-between mb-xl">
                    <h3 class="font-title-md text-title-md">Peta Jalan Event</h3>
                    <div class="flex items-center gap-sm">
                        <span class="px-md py-1 bg-primary text-on-primary rounded-full text-caption font-bold">Fase Persiapan</span>
                        <span class="text-caption text-on-surface-variant">Jun - Aug 2027</span>
                    </div>
                </div>
                <div class="relative pt-10 pb-4">
                    <div class="absolute top-14 left-0 w-full h-1 bg-surface-container-high rounded-full"></div>
                    <div class="absolute top-14 left-0 w-3/4 h-1 bg-primary rounded-full"></div>
                    <div class="flex justify-between relative z-10">
                        <div class="flex flex-col items-center gap-2">
                            <div class="w-4 h-4 bg-primary rounded-full ring-4 ring-white"></div>
                            <span class="text-label-md font-bold">Konsep</span>
                            <span class="text-caption text-secondary">Selesai</span>
                        </div>
                        <div class="flex flex-col items-center gap-2">
                            <div class="w-4 h-4 bg-primary rounded-full ring-4 ring-white"></div>
                            <span class="text-label-md font-bold">Sponsorship</span>
                            <span class="text-caption text-secondary">Selesai</span>
                        </div>
                        <div class="flex flex-col items-center gap-2">
                            <div class="w-6 h-6 bg-white border-4 border-primary rounded-full shadow-md -mt-1"></div>
                            <span class="text-label-md font-black text-primary">Persiapan</span>
                            <span class="text-caption text-primary">H-18 Sekarang</span>
                        </div>
                        <div class="flex flex-col items-center gap-2">
                            <div class="w-4 h-4 bg-surface-container-high rounded-full ring-4 ring-white"></div>
                            <span class="text-label-md font-bold text-on-surface-variant">Produksi</span>
                            <span class="text-caption text-on-surface-variant">Aug 15</span>
                        </div>
                        <div class="flex flex-col items-center gap-2">
                            <div class="w-4 h-4 bg-surface-container-high rounded-full ring-4 ring-white"></div>
                            <span class="text-label-md font-bold text-on-surface-variant">Eksekusi</span>
                            <span class="text-caption text-on-surface-variant">Aug 28</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Division Overviews (Cards) -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-lg">
                <div class="bg-white p-lg rounded-2xl border border-outline-variant/30 shadow-sm space-y-md hover:shadow-md transition-all">
                    <div class="flex justify-between items-center">
                        <span class="text-label-md font-bold text-on-surface-variant">Produksi</span>
                        <span class="text-caption text-primary bg-primary/10 px-md py-0.5 rounded-full">81%</span>
                    </div>
                    <div class="h-1 w-full bg-surface-container rounded-full overflow-hidden">
                        <div class="h-full bg-primary w-[81%]"></div>
                    </div>
                    <p class="text-caption text-on-surface-variant">Panggung utama 40% terpasang. Vendor sound tiba besok.</p>
                </div>
                <div class="bg-white p-lg rounded-2xl border border-outline-variant/30 shadow-sm space-y-md hover:shadow-md transition-all">
                    <div class="flex justify-between items-center">
                        <span class="text-label-md font-bold text-on-surface-variant">Marketing</span>
                        <span class="text-caption text-secondary bg-secondary/10 px-md py-0.5 rounded-full">94%</span>
                    </div>
                    <div class="h-1 w-full bg-surface-container rounded-full overflow-hidden">
                        <div class="h-full bg-secondary w-[94%]"></div>
                    </div>
                    <p class="text-caption text-on-surface-variant">Tiket Early Bird Sold Out. Billboard Jakarta aktif.</p>
                </div>
                <div class="bg-white p-lg rounded-2xl border border-outline-variant/30 shadow-sm space-y-md hover:shadow-md transition-all">
                    <div class="flex justify-between items-center">
                        <span class="text-label-md font-bold text-on-surface-variant">Sponsor</span>
                        <span class="text-caption text-error bg-error/10 px-md py-0.5 rounded-full">72%</span>
                    </div>
                    <div class="h-1 w-full bg-surface-container rounded-full overflow-hidden">
                        <div class="h-full bg-error w-[72%]"></div>
                    </div>
                    <p class="text-caption text-on-surface-variant">Menunggu kontrak BCA & Aqua ditandatangani.</p>
                </div>
                <div class="bg-white p-lg rounded-2xl border border-outline-variant/30 shadow-sm space-y-md hover:shadow-md transition-all">
                    <div class="flex justify-between items-center">
                        <span class="text-label-md font-bold text-on-surface-variant">Logistik</span>
                        <span class="text-caption text-amber-700 bg-amber-100 px-md py-0.5 rounded-full">88%</span>
                    </div>
                    <div class="h-1 w-full bg-surface-container rounded-full overflow-hidden">
                        <div class="h-full bg-amber-500 w-[88%]"></div>
                    </div>
                    <p class="text-caption text-on-surface-variant">Catering final. Hotel artis 100% dibayar.</p>
                </div>
            </div>

            <!-- Risk Matrix & Budget Visual -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-lg">
                <div class="bg-surface-container-lowest border border-outline-variant/30 rounded-2xl p-xl shadow-sm">
                    <h3 class="font-title-md text-title-md mb-lg">Ringkasan Matriks Risiko</h3>
                    <div class="space-y-md">
                        <div class="flex items-center justify-between p-md bg-surface-container-low rounded-xl">
                            <div class="flex items-center gap-md">
                                <div class="w-2 h-10 bg-secondary rounded-full"></div>
                                <div>
                                    <p class="font-label-md">Pembengkakan Anggaran</p>
                                    <p class="text-caption text-on-surface-variant">Probabilitas: 10%</p>
                                </div>
                            </div>
                            <span class="text-label-md font-bold text-secondary">RENDAH</span>
                        </div>
                        <div class="flex items-center justify-between p-md bg-surface-container-low rounded-xl">
                            <div class="flex items-center gap-md">
                                <div class="w-2 h-10 bg-error rounded-full shadow-[0_0_8px_rgba(186,26,26,0.3)]"></div>
                                <div>
                                    <p class="font-label-md">Timeline Vendor</p>
                                    <p class="text-caption text-on-surface-variant">Probabilitas: 65%</p>
                                </div>
                            </div>
                            <span class="text-label-md font-bold text-error">TINGGI</span>
                        </div>
                        <div class="flex items-center justify-between p-md bg-surface-container-low rounded-xl">
                            <div class="flex items-center gap-md">
                                <div class="w-2 h-10 bg-[#FFB000] rounded-full"></div>
                                <div>
                                    <p class="font-label-md">Cuaca (Rain Plan)</p>
                                    <p class="text-caption text-on-surface-variant">Probabilitas: 40%</p>
                                </div>
                            </div>
                            <span class="text-label-md font-bold text-[#FFB000]">SEDANG</span>
                        </div>
                    </div>
                </div>

                <div class="bg-surface-container-lowest border border-outline-variant/30 rounded-2xl p-xl shadow-sm">
                    <div class="flex justify-between items-center mb-lg">
                        <h3 class="font-title-md text-title-md">Visualisasi Anggaran</h3>
                        <span class="text-caption text-on-surface-variant">Aktual vs Rencana</span>
                    </div>
                    <div class="h-48 w-full flex items-end justify-between gap-md pt-lg">
                        <div class="flex-grow flex flex-col gap-2 items-center">
                            <div class="w-full h-3/4 bg-primary/20 rounded-t-lg relative">
                                <div class="absolute bottom-0 w-full h-[90%] bg-primary rounded-t-lg"></div>
                            </div>
                            <span class="text-caption font-bold">Produksi</span>
                        </div>
                        <div class="flex-grow flex flex-col gap-2 items-center">
                            <div class="w-full h-full bg-primary/20 rounded-t-lg relative">
                                <div class="absolute bottom-0 w-full h-[60%] bg-primary rounded-t-lg"></div>
                            </div>
                            <span class="text-caption font-bold">Marketing</span>
                        </div>
                        <div class="flex-grow flex flex-col gap-2 items-center">
                            <div class="w-full h-1/2 bg-primary/20 rounded-t-lg relative">
                                <div class="absolute bottom-0 w-full h-[95%] bg-primary rounded-t-lg"></div>
                            </div>
                            <span class="text-caption font-bold">Talent</span>
                        </div>
                        <div class="flex-grow flex flex-col gap-2 items-center">
                            <div class="w-full h-2/3 bg-primary/20 rounded-t-lg relative">
                                <div class="absolute bottom-0 w-full h-[40%] bg-primary rounded-t-lg"></div>
                            </div>
                            <span class="text-caption font-bold">Logistik</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Right Rail: Activity Feed & Calendar -->
        <div class="space-y-lg">
            
            <!-- Activity Feed -->
            <div class="bg-surface-container-lowest border border-outline-variant/30 rounded-2xl p-xl shadow-sm">
                <div class="flex items-center justify-between mb-lg">
                    <h3 class="font-title-md text-title-md">Aktivitas Terkini</h3>
                    <button class="text-primary text-label-md font-bold hover:underline">Lihat Semua</button>
                </div>
                <div class="space-y-lg relative">
                    <div class="absolute left-4 top-2 bottom-2 w-px bg-outline-variant/30"></div>
                    <div class="relative flex gap-lg items-start">
                        <div class="z-10 w-8 h-8 rounded-full bg-primary flex items-center justify-center text-white ring-4 ring-white">
                            <span class="material-symbols-outlined text-[16px]" style="font-variation-settings: 'FILL' 1;">check</span>
                        </div>
                        <div class="pt-0.5">
                            <p class="text-label-md font-bold">Invoice Dibayar</p>
                            <p class="text-caption text-on-surface-variant">Marketing telah membayar tagihan vendor billboard.</p>
                            <p class="text-caption text-outline mt-1 italic">11.00 WIB</p>
                        </div>
                    </div>
                    <div class="relative flex gap-lg items-start">
                        <div class="z-10 w-8 h-8 rounded-full bg-tertiary flex items-center justify-center text-white ring-4 ring-white">
                            <span class="material-symbols-outlined text-[16px]" style="font-variation-settings: 'FILL' 1;">upload</span>
                        </div>
                        <div class="pt-0.5">
                            <p class="text-label-md font-bold">Dokumen Baru</p>
                            <p class="text-caption text-on-surface-variant">Riri mengunggah 'Stage Layout Rev.3'.</p>
                            <p class="text-caption text-outline mt-1 italic">10.15 WIB</p>
                        </div>
                    </div>
                    <div class="relative flex gap-lg items-start">
                        <div class="z-10 w-8 h-8 rounded-full bg-secondary flex items-center justify-center text-white ring-4 ring-white">
                            <span class="material-symbols-outlined text-[16px]" style="font-variation-settings: 'FILL' 1;">groups</span>
                        </div>
                        <div class="pt-0.5">
                            <p class="text-label-md font-bold">Meeting Selesai</p>
                            <p class="text-caption text-on-surface-variant">Sinkronisasi harian tim produksi & logistik.</p>
                            <p class="text-caption text-outline mt-1 italic">09.30 WIB</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Upcoming Calendar -->
            <div class="bg-surface-container-lowest border border-outline-variant/30 rounded-2xl p-xl shadow-sm">
                <h3 class="font-title-md text-title-md mb-lg">Jadwal Mendatang</h3>
                <div class="space-y-md">
                    <div class="p-md rounded-xl bg-surface-container hover:bg-primary-container/10 transition-all border border-transparent hover:border-primary/20 cursor-pointer">
                        <div class="flex justify-between">
                            <span class="text-label-md font-bold text-primary">Hari Ini, 14:00</span>
                            <span class="text-caption text-on-surface-variant">Zoom</span>
                        </div>
                        <p class="text-body-md mt-1">Review Media Plan (WPP)</p>
                    </div>
                    <div class="p-md rounded-xl bg-surface-container hover:bg-primary-container/10 transition-all border border-transparent hover:border-primary/20 cursor-pointer">
                        <div class="flex justify-between">
                            <span class="text-label-md font-bold">Besok, 10:00</span>
                            <span class="text-caption text-on-surface-variant">On-Site</span>
                        </div>
                        <p class="text-body-md mt-1">Site Visit: GBK Stadium</p>
                    </div>
                </div>
                <button class="w-full mt-lg py-md text-primary text-label-md font-bold border border-primary/20 rounded-xl hover:bg-primary/5 transition-all">Buka Kalender Penuh</button>
            </div>
            
        </div>
    </section>

    <!-- Bottom Navigation / Links -->
    <footer class="pt-xl pb-margin border-t border-outline-variant/30 flex flex-wrap gap-xl justify-between items-center text-on-surface-variant">
        <div class="flex gap-lg">
            <a class="text-label-md hover:text-primary transition-all" href="{{ route('support') }}">Basis Pengetahuan</a>
            <a class="text-label-md hover:text-primary transition-all" href="{{ route('evaluation') }}">Pelajaran Terambil</a>
            <a class="text-label-md hover:text-primary transition-all" href="{{ route('documents') }}">Perpustakaan Sumber Daya</a>
            <a class="text-label-md hover:text-primary transition-all" href="{{ route('support') }}">Support</a>
        </div>
        <div class="flex items-center gap-md">
            <span class="text-caption font-bold text-outline">v2.4.1 MISSION_STABLE</span>
            <div class="h-2 w-2 bg-secondary rounded-full animate-pulse"></div>
            <span class="text-caption font-bold text-secondary uppercase tracking-widest">Sistem Online</span>
        </div>
    </footer>
</div>

@push('scripts')
<script>
    // Micro-interaction for cards
    document.querySelectorAll('.bg-surface-container-lowest').forEach(card => {
        card.addEventListener('mouseenter', () => {
            card.classList.add('shadow-md');
            card.style.transform = 'translateY(-2px)';
            card.style.transition = 'all 0.3s cubic-bezier(0.16, 1, 0.3, 1)';
        });
        card.addEventListener('mouseleave', () => {
            card.classList.remove('shadow-md');
            card.style.transform = 'translateY(0)';
        });
    });

    // AI Assistant Float Effect
    const aiBadge = document.querySelector('.bg-primary-container\\/10');
    if (aiBadge) {
        let hue = 220;
        setInterval(() => {
            hue = (hue + 1) % 360;
            aiBadge.style.borderColor = `hsla(${hue}, 70%, 60%, 0.3)`;
        }, 50);
    }
</script>
@endpush
</x-layouts.app>
