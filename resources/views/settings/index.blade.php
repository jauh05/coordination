<x-layouts.app title="Pengaturan">
    <div class="p-margin-page max-w-container-max mx-auto w-full flex flex-col gap-stack-lg">
        
        <!-- HEADER SECTION -->
        <section class="flex flex-col md:flex-row md:items-end justify-between gap-4">
            <div>
                <h2 class="font-headline-xl text-headline-xl text-on-surface">Pengaturan Sistem</h2>
                <p class="font-body-md text-body-md text-text-secondary">Kelola preferensi akun, integrasi, dan kontrol akses platform.</p>
            </div>
            <div class="flex gap-2">
                <button class="flex items-center gap-2 bg-primary text-white px-4 py-2 rounded-lg font-label-md text-label-md hover:brightness-110 transition-colors">
                    Simpan Perubahan
                </button>
            </div>
        </section>

        <section class="flex flex-col md:flex-row gap-stack-lg items-start">
            
            <!-- SETTINGS SIDEBAR -->
            <div class="w-full md:w-64 flex-shrink-0 bg-surface border border-border-subtle rounded-2xl p-4 shadow-sm">
                <nav class="space-y-1">
                    <a href="#" class="flex items-center gap-3 px-3 py-2 text-primary font-semibold bg-surface-container-low rounded-lg transition-colors">
                        <span class="material-symbols-outlined">tune</span>
                        <span class="font-label-md text-label-md">Umum</span>
                    </a>
                    <a href="#" class="flex items-center gap-3 px-3 py-2 text-text-secondary hover:text-on-surface hover:bg-surface-container-low rounded-lg transition-colors">
                        <span class="material-symbols-outlined">person</span>
                        <span class="font-label-md text-label-md">Profil Saya</span>
                    </a>
                    <a href="#" class="flex items-center gap-3 px-3 py-2 text-text-secondary hover:text-on-surface hover:bg-surface-container-low rounded-lg transition-colors">
                        <span class="material-symbols-outlined">notifications</span>
                        <span class="font-label-md text-label-md">Notifikasi</span>
                    </a>

                </nav>
            </div>

            <!-- SETTINGS CONTENT -->
            <div class="flex-1 w-full bg-surface border border-border-subtle rounded-2xl shadow-sm flex flex-col">
                <div class="p-stack-lg border-b border-border-subtle">
                    <h3 class="font-headline-md text-headline-md text-on-surface mb-1">Pengaturan Umum</h3>
                    <p class="font-body-sm text-body-sm text-text-secondary">Konfigurasi dasar untuk platform manajemen event Anda.</p>
                </div>
                
                <div class="p-stack-lg space-y-8">
                    
                    <!-- Form Group -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <div class="md:col-span-1">
                            <h4 class="font-label-md text-label-md text-on-surface">Informasi Perusahaan</h4>
                            <p class="font-body-sm text-body-sm text-text-secondary mt-1">Detail ini akan ditampilkan pada laporan dan invoice publik.</p>
                        </div>
                        <div class="md:col-span-2 space-y-4">
                            <div>
                                <label class="block font-label-sm text-label-sm text-on-surface mb-1">Nama Organisasi</label>
                                <input type="text" value="Coordination Global Ops" class="w-full bg-surface-container-lowest border border-border-subtle rounded-lg px-4 py-2 font-body-sm focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none transition-all">
                            </div>
                            <div>
                                <label class="block font-label-sm text-label-sm text-on-surface mb-1">Email Kontak Utama</label>
                                <input type="email" value="operations@flowvent.com" class="w-full bg-surface-container-lowest border border-border-subtle rounded-lg px-4 py-2 font-body-sm focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none transition-all">
                            </div>
                            <div>
                                <label class="block font-label-sm text-label-sm text-on-surface mb-1">Zona Waktu Sistem</label>
                                <select class="w-full bg-surface-container-lowest border border-border-subtle rounded-lg px-4 py-2 font-body-sm focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none transition-all">
                                    <option>Waktu Indonesia Barat (WIB) - GMT+7</option>
                                    <option>Waktu Indonesia Tengah (WITA) - GMT+8</option>
                                    <option>Waktu Indonesia Timur (WIT) - GMT+9</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="h-px bg-border-subtle w-full"></div>

                    <!-- Form Group -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <div class="md:col-span-1">
                            <h4 class="font-label-md text-label-md text-on-surface">Mata Uang & Anggaran</h4>
                            <p class="font-body-sm text-body-sm text-text-secondary mt-1">Mata uang default yang digunakan di seluruh metrik dashboard.</p>
                        </div>
                        <div class="md:col-span-2 space-y-4">
                            <div>
                                <label class="block font-label-sm text-label-sm text-on-surface mb-1">Mata Uang Default</label>
                                <select class="w-full bg-surface-container-lowest border border-border-subtle rounded-lg px-4 py-2 font-body-sm focus:ring-2 focus:ring-primary/20 focus:border-primary outline-none transition-all">
                                    <option>IDR - Rupiah</option>
                                    <option>USD - US Dollar</option>
                                    <option>SGD - Singapore Dollar</option>
                                </select>
                            </div>
                            <div class="flex items-center justify-between bg-surface-container-low p-4 rounded-xl border border-border-subtle">
                                <div>
                                    <h5 class="font-label-md text-label-md text-on-surface">Format Angka Singkat</h5>
                                    <p class="font-label-sm text-label-sm text-text-secondary mt-1">Tampilkan "Rp 4,2M" alih-alih "Rp 4.200.000.000" di dasbor utama.</p>
                                </div>
                                <!-- Toggle Switch -->
                                <button class="relative inline-flex h-6 w-11 items-center rounded-full bg-primary transition-colors focus:outline-none">
                                    <span class="translate-x-6 inline-block h-4 w-4 rounded-full bg-white transition-transform"></span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="h-px bg-border-subtle w-full"></div>
                    
                    <!-- Form Group -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <div class="md:col-span-1">
                            <h4 class="font-label-md text-label-md text-on-surface text-error">Hapus Organisasi</h4>
                            <p class="font-body-sm text-body-sm text-text-secondary mt-1">Tindakan ini tidak dapat dibatalkan. Semua data event dan laporan akan dihapus.</p>
                        </div>
                        <div class="md:col-span-2">
                            <button class="px-4 py-2 bg-error/10 text-error font-label-md text-label-md rounded-lg border border-error/20 hover:bg-error/20 transition-colors">
                                Hapus Akun Organisasi
                            </button>
                        </div>
                    </div>

                </div>
            </div>

        </section>
    </div>
</x-layouts.app>
