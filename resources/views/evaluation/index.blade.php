<x-layouts.app title="Evaluasi & Lessons Learned">
    <div class="p-margin-page max-w-container-max mx-auto w-full flex flex-col gap-stack-lg">
        
        <!-- HEADER SECTION -->
        <section class="flex flex-col md:flex-row md:items-end justify-between gap-4">
            <div>
                <h2 class="font-headline-xl text-headline-xl text-on-surface">Evaluasi & Lessons Learned</h2>
                <p class="font-body-md text-body-md text-text-secondary">Arsip pembelajaran (post-mortem) dari event-event sebelumnya untuk peningkatan berkelanjutan.</p>
            </div>
            <div class="flex gap-2">
                <div class="relative">
                    <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-text-secondary text-[20px]">search</span>
                    <input class="w-64 bg-surface border border-border-subtle rounded-lg pl-10 pr-4 py-2 font-body-sm text-body-sm focus:ring-2 focus:ring-primary/20 focus:outline-none" placeholder="Cari evaluasi..." type="text"/>
                </div>
                <button class="flex items-center gap-2 bg-primary text-white px-4 py-2 rounded-lg font-label-md text-label-md hover:brightness-110 transition-colors">
                    <span class="material-symbols-outlined text-[18px]">edit_document</span> Tulis Evaluasi
                </button>
            </div>
        </section>

        <!-- CONTENT -->
        <section class="grid grid-cols-1 lg:grid-cols-3 gap-stack-lg">
            
            <!-- LEFT COLUMN: Post-Mortem Cards -->
            <div class="lg:col-span-2 flex flex-col gap-stack-md">
                
                <!-- Card 1 -->
                <div class="bg-surface border border-border-subtle rounded-2xl p-stack-lg shadow-sm hover:shadow-md transition-shadow">
                    <div class="flex justify-between items-start mb-6">
                        <div>
                            <div class="flex items-center gap-2 mb-1">
                                <span class="px-2 py-0.5 bg-success/10 text-success rounded font-label-sm text-label-sm border border-success/20">Selesai Ditinjau</span>
                                <span class="font-label-sm text-label-sm text-text-secondary">#PM-1042</span>
                            </div>
                            <h3 class="font-headline-md text-headline-md text-on-surface">Spring Charity Gala 2024</h3>
                            <p class="font-body-sm text-body-sm text-text-secondary">24 April 2024 • Oleh Marco Rossi</p>
                        </div>
                        <div class="flex items-center gap-1 text-success bg-success/10 px-3 py-1 rounded-lg">
                            <span class="font-headline-md text-headline-md">92</span>
                            <span class="font-label-sm text-label-sm">/ 100</span>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
                        <div class="bg-surface-container-low p-4 rounded-xl border border-border-subtle">
                            <h4 class="font-label-md text-label-md text-text-secondary mb-2 flex items-center gap-1"><span class="material-symbols-outlined text-[16px] text-success">thumb_up</span> Keberhasilan Utama</h4>
                            <p class="font-body-sm text-body-sm text-on-surface">Target pendanaan terlampaui 120%, kehadiran tamu VIP mencapai 95%.</p>
                        </div>
                        <div class="bg-surface-container-low p-4 rounded-xl border border-border-subtle">
                            <h4 class="font-label-md text-label-md text-text-secondary mb-2 flex items-center gap-1"><span class="material-symbols-outlined text-[16px] text-error">warning</span> Kendala</h4>
                            <p class="font-body-sm text-body-sm text-on-surface">Proses registrasi memakan waktu terlalu lama (rata-rata 4 menit per tamu).</p>
                        </div>
                        <div class="bg-surface-container-low p-4 rounded-xl border border-border-subtle">
                            <h4 class="font-label-md text-label-md text-text-secondary mb-2 flex items-center gap-1"><span class="material-symbols-outlined text-[16px] text-primary">lightbulb</span> Area Perbaikan</h4>
                            <p class="font-body-sm text-body-sm text-on-surface">Implementasi sistem check-in QR Code self-service untuk event berikutnya.</p>
                        </div>
                    </div>

                    <div class="flex gap-2 justify-end">
                        <button class="text-primary hover:bg-primary/10 px-4 py-2 rounded-lg transition-colors font-label-md text-label-md">Lihat Laporan Lengkap</button>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="bg-surface border border-border-subtle rounded-2xl p-stack-lg shadow-sm hover:shadow-md transition-shadow">
                    <div class="flex justify-between items-start mb-6">
                        <div>
                            <div class="flex items-center gap-2 mb-1">
                                <span class="px-2 py-0.5 bg-warning/10 text-warning rounded font-label-sm text-label-sm border border-warning/20">Menunggu Review</span>
                                <span class="font-label-sm text-label-sm text-text-secondary">#PM-1043</span>
                            </div>
                            <h3 class="font-headline-md text-headline-md text-on-surface">Global Tech Summit Q1</h3>
                            <p class="font-body-sm text-body-sm text-text-secondary">15 Feb 2024 • Oleh Sarah Chen</p>
                        </div>
                        <div class="flex items-center gap-1 text-warning bg-warning/10 px-3 py-1 rounded-lg">
                            <span class="font-headline-md text-headline-md">78</span>
                            <span class="font-label-sm text-label-sm">/ 100</span>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
                        <div class="bg-surface-container-low p-4 rounded-xl border border-border-subtle">
                            <h4 class="font-label-md text-label-md text-text-secondary mb-2 flex items-center gap-1"><span class="material-symbols-outlined text-[16px] text-success">thumb_up</span> Keberhasilan Utama</h4>
                            <p class="font-body-sm text-body-sm text-on-surface">Kualitas audio visual sangat baik, tidak ada kendala teknis major di panggung utama.</p>
                        </div>
                        <div class="bg-surface-container-low p-4 rounded-xl border border-border-subtle">
                            <h4 class="font-label-md text-label-md text-text-secondary mb-2 flex items-center gap-1"><span class="material-symbols-outlined text-[16px] text-error">warning</span> Kendala</h4>
                            <p class="font-body-sm text-body-sm text-on-surface">Kekurangan makanan saat istirahat siang, komplain dari 15% peserta.</p>
                        </div>
                        <div class="bg-surface-container-low p-4 rounded-xl border border-border-subtle">
                            <h4 class="font-label-md text-label-md text-text-secondary mb-2 flex items-center gap-1"><span class="material-symbols-outlined text-[16px] text-primary">lightbulb</span> Area Perbaikan</h4>
                            <p class="font-body-sm text-body-sm text-on-surface">Mengganti vendor katering, menambah margin pemesanan makanan (buffer) 20%.</p>
                        </div>
                    </div>

                    <div class="flex gap-2 justify-end">
                        <button class="text-primary hover:bg-primary/10 px-4 py-2 rounded-lg transition-colors font-label-md text-label-md">Lihat Laporan Lengkap</button>
                    </div>
                </div>

            </div>

            <!-- RIGHT COLUMN: AI Insights / Summary -->
            <div class="flex flex-col gap-stack-md">
                <div class="bg-surface border border-border-subtle rounded-2xl p-stack-md shadow-sm">
                    <h3 class="font-headline-md text-headline-md text-on-surface mb-4">Tren Evaluasi Tahun Ini</h3>
                    <div class="space-y-4">
                        <div>
                            <div class="flex justify-between font-label-sm text-label-sm mb-1">
                                <span class="text-text-secondary">Kepuasan Peserta</span>
                                <span class="text-success font-medium">92%</span>
                            </div>
                            <div class="h-2 bg-surface-container rounded-full overflow-hidden">
                                <div class="h-full bg-success rounded-full" style="width: 92%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between font-label-sm text-label-sm mb-1">
                                <span class="text-text-secondary">Efisiensi Vendor</span>
                                <span class="text-primary font-medium">85%</span>
                            </div>
                            <div class="h-2 bg-surface-container rounded-full overflow-hidden">
                                <div class="h-full bg-primary rounded-full" style="width: 85%"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between font-label-sm text-label-sm mb-1">
                                <span class="text-text-secondary">Akurasi Anggaran</span>
                                <span class="text-warning font-medium">76%</span>
                            </div>
                            <div class="h-2 bg-surface-container rounded-full overflow-hidden">
                                <div class="h-full bg-warning rounded-full" style="width: 76%"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-surface-container-low border border-border-subtle rounded-2xl p-stack-md">
                    <div class="flex items-center gap-2 mb-3">
                        <span class="material-symbols-outlined text-primary text-[20px]" style="font-variation-settings: 'FILL' 1;">lightbulb</span>
                        <h4 class="font-headline-sm text-headline-md text-on-surface">Rekomendasi AI Teratas</h4>
                    </div>
                    <ul class="space-y-3 font-body-sm text-body-sm text-text-secondary">
                        <li class="flex gap-2">
                            <span class="text-primary mt-0.5">•</span>
                            <span>Berdasarkan 5 event terakhir, beralih ke <strong>Digital QR Check-in</strong> secara penuh dapat menghemat biaya staf registrasi hingga 40%.</span>
                        </li>
                        <li class="flex gap-2">
                            <span class="text-primary mt-0.5">•</span>
                            <span>Vendor "Logistik Cepat" konsisten mendapat nilai rendah (rata-rata 2.4/5). Disarankan untuk <strong>meninjau ulang kontrak</strong> mereka.</span>
                        </li>
                    </ul>
                </div>
            </div>
            
        </section>
    </div>
</x-layouts.app>
