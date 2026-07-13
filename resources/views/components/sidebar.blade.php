<aside class="w-sidebar-width h-screen sticky left-0 top-0 border-r border-border-subtle bg-surface flex flex-col py-stack-lg px-stack-md gap-stack-sm z-50">
    <div class="flex items-center gap-3 px-2 mb-stack-lg">
        <div class="w-10 h-10 bg-gradient-to-tr from-primary to-blue-400 rounded-xl flex items-center justify-center text-white shadow-md">
            <span class="material-symbols-outlined">hub</span>
        </div>
        <div>
            <h1 class="font-headline-lg text-headline-lg font-bold bg-clip-text text-transparent bg-gradient-to-r from-primary to-blue-600">Coordination</h1>
            <p class="font-label-sm text-label-sm text-text-secondary">Event Coordination</p>
        </div>
    </div>
    <button class="w-full flex items-center justify-center gap-2 bg-gradient-to-r from-primary to-blue-500 text-white py-3 px-4 rounded-xl font-label-md text-label-md mb-stack-md hover:brightness-110 active:scale-[0.98] transition-all">
        <span class="material-symbols-outlined text-[20px]">add</span>
        Event Baru
    </button>
    <nav class="flex-1 space-y-1 overflow-y-auto custom-scrollbar">
        <a class="flex items-center gap-3 px-3 py-2 {{ request()->routeIs('dashboard') ? 'text-primary font-semibold bg-surface-container-low' : 'text-text-secondary hover:text-on-surface hover:bg-surface-container-low' }} transition-colors rounded-lg" href="{{ route('dashboard') }}">
            <span class="material-symbols-outlined">dashboard</span>
            <span class="font-label-md text-label-md">Dashboard</span>
        </a>
        <a class="flex items-center gap-3 px-3 py-2 {{ request()->routeIs('events') ? 'text-primary font-semibold bg-surface-container-low' : 'text-text-secondary hover:text-on-surface hover:bg-surface-container-low' }} transition-colors rounded-lg" href="{{ route('events') }}">
            <span class="material-symbols-outlined">calendar_month</span>
            <span class="font-label-md text-label-md">Event</span>
        </a>
        <a class="flex items-center gap-3 px-3 py-2 {{ request()->routeIs('planning') ? 'text-primary font-semibold bg-surface-container-low' : 'text-text-secondary hover:text-on-surface hover:bg-surface-container-low' }} transition-colors rounded-lg" href="{{ route('planning') }}">
            <span class="material-symbols-outlined">event_note</span>
            <span class="font-label-md text-label-md">Perencanaan</span>
        </a>
        <a class="flex items-center gap-3 px-3 py-2 {{ request()->routeIs('organization') ? 'text-primary font-semibold bg-surface-container-low' : 'text-text-secondary hover:text-on-surface hover:bg-surface-container-low' }} transition-colors rounded-lg" href="{{ route('organization') }}">
            <span class="material-symbols-outlined">hub</span>
            <span class="font-label-md text-label-md">Organisasi</span>
        </a>
        <a class="flex items-center gap-3 px-3 py-2 {{ request()->routeIs('divisions') ? 'text-primary font-semibold bg-surface-container-low' : 'text-text-secondary hover:text-on-surface hover:bg-surface-container-low' }} transition-colors rounded-lg" href="{{ route('divisions') }}">
            <span class="material-symbols-outlined">groups</span>
            <span class="font-label-md text-label-md">Divisi</span>
        </a>
        <a class="flex items-center gap-3 px-3 py-2 {{ request()->routeIs('gueststar') ? 'text-primary font-semibold bg-surface-container-low' : 'text-text-secondary hover:text-on-surface hover:bg-surface-container-low' }} transition-colors rounded-lg" href="{{ route('gueststar') }}">
            <span class="material-symbols-outlined">star</span>
            <span class="font-label-md text-label-md">Guest Star</span>
        </a>
        <a class="flex items-center gap-3 px-3 py-2 {{ request()->routeIs('fee') ? 'text-primary font-semibold bg-surface-container-low' : 'text-text-secondary hover:text-on-surface hover:bg-surface-container-low' }} transition-colors rounded-lg" href="{{ route('fee') }}">
            <span class="material-symbols-outlined">account_balance_wallet</span>
            <span class="font-label-md text-label-md">Fee Anggota</span>
        </a>
        <a class="flex items-center gap-3 px-3 py-2 {{ request()->routeIs('budget') ? 'text-primary font-semibold bg-surface-container-low' : 'text-text-secondary hover:text-on-surface hover:bg-surface-container-low' }} transition-colors rounded-lg" href="{{ route('budget') }}">
            <span class="material-symbols-outlined">payments</span>
            <span class="font-label-md text-label-md">Anggaran</span>
        </a>
        <a class="flex items-center gap-3 px-3 py-2 {{ request()->routeIs('approval') ? 'text-primary font-semibold bg-surface-container-low' : 'text-text-secondary hover:text-on-surface hover:bg-surface-container-low' }} transition-colors rounded-lg" href="{{ route('approval') }}">
            <span class="material-symbols-outlined">fact_check</span>
            <span class="font-label-md text-label-md">Persetujuan</span>
        </a>
        <a class="flex items-center gap-3 px-3 py-2 {{ request()->routeIs('vendors') ? 'text-primary font-semibold bg-surface-container-low' : 'text-text-secondary hover:text-on-surface hover:bg-surface-container-low' }} transition-colors rounded-lg" href="{{ route('vendors') }}">
            <span class="material-symbols-outlined">handshake</span>
            <span class="font-label-md text-label-md">Vendor</span>
        </a>
        <a class="flex items-center gap-3 px-3 py-2 {{ request()->routeIs('documents') ? 'text-primary font-semibold bg-surface-container-low' : 'text-text-secondary hover:text-on-surface hover:bg-surface-container-low' }} transition-colors rounded-lg" href="{{ route('documents') }}">
            <span class="material-symbols-outlined">description</span>
            <span class="font-label-md text-label-md">Dokumen</span>
        </a>
        <a class="flex items-center gap-3 px-3 py-2 {{ request()->routeIs('reports') ? 'text-primary font-semibold bg-surface-container-low' : 'text-text-secondary hover:text-on-surface hover:bg-surface-container-low' }} transition-colors rounded-lg" href="{{ route('reports') }}">
            <span class="material-symbols-outlined">analytics</span>
            <span class="font-label-md text-label-md">Laporan</span>
        </a>
        <a class="flex items-center gap-3 px-3 py-2 {{ request()->routeIs('evaluation') ? 'text-primary font-semibold bg-surface-container-low' : 'text-text-secondary hover:text-on-surface hover:bg-surface-container-low' }} transition-colors rounded-lg" href="{{ route('evaluation') }}">
            <span class="material-symbols-outlined">history_edu</span>
            <span class="font-label-md text-label-md">Evaluasi</span>
        </a>
        <div class="h-px bg-border-subtle my-2"></div>
        <a class="flex items-center gap-3 px-3 py-2 {{ request()->routeIs('ai-assistant') ? 'text-primary font-semibold bg-surface-container-low' : 'text-primary font-semibold hover:bg-surface-container-low' }} transition-colors rounded-lg" href="{{ route('ai-assistant') }}">
            <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">auto_awesome</span>
            <span class="font-label-md text-label-md">Asisten AI</span>
        </a>
    </nav>
    <div class="mt-auto space-y-1">
        <a class="flex items-center gap-3 px-3 py-2 {{ request()->routeIs('support') ? 'text-primary font-semibold bg-surface-container-low' : 'text-text-secondary hover:text-on-surface hover:bg-surface-container-low' }} transition-colors rounded-lg" href="{{ route('support') }}">
            <span class="material-symbols-outlined">help_outline</span>
            <span class="font-label-md text-label-md">Bantuan</span>
        </a>
        <a class="flex items-center gap-3 px-3 py-2 {{ request()->routeIs('settings') ? 'text-primary font-semibold bg-surface-container-low' : 'text-text-secondary hover:text-on-surface hover:bg-surface-container-low' }} transition-colors rounded-lg" href="{{ route('settings') }}">
            <span class="material-symbols-outlined">settings</span>
            <span class="font-label-md text-label-md">Pengaturan</span>
        </a>
        <div class="flex items-center justify-between p-2 mt-2 bg-surface-container rounded-xl">
            <div class="flex items-center gap-3">
                <img class="w-8 h-8 rounded-full border border-primary/20" data-alt="A professional headshot of a corporate executive in a modern glass office. Soft morning lighting highlights the sharp business attire and confident, approachable expression. The background is a blurred high-end workspace with minimal tech and greenery." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBmRcUCYi7pRaXf8wr6V_Iv8LWEyLIfNMvcL57MJEh7z2G19FU3Y6sb5dI3XxgL04dws2j462Q246G_C5-51JWRgKyx4iZejckugwzcSyiUyOQ4mmZmZhxyrpdrp1XHkrWMTQQun-Kb3kFEFDYcgE-zkQXDjjNBaFa5Qanx81T2R3JA9IAC1-g2NNZPespobtrj_uoKko3xnPMR_c-jkEIPYSwUgUNqQOBp1EhLzxSgcUpg8BNm8lhDRgUJi7lmCzhTaU4x-g_lRMQ"/>
                <div class="flex-1 min-w-0">
                    <p class="font-label-md text-label-md text-on-surface truncate">Alex Rivera</p>
                    <p class="font-label-sm text-[10px] text-text-secondary uppercase">COO</p>
                </div>
            </div>
            <div x-data="{ showLogoutModal: false }" class="flex">
                <button type="button" @click="showLogoutModal = true" class="text-text-secondary hover:text-danger p-1 rounded-lg transition-colors" title="Keluar">
                    <span class="material-symbols-outlined text-[20px]">logout</span>
                </button>

                <!-- Logout Modal -->
                <div x-show="showLogoutModal" class="fixed inset-0 z-[100] flex items-center justify-center" x-cloak>
                    <!-- Backdrop -->
                    <div x-show="showLogoutModal" x-transition.opacity class="fixed inset-0 bg-black/50 backdrop-blur-sm" @click="showLogoutModal = false"></div>
                    
                    <!-- Modal Panel -->
                    <div x-show="showLogoutModal" 
                         x-transition:enter="transition ease-out duration-300"
                         x-transition:enter-start="opacity-0 scale-95 translate-y-4"
                         x-transition:enter-end="opacity-100 scale-100 translate-y-0"
                         x-transition:leave="transition ease-in duration-200"
                         x-transition:leave-start="opacity-100 scale-100 translate-y-0"
                         x-transition:leave-end="opacity-0 scale-95 translate-y-4"
                         class="relative bg-surface rounded-2xl shadow-xl border border-outline-variant/30 p-8 w-full max-w-md mx-4 z-10">
                        
                        <div class="flex flex-col items-center text-center">
                            <div class="w-16 h-16 bg-red-50 text-red-600 rounded-full flex items-center justify-center mb-4">
                                <span class="material-symbols-outlined text-4xl">logout</span>
                            </div>
                            <h3 class="font-headline-sm text-headline-sm mb-2 text-on-surface">Konfirmasi Keluar</h3>
                            <p class="text-body-md text-on-surface-variant mb-6 whitespace-normal">Apakah Anda yakin ingin mengakhiri sesi ini? Anda harus masuk kembali untuk mengakses dashboard.</p>
                            
                            <div class="flex gap-4 w-full">
                                <button type="button" @click="showLogoutModal = false" class="flex-1 px-4 py-2 border border-outline-variant text-on-surface rounded-xl font-label-md hover:bg-surface-container transition-colors">
                                    Batal
                                </button>
                                <form method="POST" action="{{ route('logout') }}" class="flex-1">
                                    @csrf
                                    <button type="submit" class="w-full h-full px-4 py-2 bg-danger text-white rounded-xl font-label-md hover:bg-red-700 shadow-sm transition-colors">
                                        Ya, Keluar
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</aside>
