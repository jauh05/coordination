<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title ?? 'Coordination' }} — AI Powered Event Operations Platform</title>
    <meta name="description" content="Coordination: Platform ERP berbasis AI untuk Event Organizer. Rencanakan, koordinasikan, dan evaluasi event dalam satu platform.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/coordination.css') }}">
    @stack('styles')
</head>
<body>
    <div class="app-layout">
        {{-- Sidebar --}}
        @include('components.sidebar')

        {{-- Sidebar Overlay (Mobile) --}}
        <div class="sidebar-overlay" id="sidebarOverlay" onclick="toggleSidebar()"></div>

        {{-- Main Content --}}
        <div class="main-content">
            {{-- Top Navigation --}}
            @include('components.topnav')

            {{-- Page Content --}}
            <main class="page-content animate-fadeIn">
                {{ $slot }}
            </main>
        </div>

        {{-- FAB --}}
        <button class="fab" id="fabBtn" onclick="toggleFab()" title="Aksi Cepat">
            ＋
        </button>
        <div class="fab-menu" id="fabMenu">
            <a href="#" class="fab-menu-item" onclick="toggleFab()">
                <span>📝</span> Tambah Laporan
            </a>
            <a href="#" class="fab-menu-item" onclick="toggleFab()">
                <span>💰</span> Ajukan Pengeluaran
            </a>
            <a href="#" class="fab-menu-item" onclick="toggleFab()">
                <span>🧾</span> Upload Nota
            </a>
            <a href="{{ route('ai-assistant') }}" class="fab-menu-item" onclick="toggleFab()">
                <span>✨</span> Chat AI
            </a>
        </div>

        {{-- Mobile Bottom Nav --}}
        @include('components.mobile-nav')
    </div>

    <script>
        function toggleSidebar() {
            document.querySelector('.sidebar').classList.toggle('open');
            document.querySelector('.sidebar-overlay').classList.toggle('active');
        }

        function toggleFab() {
            document.getElementById('fabMenu').classList.toggle('active');
        }

        // Close FAB on outside click
        document.addEventListener('click', function(e) {
            const fab = document.getElementById('fabBtn');
            const menu = document.getElementById('fabMenu');
            if (!fab.contains(e.target) && !menu.contains(e.target)) {
                menu.classList.remove('active');
            }
        });
    </script>
    @stack('scripts')
</body>
</html>
