<x-layouts.app title="Laporan & Analitik">
    <div class="p-margin-page max-w-container-max mx-auto w-full flex flex-col gap-stack-lg">
        
        <!-- HEADER SECTION -->
        <section class="flex flex-col md:flex-row md:items-end justify-between gap-4">
            <div>
                <h2 class="font-headline-xl text-headline-xl text-on-surface">Laporan & Analitik</h2>
                <p class="font-body-md text-body-md text-text-secondary">Wawasan mendalam tentang performa operasional dan finansial.</p>
            </div>
            <div class="flex gap-2">
                <button class="flex items-center gap-2 bg-surface border border-border-subtle px-4 py-2 rounded-lg font-label-md text-label-md hover:bg-surface-container transition-colors">
                    <span class="material-symbols-outlined text-[18px]">calendar_month</span> Pilih Periode
                </button>
                <button class="flex items-center gap-2 bg-primary text-white px-4 py-2 rounded-lg font-label-md text-label-md hover:brightness-110 transition-colors">
                    <span class="material-symbols-outlined text-[18px]">add_chart</span> Buat Laporan Baru
                </button>
            </div>
        </section>

        <!-- AI INSIGHTS HIGHLIGHT -->
        <section class="bg-gradient-to-r from-primary/10 to-transparent p-stack-md rounded-2xl border border-primary/20 flex flex-col md:flex-row gap-6 items-center">
            <div class="w-16 h-16 rounded-full bg-primary flex items-center justify-center text-white shrink-0 shadow-lg">
                <span class="material-symbols-outlined text-[32px]" style="font-variation-settings: 'FILL' 1;">auto_awesome</span>
            </div>
            <div class="flex-1">
                <h3 class="font-headline-md text-headline-md text-on-surface mb-1">Ringkasan Analitik AI (Q3 2024)</h3>
                <p class="font-body-sm text-body-sm text-text-secondary">Efisiensi anggaran operasional meningkat sebesar 8.5% dibandingkan kuartal sebelumnya, terutama didorong oleh optimalisasi logistik. Keterlibatan peserta (engagement) pada event hybrid mencapai titik tertinggi sepanjang masa.</p>
            </div>
            <button class="px-6 py-2 bg-primary text-white rounded-lg font-label-md text-label-md hover:brightness-110 whitespace-nowrap">Lihat Detail Analisis</button>
        </section>

        <!-- REPORTS GRID -->
        <section>
            <h3 class="font-headline-md text-headline-md text-on-surface mb-4">Laporan Standar</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-stack-md">
                
                <!-- Report Card 1 -->
                <div class="bg-surface rounded-2xl border border-border-subtle p-stack-md flex flex-col hover:shadow-md transition-shadow group cursor-pointer">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="w-12 h-12 rounded-lg bg-success/10 text-success flex items-center justify-center group-hover:scale-110 transition-transform">
                            <span class="material-symbols-outlined text-[24px]">payments</span>
                        </div>
                        <div>
                            <h4 class="font-headline-md text-headline-md text-on-surface text-[18px]">Laporan Keuangan</h4>
                            <p class="font-label-sm text-label-sm text-text-secondary">Pemasukan & Pengeluaran</p>
                        </div>
                    </div>
                    <div class="flex-1 mb-4">
                        <p class="font-body-sm text-body-sm text-text-secondary line-clamp-2">Rincian komprehensif terkait alokasi anggaran, realisasi biaya operasional, dan perhitungan ROI (Return on Investment) per event.</p>
                    </div>
                    <div class="flex justify-between items-center mt-auto pt-4 border-t border-border-subtle">
                        <span class="font-label-sm text-label-sm text-text-secondary flex items-center gap-1">
                            <span class="material-symbols-outlined text-[14px]">schedule</span> Dibuat 2 hari lalu
                        </span>
                        <button class="text-primary hover:bg-primary/10 p-2 rounded-lg transition-colors flex items-center gap-1">
                            <span class="material-symbols-outlined text-[18px]">download</span> Unduh PDF
                        </button>
                    </div>
                </div>

                <!-- Report Card 2 -->
                <div class="bg-surface rounded-2xl border border-border-subtle p-stack-md flex flex-col hover:shadow-md transition-shadow group cursor-pointer">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="w-12 h-12 rounded-lg bg-primary/10 text-primary flex items-center justify-center group-hover:scale-110 transition-transform">
                            <span class="material-symbols-outlined text-[24px]">groups</span>
                        </div>
                        <div>
                            <h4 class="font-headline-md text-headline-md text-on-surface text-[18px]">Kehadiran & Registrasi</h4>
                            <p class="font-label-sm text-label-sm text-text-secondary">Statistik Peserta</p>
                        </div>
                    </div>
                    <div class="flex-1 mb-4">
                        <p class="font-body-sm text-body-sm text-text-secondary line-clamp-2">Metrik kehadiran aktual vs target, tingkat drop-off registrasi, dan demografi audiens pada event-event utama.</p>
                    </div>
                    <div class="flex justify-between items-center mt-auto pt-4 border-t border-border-subtle">
                        <span class="font-label-sm text-label-sm text-text-secondary flex items-center gap-1">
                            <span class="material-symbols-outlined text-[14px]">schedule</span> Dibuat minggu lalu
                        </span>
                        <button class="text-primary hover:bg-primary/10 p-2 rounded-lg transition-colors flex items-center gap-1">
                            <span class="material-symbols-outlined text-[18px]">download</span> Unduh PDF
                        </button>
                    </div>
                </div>

                <!-- Report Card 3 -->
                <div class="bg-surface rounded-2xl border border-border-subtle p-stack-md flex flex-col hover:shadow-md transition-shadow group cursor-pointer">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="w-12 h-12 rounded-lg bg-warning/10 text-warning flex items-center justify-center group-hover:scale-110 transition-transform">
                            <span class="material-symbols-outlined text-[24px]" style="font-variation-settings: 'FILL' 1;">star</span>
                        </div>
                        <div>
                            <h4 class="font-headline-md text-headline-md text-on-surface text-[18px]">Kinerja Vendor</h4>
                            <p class="font-label-sm text-label-sm text-text-secondary">Evaluasi Eksternal</p>
                        </div>
                    </div>
                    <div class="flex-1 mb-4">
                        <p class="font-body-sm text-body-sm text-text-secondary line-clamp-2">Analisis skor performa seluruh vendor yang terlibat, tingkat pemenuhan SLA, dan rekomendasi kemitraan berkelanjutan.</p>
                    </div>
                    <div class="flex justify-between items-center mt-auto pt-4 border-t border-border-subtle">
                        <span class="font-label-sm text-label-sm text-text-secondary flex items-center gap-1">
                            <span class="material-symbols-outlined text-[14px]">schedule</span> Dibuat bulan lalu
                        </span>
                        <button class="text-primary hover:bg-primary/10 p-2 rounded-lg transition-colors flex items-center gap-1">
                            <span class="material-symbols-outlined text-[18px]">download</span> Unduh PDF
                        </button>
                    </div>
                </div>

            </div>
        </section>

    </div>
</x-layouts.app>
