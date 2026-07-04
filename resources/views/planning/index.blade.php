<x-layouts.app title="Perencanaan Strategis">
    <div class="p-margin-page max-w-container-max mx-auto w-full flex flex-col gap-stack-lg h-[calc(100vh-80px)]">
        
        <!-- HEADER SECTION -->
        <section class="flex flex-col md:flex-row md:items-end justify-between gap-4 shrink-0">
            <div>
                <h2 class="font-headline-xl text-headline-xl text-on-surface">Papan Perencanaan</h2>
                <div class="flex items-center gap-2 mt-1">
                    <span class="font-body-md text-body-md text-text-secondary">Tampilan untuk:</span>
                    <select class="bg-surface border border-border-subtle text-primary font-semibold rounded-lg px-2 py-1 text-sm outline-none">
                        <option>Semua Event Aktif</option>
                        <option>Summer Tech Expo 2024</option>
                        <option>Annual Gala 2024</option>
                    </select>
                </div>
            </div>
            <div class="flex gap-2">
                <button class="flex items-center gap-2 bg-surface border border-border-subtle px-4 py-2 rounded-lg font-label-md text-label-md hover:bg-surface-container transition-colors">
                    <span class="material-symbols-outlined text-[18px]">view_timeline</span> Tampilan Gantt
                </button>
                <button class="flex items-center gap-2 bg-primary text-white px-4 py-2 rounded-lg font-label-md text-label-md hover:brightness-110 transition-colors">
                    <span class="material-symbols-outlined text-[18px]">add</span> Tambah Tugas
                </button>
            </div>
        </section>

        <!-- KANBAN BOARD -->
        <section class="flex-1 overflow-x-auto pb-4 custom-scrollbar">
            <div class="flex gap-6 h-full min-w-max">
                
                <!-- Column 1: Ideasi -->
                <div class="w-80 flex flex-col gap-4">
                    <div class="flex items-center justify-between px-2">
                        <h3 class="font-headline-sm text-headline-md text-on-surface flex items-center gap-2">
                            <span class="w-3 h-3 rounded-full bg-surface-variant border border-outline"></span> Ideasi
                        </h3>
                        <span class="bg-surface-container-low text-text-secondary px-2 py-0.5 rounded-full font-label-sm text-label-sm">2</span>
                    </div>
                    
                    <div class="bg-surface-container-lowest p-2 rounded-2xl flex-1 flex flex-col gap-3 overflow-y-auto custom-scrollbar border border-border-subtle border-dashed">
                        
                        <!-- Task Card -->
                        <div class="bg-surface p-4 rounded-xl shadow-sm border border-border-subtle hover:border-primary/50 hover:shadow-md transition-all cursor-pointer group">
                            <div class="flex justify-between items-start mb-2">
                                <span class="bg-primary/10 text-primary px-2 py-0.5 rounded text-[10px] uppercase font-bold tracking-wider">Internal Retreat</span>
                                <button class="text-text-secondary opacity-0 group-hover:opacity-100 transition-opacity"><span class="material-symbols-outlined text-[16px]">more_horiz</span></button>
                            </div>
                            <h4 class="font-label-md text-label-md text-on-surface mb-2">Tentukan Lokasi (Bali / Bandung)</h4>
                            <div class="flex justify-between items-center mt-4">
                                <div class="flex items-center gap-1 text-warning font-label-sm text-label-sm">
                                    <span class="material-symbols-outlined text-[14px]">flag</span> Medium
                                </div>
                                <img class="w-6 h-6 rounded-full border border-surface" src="https://lh3.googleusercontent.com/aida-public/AB6AXuADFYwb1SXvI5oDehHApHkdCA3LpL8F-BjDeBlwZ5egw_TOLtwCVZEqNYbm5VSkAupPvwfvLCM3js3TOQqhFoM_rdIQG_n59sH7wUM5NYfVPDl_JmZAHUCPJS055U84GxJwyRp2ex3yES0sXSyZ-g2roHEomX24_oFwwJcFuyDuSbSXXK9B1gImBRU6H-JH0Swcn-34Gj7JBwILNfC0Hs8z56vZ0T5ngocG7TroN0OeFAA4Nk8Okz07wowsYY6F0ferO-KZaShMLzs"/>
                            </div>
                        </div>

                        <!-- Task Card -->
                        <div class="bg-surface p-4 rounded-xl shadow-sm border border-border-subtle hover:border-primary/50 hover:shadow-md transition-all cursor-pointer group">
                            <div class="flex justify-between items-start mb-2">
                                <span class="bg-primary/10 text-primary px-2 py-0.5 rounded text-[10px] uppercase font-bold tracking-wider">Internal Retreat</span>
                                <button class="text-text-secondary opacity-0 group-hover:opacity-100 transition-opacity"><span class="material-symbols-outlined text-[16px]">more_horiz</span></button>
                            </div>
                            <h4 class="font-label-md text-label-md text-on-surface mb-2">Penyusunan Draft Anggaran</h4>
                            <div class="flex justify-between items-center mt-4">
                                <div class="flex items-center gap-1 text-text-secondary font-label-sm text-label-sm">
                                    <span class="material-symbols-outlined text-[14px]">flag</span> Rendah
                                </div>
                                <div class="w-6 h-6 rounded-full border border-surface bg-surface-variant text-text-secondary flex items-center justify-center font-label-sm text-[10px] font-bold">Un</div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Column 2: Persiapan -->
                <div class="w-80 flex flex-col gap-4">
                    <div class="flex items-center justify-between px-2">
                        <h3 class="font-headline-sm text-headline-md text-on-surface flex items-center gap-2">
                            <span class="w-3 h-3 rounded-full bg-warning border border-warning/50"></span> Persiapan
                        </h3>
                        <span class="bg-surface-container-low text-text-secondary px-2 py-0.5 rounded-full font-label-sm text-label-sm">3</span>
                    </div>
                    
                    <div class="bg-surface-container-low/50 p-2 rounded-2xl flex-1 flex flex-col gap-3 overflow-y-auto custom-scrollbar border border-border-subtle border-dashed">
                        
                        <!-- Task Card -->
                        <div class="bg-surface p-4 rounded-xl shadow-sm border border-border-subtle hover:border-primary/50 hover:shadow-md transition-all cursor-pointer group">
                            <div class="flex justify-between items-start mb-2">
                                <span class="bg-warning/10 text-warning px-2 py-0.5 rounded text-[10px] uppercase font-bold tracking-wider">Annual Gala</span>
                            </div>
                            <h4 class="font-label-md text-label-md text-on-surface mb-2">Finalisasi Menu Catering Fiesta</h4>
                            <div class="w-full bg-surface-container h-1.5 rounded-full overflow-hidden mb-3">
                                <div class="bg-warning h-full rounded-full w-[45%]"></div>
                            </div>
                            <div class="flex justify-between items-center">
                                <div class="flex items-center gap-1 text-error font-label-sm text-label-sm">
                                    <span class="material-symbols-outlined text-[14px]">schedule</span> Bsk, 17:00
                                </div>
                                <img class="w-6 h-6 rounded-full border border-surface" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBhXu1IRDMHSzf_xcvaSjjknLdSs0_Z6D52T48azjOeO6V6cK0LpFcrFiRQGGWVC-zM4cX8Y3PgYqLPJZORGYWvkNEZ53hIxUApuv92diXQSCxjihp3UGoEWXa4RTi8lucWtXpZwLHG9dj-_E1U3JuHCVV70VnDoEkV68tw78Yg_n-wpDtzRwfBGc2LOvQi23oIBZ18Zs1lBknUHuEzdS-5BC0owAqGt7PXVVbtOQK2aVm5omtOGe2vywkE_n1dVuO_zSao2dscoCc"/>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Column 3: Eksekusi -->
                <div class="w-80 flex flex-col gap-4">
                    <div class="flex items-center justify-between px-2">
                        <h3 class="font-headline-sm text-headline-md text-on-surface flex items-center gap-2">
                            <span class="w-3 h-3 rounded-full bg-primary border border-primary/50"></span> Eksekusi
                        </h3>
                        <span class="bg-surface-container-low text-text-secondary px-2 py-0.5 rounded-full font-label-sm text-label-sm">1</span>
                    </div>
                    
                    <div class="bg-surface-container-low/50 p-2 rounded-2xl flex-1 flex flex-col gap-3 overflow-y-auto custom-scrollbar border border-border-subtle border-dashed">
                        <!-- Task Card -->
                        <div class="bg-surface p-4 rounded-xl shadow-sm border border-border-subtle hover:border-primary/50 hover:shadow-md transition-all cursor-pointer group">
                            <div class="flex justify-between items-start mb-2">
                                <span class="bg-primary/10 text-primary px-2 py-0.5 rounded text-[10px] uppercase font-bold tracking-wider">Tech Expo</span>
                            </div>
                            <h4 class="font-label-md text-label-md text-on-surface mb-2">Setup Booth & Registrasi</h4>
                            <div class="w-full bg-surface-container h-1.5 rounded-full overflow-hidden mb-3">
                                <div class="bg-primary h-full rounded-full w-[85%]"></div>
                            </div>
                            <div class="flex justify-between items-center">
                                <div class="flex items-center gap-1 text-text-secondary font-label-sm text-label-sm">
                                    <span class="material-symbols-outlined text-[14px]">task_alt</span> 8/10
                                </div>
                                <div class="w-6 h-6 rounded-full border border-surface bg-primary/20 text-primary flex items-center justify-center font-label-sm text-[10px] font-bold">AR</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Column 4: Selesai -->
                <div class="w-80 flex flex-col gap-4">
                    <div class="flex items-center justify-between px-2">
                        <h3 class="font-headline-sm text-headline-md text-on-surface flex items-center gap-2 opacity-60">
                            <span class="w-3 h-3 rounded-full bg-success border border-success/50"></span> Selesai
                        </h3>
                        <span class="bg-surface-container-low text-text-secondary px-2 py-0.5 rounded-full font-label-sm text-label-sm">4</span>
                    </div>
                    
                    <div class="bg-surface-container-low/20 p-2 rounded-2xl flex-1 flex flex-col gap-3 overflow-y-auto custom-scrollbar border border-border-subtle border-dashed opacity-75">
                         <!-- Task Card -->
                         <div class="bg-surface p-4 rounded-xl shadow-sm border border-border-subtle">
                            <h4 class="font-label-md text-label-md text-on-surface line-through text-text-secondary mb-2">Pemilihan Tema Expo</h4>
                            <div class="flex justify-between items-center">
                                <span class="px-2 py-0.5 bg-success/10 text-success rounded text-[10px] uppercase font-bold">Done</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Add Column -->
                <div class="w-12 pt-10">
                    <button class="w-full h-full min-h-[100px] border-2 border-dashed border-border-subtle rounded-2xl flex items-center justify-center text-text-secondary hover:text-primary hover:bg-primary/5 hover:border-primary/30 transition-colors">
                        <span class="material-symbols-outlined">add</span>
                    </button>
                </div>

            </div>
        </section>

    </div>
</x-layouts.app>
