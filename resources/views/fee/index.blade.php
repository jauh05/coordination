<x-layouts.app title="Fee Anggota">
    <div class="p-margin-page max-w-container-max mx-auto w-full flex flex-col gap-stack-lg">
        
        <!-- HEADER SECTION -->
        <section class="flex flex-col md:flex-row md:items-end justify-between gap-4">
            <div>
                <h2 class="font-headline-xl text-headline-xl text-on-surface">Fee Anggota</h2>
                <p class="font-body-md text-body-md text-text-secondary">Pantau distribusi dan pembayaran fee untuk masing-masing anggota.</p>
            </div>
            <div class="flex gap-2">
                <button class="flex items-center gap-2 bg-primary text-white px-4 py-2 rounded-lg font-label-md text-label-md hover:brightness-110 transition-colors">
                    <span class="material-symbols-outlined text-[20px]">payments</span>
                    Buat Pembayaran
                </button>
            </div>
        </section>

        <!-- CONTENT -->
        <section class="bg-surface border border-border-subtle rounded-2xl shadow-sm overflow-hidden p-8 text-center">
            <span class="material-symbols-outlined text-6xl text-text-secondary opacity-50 mb-4">account_balance_wallet</span>
            <h3 class="font-headline-md text-headline-md text-on-surface mb-2">Data Fee Kosong</h3>
            <p class="font-body-md text-body-md text-text-secondary mb-6">Belum ada data distribusi fee anggota untuk event ini.</p>
            <button class="bg-surface-container-low text-primary px-4 py-2 rounded-lg font-label-md text-label-md hover:bg-surface-container-high transition-colors border border-border-subtle">
                Atur Fee Anggota
            </button>
        </section>
    </div>
</x-layouts.app>
