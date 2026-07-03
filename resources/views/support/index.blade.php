<x-layouts.app title="Bantuan & Dukungan">
    <div class="p-margin-page max-w-container-max mx-auto w-full flex flex-col gap-stack-lg">
        
        <!-- HEADER SECTION -->
        <section class="bg-primary/5 border border-primary/20 rounded-3xl p-12 flex flex-col items-center justify-center text-center">
            <div class="w-16 h-16 bg-primary text-white rounded-2xl flex items-center justify-center mb-6 shadow-lg shadow-primary/30">
                <span class="material-symbols-outlined text-[32px]">support_agent</span>
            </div>
            <h2 class="font-headline-xl text-headline-xl text-on-surface mb-4">Hai, ada yang bisa kami bantu?</h2>
            <div class="relative w-full max-w-2xl">
                <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-text-secondary text-[24px]">search</span>
                <input class="w-full bg-surface border border-border-subtle rounded-xl pl-12 pr-4 py-4 font-body-md text-body-md focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none transition-all shadow-sm" placeholder="Cari artikel, panduan, atau topik bantuan..." type="text"/>
            </div>
            <div class="flex gap-4 mt-6 text-text-secondary font-label-sm text-label-sm">
                <span>Pencarian Populer:</span>
                <a href="#" class="text-primary hover:underline">Cara reset kata sandi</a>
                <a href="#" class="text-primary hover:underline">Persetujuan vendor</a>
                <a href="#" class="text-primary hover:underline">Ekspor laporan keuangan</a>
            </div>
        </section>

        <section class="grid grid-cols-1 md:grid-cols-3 gap-stack-lg mt-4">
            
            <!-- Category 1 -->
            <div class="bg-surface border border-border-subtle rounded-2xl p-stack-md hover:shadow-md transition-shadow cursor-pointer group">
                <div class="flex items-center gap-4 mb-4">
                    <div class="w-12 h-12 bg-primary/10 text-primary rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform">
                        <span class="material-symbols-outlined text-[24px]">menu_book</span>
                    </div>
                    <h3 class="font-headline-md text-headline-md text-on-surface">Panduan Mulai Cepat</h3>
                </div>
                <p class="font-body-sm text-body-sm text-text-secondary mb-4">Pelajari dasar-dasar navigasi, membuat event pertama Anda, dan menambahkan anggota tim.</p>
                <span class="text-primary font-label-sm text-label-sm flex items-center gap-1 group-hover:gap-2 transition-all">
                    Lihat 12 Artikel <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                </span>
            </div>

            <!-- Category 2 -->
            <div class="bg-surface border border-border-subtle rounded-2xl p-stack-md hover:shadow-md transition-shadow cursor-pointer group">
                <div class="flex items-center gap-4 mb-4">
                    <div class="w-12 h-12 bg-success/10 text-success rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform">
                        <span class="material-symbols-outlined text-[24px]">account_balance_wallet</span>
                    </div>
                    <h3 class="font-headline-md text-headline-md text-on-surface">Manajemen Anggaran</h3>
                </div>
                <p class="font-body-sm text-body-sm text-text-secondary mb-4">Panduan menyusun alokasi anggaran, melacak realisasi biaya, dan menghasilkan laporan finansial.</p>
                <span class="text-primary font-label-sm text-label-sm flex items-center gap-1 group-hover:gap-2 transition-all">
                    Lihat 8 Artikel <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                </span>
            </div>

            <!-- Category 3 -->
            <div class="bg-surface border border-border-subtle rounded-2xl p-stack-md hover:shadow-md transition-shadow cursor-pointer group">
                <div class="flex items-center gap-4 mb-4">
                    <div class="w-12 h-12 bg-warning/10 text-warning rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform">
                        <span class="material-symbols-outlined text-[24px]">smart_toy</span>
                    </div>
                    <h3 class="font-headline-md text-headline-md text-on-surface">Fitur AI Flowvent</h3>
                </div>
                <p class="font-body-sm text-body-sm text-text-secondary mb-4">Cara memaksimalkan analitik prediktif, rekomendasi anggaran otomatis, dan wawasan strategis.</p>
                <span class="text-primary font-label-sm text-label-sm flex items-center gap-1 group-hover:gap-2 transition-all">
                    Lihat 5 Artikel <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                </span>
            </div>

        </section>

        <!-- CONTACT SUPPORT BANNER -->
        <section class="bg-surface-container-low border border-border-subtle rounded-2xl p-stack-lg flex flex-col md:flex-row items-center justify-between gap-6">
            <div class="flex items-center gap-4">
                <div class="w-16 h-16 bg-white border border-border-subtle rounded-full flex items-center justify-center shadow-sm shrink-0">
                    <span class="material-symbols-outlined text-[28px] text-text-secondary">headset_mic</span>
                </div>
                <div>
                    <h3 class="font-headline-md text-headline-md text-on-surface">Masih belum menemukan jawaban?</h3>
                    <p class="font-body-sm text-body-sm text-text-secondary mt-1">Tim dukungan Enterprise kami siap membantu Anda 24/7. Hubungi kami melalui live chat atau tiket dukungan.</p>
                </div>
            </div>
            <div class="flex gap-3 w-full md:w-auto">
                <button class="flex-1 md:flex-none px-6 py-3 border border-border-subtle text-on-surface bg-surface rounded-xl font-label-md text-label-md hover:bg-surface-container transition-colors">Buat Tiket</button>
                <button class="flex-1 md:flex-none px-6 py-3 bg-primary text-white rounded-xl font-label-md text-label-md hover:brightness-110 transition-colors flex items-center justify-center gap-2">
                    <span class="material-symbols-outlined text-[18px]">chat</span> Chat Sekarang
                </button>
            </div>
        </section>

    </div>
</x-layouts.app>
