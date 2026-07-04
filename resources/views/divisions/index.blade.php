<x-layouts.app title="Manajemen Divisi">
    <div class="p-margin-page max-w-container-max mx-auto w-full flex flex-col gap-stack-lg">
        
        <!-- HEADER SECTION -->
        <section class="flex flex-col md:flex-row md:items-end justify-between gap-4">
            <div>
                <h2 class="font-headline-xl text-headline-xl text-on-surface">Manajemen Divisi</h2>
                <p class="font-body-md text-body-md text-text-secondary">Kelola tim operasional, pantau beban kerja, dan struktur organisasi proyek.</p>
            </div>
            <div class="flex gap-2">
                <button class="flex items-center gap-2 bg-surface border border-border-subtle px-4 py-2 rounded-lg font-label-md text-label-md hover:bg-surface-container transition-colors">
                    <span class="material-symbols-outlined text-[18px]">group_add</span> Undang Anggota
                </button>
                <button class="flex items-center gap-2 bg-primary text-white px-4 py-2 rounded-lg font-label-md text-label-md hover:brightness-110 transition-colors">
                    <span class="material-symbols-outlined text-[18px]">add</span> Tambah Divisi
                </button>
            </div>
        </section>

        <!-- DIVISIONS GRID -->
        <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-stack-lg">
            
            <!-- Division Card 1 -->
            <div class="bg-surface rounded-2xl border border-border-subtle p-stack-lg shadow-sm hover:shadow-md transition-shadow flex flex-col">
                <div class="flex justify-between items-start mb-6">
                    <div class="flex items-center gap-3">
                        <div class="w-12 h-12 rounded-xl bg-primary/10 text-primary flex items-center justify-center">
                            <span class="material-symbols-outlined text-[24px]">precision_manufacturing</span>
                        </div>
                        <div>
                            <h3 class="font-headline-md text-headline-md text-on-surface">Produksi & Teknis</h3>
                            <p class="font-label-sm text-label-sm text-text-secondary">12 Anggota Aktif</p>
                        </div>
                    </div>
                    <button class="text-text-secondary hover:text-primary transition-colors p-1"><span class="material-symbols-outlined">more_vert</span></button>
                </div>

                <div class="space-y-4 mb-6 flex-1">
                    <div>
                        <div class="flex justify-between font-label-sm text-label-sm mb-1">
                            <span class="text-text-secondary">Kapasitas Beban Kerja</span>
                            <span class="text-warning font-medium">85%</span>
                        </div>
                        <div class="h-2 w-full bg-surface-container rounded-full overflow-hidden">
                            <div class="h-full bg-warning rounded-full" style="width: 85%"></div>
                        </div>
                    </div>
                    <div class="flex items-center gap-2 font-body-sm text-body-sm text-on-surface">
                        <span class="material-symbols-outlined text-[18px] text-text-secondary">assignment_ind</span>
                        <span>Manager: <strong>Julian Blake</strong></span>
                    </div>
                    <div class="flex items-center gap-2 font-body-sm text-body-sm text-on-surface">
                        <span class="material-symbols-outlined text-[18px] text-text-secondary">task_alt</span>
                        <span>Tugas Selesai (Bulan ini): <strong>42</strong></span>
                    </div>
                </div>

                <div class="flex gap-2 pt-4 border-t border-border-subtle">
                    <button class="flex-1 bg-surface-container-low hover:bg-surface-container text-primary py-2 rounded-lg font-label-md text-label-md transition-colors">Lihat Tim</button>
                    <button class="flex-1 bg-primary/10 hover:bg-primary/20 text-primary py-2 rounded-lg font-label-md text-label-md transition-colors">Beri Tugas</button>
                </div>
            </div>

            <!-- Division Card 2 -->
            <div class="bg-surface rounded-2xl border border-border-subtle p-stack-lg shadow-sm hover:shadow-md transition-shadow flex flex-col">
                <div class="flex justify-between items-start mb-6">
                    <div class="flex items-center gap-3">
                        <div class="w-12 h-12 rounded-xl bg-tertiary/10 text-tertiary flex items-center justify-center">
                            <span class="material-symbols-outlined text-[24px]">campaign</span>
                        </div>
                        <div>
                            <h3 class="font-headline-md text-headline-md text-on-surface">Pemasaran & Humas</h3>
                            <p class="font-label-sm text-label-sm text-text-secondary">8 Anggota Aktif</p>
                        </div>
                    </div>
                    <button class="text-text-secondary hover:text-primary transition-colors p-1"><span class="material-symbols-outlined">more_vert</span></button>
                </div>

                <div class="space-y-4 mb-6 flex-1">
                    <div>
                        <div class="flex justify-between font-label-sm text-label-sm mb-1">
                            <span class="text-text-secondary">Kapasitas Beban Kerja</span>
                            <span class="text-success font-medium">60%</span>
                        </div>
                        <div class="h-2 w-full bg-surface-container rounded-full overflow-hidden">
                            <div class="h-full bg-success rounded-full" style="width: 60%"></div>
                        </div>
                    </div>
                    <div class="flex items-center gap-2 font-body-sm text-body-sm text-on-surface">
                        <span class="material-symbols-outlined text-[18px] text-text-secondary">assignment_ind</span>
                        <span>Manager: <strong>Elena Vance</strong></span>
                    </div>
                    <div class="flex items-center gap-2 font-body-sm text-body-sm text-on-surface">
                        <span class="material-symbols-outlined text-[18px] text-text-secondary">task_alt</span>
                        <span>Tugas Selesai (Bulan ini): <strong>28</strong></span>
                    </div>
                </div>

                <div class="flex gap-2 pt-4 border-t border-border-subtle">
                    <button class="flex-1 bg-surface-container-low hover:bg-surface-container text-primary py-2 rounded-lg font-label-md text-label-md transition-colors">Lihat Tim</button>
                    <button class="flex-1 bg-primary/10 hover:bg-primary/20 text-primary py-2 rounded-lg font-label-md text-label-md transition-colors">Beri Tugas</button>
                </div>
            </div>

            <!-- Division Card 3 -->
            <div class="bg-surface rounded-2xl border border-border-subtle p-stack-lg shadow-sm hover:shadow-md transition-shadow flex flex-col">
                <div class="flex justify-between items-start mb-6">
                    <div class="flex items-center gap-3">
                        <div class="w-12 h-12 rounded-xl bg-error/10 text-error flex items-center justify-center">
                            <span class="material-symbols-outlined text-[24px]">local_shipping</span>
                        </div>
                        <div>
                            <h3 class="font-headline-md text-headline-md text-on-surface">Logistik & Operasi</h3>
                            <p class="font-label-sm text-label-sm text-text-secondary">15 Anggota Aktif</p>
                        </div>
                    </div>
                    <button class="text-text-secondary hover:text-primary transition-colors p-1"><span class="material-symbols-outlined">more_vert</span></button>
                </div>

                <div class="space-y-4 mb-6 flex-1">
                    <div>
                        <div class="flex justify-between font-label-sm text-label-sm mb-1">
                            <span class="text-text-secondary">Kapasitas Beban Kerja</span>
                            <span class="text-error font-medium">95% (Overload)</span>
                        </div>
                        <div class="h-2 w-full bg-surface-container rounded-full overflow-hidden">
                            <div class="h-full bg-error rounded-full" style="width: 95%"></div>
                        </div>
                    </div>
                    <div class="flex items-center gap-2 font-body-sm text-body-sm text-on-surface">
                        <span class="material-symbols-outlined text-[18px] text-text-secondary">assignment_ind</span>
                        <span>Manager: <strong>Marco Rossi</strong></span>
                    </div>
                    <div class="flex items-center gap-2 font-body-sm text-body-sm text-on-surface">
                        <span class="material-symbols-outlined text-[18px] text-text-secondary">task_alt</span>
                        <span>Tugas Selesai (Bulan ini): <strong>56</strong></span>
                    </div>
                </div>

                <div class="flex gap-2 pt-4 border-t border-border-subtle">
                    <button class="flex-1 bg-surface-container-low hover:bg-surface-container text-primary py-2 rounded-lg font-label-md text-label-md transition-colors">Lihat Tim</button>
                    <button class="flex-1 bg-primary/10 hover:bg-primary/20 text-primary py-2 rounded-lg font-label-md text-label-md transition-colors">Beri Tugas</button>
                </div>
            </div>

        </section>
    </div>
</x-layouts.app>
