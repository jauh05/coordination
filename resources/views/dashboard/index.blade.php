<x-layouts.app title="Dasbor Operasi Eksekutif">
    <div class="p-margin-page max-w-container-max mx-auto w-full flex flex-col gap-stack-lg">
        <!-- HEADER SECTION -->
        <section class="flex flex-col md:flex-row md:items-end justify-between gap-4">
            <div>
                <h2 class="font-headline-xl text-headline-xl text-on-surface">Ringkasan Operasi</h2>
                <p class="font-body-md text-body-md text-text-secondary">Status Sistem: <span class="text-success font-semibold">Optimal</span> • Terakhir diperbarui 2 menit lalu</p>
            </div>
            <div class="flex gap-2">
                <button class="flex items-center gap-2 bg-surface border border-border-subtle px-4 py-2 rounded-lg font-label-md text-label-md hover:bg-surface-container transition-colors">
                    <span class="material-symbols-outlined text-[18px]">filter_list</span> Filter
                </button>
                <button class="flex items-center gap-2 bg-surface border border-border-subtle px-4 py-2 rounded-lg font-label-md text-label-md hover:bg-surface-container transition-colors">
                    <span class="material-symbols-outlined text-[18px]">download</span> Ekspor
                </button>
            </div>
        </section>

        <!-- KPI CARDS -->
        <section class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-stack-md">
            <div class="bg-surface p-stack-md rounded-xl border border-border-subtle shadow-sm flex flex-col gap-2">
                <div class="flex justify-between items-start">
                    <span class="text-text-secondary font-label-md text-label-md">Kesehatan Event</span>
                    <span class="text-success material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">favorite</span>
                </div>
                <div class="flex items-end gap-2">
                    <span class="font-headline-lg text-headline-lg">94%</span>
                    <span class="font-label-sm text-label-sm text-success pb-1">↑ 2.4%</span>
                </div>
                <div class="w-full bg-surface-container h-1.5 rounded-full overflow-hidden">
                    <div class="bg-success h-full rounded-full w-[94%]"></div>
                </div>
            </div>
            <div class="bg-surface p-stack-md rounded-xl border border-border-subtle shadow-sm flex flex-col gap-2">
                <div class="flex justify-between items-start">
                    <span class="text-text-secondary font-label-md text-label-md">Event Aktif</span>
                    <span class="text-primary material-symbols-outlined">event</span>
                </div>
                <div class="flex items-end gap-2">
                    <span class="font-headline-lg text-headline-lg">12</span>
                    <span class="font-label-sm text-label-sm text-text-secondary pb-1">Q3 Saat Ini</span>
                </div>
                <div class="flex gap-1">
                    <div class="flex-1 h-1.5 rounded-full bg-primary"></div>
                    <div class="flex-1 h-1.5 rounded-full bg-primary"></div>
                    <div class="flex-1 h-1.5 rounded-full bg-primary/20"></div>
                </div>
            </div>
            <div class="bg-surface p-stack-md rounded-xl border border-border-subtle shadow-sm flex flex-col gap-2">
                <div class="flex justify-between items-start">
                    <span class="text-text-secondary font-label-md text-label-md">Total Anggaran</span>
                    <span class="text-warning material-symbols-outlined">payments</span>
                </div>
                <div class="flex items-end gap-2">
                    <span class="font-headline-lg text-headline-lg">Rp 4,2M</span>
                    <span class="font-label-sm text-label-sm text-warning pb-1">78% Terpakai</span>
                </div>
                <div class="w-full bg-surface-container h-1.5 rounded-full overflow-hidden">
                    <div class="bg-warning h-full rounded-full w-[78%]"></div>
                </div>
            </div>
            <div class="bg-surface p-stack-md rounded-xl border border-border-subtle shadow-sm flex flex-col gap-2">
                <div class="flex justify-between items-start">
                    <span class="text-text-secondary font-label-md text-label-md">Realisasi</span>
                    <span class="text-tertiary material-symbols-outlined">trending_up</span>
                </div>
                <div class="flex items-end gap-2">
                    <span class="font-headline-lg text-headline-lg">82%</span>
                    <span class="font-label-sm text-label-sm text-success pb-1">↑ 12%</span>
                </div>
                <div class="w-full bg-surface-container h-1.5 rounded-full overflow-hidden">
                    <div class="bg-tertiary h-full rounded-full w-[82%]"></div>
                </div>
            </div>
            <div class="bg-surface p-stack-md rounded-xl border border-border-subtle shadow-sm flex flex-col gap-2">
                <div class="flex justify-between items-start">
                    <span class="text-text-secondary font-label-md text-label-md">Tingkat Risiko</span>
                    <span class="text-error material-symbols-outlined">report_problem</span>
                </div>
                <div class="flex items-end gap-2">
                    <span class="font-headline-lg text-headline-lg">Rendah</span>
                    <span class="font-label-sm text-label-sm text-text-secondary pb-1">2 Peringatan</span>
                </div>
                <div class="flex gap-1">
                    <div class="flex-1 h-1.5 rounded-full bg-success"></div>
                    <div class="flex-1 h-1.5 rounded-full bg-surface-container"></div>
                    <div class="flex-1 h-1.5 rounded-full bg-surface-container"></div>
                </div>
            </div>
        </section>

        <!-- MAIN GRID: AI INSIGHTS & CHARTS -->
        <section class="grid grid-cols-1 lg:grid-cols-12 gap-stack-lg">
            <!-- LEFT COLUMN: AI STRATEGIC INSIGHTS -->
            <div class="lg:col-span-8 flex flex-col gap-stack-lg">
                <!-- AI Recommendation Card -->
                <div class="relative overflow-hidden rounded-2xl bg-on-surface text-on-primary-container p-stack-lg shadow-xl">
                    <div class="absolute top-0 right-0 p-8 opacity-10">
                        <span class="material-symbols-outlined text-[120px]">auto_awesome</span>
                    </div>
                    <div class="relative z-10">
                        <div class="flex items-center gap-2 mb-4">
                            <span class="bg-primary/20 text-primary-fixed-dim px-3 py-1 rounded-full font-label-md text-label-md border border-primary/30 flex items-center gap-1">
                                <span class="material-symbols-outlined text-[16px]" style="font-variation-settings: 'FILL' 1;">auto_awesome</span>
                                Kecerdasan Strategis
                            </span>
                            <span class="text-outline text-label-sm font-label-sm">Diperbarui 5m lalu</span>
                        </div>
                        <h3 class="font-headline-lg text-headline-lg mb-2 text-white">Optimalkan Pengeluaran Produksi untuk Q4</h3>
                        <p class="font-body-md text-body-md text-outline-variant max-w-2xl mb-6">Analisis kami menunjukkan kebocoran anggaran 14% dalam pengadaan vendor lokal. Beralih ke kontrak global dapat menghemat Rp 142.000.000 di tiga event flagship mendatang.</p>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                            <div class="bg-white/10 backdrop-blur-sm p-4 rounded-xl border border-white/10 hover:bg-white/20 transition-all cursor-pointer">
                                <p class="font-label-md text-label-md text-primary-fixed-dim mb-1">Dampak</p>
                                <p class="font-headline-md text-headline-md text-white">Hemat Rp 142jt</p>
                            </div>
                            <div class="bg-white/10 backdrop-blur-sm p-4 rounded-xl border border-white/10 hover:bg-white/20 transition-all cursor-pointer">
                                <p class="font-label-md text-label-md text-primary-fixed-dim mb-1">Kepercayaan</p>
                                <p class="font-headline-md text-headline-md text-white">92% Andal</p>
                            </div>
                            <div class="bg-white/10 backdrop-blur-sm p-4 rounded-xl border border-white/10 hover:bg-white/20 transition-all cursor-pointer">
                                <p class="font-label-md text-label-md text-primary-fixed-dim mb-1">Urgensi</p>
                                <p class="font-headline-md text-headline-md text-white">Prioritas Tinggi</p>
                            </div>
                        </div>
                        <div class="mt-6 flex gap-3">
                            <button class="bg-primary text-white font-label-md text-label-md px-6 py-2.5 rounded-lg hover:brightness-110 active:scale-95 transition-all">Tinjau Strategi</button>
                            <button class="bg-white/10 text-white font-label-md text-label-md px-6 py-2.5 rounded-lg border border-white/20 hover:bg-white/20 active:scale-95 transition-all">Abaikan</button>
                        </div>
                    </div>
                </div>

                <!-- DATA VISUALIZATION SECTION -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-stack-lg">
                    <!-- Budget vs Realization Chart -->
                    <div class="bg-surface rounded-2xl border border-border-subtle p-stack-lg shadow-sm">
                        <div class="flex justify-between items-center mb-6">
                            <h4 class="font-headline-md text-headline-md text-on-surface">Utilisasi Anggaran</h4>
                            <select class="bg-surface-container-low border-none rounded-lg font-label-sm text-label-sm py-1.5 pl-3 pr-8 focus:ring-primary/20">
                                <option>6 Bulan Terakhir</option>
                                <option>Tahun Berjalan (YTD)</option>
                            </select>
                        </div>
                        <div class="h-64 w-full flex items-end justify-between gap-2 px-2 relative">
                            <div class="absolute inset-0 flex flex-col justify-between py-1 pointer-events-none">
                                <div class="border-t border-dashed border-outline-variant w-full h-0"></div>
                                <div class="border-t border-dashed border-outline-variant w-full h-0"></div>
                                <div class="border-t border-dashed border-outline-variant w-full h-0"></div>
                                <div class="border-t border-dashed border-outline-variant w-full h-0"></div>
                            </div>
                            <!-- Bar Chart Mock -->
                            <div class="group relative flex flex-col items-center gap-2 flex-1 max-w-[40px]">
                                <div class="w-full bg-primary/20 rounded-t-sm h-[60%] transition-all hover:bg-primary/30"></div>
                                <div class="w-full bg-primary rounded-t-sm h-[40%] absolute bottom-0 transition-all group-hover:brightness-110"></div>
                                <span class="font-label-sm text-label-sm text-text-secondary">Jan</span>
                            </div>
                            <div class="group relative flex flex-col items-center gap-2 flex-1 max-w-[40px]">
                                <div class="w-full bg-primary/20 rounded-t-sm h-[70%] transition-all hover:bg-primary/30"></div>
                                <div class="w-full bg-primary rounded-t-sm h-[55%] absolute bottom-0 transition-all group-hover:brightness-110"></div>
                                <span class="font-label-sm text-label-sm text-text-secondary">Feb</span>
                            </div>
                            <div class="group relative flex flex-col items-center gap-2 flex-1 max-w-[40px]">
                                <div class="w-full bg-primary/20 rounded-t-sm h-[85%] transition-all hover:bg-primary/30"></div>
                                <div class="w-full bg-primary rounded-t-sm h-[65%] absolute bottom-0 transition-all group-hover:brightness-110"></div>
                                <span class="font-label-sm text-label-sm text-text-secondary">Mar</span>
                            </div>
                            <div class="group relative flex flex-col items-center gap-2 flex-1 max-w-[40px]">
                                <div class="w-full bg-primary/20 rounded-t-sm h-[75%] transition-all hover:bg-primary/30"></div>
                                <div class="w-full bg-primary rounded-t-sm h-[70%] absolute bottom-0 transition-all group-hover:brightness-110"></div>
                                <span class="font-label-sm text-label-sm text-text-secondary">Apr</span>
                            </div>
                            <div class="group relative flex flex-col items-center gap-2 flex-1 max-w-[40px]">
                                <div class="w-full bg-primary/20 rounded-t-sm h-[90%] transition-all hover:bg-primary/30"></div>
                                <div class="w-full bg-primary rounded-t-sm h-[85%] absolute bottom-0 transition-all group-hover:brightness-110"></div>
                                <span class="font-label-sm text-label-sm text-text-secondary">Mei</span>
                            </div>
                            <div class="group relative flex flex-col items-center gap-2 flex-1 max-w-[40px]">
                                <div class="w-full bg-primary/20 rounded-t-sm h-[65%] transition-all hover:bg-primary/30"></div>
                                <div class="w-full bg-primary rounded-t-sm h-[50%] absolute bottom-0 transition-all group-hover:brightness-110"></div>
                                <span class="font-label-sm text-label-sm text-text-secondary">Jun</span>
                            </div>
                        </div>
                        <div class="mt-6 flex justify-center gap-6">
                            <div class="flex items-center gap-2">
                                <div class="w-3 h-3 rounded-full bg-primary/20"></div>
                                <span class="font-label-sm text-label-sm text-text-secondary">Dialokasikan</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <div class="w-3 h-3 rounded-full bg-primary"></div>
                                <span class="font-label-sm text-label-sm text-text-secondary">Pengeluaran Aktual</span>
                            </div>
                        </div>
                    </div>

                    <!-- Division Progress -->
                    <div class="bg-surface rounded-2xl border border-border-subtle p-stack-lg shadow-sm">
                        <div class="flex justify-between items-center mb-6">
                            <h4 class="font-headline-md text-headline-md text-on-surface">Progres Divisi</h4>
                            <button class="text-primary font-label-md text-label-md hover:underline">Detail</button>
                        </div>
                        <div class="space-y-6">
                            <div>
                                <div class="flex justify-between font-label-md text-label-md mb-2">
                                    <span>Produksi</span>
                                    <span>88%</span>
                                </div>
                                <div class="h-2 w-full bg-surface-container rounded-full overflow-hidden">
                                    <div class="h-full bg-success rounded-full" style="width: 88%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between font-label-md text-label-md mb-2">
                                    <span>Sekretariat</span>
                                    <span>62%</span>
                                </div>
                                <div class="h-2 w-full bg-surface-container rounded-full overflow-hidden">
                                    <div class="h-full bg-primary rounded-full" style="width: 62%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between font-label-md text-label-md mb-2">
                                    <span>Pemasaran</span>
                                    <span>94%</span>
                                </div>
                                <div class="h-2 w-full bg-surface-container rounded-full overflow-hidden">
                                    <div class="h-full bg-tertiary-container rounded-full" style="width: 94%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between font-label-md text-label-md mb-2">
                                    <span>Logistik</span>
                                    <span>45%</span>
                                </div>
                                <div class="h-2 w-full bg-surface-container rounded-full overflow-hidden">
                                    <div class="h-full bg-warning rounded-full" style="width: 45%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- RIGHT COLUMN: ACTIVITY & DEADLINES -->
            <div class="lg:col-span-4 flex flex-col gap-stack-lg">
                <!-- Recent Activity Feed -->
                <div class="bg-surface rounded-2xl border border-border-subtle p-stack-lg shadow-sm flex-1 flex flex-col">
                    <div class="flex justify-between items-center mb-6">
                        <h4 class="font-headline-md text-headline-md text-on-surface">Aktivitas Terbaru</h4>
                        <button class="p-2 hover:bg-surface-container-low rounded-full transition-colors"><span class="material-symbols-outlined text-[20px]">more_vert</span></button>
                    </div>
                    <div class="space-y-6 overflow-y-auto max-h-[400px] custom-scrollbar pr-2">
                        <div class="flex gap-4 group">
                            <div class="relative">
                                <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center text-primary border border-primary/20 shrink-0">
                                    <span class="material-symbols-outlined text-[18px]">verified</span>
                                </div>
                                <div class="absolute top-10 left-1/2 -translate-x-1/2 w-[1px] h-10 bg-border-subtle group-last:hidden"></div>
                            </div>
                            <div>
                                <p class="font-body-md text-body-md text-on-surface"><strong>Sarah Chen</strong> menyetujui anggaran untuk <span class="text-primary font-medium">Summer Tech Expo</span></p>
                                <span class="font-label-sm text-label-sm text-text-secondary">24 mnt lalu</span>
                            </div>
                        </div>
                        <div class="flex gap-4 group">
                            <div class="relative">
                                <div class="w-10 h-10 rounded-full bg-warning/10 flex items-center justify-center text-warning border border-warning/20 shrink-0">
                                    <span class="material-symbols-outlined text-[18px]">warning</span>
                                </div>
                                <div class="absolute top-10 left-1/2 -translate-x-1/2 w-[1px] h-10 bg-border-subtle group-last:hidden"></div>
                            </div>
                            <div>
                                <p class="font-body-md text-body-md text-on-surface">Keterlambatan pengiriman dilaporkan untuk <strong>Divisi Logistik</strong></p>
                                <span class="font-label-sm text-label-sm text-text-secondary">2 jam lalu</span>
                            </div>
                        </div>
                        <div class="flex gap-4 group">
                            <div class="relative">
                                <div class="w-10 h-10 rounded-full bg-success/10 flex items-center justify-center text-success border border-success/20 shrink-0">
                                    <span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">stars</span>
                                </div>
                                <div class="absolute top-10 left-1/2 -translate-x-1/2 w-[1px] h-10 bg-border-subtle group-last:hidden"></div>
                            </div>
                            <div>
                                <p class="font-body-md text-body-md text-on-surface">Peta Lokasi buatan AI baru dipublikasikan untuk <strong>Global Summit</strong></p>
                                <span class="font-label-sm text-label-sm text-text-secondary">4 jam lalu</span>
                            </div>
                        </div>
                        <div class="flex gap-4 group">
                            <div class="relative">
                                <div class="w-10 h-10 rounded-full bg-tertiary/10 flex items-center justify-center text-tertiary border border-tertiary/20 shrink-0">
                                    <span class="material-symbols-outlined text-[18px]">history_edu</span>
                                </div>
                                <div class="absolute top-10 left-1/2 -translate-x-1/2 w-[1px] h-10 bg-border-subtle group-last:hidden"></div>
                            </div>
                            <div>
                                <p class="font-body-md text-body-md text-on-surface"><strong>Marco Rossi</strong> mengarsipkan Evaluasi untuk <strong>Spring Charity Gala</strong></p>
                                <span class="font-label-sm text-label-sm text-text-secondary">Kemarin</span>
                            </div>
                        </div>
                    </div>
                    <button class="mt-6 w-full py-2 bg-surface-container-low hover:bg-surface-container transition-colors rounded-xl font-label-md text-label-md text-primary">Lihat Linimasa</button>
                </div>
                
                <!-- Upcoming Deadlines -->
                <div class="bg-surface rounded-2xl border border-border-subtle p-stack-lg shadow-sm">
                    <h4 class="font-headline-md text-headline-md text-on-surface mb-6">Tenggat Waktu Mendatang</h4>
                    <div class="space-y-4">
                        <div class="p-3 bg-error/5 rounded-xl border-l-4 border-error flex justify-between items-center">
                            <div>
                                <p class="font-label-md text-label-md text-on-surface">Pembayaran Vendor Final</p>
                                <p class="font-label-sm text-label-sm text-error">Hari ini, 17:00</p>
                            </div>
                            <span class="material-symbols-outlined text-error">notification_important</span>
                        </div>
                        <div class="p-3 bg-warning/5 rounded-xl border-l-4 border-warning flex justify-between items-center">
                            <div>
                                <p class="font-label-md text-label-md text-on-surface">Laporan Simulasi Keamanan</p>
                                <p class="font-label-sm text-label-sm text-warning">Besok</p>
                            </div>
                            <span class="material-symbols-outlined text-warning">schedule</span>
                        </div>
                        <div class="p-3 bg-primary/5 rounded-xl border-l-4 border-primary flex justify-between items-center">
                            <div>
                                <p class="font-label-md text-label-md text-on-surface">Persetujuan Rilis Pers</p>
                                <p class="font-label-sm text-label-sm text-primary">Rab, 14 Okt</p>
                            </div>
                            <span class="material-symbols-outlined text-primary">drafts</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- DATA DENSE FOOTER SECTION -->
        <section class="bg-surface rounded-2xl border border-border-subtle p-stack-lg shadow-sm">
            <div class="flex justify-between items-center mb-6">
                <div>
                    <h4 class="font-headline-md text-headline-md text-on-surface">Risiko Event Kritis</h4>
                    <p class="font-body-sm text-body-sm text-text-secondary">Status tugas yang dipantau AI untuk event utama</p>
                </div>
                <div class="flex gap-2">
                    <button class="bg-primary/5 text-primary p-2 rounded-lg"><span class="material-symbols-outlined">grid_view</span></button>
                    <button class="bg-surface-container-low text-text-secondary p-2 rounded-lg"><span class="material-symbols-outlined">list</span></button>
                </div>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="border-b border-border-subtle">
                            <th class="pb-4 font-label-md text-label-md text-text-secondary px-2">Nama Event</th>
                            <th class="pb-4 font-label-md text-label-md text-text-secondary px-2">Manajer</th>
                            <th class="pb-4 font-label-md text-label-md text-text-secondary px-2">Fase</th>
                            <th class="pb-4 font-label-md text-label-md text-text-secondary px-2">Penyelesaian</th>
                            <th class="pb-4 font-label-md text-label-md text-text-secondary px-2">Skor Kesehatan</th>
                            <th class="pb-4 font-label-md text-label-md text-text-secondary px-2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-border-subtle">
                        <tr class="hover:bg-surface-container-low/50 transition-colors group">
                            <td class="py-4 px-2">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 rounded-lg overflow-hidden bg-primary/20 shrink-0">
                                        <img class="w-full h-full object-cover" data-alt="A modern architectural marvel, a sleek glass convention center at sunset with violet and deep blue skies. Minimalist design, clean lines, and glowing lights from within. Ultra-realistic digital photography with a corporate luxury feel." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBRW-Tl6foB-QmMDXdbWgi9PjQdKJ_U72DeZtjWhQ-5eup75pkBwrj1FOMdnKWrgYm7-5DcHgox39TP7nTbKEOETq_ZPIZCueXDlhISyzD3_Kgt8UYK_nPs1QI7OorX82HHoiBTKe_dtdRmW5CRFINu-d9eFFhawgWCXhxho8m0KzA_XeJvJ_rckhgzUHyEAxItxztIdtZ5fNIQNOGdwhrIwWL9IQHL6QQ3ehPbOJ6PJOSjGCdl2kSPtMz1Uo-G3hla1NUMd4wSrjE"/>
                                    </div>
                                    <span class="font-body-md text-body-md font-semibold text-on-surface">Summer Tech Expo 2024</span>
                                </div>
                            </td>
                            <td class="py-4 px-2">
                                <div class="flex items-center gap-2">
                                    <img class="w-6 h-6 rounded-full border border-border-subtle" data-alt="Close-up portrait of a female project manager with a calm and determined look. Professional studio lighting with a neutral gray background. She is wearing a modern blazer, representing a focus on operational excellence and professional leadership." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBhXu1IRDMHSzf_xcvaSjjknLdSs0_Z6D52T48azjOeO6V6cK0LpFcrFiRQGGWVC-zM4cX8Y3PgYqLPJZORGYWvkNEZ53hIxUApuv92diXQSCxjihp3UGoEWXa4RTi8lucWtXpZwLHG9dj-_E1U3JuHCVV70VnDoEkV68tw78Yg_n-wpDtzRwfBGc2LOvQi23oIBZ18Zs1lBknUHuEzdS-5BC0owAqGt7PXVVbtOQK2aVm5omtOGe2vywkE_n1dVuO_zSao2dscoCc"/>
                                    <span class="font-body-sm text-body-sm">Elena Vance</span>
                                </div>
                            </td>
                            <td class="py-4 px-2">
                                <span class="px-2 py-1 bg-surface-container rounded-full text-on-surface font-label-sm text-label-sm">Eksekusi</span>
                            </td>
                            <td class="py-4 px-2">
                                <div class="flex items-center gap-3">
                                    <span class="font-label-sm text-label-sm w-8">82%</span>
                                    <div class="w-24 h-1.5 bg-surface-container rounded-full overflow-hidden">
                                        <div class="h-full bg-primary rounded-full" style="width: 82%"></div>
                                    </div>
                                </div>
                            </td>
                            <td class="py-4 px-2">
                                <div class="flex items-center gap-1 text-success">
                                    <span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">check_circle</span>
                                    <span class="font-label-md text-label-md">98/100</span>
                                </div>
                            </td>
                            <td class="py-4 px-2">
                                <button class="opacity-0 group-hover:opacity-100 p-2 hover:bg-primary/10 text-primary rounded-lg transition-all"><span class="material-symbols-outlined">open_in_new</span></button>
                            </td>
                        </tr>
                        <tr class="hover:bg-surface-container-low/50 transition-colors group">
                            <td class="py-4 px-2">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 rounded-lg overflow-hidden bg-primary/20 shrink-0">
                                        <img class="w-full h-full object-cover" data-alt="A grand ballroom prepared for a formal gala, featuring intricate ceiling lighting, white linen tables, and floral arrangements. The aesthetic is opulent yet refined, using a palette of creams, golds, and deep blues. High-resolution cinematic photography." src="https://lh3.googleusercontent.com/aida-public/AB6AXuC4lghiu1N2fdXtPV74mFHvMOJ2aWmwgGDONl7lRrRD7ZE0C3jBTmZxBbGT2H1enccxIUHsZp-1K-FkJelgPa1iM4GzMwx71pEqBnFfOw5kcoENtPdeOinTA2eTOBu5wxCZcUuZptDWV1xNqhMkwAGOV7dz8T4VNn7kQYxeNmH7JVnU55Qf0btyvfyspZiVXbPT5tza4nK2WPufYiyy7PutwCwKZG6LFjQhrSpQFWuj3NTcHQubtBcKj-BvqZ3SgylAIL9IdekAFpk"/>
                                    </div>
                                    <span class="font-body-md text-body-md font-semibold text-on-surface">Annual Gala Event</span>
                                </div>
                            </td>
                            <td class="py-4 px-2">
                                <div class="flex items-center gap-2">
                                    <img class="w-6 h-6 rounded-full border border-border-subtle" data-alt="Portrait of a senior male executive with silver hair, wearing glasses and a navy blue suit. The expression is professional and seasoned. High-key office lighting with soft shadows. Professional business aesthetic." src="https://lh3.googleusercontent.com/aida-public/AB6AXuADFYwb1SXvI5oDehHApHkdCA3LpL8F-BjDeBlwZ5egw_TOLtwCVZEqNYbm5VSkAupPvwfvLCM3js3TOQqhFoM_rdIQG_n59sH7wUM5NYfVPDl_JmZAHUCPJS055U84GxJwyRp2ex3yES0sXSyZ-g2roHEomX24_oFwwJcFuyDuSbSXXK9B1gImBRU6H-JH0Swcn-34Gj7JBwILNfC0Hs8z56vZ0T5ngocG7TroN0OeFAA4Nk8Okz07wowsYY6F0ferO-KZaShMLzs"/>
                                    <span class="font-body-sm text-body-sm">Julian Blake</span>
                                </div>
                            </td>
                            <td class="py-4 px-2">
                                <span class="px-2 py-1 bg-surface-container rounded-full text-on-surface font-label-sm text-label-sm">Perencanaan</span>
                            </td>
                            <td class="py-4 px-2">
                                <div class="flex items-center gap-3">
                                    <span class="font-label-sm text-label-sm w-8">45%</span>
                                    <div class="w-24 h-1.5 bg-surface-container rounded-full overflow-hidden">
                                        <div class="h-full bg-warning rounded-full" style="width: 45%"></div>
                                    </div>
                                </div>
                            </td>
                            <td class="py-4 px-2">
                                <div class="flex items-center gap-1 text-warning">
                                    <span class="material-symbols-outlined text-[18px]">error</span>
                                    <span class="font-label-md text-label-md">72/100</span>
                                </div>
                            </td>
                            <td class="py-4 px-2">
                                <button class="opacity-0 group-hover:opacity-100 p-2 hover:bg-primary/10 text-primary rounded-lg transition-all"><span class="material-symbols-outlined">open_in_new</span></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
    </div>
</x-layouts.app>
