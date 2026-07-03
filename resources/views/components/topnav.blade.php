<header class="h-16 sticky top-0 z-40 w-full bg-surface/80 backdrop-blur-md border-b border-border-subtle flex justify-between items-center px-margin-page">
    <div class="flex items-center gap-6">
        <div class="relative w-64">
            <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-text-secondary text-[20px]">search</span>
            <input class="w-full bg-surface-container-low border-none rounded-lg pl-10 pr-4 py-2 font-body-sm text-body-sm focus:ring-2 focus:ring-primary/20" placeholder="Cari operasi..." type="text"/>
        </div>
        <nav class="hidden md:flex items-center gap-4">
            <a class="text-primary font-semibold border-b-2 border-primary h-16 flex items-center px-2" href="#">Semua Event</a>
            <a class="text-text-secondary hover:text-primary transition-colors h-16 flex items-center px-2" href="#">Gala Tahunan 2024</a>
        </nav>
    </div>
    <div class="flex items-center gap-4">
        <div class="flex items-center gap-1">
            <button class="p-2 text-text-secondary hover:text-primary transition-colors rounded-lg"><span class="material-symbols-outlined">notifications</span></button>
            <a href="{{ route('ai-assistant') }}" class="p-2 text-text-secondary hover:text-primary transition-colors rounded-lg"><span class="material-symbols-outlined">auto_awesome</span></a>
        </div>
        <button class="bg-primary/10 text-primary px-4 py-2 rounded-lg font-label-md text-label-md hover:bg-primary/20 transition-all">Tambah Cepat</button>
    </div>
</header>
