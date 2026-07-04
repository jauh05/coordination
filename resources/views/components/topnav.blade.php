<header class="docked full-width top-0 sticky z-50 bg-surface/80 backdrop-blur-xl border-b border-outline-variant/30 shadow-sm flex justify-between items-center w-full px-margin py-md mx-auto max-w-full">
    <div class="flex items-center gap-lg">
        <span class="font-headline-md text-headline-md font-bold text-on-surface md:hidden">Coordination</span>
        <div class="hidden md:flex items-center bg-surface-container-low px-md py-sm rounded-full w-96 gap-sm border border-outline-variant/30">
            <span class="material-symbols-outlined text-outline">search</span>
            <input class="bg-transparent border-none focus:ring-0 w-full text-body-md font-body-md text-on-surface focus:outline-none" placeholder="Cari data, vendor, atau dokumen..." type="text"/>
        </div>
    </div>
    <div class="flex items-center gap-md">
        <button class="p-sm text-on-surface-variant hover:bg-surface-container-high rounded-full transition-all active:scale-95">
            <span class="material-symbols-outlined">calendar_month</span>
        </button>
        <button class="p-sm text-on-surface-variant hover:bg-surface-container-high rounded-full transition-all relative active:scale-95">
            <span class="material-symbols-outlined">notifications</span>
            <span class="absolute top-2 right-2 w-2 h-2 bg-error rounded-full"></span>
        </button>
        <div class="h-8 w-px bg-outline-variant/30 mx-xs"></div>
        <a href="{{ route('ai-assistant') }}" class="flex items-center gap-sm bg-primary-container/10 text-primary px-md py-sm rounded-full font-label-md hover:bg-primary-container/20 transition-all">
            <span class="material-symbols-outlined text-[20px]">smart_toy</span>
            AI Assistant
        </a>
        <img class="w-10 h-10 rounded-full border border-outline-variant/30 object-cover" data-alt="A professional business headshot of a person with a friendly expression, soft studio lighting, blurred corporate office background, high-end photography style consistent with a modern tech dashboard." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBjJOVnfIa3TnA8Jbzg6XCXiFqESzWYrHjhiyeJizYztSmRrzOOxbx6ZueZV38jie6oSRPjcnHavrSq6iLFwJIzdotx5R5fc2UZFxEp2aQmBj8YX4pA0xQ1rbBCEZ1mh5QNutlqKyqGZofOBrknjh9HLcY2HvUBgk6uGsGMOtxO5W9JJvzFQ8dS27pQhM7IfU755S1d6IyPrfh7Ye6Yt9XjvzRsfeAkWE93HlfYWwfGjyhjLx-KgP-fivrZg486iJiOCO23HYpct3g"/>
    </div>
</header>
