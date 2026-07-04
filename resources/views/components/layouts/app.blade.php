<!DOCTYPE html>
<html class="light" lang="id">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title ?? 'Mission Control | Coordination' }}</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
    
    <script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            "colors": {
                "on-primary-container": "#eeefff",
                "surface-tint": "#0053db",
                "secondary": "#006c49",
                "inverse-primary": "#b4c5ff",
                "on-primary": "#ffffff",
                "secondary-container": "#6cf8bb",
                "on-tertiary-fixed": "#07006c",
                "on-tertiary-container": "#f1eeff",
                "on-surface-variant": "#434655",
                "outline": "#737686",
                "surface-container-lowest": "#ffffff",
                "on-error": "#ffffff",
                "inverse-surface": "#213145",
                "on-tertiary": "#ffffff",
                "surface-container-highest": "#d3e4fe",
                "on-secondary-fixed": "#002113",
                "outline-variant": "#c3c6d7",
                "background": "#f8f9ff",
                "error-container": "#ffdad6",
                "tertiary": "#3e3fcc",
                "primary-fixed-dim": "#b4c5ff",
                "tertiary-container": "#585be6",
                "surface-container-low": "#eff4ff",
                "surface-dim": "#cbdbf5",
                "primary-fixed": "#dbe1ff",
                "error": "#ba1a1a",
                "on-primary-fixed-variant": "#003ea8",
                "secondary-fixed": "#6ffbbe",
                "surface-container": "#e5eeff",
                "tertiary-fixed": "#e1e0ff",
                "on-surface": "#0b1c30",
                "primary": "#004ac6",
                "on-tertiary-fixed-variant": "#2f2ebe",
                "tertiary-fixed-dim": "#c0c1ff",
                "surface-variant": "#d3e4fe",
                "on-secondary": "#ffffff",
                "surface": "#f8f9ff",
                "on-secondary-fixed-variant": "#005236",
                "inverse-on-surface": "#eaf1ff",
                "secondary-fixed-dim": "#4edea3",
                "on-primary-fixed": "#00174b",
                "on-background": "#0b1c30",
                "on-error-container": "#93000a",
                "surface-container-high": "#dce9ff",
                "surface-bright": "#f8f9ff",
                "on-secondary-container": "#00714d",
                "primary-container": "#2563eb"
            },
            "borderRadius": {
                "DEFAULT": "0.25rem",
                "lg": "0.5rem",
                "xl": "12px",
                "2xl": "16px",
                "full": "9999px"
            },
            "spacing": {
                "xxl": "48px",
                "margin": "32px",
                "lg": "24px",
                "xl": "32px",
                "md": "16px",
                "xs": "4px",
                "gutter": "24px",
                "sm": "8px"
            },
            "fontFamily": {
                "body-md": ["Inter"],
                "headline-sm": ["Inter"],
                "caption": ["Inter"],
                "body-lg": ["Inter"],
                "label-md": ["Inter"],
                "display-lg": ["Inter"],
                "title-md": ["Inter"],
                "headline-lg-mobile": ["Inter"],
                "headline-md": ["Inter"],
                "headline-lg": ["Inter"]
            },
            "fontSize": {
                "body-md": ["14px", {"lineHeight": "20px", "letterSpacing": "0em", "fontWeight": "500"}],
                "headline-sm": ["20px", {"lineHeight": "28px", "letterSpacing": "0em", "fontWeight": "600"}],
                "caption": ["12px", {"lineHeight": "16px", "letterSpacing": "0em", "fontWeight": "400"}],
                "body-lg": ["16px", {"lineHeight": "24px", "letterSpacing": "0em", "fontWeight": "400"}],
                "label-md": ["12px", {"lineHeight": "16px", "letterSpacing": "0.02em", "fontWeight": "600"}],
                "display-lg": ["48px", {"lineHeight": "56px", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                "title-md": ["16px", {"lineHeight": "24px", "letterSpacing": "0em", "fontWeight": "600"}],
                "headline-lg-mobile": ["24px", {"lineHeight": "32px", "letterSpacing": "-0.01em", "fontWeight": "700"}],
                "headline-md": ["24px", {"lineHeight": "32px", "letterSpacing": "-0.01em", "fontWeight": "600"}],
                "headline-lg": ["32px", {"lineHeight": "40px", "letterSpacing": "-0.02em", "fontWeight": "700"}]
            }
          },
        },
      }
    </script>
    <style>
        body { font-family: 'Inter', sans-serif; background-color: #f8f9ff; color: #0b1c30; }
        .material-symbols-outlined { font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24; }
        .glass-card { background: rgba(255, 255, 255, 0.8); backdrop-filter: blur(12px); border: 1px solid rgba(226, 228, 231, 0.5); }
        .hero-gradient { background: linear-gradient(135deg, #004ac6 0%, #2563eb 100%); }
        .no-scrollbar::-webkit-scrollbar { display: none; }
        .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
    </style>
    
    <!-- Legacy Coordination Styles -->
    <link rel="stylesheet" href="{{ asset('css/coordination.css') }}">
    @stack('styles')
</head>
<body class="flex min-h-screen bg-background">
    <!-- SideNavBar -->
    @include('components.sidebar')

    <main class="flex-grow flex flex-col min-h-screen overflow-x-hidden">
        <!-- TopNavBar -->
        @include('components.topnav')

        <!-- MAIN CONTENT SLOT -->
        {{ $slot }}
    </main>

    <!-- Mobile Navigation Shell -->
    <nav class="md:hidden fixed bottom-0 left-0 right-0 bg-surface/80 backdrop-blur-xl border-t border-outline-variant/30 flex justify-around items-center py-md z-[100] px-md">
        <a class="flex flex-col items-center gap-xs {{ request()->routeIs('dashboard') ? 'text-primary' : 'text-on-surface-variant' }}" href="{{ route('dashboard') }}">
            <span class="material-symbols-outlined" {!! request()->routeIs('dashboard') ? 'style="font-variation-settings: \'FILL\' 1;"' : '' !!}>dashboard</span>
            <span class="text-[10px] {{ request()->routeIs('dashboard') ? 'font-bold' : '' }}">Home</span>
        </a>
        <a class="flex flex-col items-center gap-xs {{ request()->routeIs('events') ? 'text-primary' : 'text-on-surface-variant' }}" href="{{ route('events') }}">
            <span class="material-symbols-outlined" {!! request()->routeIs('events') ? 'style="font-variation-settings: \'FILL\' 1;"' : '' !!}>event</span>
            <span class="text-[10px] {{ request()->routeIs('events') ? 'font-bold' : '' }}">Events</span>
        </a>
        <a class="flex flex-col items-center gap-xs {{ request()->routeIs('divisions') ? 'text-primary' : 'text-on-surface-variant' }}" href="{{ route('divisions') }}">
            <span class="material-symbols-outlined" {!! request()->routeIs('divisions') ? 'style="font-variation-settings: \'FILL\' 1;"' : '' !!}>account_tree</span>
            <span class="text-[10px] {{ request()->routeIs('divisions') ? 'font-bold' : '' }}">Division</span>
        </a>
        <a class="flex flex-col items-center gap-xs {{ request()->routeIs('budget') ? 'text-primary' : 'text-on-surface-variant' }}" href="{{ route('budget') }}">
            <span class="material-symbols-outlined" {!! request()->routeIs('budget') ? 'style="font-variation-settings: \'FILL\' 1;"' : '' !!}>payments</span>
            <span class="text-[10px] {{ request()->routeIs('budget') ? 'font-bold' : '' }}">Budget</span>
        </a>
        <a class="flex flex-col items-center gap-xs {{ request()->routeIs('settings') ? 'text-primary' : 'text-on-surface-variant' }}" href="{{ route('settings') }}">
            <span class="material-symbols-outlined" {!! request()->routeIs('settings') ? 'style="font-variation-settings: \'FILL\' 1;"' : '' !!}>settings</span>
            <span class="text-[10px] {{ request()->routeIs('settings') ? 'font-bold' : '' }}">Menu</span>
        </a>
    </nav>

    @stack('scripts')
</body>
</html>
