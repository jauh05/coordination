<x-layouts.app title="Manajemen Vendor">
    <div class="p-margin-page max-w-container-max mx-auto w-full flex flex-col gap-stack-lg">
        
        <!-- HEADER SECTION -->
        <section class="flex flex-col md:flex-row md:items-end justify-between gap-4">
            <div>
                <h2 class="font-headline-xl text-headline-xl text-on-surface">Manajemen Vendor</h2>
                <p class="font-body-md text-body-md text-text-secondary">Kelola kontrak, performa, dan logistik mitra eksternal.</p>
            </div>
            <div class="flex gap-2">
                <div class="relative">
                    <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-text-secondary text-[20px]">search</span>
                    <input class="w-64 bg-surface border border-border-subtle rounded-lg pl-10 pr-4 py-2 font-body-sm text-body-sm focus:ring-2 focus:ring-primary/20 focus:outline-none" placeholder="Cari vendor..." type="text"/>
                </div>
                <button class="flex items-center gap-2 bg-surface border border-border-subtle px-4 py-2 rounded-lg font-label-md text-label-md hover:bg-surface-container transition-colors">
                    <span class="material-symbols-outlined text-[18px]">filter_list</span> Filter
                </button>
                <button class="flex items-center gap-2 bg-primary text-white px-4 py-2 rounded-lg font-label-md text-label-md hover:brightness-110 transition-colors">
                    <span class="material-symbols-outlined text-[18px]">add</span> Tambah Vendor
                </button>
            </div>
        </section>

        <!-- KPI CARDS -->
        <section class="grid grid-cols-1 sm:grid-cols-4 gap-stack-md">
            <div class="bg-surface p-stack-md rounded-xl border border-border-subtle shadow-sm flex flex-col gap-2">
                <div class="flex justify-between items-start">
                    <span class="text-text-secondary font-label-md text-label-md">Total Vendor Aktif</span>
                    <span class="text-primary material-symbols-outlined">handshake</span>
                </div>
                <div class="flex items-end gap-2">
                    <span class="font-headline-lg text-headline-lg">42</span>
                    <span class="font-label-sm text-label-sm text-success pb-1">+3 Bulan ini</span>
                </div>
            </div>
            <div class="bg-surface p-stack-md rounded-xl border border-border-subtle shadow-sm flex flex-col gap-2">
                <div class="flex justify-between items-start">
                    <span class="text-text-secondary font-label-md text-label-md">Kontrak Berjalan</span>
                    <span class="text-tertiary material-symbols-outlined">description</span>
                </div>
                <div class="flex items-end gap-2">
                    <span class="font-headline-lg text-headline-lg">28</span>
                    <span class="font-label-sm text-label-sm text-text-secondary pb-1">Bulan Ini</span>
                </div>
            </div>
            <div class="bg-surface p-stack-md rounded-xl border border-border-subtle shadow-sm flex flex-col gap-2">
                <div class="flex justify-between items-start">
                    <span class="text-text-secondary font-label-md text-label-md">Rata-rata Penilaian</span>
                    <span class="text-warning material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
                </div>
                <div class="flex items-end gap-2">
                    <span class="font-headline-lg text-headline-lg">4.8</span>
                    <span class="font-label-sm text-label-sm text-text-secondary pb-1">/ 5.0</span>
                </div>
            </div>
            <div class="bg-surface p-stack-md rounded-xl border border-border-subtle shadow-sm flex flex-col gap-2">
                <div class="flex justify-between items-start">
                    <span class="text-text-secondary font-label-md text-label-md">Isu Kritis</span>
                    <span class="text-error material-symbols-outlined">warning</span>
                </div>
                <div class="flex items-end gap-2">
                    <span class="font-headline-lg text-headline-lg">1</span>
                    <span class="font-label-sm text-label-sm text-error pb-1">Vendor Logistik</span>
                </div>
            </div>
        </section>

        <!-- VENDOR GRID -->
        <section class="grid grid-cols-1 md:grid-cols-3 gap-stack-lg">
            
            <!-- Vendor Card 1 -->
            <div class="bg-surface rounded-2xl border border-border-subtle p-stack-lg shadow-sm flex flex-col hover:shadow-md transition-shadow">
                <div class="flex justify-between items-start mb-4">
                    <div class="flex gap-4">
                        <div class="w-12 h-12 rounded-lg bg-primary/10 flex items-center justify-center text-primary text-xl font-bold">SV</div>
                        <div>
                            <h3 class="font-headline-md text-headline-md text-on-surface">Sonic Vision Group</h3>
                            <p class="font-label-sm text-label-sm text-text-secondary">Audio & Visual Production</p>
                        </div>
                    </div>
                    <span class="px-2 py-1 bg-success/10 text-success rounded-full font-label-sm text-label-sm border border-success/20">Kontrak Aktif</span>
                </div>
                
                <div class="space-y-3 mb-6 flex-1">
                    <div class="flex items-center gap-2">
                        <span class="material-symbols-outlined text-text-secondary text-[18px]">event</span>
                        <span class="font-body-sm text-body-sm text-on-surface">Terlibat di: <strong>Summer Tech Expo</strong></span>
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="material-symbols-outlined text-warning text-[18px]" style="font-variation-settings: 'FILL' 1;">star</span>
                        <span class="font-body-sm text-body-sm text-on-surface">4.9 (12 Event)</span>
                    </div>
                </div>

                <div class="flex gap-2">
                    <button class="flex-1 bg-surface-container-low hover:bg-surface-container text-primary py-2 rounded-lg font-label-md text-label-md transition-colors">Detail</button>
                    <button class="flex-1 bg-primary/10 hover:bg-primary/20 text-primary py-2 rounded-lg font-label-md text-label-md transition-colors">Hubungi</button>
                </div>
            </div>

            <!-- Vendor Card 2 -->
            <div class="bg-surface rounded-2xl border border-border-subtle p-stack-lg shadow-sm flex flex-col hover:shadow-md transition-shadow">
                <div class="flex justify-between items-start mb-4">
                    <div class="flex gap-4">
                        <div class="w-12 h-12 rounded-lg bg-tertiary/10 flex items-center justify-center text-tertiary text-xl font-bold">CF</div>
                        <div>
                            <h3 class="font-headline-md text-headline-md text-on-surface">Catering Fiesta</h3>
                            <p class="font-label-sm text-label-sm text-text-secondary">Konsumsi & F&B</p>
                        </div>
                    </div>
                    <span class="px-2 py-1 bg-warning/10 text-warning rounded-full font-label-sm text-label-sm border border-warning/20">Menunggu TTD</span>
                </div>
                
                <div class="space-y-3 mb-6 flex-1">
                    <div class="flex items-center gap-2">
                        <span class="material-symbols-outlined text-text-secondary text-[18px]">event</span>
                        <span class="font-body-sm text-body-sm text-on-surface">Terlibat di: <strong>Annual Gala 2024</strong></span>
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="material-symbols-outlined text-warning text-[18px]" style="font-variation-settings: 'FILL' 1;">star</span>
                        <span class="font-body-sm text-body-sm text-on-surface">4.7 (8 Event)</span>
                    </div>
                </div>

                <div class="flex gap-2">
                    <button class="flex-1 bg-surface-container-low hover:bg-surface-container text-primary py-2 rounded-lg font-label-md text-label-md transition-colors">Detail</button>
                    <button class="flex-1 bg-primary/10 hover:bg-primary/20 text-primary py-2 rounded-lg font-label-md text-label-md transition-colors">Hubungi</button>
                </div>
            </div>

            <!-- Vendor Card 3 -->
            <div class="bg-surface rounded-2xl border border-border-subtle p-stack-lg shadow-sm flex flex-col hover:shadow-md transition-shadow border-error/50 relative overflow-hidden">
                <div class="absolute top-0 right-0 p-2 bg-error text-white font-label-sm text-[10px] uppercase font-bold rounded-bl-lg">Isu Aktif</div>
                <div class="flex justify-between items-start mb-4 mt-2">
                    <div class="flex gap-4">
                        <div class="w-12 h-12 rounded-lg bg-error/10 flex items-center justify-center text-error text-xl font-bold">TL</div>
                        <div>
                            <h3 class="font-headline-md text-headline-md text-on-surface">TransLogistik</h3>
                            <p class="font-label-sm text-label-sm text-text-secondary">Transportasi & Ekspedisi</p>
                        </div>
                    </div>
                </div>
                
                <div class="space-y-3 mb-6 flex-1">
                    <div class="flex items-center gap-2">
                        <span class="material-symbols-outlined text-error text-[18px]">warning</span>
                        <span class="font-body-sm text-body-sm text-error font-medium">Keterlambatan pengiriman booth</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="material-symbols-outlined text-warning text-[18px]" style="font-variation-settings: 'FILL' 1;">star</span>
                        <span class="font-body-sm text-body-sm text-on-surface">4.2 (25 Event)</span>
                    </div>
                </div>

                <div class="flex gap-2">
                    <button class="flex-1 bg-surface-container-low hover:bg-surface-container text-primary py-2 rounded-lg font-label-md text-label-md transition-colors">Detail</button>
                    <button class="flex-1 bg-error/10 hover:bg-error/20 text-error py-2 rounded-lg font-label-md text-label-md transition-colors">Eskalasi</button>
                </div>
            </div>
        </section>

    </div>
</x-layouts.app>
