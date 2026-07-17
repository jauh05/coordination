<x-layouts.app title="Events - Gala Tahunan 2024">

@push('styles')
<style>
    .glass-card {
        background: rgba(255, 255, 255, 0.7);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.3);
    }
</style>
@endpush

<!-- Dashboard Content -->
<div class="p-margin-page overflow-y-auto custom-scrollbar flex-1">
<!-- Page Header Area -->
<div class="flex justify-between items-end mb-8">
<div>
<div class="flex items-center gap-3 mb-2">
<span class="px-2 py-0.5 bg-secondary-container text-on-secondary-container text-[10px] font-bold uppercase rounded tracking-widest">AKTIF</span>
<span class="text-outline text-sm font-medium">ID: EVT-2024-GALA</span>
</div>
<h2 class="text-3xl font-bold text-on-surface tracking-tight">Gala Tahunan 2024</h2>
<p class="text-text-secondary mt-1">Operational Control Center &amp; Real-time Tracking</p>
</div>
<div class="flex gap-2">
<div class="flex flex-col items-end">
<span class="text-[10px] font-bold uppercase text-outline">Countdown</span>
<div class="flex gap-2 font-mono font-bold text-xl text-primary">
<span>12:</span><span>04:</span><span>45:</span><span>12</span>
</div>
</div>
</div>
</div>
<!-- Operational Metrics Bento Grid -->
<div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8"><!-- Tiket Terjual -->
<div class="bg-surface-container-lowest p-5 rounded-2xl border border-border-subtle shadow-sm flex flex-col justify-between">
<div class="flex justify-between items-start mb-4">
<div class="p-2 bg-primary-container/10 rounded-lg text-primary">
<span class="material-symbols-outlined">confirmation_number</span>
</div>
<span class="text-xs font-bold text-success flex items-center">
<span class="material-symbols-outlined text-xs">arrow_upward</span> 12%
        </span>
</div>
<div>
<p class="text-xs font-medium text-outline uppercase tracking-wider mb-1">Tiket Terjual</p>
<h3 id="metric_tiket_terjual" class="text-2xl font-bold text-on-surface">1,248</h3>
<div class="mt-3 w-full bg-surface-container-highest h-1.5 rounded-full overflow-hidden">
<div id="metric_tiket_terjual_progress" class="bg-primary h-full rounded-full transition-all duration-500" style="width: 83%;"></div>
</div>
<p id="metric_tiket_terjual_text" class="text-[11px] text-text-secondary mt-2">83% dari target 1,500</p>
</div>
</div>
<!-- Target Penjualan -->
<div class="bg-surface-container-lowest p-5 rounded-2xl border border-border-subtle shadow-sm flex flex-col justify-between">
<div class="flex justify-between items-start mb-4">
<div class="p-2 bg-secondary-container/20 rounded-lg text-secondary">
<span class="material-symbols-outlined">ads_click</span>
</div>
</div>
<div>
<p class="text-xs font-medium text-outline uppercase tracking-wider mb-1">Target Penjualan</p>
<h3 id="metric_target_penjualan" class="text-2xl font-bold text-on-surface">Rp 1.5M</h3>
<p id="metric_target_penjualan_sisa" class="text-sm text-text-secondary mt-2">Sisa Rp 300jt untuk mencapai target</p>
</div>
</div>
<!-- Keuntungan Tiket -->
<div class="bg-surface-container-lowest p-5 rounded-2xl border border-border-subtle shadow-sm flex flex-col justify-between">
<div class="flex justify-between items-start mb-4">
<div class="p-2 bg-tertiary-container/10 rounded-lg text-tertiary">
<span class="material-symbols-outlined">payments</span>
</div>
</div>
<div>
<p class="text-xs font-medium text-outline uppercase tracking-wider mb-1">Keuntungan Tiket</p>
<h3 id="metric_keuntungan" class="text-2xl font-bold text-on-surface">Rp 1.2M</h3>
<p id="metric_keuntungan_net" class="text-[11px] text-text-secondary mt-2">Net: Rp 980jt (Setelah pajak/biaya)</p>
</div>
</div>
<!-- Sisa Kuota -->
<div class="bg-surface-container-lowest p-5 rounded-2xl border border-border-subtle shadow-sm flex flex-col justify-between">
<div class="flex justify-between items-start mb-4">
<div class="p-2 bg-on-primary-fixed/5 rounded-lg text-on-primary-fixed">
<span class="material-symbols-outlined">event_seat</span>
</div>
</div>
<div>
<p class="text-xs font-medium text-outline uppercase tracking-wider mb-1">Sisa Kuota</p>
<h3 id="metric_sisa_kuota" class="text-2xl font-bold text-on-surface">252 Kursi</h3>
<p id="metric_sisa_kuota_status" class="text-sm text-error font-medium mt-2">Segera habis (Tier VIP)</p>
</div>
</div></div>
<!-- Main Interactive Section -->
<div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
<!-- Ticket Tracking: 1 Month View -->
<div class="lg:col-span-2 space-y-6">
<div class="bg-surface-container-lowest rounded-2xl border border-border-subtle shadow-sm overflow-hidden">
<div class="px-6 py-4 border-b border-border-subtle flex justify-between items-center bg-surface-container-low/50">
<div class="flex items-center gap-4 w-full">
    <h3 class="font-bold text-on-surface flex items-center gap-2 whitespace-nowrap"><span class="material-symbols-outlined text-primary">analytics</span> Input &amp; Pelacakan Tiket</h3>
    <div class="flex-1 flex justify-center items-center gap-4">
        <button id="prevMonthBtn" class="p-1 hover:bg-surface-container rounded-full text-outline transition-colors"><span class="material-symbols-outlined">chevron_left</span></button>
        <span id="currentMonthLabel" class="font-semibold text-sm w-32 text-center">Desember 2024</span>
        <button id="nextMonthBtn" class="p-1 hover:bg-surface-container rounded-full text-outline transition-colors"><span class="material-symbols-outlined">chevron_right</span></button>
    </div>
    <div class="flex gap-2">
        <div class="relative hidden sm:block">
            <span class="material-symbols-outlined absolute left-2 top-1/2 -translate-y-1/2 text-outline text-[16px]">search</span>
            <input type="text" id="dateSearchInput" class="w-32 lg:w-48 bg-surface-container-lowest border border-border-subtle rounded-lg pl-8 pr-3 py-1.5 text-xs focus:ring-1 focus:ring-primary outline-none" placeholder="Cari tanggal/input...">
        </div>
        <button class="p-1.5 hover:bg-surface-container rounded transition-colors">
            <span class="material-symbols-outlined text-sm">download</span>
        </button>
        <button class="p-1.5 hover:bg-surface-container rounded transition-colors">
            <span class="material-symbols-outlined text-sm">filter_list</span>
        </button>
    </div>
</div>
</div>
<div class="p-6">
<div class="flex gap-4 mb-6 overflow-x-auto pb-4 custom-scrollbar w-full" id="calendar-rail">
<!-- Calendar Generated via Script -->
</div>
<div class="p-5 bg-surface-container-low rounded-xl border border-border-subtle">
<div class="flex items-center justify-between mb-4">
<h4 class="font-semibold text-sm" id="selected-date-label">Detail Input: 12 Desember 2024</h4>
<span class="text-xs text-outline italic">Terakhir update: 2 jam yang lalu</span>
</div>
<div class="grid grid-cols-2 md:grid-cols-4 gap-4">
<div>
<label class="block text-[10px] font-bold text-outline uppercase mb-1">Presale 1 (Qty)</label>
<input id="input_presale1" class="w-full bg-white border border-border-subtle rounded-lg px-3 py-2 text-sm focus:ring-2 focus:ring-primary/20 outline-none transition-all" type="number" value="0"/>
</div>
<div>
<label class="block text-[10px] font-bold text-outline uppercase mb-1">Presale 2 (Qty)</label>
<input id="input_presale2" class="w-full bg-white border border-border-subtle rounded-lg px-3 py-2 text-sm focus:ring-2 focus:ring-primary/20 outline-none transition-all" type="number" value="0"/>
</div>
<div>
<label class="block text-[10px] font-bold text-outline uppercase mb-1">Presale 3 (Qty)</label>
<input id="input_presale3" class="w-full bg-white border border-border-subtle rounded-lg px-3 py-2 text-sm focus:ring-2 focus:ring-primary/20 outline-none transition-all" type="number" value="0"/>
</div>
<div>
<label class="block text-[10px] font-bold text-outline uppercase mb-1">OTS (Qty)</label>
<input id="input_ots" class="w-full bg-white border border-border-subtle rounded-lg px-3 py-2 text-sm focus:ring-2 focus:ring-primary/20 outline-none transition-all" type="number" value="0"/>
</div>
<div class="md:col-span-4 flex justify-end">
<button onclick="saveTicketData()" class="bg-primary text-white font-semibold px-8 py-2 rounded-lg text-sm hover:bg-primary-container transition-colors shadow-sm">
            Simpan Data Penjualan
        </button>
</div>
</div>
</div>
<div class="mt-8 h-48 relative overflow-hidden rounded-xl border border-border-subtle bg-white">
<div class="absolute inset-0 flex items-end justify-between px-4 pb-2">
<!-- Simple Pure CSS Graph Mockup -->
<div class="w-4 bg-primary/20 rounded-t h-[20%]"></div>
<div class="w-4 bg-primary/20 rounded-t h-[35%]"></div>
<div class="w-4 bg-primary/20 rounded-t h-[45%]"></div>
<div class="w-4 bg-primary/20 rounded-t h-[30%]"></div>
<div class="w-4 bg-primary/20 rounded-t h-[60%]"></div>
<div class="w-4 bg-primary/20 rounded-t h-[75%]"></div>
<div class="w-4 bg-primary/20 rounded-t h-[65%]"></div>
<div class="w-4 bg-primary h-[85%] relative group cursor-pointer">
<div class="absolute -top-10 left-1/2 -translate-x-1/2 bg-on-surface text-white text-[10px] px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap">
                                            Rp 12.5M
                                        </div>
</div>
<div class="w-4 bg-primary/10 rounded-t h-[10%]"></div>
<div class="w-4 bg-primary/10 rounded-t h-[10%]"></div>
<div class="w-4 bg-primary/10 rounded-t h-[10%]"></div>
<div class="w-4 bg-primary/10 rounded-t h-[10%]"></div>
<div class="w-4 bg-primary/10 rounded-t h-[10%]"></div>
<div class="w-4 bg-primary/10 rounded-t h-[10%]"></div>
</div>
<div class="absolute inset-0 pointer-events-none border-b border-border-subtle border-dashed translate-y-[25%] opacity-30"></div>
<div class="absolute inset-0 pointer-events-none border-b border-border-subtle border-dashed translate-y-[50%] opacity-30"></div>
<div class="absolute inset-0 pointer-events-none border-b border-border-subtle border-dashed translate-y-[75%] opacity-30"></div>
</div>
</div>
</div>
<!-- Vendor Progress Table -->
<div class="bg-surface-container-lowest rounded-2xl border border-border-subtle shadow-sm overflow-hidden">
<div class="px-6 py-4 border-b border-border-subtle bg-surface-container-low/50">
<h3 class="font-bold text-on-surface flex items-center gap-2">
<span class="material-symbols-outlined text-secondary">leaderboard</span>
            Performa Per Tier Tiket
        </h3>
</div>
<div class="p-6 grid grid-cols-1 md:grid-cols-2 gap-6">
<div class="space-y-4">
<div class="flex justify-between items-end">
<div>
<p class="text-xs font-bold text-outline uppercase">Presale 1</p>
<p class="text-lg font-bold">Rp 450jt</p>
</div>
<p class="text-xs text-success font-medium">Sold Out</p>
</div>
<div class="w-full bg-surface-container-highest h-2 rounded-full">
<div class="bg-success h-full rounded-full" style="width: 100%;"></div>
</div>
</div>
<div class="space-y-4">
<div class="flex justify-between items-end">
<div>
<p class="text-xs font-bold text-outline uppercase">Presale 2</p>
<p class="text-lg font-bold">Rp 320jt</p>
</div>
<p class="text-xs text-text-secondary font-medium">75% Terjual</p>
</div>
<div class="w-full bg-surface-container-highest h-2 rounded-full">
<div class="bg-primary h-full rounded-full" style="width: 75%;"></div>
</div>
</div>
<div class="space-y-4">
<div class="flex justify-between items-end">
<div>
<p class="text-xs font-bold text-outline uppercase">Presale 3</p>
<p class="text-lg font-bold">Rp 0</p>
</div>
<p class="text-xs text-outline font-medium">Belum Dibuka</p>
</div>
<div class="w-full bg-surface-container-highest h-2 rounded-full">
<div class="bg-outline-variant h-full rounded-full" style="width: 0%;"></div>
</div>
</div>
<div class="space-y-4">
<div class="flex justify-between items-end">
<div>
<p class="text-xs font-bold text-outline uppercase">On The Spot</p>
<p class="text-lg font-bold">Rp 0</p>
</div>
<p class="text-xs text-outline font-medium">Belum Dibuka</p>
</div>
<div class="w-full bg-surface-container-highest h-2 rounded-full">
<div class="bg-outline-variant h-full rounded-full" style="width: 0%;"></div>
</div>
</div>
</div>
</div></div>
<!-- Right Column: Timeline & Map -->
<div class="space-y-6">
<!-- Konfigurasi Harga & Target -->
<div class="bg-surface-container-lowest rounded-2xl border border-border-subtle shadow-sm overflow-hidden">
<div class="px-6 py-4 border-b border-border-subtle bg-surface-container-low/50">
<h3 class="font-bold text-on-surface flex items-center gap-2">
<span class="material-symbols-outlined text-primary">sell</span>
            Konfigurasi Harga &amp; Target
        </h3>
</div>
<div class="p-6 space-y-4">
    <div>
        <label class="block text-[10px] font-bold text-outline uppercase mb-1">Target Total Tiket</label>
        <input id="config_target" type="number" class="w-full bg-white border border-border-subtle rounded-lg px-3 py-2 text-sm focus:ring-2 focus:ring-primary/20 outline-none transition-all" value="1500" onchange="updateConfig()">
    </div>
    <div class="grid grid-cols-2 gap-4">
        <div>
            <label class="block text-[10px] font-bold text-outline uppercase mb-1">Harga Presale 1</label>
            <input id="config_p1" type="number" class="w-full bg-white border border-border-subtle rounded-lg px-3 py-2 text-sm focus:ring-2 focus:ring-primary/20 outline-none transition-all" value="800000" onchange="updateConfig()">
        </div>
        <div>
            <label class="block text-[10px] font-bold text-outline uppercase mb-1">Harga Presale 2</label>
            <input id="config_p2" type="number" class="w-full bg-white border border-border-subtle rounded-lg px-3 py-2 text-sm focus:ring-2 focus:ring-primary/20 outline-none transition-all" value="1000000" onchange="updateConfig()">
        </div>
        <div>
            <label class="block text-[10px] font-bold text-outline uppercase mb-1">Harga Presale 3</label>
            <input id="config_p3" type="number" class="w-full bg-white border border-border-subtle rounded-lg px-3 py-2 text-sm focus:ring-2 focus:ring-primary/20 outline-none transition-all" value="1200000" onchange="updateConfig()">
        </div>
        <div>
            <label class="block text-[10px] font-bold text-outline uppercase mb-1">Harga OTS</label>
            <input id="config_ots" type="number" class="w-full bg-white border border-border-subtle rounded-lg px-3 py-2 text-sm focus:ring-2 focus:ring-primary/20 outline-none transition-all" value="1500000" onchange="updateConfig()">
        </div>
    </div>
</div>
</div>
<!-- Event Timeline View -->
<div class="bg-surface-container-lowest rounded-2xl border border-border-subtle shadow-sm overflow-hidden">
<div class="px-6 py-4 border-b border-border-subtle bg-surface-container-low/50 flex justify-between items-center">
<h3 class="font-bold text-on-surface">Timeline Utama</h3>
<button class="text-primary text-xs font-semibold hover:underline">Lihat Semua</button>
</div>
<div class="p-6 relative">
<!-- Vertical Line -->
<div class="absolute left-9 top-8 bottom-8 w-px bg-outline-variant/30"></div>
<div class="space-y-8">
<div class="relative flex gap-6">
<div class="z-10 w-6 h-6 rounded-full bg-success flex items-center justify-center text-white ring-4 ring-white">
<span class="material-symbols-outlined text-sm" style="font-variation-settings: 'FILL' 1;">check</span>
</div>
<div>
<p class="text-xs font-bold text-success uppercase">10 Des - SELESAI</p>
<h4 class="font-semibold text-sm">Konfirmasi Venue &amp; Deposit</h4>
<p class="text-xs text-text-secondary mt-1">Pembayaran termin pertama telah divalidasi oleh Finance.</p>
</div>
</div>
<div class="relative flex gap-6">
<div class="z-10 w-6 h-6 rounded-full bg-primary flex items-center justify-center text-white ring-4 ring-white">
<span class="material-symbols-outlined text-sm">radio_button_checked</span>
</div>
<div>
<p class="text-xs font-bold text-primary uppercase">12 Des - HARI INI</p>
<h4 class="font-semibold text-sm">Review Final Konten Digital</h4>
<p class="text-xs text-text-secondary mt-1">Presentasi aset visual untuk layar LED utama panggung.</p>
</div>
</div>
<div class="relative flex gap-6">
<div class="z-10 w-6 h-6 rounded-full bg-surface-container-highest border border-outline-variant flex items-center justify-center text-outline ring-4 ring-white">
<span class="material-symbols-outlined text-sm">schedule</span>
</div>
<div>
<p class="text-xs font-bold text-outline uppercase">15 Des - MENDATANG</p>
<h4 class="font-semibold text-sm">Loading Barang &amp; Gladi Bersih</h4>
<p class="text-xs text-text-secondary mt-1">Koordinasi teknis tim panggung dan MC.</p>
</div>
</div>
<div class="relative flex gap-6 opacity-50">
<div class="z-10 w-6 h-6 rounded-full bg-surface-container-highest border border-outline-variant flex items-center justify-center text-outline ring-4 ring-white">
<span class="material-symbols-outlined text-sm">flag</span>
</div>
<div>
<p class="text-xs font-bold text-outline uppercase">20 Des - PELAKSANAAN</p>
<h4 class="font-semibold text-sm">Main Event: Gala 2024</h4>
<p class="text-xs text-text-secondary mt-1">Waktu Pelaksanaan: 19:00 - 23:00 WIB.</p>
</div>
</div>
</div>
</div>
</div>
<!-- Map/Location -->
<div class="bg-surface-container-lowest rounded-2xl border border-border-subtle shadow-sm overflow-hidden">
<div class="h-40 relative group">
<img class="w-full h-full object-cover" data-alt="A clean, minimalist high-quality satellite or map view of a modern urban convention center or luxury hotel ballroom area in Jakarta, featuring soft blues and grays, high-fidelity mapping aesthetic." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBDPZxNy-trU4uqgZUIQtjBtQDv4y1d1E-OzOWpfYmHi9e2L8G6jrPsUrFojopdeeClyIbEW4QIUFXMwVONdzEHjujXNWfozZ929dkYlCOHHlRehe4k1QFMS-lppQanaIEs0yGgJPYGT__zsJc2PB0vwoydDUF8-zqW-XuHkcdyA2y-VqZW-ndcwVZd8nwtYY8QYn9qKuRI9KfukUJguU8J8zVLCknlCjTtgbi2XRyXdO9OOdCig_kaC6FmfMLKVP_d0QS_5R9RJBo"/>
<div class="absolute inset-0 bg-primary/10 group-hover:bg-transparent transition-colors"></div>
<div class="absolute bottom-3 left-3 bg-white px-2 py-1 rounded shadow-sm text-[10px] font-bold text-on-surface">
                                Ritz-Carlton Pacific Place, Jakarta
                            </div>
</div>
<div class="p-5">
<h4 class="font-semibold text-sm mb-2 flex items-center gap-2">
<span class="material-symbols-outlined text-primary text-lg">location_on</span>
                                Informasi Lokasi
                            </h4>
<p class="text-xs text-text-secondary leading-relaxed">
                                Sudirman Central Business District (SCBD), Jl. Jend. Sudirman No.Kav. 52-53, Jakarta Selatan.
                            </p>
<div class="mt-4 grid grid-cols-2 gap-3">
<div class="p-2 bg-surface-container rounded-lg">
<p class="text-[9px] font-bold text-outline uppercase">Kapasitas Maks</p>
<p class="text-sm font-semibold">2,500 Pax</p>
</div>
<div class="p-2 bg-surface-container rounded-lg">
<p class="text-[9px] font-bold text-outline uppercase">Area Parkir</p>
<p class="text-sm font-semibold">Tersedia</p>
</div>
</div>
</div>
</div>
<!-- Quick Team Card -->
<div class="bg-primary p-6 rounded-2xl text-white relative overflow-hidden">
<div class="absolute -right-10 -top-10 w-40 h-40 bg-white/10 rounded-full blur-3xl"></div>
<h4 class="font-bold text-lg mb-1 relative z-10">Tim Operasional</h4>
<p class="text-white/80 text-xs mb-4 relative z-10">8 Anggota aktif saat ini</p>
<div class="flex -space-x-3 mb-6 relative z-10">
<img class="w-10 h-10 rounded-full border-2 border-primary object-cover" data-alt="Professional headshot of a team member in a high-key office setting, clean lighting." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDPoN01HnDvL8u4UPf1R9acq3457T6W0-a8pyLsbxf1Mmzf8im2IR1TSopNUwxIGrMll8U8Y9m76Ni6vJHPIxYDTebdaHGV5TeP9Zg4wZZ0cl7iwqlikaMA0ntXz7zl7w4OMt0r9-yfkupamlGbGPGtVvK6D-GQERT6CSdAXm6yw7J0Zk7WdbjNAoAXufHL_Xr8jC7dys3QAM48nCAUgX8YyWnQGCwjRDnsO9rTSFOGUUSQ7c3Iq7hZBXu8mgmp2QZ48GMEXkQu11E"/>
<img class="w-10 h-10 rounded-full border-2 border-primary object-cover" data-alt="Professional headshot of a smiling man in a creative studio, soft lighting." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDfaP4uRgj0QEbnWrlf6ckFJ3zj2WeO0aSfm7rqw_W_RbwlBY90mQHBVgldnZCD_8Yron-CempeyHpbuOCC9Sz0oztk3Loc_7yLJGaFcf-tDHlBkZ26mkL4mpAPXDIuXpRUvm4jSIB-LGmxPa7fIwV5rZ9nA9O_jKXlOCM34Y8o9Kd5JBYqSpONHS0jj1FdKcy1Sv4wJYMWawCpedsveByylqTNHmWQ8l42gyHaOhv1-RyhuwZhDG6CH1zVK9lf2EPcrEsmY0Y6XoY"/>
<img class="w-10 h-10 rounded-full border-2 border-primary object-cover" data-alt="Professional profile photo of a woman in a business environment." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBrkMWlgKp-S9XZYMoC61QTitq5g9mIXloQZ3BGZH_sGQObL61yRFOSZTb-ISqcpbLY1SuMT0HvTdN5Z8k3Pu4n0xp4xitu6CF7fXmTcpfZQC6HBrhibVAx-ZSh_qsYA4ZMyOe5-zRu51OjyxT8nEUSEhD0vVzre4gdcI16uaCzG8rZqqrjKKkg5bpq6iiN0p0CMU2sCbWhey3CPkp_rjz26mATEKc6ZXGq_ZDj_C1oEFd3Wub12ZKITYxNMMFODkY1d3ESatqPhtk"/>
<div class="w-10 h-10 rounded-full border-2 border-primary bg-white/20 flex items-center justify-center text-xs font-bold backdrop-blur-sm">+5</div>
</div>
<button class="w-full bg-white text-primary font-bold py-2.5 rounded-xl text-sm hover:bg-on-primary-container transition-colors relative z-10">
                            Buka Saluran Komunikasi
                        </button>
</div>
</div>
</div>
</div>
@push('scripts')
    <script>
        const calendarRail = document.getElementById('calendar-rail');
        const months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
        const shortMonths = ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'];
        const days = ['Min', 'Sen', 'Sel', 'Rab', 'Kam', 'Jum', 'Sab'];

        // Registration date (start date)
        const registrationDate = new Date(2024, 11, 1); // 1 Dec 2024
        
        // H+1 month end date (1 month from today)
        // Fallback for demo if today is too far ahead: let's pretend today is 12 Dec 2024
        const demoToday = new Date(2024, 11, 12);
        
        const maxDate = new Date(demoToday);
        maxDate.setMonth(maxDate.getMonth() + 1); // h+1 month
        
        let currentDisplayDate = new Date(demoToday); // currently viewed month/year

        let currentSelectedDateKey = '';
        
        let TICKET_TARGET = 1500;
        let TARGET_REVENUE = 1500000000; // 1.5 Milyar
        let PRICES = {
            presale1: 800000,
            presale2: 1000000,
            presale3: 1200000,
            ots: 1500000
        };

        function loadConfig() {
            const savedConfig = JSON.parse(localStorage.getItem('eventConfig'));
            if (savedConfig) {
                TICKET_TARGET = savedConfig.target || 1500;
                PRICES = savedConfig.prices || PRICES;
                
                document.getElementById('config_target').value = TICKET_TARGET;
                document.getElementById('config_p1').value = PRICES.presale1;
                document.getElementById('config_p2').value = PRICES.presale2;
                document.getElementById('config_p3').value = PRICES.presale3;
                document.getElementById('config_ots').value = PRICES.ots;
                
                TARGET_REVENUE = TICKET_TARGET * PRICES.presale2;
            }
        }

        window.updateConfig = function() {
            TICKET_TARGET = parseInt(document.getElementById('config_target').value) || 1500;
            PRICES.presale1 = parseInt(document.getElementById('config_p1').value) || 0;
            PRICES.presale2 = parseInt(document.getElementById('config_p2').value) || 0;
            PRICES.presale3 = parseInt(document.getElementById('config_p3').value) || 0;
            PRICES.ots = parseInt(document.getElementById('config_ots').value) || 0;
            
            TARGET_REVENUE = TICKET_TARGET * PRICES.presale2;
            
            localStorage.setItem('eventConfig', JSON.stringify({
                target: TICKET_TARGET,
                prices: PRICES
            }));
            
            updateMetrics();
        };

        function formatRupiah(number) {
            if (number >= 1000000000) {
                return 'Rp ' + (number / 1000000000).toFixed(2) + ' Milyar';
            } else if (number >= 1000000) {
                return 'Rp ' + (number / 1000000).toFixed(1) + ' Jt';
            }
            return 'Rp ' + number.toLocaleString('id-ID');
        }

        function updateMetrics() {
            let totalTickets = 0;
            let totalGross = 0;
            
            // Loop through all localStorage to calculate totals
            for(let i=0; i < localStorage.length; i++){
                const key = localStorage.key(i);
                if(key.startsWith('ticketData_')) {
                    const data = JSON.parse(localStorage.getItem(key));
                    
                    const p1 = parseInt(data.presale1) || 0;
                    const p2 = parseInt(data.presale2) || 0;
                    const p3 = parseInt(data.presale3) || 0;
                    const ots = parseInt(data.ots) || 0;
                    
                    totalTickets += p1 + p2 + p3 + ots;
                    
                    totalGross += (p1 * PRICES.presale1) + (p2 * PRICES.presale2) + (p3 * PRICES.presale3) + (ots * PRICES.ots);
                }
            }

            // 1. Tiket Terjual
            const percentSold = Math.min(100, Math.round((totalTickets / TICKET_TARGET) * 100));
            document.getElementById('metric_tiket_terjual').innerText = totalTickets.toLocaleString('id-ID');
            document.getElementById('metric_tiket_terjual_progress').style.width = percentSold + '%';
            document.getElementById('metric_tiket_terjual_text').innerText = percentSold + '% dari target ' + TICKET_TARGET.toLocaleString('id-ID');
            
            // 2. Target Penjualan
            document.getElementById('metric_target_penjualan').innerText = formatRupiah(totalGross);
            const remainingTarget = TARGET_REVENUE - totalGross;
            if (remainingTarget > 0) {
                document.getElementById('metric_target_penjualan_sisa').innerText = 'Sisa ' + formatRupiah(remainingTarget) + ' untuk mencapai target';
                document.getElementById('metric_target_penjualan_sisa').className = 'text-sm text-text-secondary mt-2';
            } else {
                document.getElementById('metric_target_penjualan_sisa').innerText = 'Target Tercapai!';
                document.getElementById('metric_target_penjualan_sisa').className = 'text-sm text-success font-bold mt-2';
            }
            
            // 3. Keuntungan Tiket (Mock: Net = 80% Gross)
            const netProfit = totalGross * 0.8;
            document.getElementById('metric_keuntungan').innerText = formatRupiah(totalGross);
            document.getElementById('metric_keuntungan_net').innerText = 'Net: ' + formatRupiah(netProfit) + ' (Setelah pajak/biaya)';
            
            // 4. Sisa Kuota
            const remainingQuota = TICKET_TARGET - totalTickets;
            document.getElementById('metric_sisa_kuota').innerText = Math.max(0, remainingQuota) + ' Kursi';
            if (remainingQuota <= 0) {
                document.getElementById('metric_sisa_kuota_status').innerText = 'Habis Terjual (Sold Out)';
                document.getElementById('metric_sisa_kuota_status').className = 'text-sm text-success font-bold mt-2';
            } else if (remainingQuota < 200) {
                document.getElementById('metric_sisa_kuota_status').innerText = 'Segera habis!';
                document.getElementById('metric_sisa_kuota_status').className = 'text-sm text-error font-medium mt-2';
            } else {
                document.getElementById('metric_sisa_kuota_status').innerText = 'Tersedia';
                document.getElementById('metric_sisa_kuota_status').className = 'text-sm text-text-secondary mt-2';
            }
        }

        function loadTicketData(dateKey) {
            currentSelectedDateKey = dateKey;
            const savedData = JSON.parse(localStorage.getItem('ticketData_' + dateKey)) || {
                presale1: 0,
                presale2: 0,
                presale3: 0,
                ots: 0
            };
            
            document.getElementById('input_presale1').value = savedData.presale1;
            document.getElementById('input_presale2').value = savedData.presale2;
            document.getElementById('input_presale3').value = savedData.presale3;
            document.getElementById('input_ots').value = savedData.ots;
        }

        window.saveTicketData = function() {
            if(!currentSelectedDateKey) return;
            
            const data = {
                presale1: document.getElementById('input_presale1').value,
                presale2: document.getElementById('input_presale2').value,
                presale3: document.getElementById('input_presale3').value,
                ots: document.getElementById('input_ots').value
            };
            
            localStorage.setItem('ticketData_' + currentSelectedDateKey, JSON.stringify(data));
            
            // Update metrics instantly
            updateMetrics();
            
            // Show short alert/notification
            const btn = document.querySelector('button[onclick="saveTicketData()"]');
            const originalText = btn.innerText;
            btn.innerText = '✓ Tersimpan';
            btn.classList.add('bg-success');
            setTimeout(() => {
                btn.innerText = originalText;
                btn.classList.remove('bg-success');
            }, 1500);
        };

        function renderCalendar() {
            calendarRail.innerHTML = '';
            document.getElementById('currentMonthLabel').innerText = `${months[currentDisplayDate.getMonth()]} ${currentDisplayDate.getFullYear()}`;
            
            const month = currentDisplayDate.getMonth();
            const year = currentDisplayDate.getFullYear();
            
            // Generate all days in the current display month
            const daysInMonth = new Date(year, month + 1, 0).getDate();
            
            for(let i = 1; i <= daysInMonth; i++) {
                const dateObj = new Date(year, month, i);
                
                // Check if date is within bounds (registrationDate to maxDate)
                const isOutOfBounds = dateObj < registrationDate || dateObj > maxDate;
                
                const dateNum = dateObj.getDate();
                const dayName = days[dateObj.getDay()];
                const isToday = (dateNum === demoToday.getDate() && month === demoToday.getMonth() && year === demoToday.getFullYear());
                const dateKey = `${year}-${String(month+1).padStart(2,'0')}-${String(dateNum).padStart(2,'0')}`;

                const dayCard = document.createElement('div');
                
                if (isOutOfBounds) {
                    dayCard.className = `flex-shrink-0 w-14 h-20 rounded-xl flex flex-col items-center justify-center border bg-surface-container-lowest border-border-subtle text-outline/30 opacity-50 cursor-not-allowed`;
                } else {
                    dayCard.className = `flex-shrink-0 w-14 h-20 rounded-xl flex flex-col items-center justify-center cursor-pointer transition-all border ${isToday ? 'bg-primary text-white border-primary shadow-lg shadow-primary/20 scale-105 day-card-active' : 'bg-white border-border-subtle text-outline hover:border-primary/50 day-card-normal'}`;
                    
                    if (isToday) {
                        loadTicketData(dateKey); // load initial data for today
                    }

                    dayCard.onclick = () => {
                        // Update label
                        document.getElementById('selected-date-label').innerText = `Detail Input: ${dateNum} ${months[month]} ${year}`;
                        
                        // Load data for selected date
                        loadTicketData(dateKey);
                        
                        // Simple visual toggle
                        document.querySelectorAll('#calendar-rail > div:not(.cursor-not-allowed)').forEach(el => {
                            el.classList.remove('bg-primary', 'text-white', 'border-primary', 'shadow-lg', 'shadow-primary/20', 'scale-105', 'day-card-active');
                            el.classList.add('bg-white', 'border-border-subtle', 'text-outline', 'day-card-normal');
                            // Clear dot indicator if not active
                            const dot = el.querySelector('.indicator-dot');
                            if(dot) el.removeChild(dot);
                        });
                        dayCard.classList.add('bg-primary', 'text-white', 'border-primary', 'shadow-lg', 'shadow-primary/20', 'scale-105', 'day-card-active');
                        dayCard.classList.remove('bg-white', 'border-border-subtle', 'text-outline', 'day-card-normal');
                        
                        // Re-add dot to active card
                        const dotDiv = document.createElement('div');
                        dotDiv.className = 'w-1 h-1 bg-white rounded-full mt-1 indicator-dot';
                        dayCard.appendChild(dotDiv);
                    };
                }

                dayCard.innerHTML = `
                    <span class="text-[10px] font-bold uppercase ${isToday ? 'text-white/70' : (isOutOfBounds ? 'text-outline/30' : 'text-outline')}">${dayName}</span>
                    <span class="text-xl font-bold mt-1">${dateNum}</span>
                    ${isToday ? '<div class="w-1 h-1 bg-white rounded-full mt-1 indicator-dot"></div>' : ''}
                `;
                dayCard.setAttribute('data-date', `${dateNum} ${months[month]} ${year}`.toLowerCase());

                calendarRail.appendChild(dayCard);
            }
            
            // Scroll to today if it's the current month
            if (currentDisplayDate.getMonth() === demoToday.getMonth() && currentDisplayDate.getFullYear() === demoToday.getFullYear()) {
                setTimeout(() => {
                    const activeCard = calendarRail.querySelector('.day-card-active');
                    if (activeCard) {
                        const railCenter = calendarRail.offsetWidth / 2;
                        const cardCenter = activeCard.offsetLeft + (activeCard.offsetWidth / 2);
                        calendarRail.scrollTo({ left: cardCenter - railCenter, behavior: 'smooth' });
                    }
                }, 100);
            }
            
            updateMetrics();
        }
        
        loadConfig();
        renderCalendar();

        document.getElementById('prevMonthBtn').onclick = () => {
            currentDisplayDate.setMonth(currentDisplayDate.getMonth() - 1);
            renderCalendar();
        };

        document.getElementById('nextMonthBtn').onclick = () => {
            currentDisplayDate.setMonth(currentDisplayDate.getMonth() + 1);
            renderCalendar();
        };

        document.getElementById('dateSearchInput').addEventListener('input', (e) => {
            const query = e.target.value.toLowerCase();
            const cards = calendarRail.querySelectorAll('div[data-date]');
            cards.forEach(card => {
                if (query === '') {
                    card.style.display = 'flex';
                } else if (!card.getAttribute('data-date').includes(query)) {
                    card.style.display = 'none';
                } else {
                    card.style.display = 'flex';
                }
            });
        });

        // Simple Countdown logic
        setInterval(() => {
            // No actual date calc for demo, just visual variety
        }, 1000);
    </script>
@endpush
</x-layouts.app>
