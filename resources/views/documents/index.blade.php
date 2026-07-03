<x-layouts.app title="Pusat Dokumen">
    <div class="p-margin-page max-w-container-max mx-auto w-full flex flex-col gap-stack-lg">
        
        <!-- HEADER SECTION -->
        <section class="flex flex-col md:flex-row md:items-end justify-between gap-4">
            <div>
                <h2 class="font-headline-xl text-headline-xl text-on-surface">Pusat Dokumen</h2>
                <p class="font-body-md text-body-md text-text-secondary">Akses terpusat untuk proposal, kontrak, dan aset desain event.</p>
            </div>
            <div class="flex gap-2">
                <div class="relative">
                    <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-text-secondary text-[20px]">search</span>
                    <input class="w-64 bg-surface border border-border-subtle rounded-lg pl-10 pr-4 py-2 font-body-sm text-body-sm focus:ring-2 focus:ring-primary/20 focus:outline-none" placeholder="Cari dokumen..." type="text"/>
                </div>
                <button class="flex items-center gap-2 bg-primary text-white px-4 py-2 rounded-lg font-label-md text-label-md hover:brightness-110 transition-colors">
                    <span class="material-symbols-outlined text-[18px]">upload_file</span> Unggah File
                </button>
            </div>
        </section>

        <!-- FOLDERS -->
        <section>
            <h3 class="font-headline-md text-headline-md text-on-surface mb-4">Kategori Folder</h3>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-stack-md">
                <div class="bg-surface rounded-xl border border-border-subtle p-4 flex items-center gap-4 hover:bg-surface-container-low cursor-pointer transition-colors group">
                    <div class="w-10 h-10 rounded-lg bg-primary/10 text-primary flex items-center justify-center group-hover:scale-110 transition-transform">
                        <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">folder</span>
                    </div>
                    <div>
                        <h4 class="font-label-md text-label-md text-on-surface">Proposal & Pitch</h4>
                        <p class="font-label-sm text-label-sm text-text-secondary">24 File</p>
                    </div>
                </div>
                <div class="bg-surface rounded-xl border border-border-subtle p-4 flex items-center gap-4 hover:bg-surface-container-low cursor-pointer transition-colors group">
                    <div class="w-10 h-10 rounded-lg bg-tertiary/10 text-tertiary flex items-center justify-center group-hover:scale-110 transition-transform">
                        <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">folder</span>
                    </div>
                    <div>
                        <h4 class="font-label-md text-label-md text-on-surface">Kontrak Vendor</h4>
                        <p class="font-label-sm text-label-sm text-text-secondary">18 File</p>
                    </div>
                </div>
                <div class="bg-surface rounded-xl border border-border-subtle p-4 flex items-center gap-4 hover:bg-surface-container-low cursor-pointer transition-colors group">
                    <div class="w-10 h-10 rounded-lg bg-success/10 text-success flex items-center justify-center group-hover:scale-110 transition-transform">
                        <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">folder</span>
                    </div>
                    <div>
                        <h4 class="font-label-md text-label-md text-on-surface">Laporan Keuangan</h4>
                        <p class="font-label-sm text-label-sm text-text-secondary">12 File</p>
                    </div>
                </div>
                <div class="bg-surface rounded-xl border border-border-subtle p-4 flex items-center gap-4 hover:bg-surface-container-low cursor-pointer transition-colors group">
                    <div class="w-10 h-10 rounded-lg bg-warning/10 text-warning flex items-center justify-center group-hover:scale-110 transition-transform">
                        <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">folder</span>
                    </div>
                    <div>
                        <h4 class="font-label-md text-label-md text-on-surface">Desain & Aset</h4>
                        <p class="font-label-sm text-label-sm text-text-secondary">156 File</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- FILE LIST -->
        <section class="bg-surface rounded-2xl border border-border-subtle flex-1 flex flex-col shadow-sm overflow-hidden">
            <div class="flex justify-between items-center p-stack-md border-b border-border-subtle">
                <h4 class="font-headline-md text-headline-md text-on-surface">File Terbaru</h4>
                <div class="flex gap-2">
                    <button class="p-2 text-text-secondary hover:bg-surface-container rounded-lg transition-colors"><span class="material-symbols-outlined">grid_view</span></button>
                    <button class="p-2 text-primary bg-primary/10 rounded-lg transition-colors"><span class="material-symbols-outlined">view_list</span></button>
                </div>
            </div>
            
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead class="bg-surface-container-low">
                        <tr>
                            <th class="py-3 px-6 font-label-md text-label-md text-text-secondary">Nama File</th>
                            <th class="py-3 px-6 font-label-md text-label-md text-text-secondary">Event Terkait</th>
                            <th class="py-3 px-6 font-label-md text-label-md text-text-secondary">Diunggah Oleh</th>
                            <th class="py-3 px-6 font-label-md text-label-md text-text-secondary">Tanggal</th>
                            <th class="py-3 px-6 font-label-md text-label-md text-text-secondary text-right">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-border-subtle">
                        <!-- Row 1 -->
                        <tr class="hover:bg-surface-container-low/50 transition-colors group">
                            <td class="py-4 px-6">
                                <div class="flex items-center gap-3">
                                    <span class="material-symbols-outlined text-error" style="font-variation-settings: 'FILL' 1;">picture_as_pdf</span>
                                    <div>
                                        <div class="font-body-md text-body-md text-on-surface font-medium">Proposal_Gala_2024_v2.pdf</div>
                                        <div class="font-label-sm text-label-sm text-text-secondary">2.4 MB</div>
                                    </div>
                                </div>
                            </td>
                            <td class="py-4 px-6 font-body-sm text-body-sm text-on-surface">Annual Gala 2024</td>
                            <td class="py-4 px-6">
                                <div class="flex items-center gap-2">
                                    <div class="w-6 h-6 rounded-full bg-primary/20 text-primary flex items-center justify-center font-bold text-[10px]">EV</div>
                                    <span class="font-body-sm text-body-sm text-on-surface">Elena Vance</span>
                                </div>
                            </td>
                            <td class="py-4 px-6 font-body-sm text-body-sm text-text-secondary">Hari ini, 10:42</td>
                            <td class="py-4 px-6 text-right">
                                <button class="p-2 text-text-secondary hover:text-primary transition-colors rounded-lg opacity-0 group-hover:opacity-100"><span class="material-symbols-outlined">download</span></button>
                                <button class="p-2 text-text-secondary hover:text-error transition-colors rounded-lg opacity-0 group-hover:opacity-100"><span class="material-symbols-outlined">delete</span></button>
                            </td>
                        </tr>
                        <!-- Row 2 -->
                        <tr class="hover:bg-surface-container-low/50 transition-colors group">
                            <td class="py-4 px-6">
                                <div class="flex items-center gap-3">
                                    <span class="material-symbols-outlined text-primary" style="font-variation-settings: 'FILL' 1;">description</span>
                                    <div>
                                        <div class="font-body-md text-body-md text-on-surface font-medium">Kontrak_Sonic_Vision.docx</div>
                                        <div class="font-label-sm text-label-sm text-text-secondary">1.1 MB</div>
                                    </div>
                                </div>
                            </td>
                            <td class="py-4 px-6 font-body-sm text-body-sm text-on-surface">Summer Tech Expo</td>
                            <td class="py-4 px-6">
                                <div class="flex items-center gap-2">
                                    <div class="w-6 h-6 rounded-full bg-tertiary/20 text-tertiary flex items-center justify-center font-bold text-[10px]">JB</div>
                                    <span class="font-body-sm text-body-sm text-on-surface">Julian Blake</span>
                                </div>
                            </td>
                            <td class="py-4 px-6 font-body-sm text-body-sm text-text-secondary">Kemarin, 15:30</td>
                            <td class="py-4 px-6 text-right">
                                <button class="p-2 text-text-secondary hover:text-primary transition-colors rounded-lg opacity-0 group-hover:opacity-100"><span class="material-symbols-outlined">download</span></button>
                                <button class="p-2 text-text-secondary hover:text-error transition-colors rounded-lg opacity-0 group-hover:opacity-100"><span class="material-symbols-outlined">delete</span></button>
                            </td>
                        </tr>
                        <!-- Row 3 -->
                        <tr class="hover:bg-surface-container-low/50 transition-colors group">
                            <td class="py-4 px-6">
                                <div class="flex items-center gap-3">
                                    <span class="material-symbols-outlined text-success" style="font-variation-settings: 'FILL' 1;">table_chart</span>
                                    <div>
                                        <div class="font-body-md text-body-md text-on-surface font-medium">Budget_Allocation_Q3.xlsx</div>
                                        <div class="font-label-sm text-label-sm text-text-secondary">5.8 MB</div>
                                    </div>
                                </div>
                            </td>
                            <td class="py-4 px-6 font-body-sm text-body-sm text-text-secondary italic">Umum</td>
                            <td class="py-4 px-6">
                                <div class="flex items-center gap-2">
                                    <div class="w-6 h-6 rounded-full bg-primary/20 text-primary flex items-center justify-center font-bold text-[10px]">AR</div>
                                    <span class="font-body-sm text-body-sm text-on-surface">Alex Rivera</span>
                                </div>
                            </td>
                            <td class="py-4 px-6 font-body-sm text-body-sm text-text-secondary">12 Okt 2024</td>
                            <td class="py-4 px-6 text-right">
                                <button class="p-2 text-text-secondary hover:text-primary transition-colors rounded-lg opacity-0 group-hover:opacity-100"><span class="material-symbols-outlined">download</span></button>
                                <button class="p-2 text-text-secondary hover:text-error transition-colors rounded-lg opacity-0 group-hover:opacity-100"><span class="material-symbols-outlined">delete</span></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <div class="p-4 border-t border-border-subtle flex justify-between items-center bg-surface-container-low/30">
                <span class="font-label-sm text-label-sm text-text-secondary">Menampilkan 3 dari 124 dokumen</span>
                <div class="flex gap-2">
                    <button class="px-3 py-1 bg-surface border border-border-subtle rounded text-text-secondary hover:bg-surface-container transition-colors disabled:opacity-50">Sebelumnnya</button>
                    <button class="px-3 py-1 bg-surface border border-border-subtle rounded text-primary hover:bg-surface-container transition-colors">Selanjutnya</button>
                </div>
            </div>
        </section>

    </div>
</x-layouts.app>
