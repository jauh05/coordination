<!DOCTYPE html>
<html class="light" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title ?? 'Flowvent' }} | Executive Ops Dashboard</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
    <!-- Tailwind Configuration -->
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "tertiary-fixed": "#ffdbcd", background: "#faf8ff", primary: "#004ac6", "inverse-primary": "#b4c5ff", "surface-container-low": "#f2f3ff", "secondary-fixed-dim": "#4edea3", "outline-variant": "#c3c6d7", "surface-variant": "#dae2fd", "surface-dim": "#d2d9f4", "inverse-on-surface": "#eef0ff", "surface-container-highest": "#dae2fd", "secondary-container": "#6cf8bb", "primary-fixed-dim": "#b4c5ff", "surface-bright": "#faf8ff", "on-tertiary-fixed": "#360f00", "on-secondary-fixed": "#002113", "surface-container-lowest": "#ffffff", outline: "#737686", danger: "#EF4444", "border-subtle": "#E2E8F0", "inverse-surface": "#283044", "surface-container": "#eaedff", "on-surface": "#131b2e", "on-error": "#ffffff", "primary-fixed": "#dbe1ff", "on-background": "#131b2e", "on-surface-variant": "#434655", error: "#ba1a1a", tertiary: "#943700", secondary: "#006c49", "text-primary": "#0F172A", "on-secondary-fixed-variant": "#005236", "on-secondary": "#ffffff", "surface-tint": "#0053db", "on-primary-fixed": "#00174b", "text-secondary": "#64748B", "on-tertiary-container": "#ffede6", "secondary-fixed": "#6ffbbe", surface: "#faf8ff", "surface-container-high": "#e2e7ff", "on-secondary-container": "#00714d", "on-primary-container": "#eeefff", "error-container": "#ffdad6", "on-tertiary-fixed-variant": "#7d2d00", "primary-container": "#2563eb", "tertiary-fixed-dim": "#ffb596", success: "#22C55E", "on-primary-fixed-variant": "#003ea8", "on-tertiary": "#ffffff", warning: "#F59E0B", "on-error-container": "#93000a", "tertiary-container": "#bc4800", "on-primary": "#ffffff"
                    },
                    borderRadius: {DEFAULT: "0.25rem", lg: "0.5rem", xl: "0.75rem", full: "9999px"},
                    spacing: {"stack-sm": "8px", "stack-md": "16px", "container-max": "1440px", gutter: "24px", "sidebar-width": "260px", "margin-page": "32px", unit: "8px", "stack-lg": "24px"},
                    fontFamily: {"label-md": ["Inter"], "headline-md": ["Inter"], "label-sm": ["Inter"], "headline-lg": ["Inter"], "body-sm": ["Inter"], "headline-xl": ["Inter"], "body-md": ["Inter"], "body-lg": ["Inter"], headline: ["Inter"], display: ["Inter"], body: ["Inter"], label: ["Inter"]},
                    fontSize: {"label-md": ["12px", {lineHeight: "16px", letterSpacing: "0.05em", fontWeight: "600"}], "headline-md": ["20px", {lineHeight: "28px", fontWeight: "600"}], "label-sm": ["11px", {lineHeight: "14px", fontWeight: "500"}], "headline-lg": ["24px", {lineHeight: "32px", letterSpacing: "-0.01em", fontWeight: "600"}], "body-sm": ["13px", {lineHeight: "18px", fontWeight: "400"}], "headline-xl": ["36px", {lineHeight: "44px", letterSpacing: "-0.02em", fontWeight: "700"}], "body-md": ["14px", {lineHeight: "20px", fontWeight: "400"}], "body-lg": ["16px", {lineHeight: "24px", fontWeight: "400"}]}
                }
            }
        };
    </script>
    <style>
        body { font-family: 'Inter', sans-serif; }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .custom-scrollbar::-webkit-scrollbar { width: 4px; }
        .custom-scrollbar::-webkit-scrollbar-track { background: transparent; }
        .custom-scrollbar::-webkit-scrollbar-thumb { background: #E2E8F0; border-radius: 10px; }
        .glass-panel {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(226, 232, 240, 0.5);
        }
    </style>
    
    <!-- Legacy Coordination Styles for other pages -->
    <link rel="stylesheet" href="{{ asset('css/coordination.css') }}">
    @stack('styles')
</head>
<body class="bg-background text-on-surface selection:bg-primary/20 selection:text-primary">
    <div class="flex min-h-screen">
        <!-- SIDEBAR -->
        @include('components.sidebar')

        <!-- MAIN CONTENT -->
        <main class="flex-1 flex flex-col min-w-0">
            <!-- TOP APP BAR -->
            @include('components.topnav')

            <!-- DASHBOARD CANVAS (or any page content) -->
            {{ $slot }}
        </main>
    </div>

    <!-- AI ASSISTANT FAB -->
    <div class="fixed bottom-margin-page right-margin-page z-50">
        <button class="flex items-center gap-3 bg-on-surface text-white p-4 rounded-2xl shadow-2xl hover:scale-105 active:scale-95 transition-all group overflow-hidden relative">
            <div class="absolute inset-0 bg-gradient-to-tr from-primary/30 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
            <span class="material-symbols-outlined relative z-10" style="font-variation-settings: 'FILL' 1;">auto_awesome</span>
            <span class="font-label-md text-label-md relative z-10">Ask Flowvent AI</span>
        </button>
    </div>

    <script>
        // Search bar interaction
        const searchInput = document.querySelector('input[type="text"]');
        if (searchInput) {
            searchInput.addEventListener('focus', () => {
                searchInput.parentElement.classList.add('ring-2', 'ring-primary/20');
            });
            searchInput.addEventListener('blur', () => {
                searchInput.parentElement.classList.remove('ring-2', 'ring-primary/20');
            });
        }
    </script>
    @stack('scripts')
</body>
</html>
