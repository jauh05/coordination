<x-layouts.app title="Guest Star">
    <div class="p-margin-page max-w-container-max mx-auto w-full flex flex-col gap-stack-lg">
        
        <!-- HEADER SECTION -->
        <section class="flex flex-col md:flex-row md:items-end justify-between gap-4">
            <div>
                <h2 class="font-headline-xl text-headline-xl text-on-surface">Manajemen Guest Star</h2>
                <p class="font-body-md text-body-md text-text-secondary">Kelola daftar artis, riders, dan status kontrak.</p>
            </div>
            <div class="flex gap-2">
                <button class="flex items-center gap-2 bg-primary text-white px-4 py-2 rounded-lg font-label-md text-label-md hover:brightness-110 transition-colors">
                    <span class="material-symbols-outlined text-[20px]">add</span>
                    Tambah Artis
                </button>
            </div>
        </section>

        <!-- CONTENT -->
        <section class="bg-surface border border-border-subtle rounded-2xl shadow-sm overflow-hidden p-8 text-center">
            <span class="material-symbols-outlined text-6xl text-text-secondary opacity-50 mb-4">stars</span>
            <h3 class="font-headline-md text-headline-md text-on-surface mb-2">Belum Ada Guest Star</h3>
            <p class="font-body-md text-body-md text-text-secondary mb-6">Mulai tambahkan daftar artis dan kelola kebutuhan riders mereka.</p>
            <button class="bg-surface-container-low text-primary px-4 py-2 rounded-lg font-label-md text-label-md hover:bg-surface-container-high transition-colors border border-border-subtle">
                Tambah Data Artis
            </button>
        </section>
    </div>
</x-layouts.app>
