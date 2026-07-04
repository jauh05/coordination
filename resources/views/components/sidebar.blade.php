<aside class="hidden md:flex flex-col h-screen w-64 left-0 top-0 sticky bg-surface-container-lowest border-r border-outline-variant/20 p-md gap-xs shadow-md z-50 overflow-y-auto">
    <div class="px-sm py-md">
        <h1 class="font-headline-sm text-headline-sm font-black text-primary">Coordination</h1>
        <p class="text-label-md font-label-md text-on-surface-variant">Festival Musik Indonesia</p>
    </div>
    <button class="flex items-center gap-sm bg-primary text-on-primary p-md rounded-2xl shadow-sm mb-lg active:scale-95 transition-all">
        <span class="material-symbols-outlined">add</span>
        <span class="font-label-md">New Operation</span>
    </button>
    <nav class="flex flex-col gap-xs flex-grow">
        <!-- Dashboard -->
        <a class="flex items-center gap-md p-md {{ request()->routeIs('dashboard') ? 'bg-primary-container text-on-primary-container font-bold scale-98' : 'text-on-surface-variant hover:bg-surface-container-high hover:translate-x-1 duration-200' }} rounded-lg transition-all" href="{{ route('dashboard') }}">
            <span class="material-symbols-outlined">dashboard</span>
            <span class="font-label-md">Dashboard</span>
        </a>
        <a class="flex items-center gap-md p-md {{ request()->routeIs('events') ? 'bg-primary-container text-on-primary-container font-bold scale-98' : 'text-on-surface-variant hover:bg-surface-container-high hover:translate-x-1 duration-200' }} rounded-lg transition-all" href="{{ route('events') }}">
            <span class="material-symbols-outlined">event</span>
            <span class="font-label-md">Events</span>
        </a>
        <a class="flex items-center gap-md p-md {{ request()->routeIs('planning') ? 'bg-primary-container text-on-primary-container font-bold scale-98' : 'text-on-surface-variant hover:bg-surface-container-high hover:translate-x-1 duration-200' }} rounded-lg transition-all" href="{{ route('planning') }}">
            <span class="material-symbols-outlined">event_note</span>
            <span class="font-label-md">Planning</span>
        </a>
        <a class="flex items-center gap-md p-md {{ request()->routeIs('organization') ? 'bg-primary-container text-on-primary-container font-bold scale-98' : 'text-on-surface-variant hover:bg-surface-container-high hover:translate-x-1 duration-200' }} rounded-lg transition-all" href="{{ route('organization') }}">
            <span class="material-symbols-outlined">group</span>
            <span class="font-label-md">Organization</span>
        </a>
        <a class="flex items-center gap-md p-md {{ request()->routeIs('divisions') ? 'bg-primary-container text-on-primary-container font-bold scale-98' : 'text-on-surface-variant hover:bg-surface-container-high hover:translate-x-1 duration-200' }} rounded-lg transition-all" href="{{ route('divisions') }}">
            <span class="material-symbols-outlined">account_tree</span>
            <span class="font-label-md">Division</span>
        </a>
        <a class="flex items-center gap-md p-md {{ request()->routeIs('budget') ? 'bg-primary-container text-on-primary-container font-bold scale-98' : 'text-on-surface-variant hover:bg-surface-container-high hover:translate-x-1 duration-200' }} rounded-lg transition-all" href="{{ route('budget') }}">
            <span class="material-symbols-outlined">payments</span>
            <span class="font-label-md">Budget</span>
        </a>
        <a class="flex items-center gap-md p-md {{ request()->routeIs('approval') ? 'bg-primary-container text-on-primary-container font-bold scale-98' : 'text-on-surface-variant hover:bg-surface-container-high hover:translate-x-1 duration-200' }} rounded-lg transition-all" href="{{ route('approval') }}">
            <span class="material-symbols-outlined">fact_check</span>
            <span class="font-label-md">Approval</span>
        </a>
        <a class="flex items-center gap-md p-md {{ request()->routeIs('vendors') ? 'bg-primary-container text-on-primary-container font-bold scale-98' : 'text-on-surface-variant hover:bg-surface-container-high hover:translate-x-1 duration-200' }} rounded-lg transition-all" href="{{ route('vendors') }}">
            <span class="material-symbols-outlined">inventory_2</span>
            <span class="font-label-md">Vendor</span>
        </a>
        <a class="flex items-center gap-md p-md {{ request()->routeIs('documents') ? 'bg-primary-container text-on-primary-container font-bold scale-98' : 'text-on-surface-variant hover:bg-surface-container-high hover:translate-x-1 duration-200' }} rounded-lg transition-all" href="{{ route('documents') }}">
            <span class="material-symbols-outlined">description</span>
            <span class="font-label-md">Documents</span>
        </a>
        <a class="flex items-center gap-md p-md {{ request()->routeIs('reports') ? 'bg-primary-container text-on-primary-container font-bold scale-98' : 'text-on-surface-variant hover:bg-surface-container-high hover:translate-x-1 duration-200' }} rounded-lg transition-all" href="{{ route('reports') }}">
            <span class="material-symbols-outlined">assessment</span>
            <span class="font-label-md">Reports</span>
        </a>
        <a class="flex items-center gap-md p-md {{ request()->routeIs('evaluation') ? 'bg-primary-container text-on-primary-container font-bold scale-98' : 'text-on-surface-variant hover:bg-surface-container-high hover:translate-x-1 duration-200' }} rounded-lg transition-all" href="{{ route('evaluation') }}">
            <span class="material-symbols-outlined">psychology</span>
            <span class="font-label-md">Lessons Learned</span>
        </a>
        <a class="flex items-center gap-md p-md {{ request()->routeIs('ai-assistant') ? 'bg-primary-container text-on-primary-container font-bold scale-98' : 'text-on-surface-variant hover:bg-surface-container-high hover:translate-x-1 duration-200' }} rounded-lg transition-all" href="{{ route('ai-assistant') }}">
            <span class="material-symbols-outlined">smart_toy</span>
            <span class="font-label-md">AI Assistant</span>
        </a>
    </nav>
    <div class="mt-auto pt-md border-t border-outline-variant/20">
        <a class="flex items-center gap-md p-md {{ request()->routeIs('settings') ? 'bg-primary-container text-on-primary-container font-bold scale-98' : 'text-on-surface-variant hover:bg-surface-container-high hover:translate-x-1 duration-200' }} transition-all rounded-lg" href="{{ route('settings') }}">
            <span class="material-symbols-outlined">settings</span>
            <span class="font-label-md">Settings</span>
        </a>
    </div>
</aside>
