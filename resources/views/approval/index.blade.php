<x-layouts.app title="Persetujuan & Otorisasi">
    <div class="p-margin-page max-w-container-max mx-auto w-full flex flex-col gap-stack-lg">
        
        <!-- HEADER SECTION -->
        <section class="flex flex-col md:flex-row md:items-end justify-between gap-4">
            <div>
                <h2 class="font-headline-xl text-headline-xl text-on-surface">Pusat Persetujuan</h2>
                <p class="font-body-md text-body-md text-text-secondary">Tinjau, setujui, atau tolak alokasi anggaran, dokumen, dan vendor.</p>
            </div>
            <div class="flex gap-2">
                <button class="flex items-center gap-2 bg-surface border border-border-subtle px-4 py-2 rounded-lg font-label-md text-label-md hover:bg-surface-container transition-colors">
                    <span class="material-symbols-outlined text-[18px]">history</span> Riwayat Persetujuan
                </button>
            </div>
        </section>

        <!-- KPI CARDS -->
        <section class="grid grid-cols-1 sm:grid-cols-3 gap-stack-md">
            <div class="bg-primary/10 p-stack-md rounded-xl border border-primary/20 shadow-sm flex flex-col gap-2">
                <div class="flex justify-between items-start">
                    <span class="text-primary font-label-md text-label-md">Menunggu Persetujuan Anda</span>
                    <span class="text-primary material-symbols-outlined">pending_actions</span>
                </div>
                <div class="flex items-end gap-2">
                    <span class="font-headline-lg text-headline-lg text-primary">8</span>
                    <span class="font-label-sm text-label-sm text-primary pb-1">Tugas Aktif</span>
                </div>
            </div>
            <div class="bg-surface p-stack-md rounded-xl border border-border-subtle shadow-sm flex flex-col gap-2">
                <div class="flex justify-between items-start">
                    <span class="text-text-secondary font-label-md text-label-md">Disetujui Minggu Ini</span>
                    <span class="text-success material-symbols-outlined">check_circle</span>
                </div>
                <div class="flex items-end gap-2">
                    <span class="font-headline-lg text-headline-lg">24</span>
                    <span class="font-label-sm text-label-sm text-text-secondary pb-1">Tugas Selesai</span>
                </div>
            </div>
            <div class="bg-surface p-stack-md rounded-xl border border-border-subtle shadow-sm flex flex-col gap-2">
                <div class="flex justify-between items-start">
                    <span class="text-text-secondary font-label-md text-label-md">Eskalasi Mendesak</span>
                    <span class="text-error material-symbols-outlined">priority_high</span>
                </div>
                <div class="flex items-end gap-2">
                    <span class="font-headline-lg text-headline-lg">2</span>
                    <span class="font-label-sm text-label-sm text-error pb-1">Butuh Perhatian</span>
                </div>
            </div>
        </section>

        <!-- PENDING APPROVALS LIST -->
        <section class="bg-surface rounded-2xl border border-border-subtle flex-1 flex flex-col shadow-sm">
            <div class="p-stack-md border-b border-border-subtle flex justify-between items-center bg-surface-container-low/50">
                <h3 class="font-headline-md text-headline-md text-on-surface">Daftar Menunggu Persetujuan</h3>
                <div class="flex gap-2">
                    <span class="px-3 py-1 bg-surface border border-border-subtle rounded-full text-text-secondary font-label-sm text-label-sm cursor-pointer hover:bg-surface-container-low">Semua (8)</span>
                    <span class="px-3 py-1 bg-primary/10 border border-primary/20 rounded-full text-primary font-label-sm text-label-sm font-semibold cursor-pointer">Anggaran (3)</span>
                    <span class="px-3 py-1 bg-surface border border-border-subtle rounded-full text-text-secondary font-label-sm text-label-sm cursor-pointer hover:bg-surface-container-low">Kontrak (5)</span>
                </div>
            </div>

            <div class="divide-y divide-border-subtle">
                <!-- Item 1 -->
                <div class="p-stack-md flex flex-col md:flex-row gap-4 items-start md:items-center hover:bg-surface-container-low/30 transition-colors">
                    <div class="w-12 h-12 rounded-lg bg-warning/10 text-warning flex items-center justify-center shrink-0">
                        <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">payments</span>
                    </div>
                    <div class="flex-1">
                        <div class="flex items-center gap-2 mb-1">
                            <h4 class="font-headline-sm text-headline-md text-on-surface font-semibold">Pencairan Dana Vendor Logistik Q3</h4>
                            <span class="px-2 py-0.5 bg-error/10 text-error rounded text-[10px] uppercase font-bold border border-error/20">Mendesak</span>
                        </div>
                        <p class="font-body-sm text-body-sm text-text-secondary mb-2">Permintaan pencairan dana tahap 2 untuk TransLogistik (Rp 45.000.000) terkait event Summer Tech Expo.</p>
                        <div class="flex items-center gap-4 font-label-sm text-label-sm text-text-secondary">
                            <span class="flex items-center gap-1"><span class="material-symbols-outlined text-[14px]">person</span> Diajukan oleh: Elena Vance</span>
                            <span class="flex items-center gap-1"><span class="material-symbols-outlined text-[14px]">schedule</span> Kemarin, 14:00</span>
                        </div>
                    </div>
                    <div class="flex gap-2 w-full md:w-auto">
                        <button class="flex-1 md:flex-none px-4 py-2 border border-border-subtle text-text-secondary rounded-lg font-label-md text-label-md hover:bg-surface-container transition-colors">Tolak</button>
                        <button class="flex-1 md:flex-none px-4 py-2 bg-primary text-white rounded-lg font-label-md text-label-md hover:brightness-110 transition-colors">Setujui</button>
                    </div>
                </div>

                <!-- Item 2 -->
                <div class="p-stack-md flex flex-col md:flex-row gap-4 items-start md:items-center hover:bg-surface-container-low/30 transition-colors">
                    <div class="w-12 h-12 rounded-lg bg-tertiary/10 text-tertiary flex items-center justify-center shrink-0">
                        <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">description</span>
                    </div>
                    <div class="flex-1">
                        <div class="flex items-center gap-2 mb-1">
                            <h4 class="font-headline-sm text-headline-md text-on-surface font-semibold">Kontrak Catering Fiesta - Gala 2024</h4>
                        </div>
                        <p class="font-body-sm text-body-sm text-text-secondary mb-2">Penandatanganan kontrak final pengadaan F&B untuk Annual Gala 2024. Nilai kontrak: Rp 120.000.000.</p>
                        <div class="flex items-center gap-4 font-label-sm text-label-sm text-text-secondary">
                            <span class="flex items-center gap-1"><span class="material-symbols-outlined text-[14px]">person</span> Diajukan oleh: Julian Blake</span>
                            <span class="flex items-center gap-1"><span class="material-symbols-outlined text-[14px]">schedule</span> Hari ini, 09:15</span>
                        </div>
                    </div>
                    <div class="flex gap-2 w-full md:w-auto">
                        <button class="flex-1 md:flex-none px-4 py-2 border border-border-subtle text-text-secondary rounded-lg font-label-md text-label-md hover:bg-surface-container transition-colors">Tolak</button>
                        <button class="flex-1 md:flex-none px-4 py-2 bg-primary text-white rounded-lg font-label-md text-label-md hover:brightness-110 transition-colors">Setujui</button>
                    </div>
                </div>
            </div>
            <div class="p-4 flex justify-center border-t border-border-subtle">
                <button class="text-primary font-label-md text-label-md hover:underline">Lihat Semua Permintaan</button>
            </div>
        </section>

    </div>
</x-layouts.app>
