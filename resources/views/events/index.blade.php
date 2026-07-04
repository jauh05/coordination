<x-layouts.app title="Event & Kampanye">
    <div class="p-margin-page max-w-container-max mx-auto w-full flex flex-col gap-stack-lg">
        
        <!-- HEADER SECTION -->
        <section class="flex flex-col md:flex-row md:items-end justify-between gap-4">
            <div>
                <h2 class="font-headline-xl text-headline-xl text-on-surface">Event & Kampanye</h2>
                <p class="font-body-md text-body-md text-text-secondary">Kelola seluruh portofolio event yang berjalan, mendatang, maupun yang telah selesai.</p>
            </div>
            <div class="flex gap-2">
                <div class="relative">
                    <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-text-secondary text-[20px]">search</span>
                    <input class="w-64 bg-surface border border-border-subtle rounded-lg pl-10 pr-4 py-2 font-body-sm text-body-sm focus:ring-2 focus:ring-primary/20 focus:outline-none" placeholder="Cari event..." type="text"/>
                </div>
                <button class="flex items-center gap-2 bg-surface border border-border-subtle px-4 py-2 rounded-lg font-label-md text-label-md hover:bg-surface-container transition-colors">
                    <span class="material-symbols-outlined text-[18px]">filter_list</span> Filter
                </button>
                <button class="flex items-center gap-2 bg-primary text-white px-4 py-2 rounded-lg font-label-md text-label-md hover:brightness-110 transition-colors">
                    <span class="material-symbols-outlined text-[18px]">add</span> Buat Event Baru
                </button>
            </div>
        </section>

        <!-- KPI CARDS -->
        <section class="grid grid-cols-1 sm:grid-cols-4 gap-stack-md">
            <div class="bg-surface p-stack-md rounded-xl border border-border-subtle shadow-sm flex flex-col gap-2">
                <div class="flex justify-between items-start">
                    <span class="text-text-secondary font-label-md text-label-md">Event Aktif</span>
                    <span class="text-primary material-symbols-outlined">celebration</span>
                </div>
                <div class="flex items-end gap-2">
                    <span class="font-headline-lg text-headline-lg">12</span>
                    <span class="font-label-sm text-label-sm text-text-secondary pb-1">Kuartal ini</span>
                </div>
            </div>
            <div class="bg-surface p-stack-md rounded-xl border border-border-subtle shadow-sm flex flex-col gap-2">
                <div class="flex justify-between items-start">
                    <span class="text-text-secondary font-label-md text-label-md">Total Peserta Terdaftar</span>
                    <span class="text-success material-symbols-outlined">groups</span>
                </div>
                <div class="flex items-end gap-2">
                    <span class="font-headline-lg text-headline-lg">18.4K</span>
                    <span class="font-label-sm text-label-sm text-success pb-1">↑ 14%</span>
                </div>
            </div>
            <div class="bg-surface p-stack-md rounded-xl border border-border-subtle shadow-sm flex flex-col gap-2">
                <div class="flex justify-between items-start">
                    <span class="text-text-secondary font-label-md text-label-md">Pendapatan Tiket (Est)</span>
                    <span class="text-warning material-symbols-outlined">local_activity</span>
                </div>
                <div class="flex items-end gap-2">
                    <span class="font-headline-lg text-headline-lg">Rp 2,1M</span>
                    <span class="font-label-sm text-label-sm text-text-secondary pb-1">82% Target</span>
                </div>
            </div>
            <div class="bg-surface p-stack-md rounded-xl border border-border-subtle shadow-sm flex flex-col gap-2">
                <div class="flex justify-between items-start">
                    <span class="text-text-secondary font-label-md text-label-md">Tingkat Retensi</span>
                    <span class="text-tertiary material-symbols-outlined">repeat</span>
                </div>
                <div class="flex items-end gap-2">
                    <span class="font-headline-lg text-headline-lg">68%</span>
                    <span class="font-label-sm text-label-sm text-success pb-1">Peserta Berulang</span>
                </div>
            </div>
        </section>

        <!-- EVENT TABS -->
        <section class="border-b border-border-subtle flex gap-6">
            <button class="font-label-md text-label-md text-primary border-b-2 border-primary pb-3 px-1">Sedang Berjalan (4)</button>
            <button class="font-label-md text-label-md text-text-secondary hover:text-on-surface pb-3 px-1 transition-colors">Akan Datang (8)</button>
            <button class="font-label-md text-label-md text-text-secondary hover:text-on-surface pb-3 px-1 transition-colors">Selesai (24)</button>
            <button class="font-label-md text-label-md text-text-secondary hover:text-on-surface pb-3 px-1 transition-colors">Draf (2)</button>
        </section>

        <!-- EVENT GRID -->
        <section class="grid grid-cols-1 lg:grid-cols-3 gap-stack-lg">
            
            <!-- Event Card 1 -->
            <div class="bg-surface rounded-2xl border border-border-subtle shadow-sm overflow-hidden flex flex-col hover:shadow-md transition-shadow group">
                <div class="h-48 w-full bg-surface-container relative overflow-hidden">
                    <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="A modern architectural marvel, a sleek glass convention center at sunset with violet and deep blue skies." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBRW-Tl6foB-QmMDXdbWgi9PjQdKJ_U72DeZtjWhQ-5eup75pkBwrj1FOMdnKWrgYm7-5DcHgox39TP7nTbKEOETq_ZPIZCueXDlhISyzD3_Kgt8UYK_nPs1QI7OorX82HHoiBTKe_dtdRmW5CRFINu-d9eFFhawgWCXhxho8m0KzA_XeJvJ_rckhgzUHyEAxItxztIdtZ5fNIQNOGdwhrIwWL9IQHL6QQ3ehPbOJ6PJOSjGCdl2kSPtMz1Uo-G3hla1NUMd4wSrjE"/>
                    <div class="absolute top-4 left-4 bg-white/90 backdrop-blur px-3 py-1.5 rounded-lg flex flex-col items-center">
                        <span class="font-label-sm text-[10px] text-error font-bold uppercase leading-none">Agu</span>
                        <span class="font-headline-md text-headline-md text-on-surface leading-none mt-1">12</span>
                    </div>
                    <div class="absolute top-4 right-4 bg-primary text-white font-label-sm text-[10px] uppercase font-bold px-2 py-1 rounded">Eksekusi</div>
                </div>
                <div class="p-stack-md flex flex-col flex-1">
                    <h3 class="font-headline-md text-headline-md text-on-surface mb-2">Summer Tech Expo 2024</h3>
                    <p class="font-body-sm text-body-sm text-text-secondary mb-4 line-clamp-2">Pameran teknologi tahunan yang mempertemukan inovator global dan startup lokal.</p>
                    <div class="space-y-2 mt-auto">
                        <div class="flex items-center gap-2 font-label-sm text-label-sm text-text-secondary">
                            <span class="material-symbols-outlined text-[16px]">location_on</span> Jakarta Convention Center
                        </div>
                        <div class="flex items-center gap-2 font-label-sm text-label-sm text-text-secondary">
                            <span class="material-symbols-outlined text-[16px]">group</span> 5.200 / 8.000 Terdaftar
                        </div>
                    </div>
                </div>
                <div class="p-4 border-t border-border-subtle bg-surface-container-low flex justify-between items-center">
                    <div class="flex -space-x-2">
                        <img class="w-8 h-8 rounded-full border-2 border-surface object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBhXu1IRDMHSzf_xcvaSjjknLdSs0_Z6D52T48azjOeO6V6cK0LpFcrFiRQGGWVC-zM4cX8Y3PgYqLPJZORGYWvkNEZ53hIxUApuv92diXQSCxjihp3UGoEWXa4RTi8lucWtXpZwLHG9dj-_E1U3JuHCVV70VnDoEkV68tw78Yg_n-wpDtzRwfBGc2LOvQi23oIBZ18Zs1lBknUHuEzdS-5BC0owAqGt7PXVVbtOQK2aVm5omtOGe2vywkE_n1dVuO_zSao2dscoCc"/>
                        <div class="w-8 h-8 rounded-full border-2 border-surface bg-primary/20 text-primary flex items-center justify-center font-label-sm text-label-sm font-bold">+4</div>
                    </div>
                    <button class="text-primary font-label-md text-label-md hover:underline">Kelola Event</button>
                </div>
            </div>

            <!-- Event Card 2 -->
            <div class="bg-surface rounded-2xl border border-border-subtle shadow-sm overflow-hidden flex flex-col hover:shadow-md transition-shadow group">
                <div class="h-48 w-full bg-surface-container relative overflow-hidden">
                    <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="A grand ballroom prepared for a formal gala, featuring intricate ceiling lighting, white linen tables, and floral arrangements." src="https://lh3.googleusercontent.com/aida-public/AB6AXuC4lghiu1N2fdXtPV74mFHvMOJ2aWmwgGDONl7lRrRD7ZE0C3jBTmZxBbGT2H1enccxIUHsZp-1K-FkJelgPa1iM4GzMwx71pEqBnFfOw5kcoENtPdeOinTA2eTOBu5wxCZcUuZptDWV1xNqhMkwAGOV7dz8T4VNn7kQYxeNmH7JVnU55Qf0btyvfyspZiVXbPT5tza4nK2WPufYiyy7PutwCwKZG6LFjQhrSpQFWuj3NTcHQubtBcKj-BvqZ3SgylAIL9IdekAFpk"/>
                    <div class="absolute top-4 left-4 bg-white/90 backdrop-blur px-3 py-1.5 rounded-lg flex flex-col items-center">
                        <span class="font-label-sm text-[10px] text-error font-bold uppercase leading-none">Okt</span>
                        <span class="font-headline-md text-headline-md text-on-surface leading-none mt-1">24</span>
                    </div>
                    <div class="absolute top-4 right-4 bg-warning text-white font-label-sm text-[10px] uppercase font-bold px-2 py-1 rounded">Persiapan</div>
                </div>
                <div class="p-stack-md flex flex-col flex-1">
                    <h3 class="font-headline-md text-headline-md text-on-surface mb-2">Annual Gala 2024</h3>
                    <p class="font-body-sm text-body-sm text-text-secondary mb-4 line-clamp-2">Malam amal dan penghargaan untuk partner bisnis dan investor utama.</p>
                    <div class="space-y-2 mt-auto">
                        <div class="flex items-center gap-2 font-label-sm text-label-sm text-text-secondary">
                            <span class="material-symbols-outlined text-[16px]">location_on</span> The Ritz-Carlton, Pacific Place
                        </div>
                        <div class="flex items-center gap-2 font-label-sm text-label-sm text-text-secondary">
                            <span class="material-symbols-outlined text-[16px]">group</span> 320 / 500 VIP Terdaftar
                        </div>
                    </div>
                </div>
                <div class="p-4 border-t border-border-subtle bg-surface-container-low flex justify-between items-center">
                    <div class="flex -space-x-2">
                        <img class="w-8 h-8 rounded-full border-2 border-surface object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuADFYwb1SXvI5oDehHApHkdCA3LpL8F-BjDeBlwZ5egw_TOLtwCVZEqNYbm5VSkAupPvwfvLCM3js3TOQqhFoM_rdIQG_n59sH7wUM5NYfVPDl_JmZAHUCPJS055U84GxJwyRp2ex3yES0sXSyZ-g2roHEomX24_oFwwJcFuyDuSbSXXK9B1gImBRU6H-JH0Swcn-34Gj7JBwILNfC0Hs8z56vZ0T5ngocG7TroN0OeFAA4Nk8Okz07wowsYY6F0ferO-KZaShMLzs"/>
                        <div class="w-8 h-8 rounded-full border-2 border-surface bg-primary/20 text-primary flex items-center justify-center font-label-sm text-label-sm font-bold">+2</div>
                    </div>
                    <button class="text-primary font-label-md text-label-md hover:underline">Kelola Event</button>
                </div>
            </div>

            <!-- Event Card 3 -->
            <div class="bg-surface rounded-2xl border border-border-subtle shadow-sm overflow-hidden flex flex-col hover:shadow-md transition-shadow group">
                <div class="h-48 w-full bg-surface-container relative overflow-hidden flex items-center justify-center bg-gradient-to-tr from-surface-variant to-primary/10">
                    <span class="material-symbols-outlined text-[64px] text-primary/20">event_available</span>
                    <div class="absolute top-4 left-4 bg-white/90 backdrop-blur px-3 py-1.5 rounded-lg flex flex-col items-center">
                        <span class="font-label-sm text-[10px] text-error font-bold uppercase leading-none">Nov</span>
                        <span class="font-headline-md text-headline-md text-on-surface leading-none mt-1">05</span>
                    </div>
                    <div class="absolute top-4 right-4 bg-tertiary text-white font-label-sm text-[10px] uppercase font-bold px-2 py-1 rounded">Ideasi</div>
                </div>
                <div class="p-stack-md flex flex-col flex-1">
                    <h3 class="font-headline-md text-headline-md text-on-surface mb-2">Internal Team Retreat</h3>
                    <p class="font-body-sm text-body-sm text-text-secondary mb-4 line-clamp-2">Perencanaan tahunan, team building, dan penyelarasan visi untuk seluruh staf.</p>
                    <div class="space-y-2 mt-auto">
                        <div class="flex items-center gap-2 font-label-sm text-label-sm text-text-secondary">
                            <span class="material-symbols-outlined text-[16px]">location_on</span> TBD (Bali / Bandung)
                        </div>
                        <div class="flex items-center gap-2 font-label-sm text-label-sm text-text-secondary">
                            <span class="material-symbols-outlined text-[16px]">group</span> 120 Estimasi Peserta
                        </div>
                    </div>
                </div>
                <div class="p-4 border-t border-border-subtle bg-surface-container-low flex justify-between items-center">
                    <div class="flex -space-x-2">
                        <div class="w-8 h-8 rounded-full border-2 border-surface bg-surface-variant text-text-secondary flex items-center justify-center font-label-sm text-label-sm font-bold">Un</div>
                    </div>
                    <button class="text-primary font-label-md text-label-md hover:underline">Kelola Event</button>
                </div>
            </div>

        </section>
    </div>
</x-layouts.app>
