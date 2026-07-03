@php $currentRoute = request()->route()?->getName() ?? ''; @endphp
<nav class="mobile-bottom-nav">
    <a href="{{ route('dashboard') }}" class="mobile-nav-item {{ $currentRoute === 'dashboard' ? 'active' : '' }}">
        <span>📊</span>
        <span class="mobile-nav-label">Dashboard</span>
    </a>
    <a href="{{ route('events') }}" class="mobile-nav-item {{ $currentRoute === 'events' ? 'active' : '' }}">
        <span>📅</span>
        <span class="mobile-nav-label">Event</span>
    </a>
    <a href="{{ route('ai-assistant') }}" class="mobile-nav-item {{ $currentRoute === 'ai-assistant' ? 'active' : '' }}">
        <span>✨</span>
        <span class="mobile-nav-label">AI</span>
    </a>
    <a href="#" class="mobile-nav-item">
        <span>🔔</span>
        <span class="mobile-nav-label">Notifikasi</span>
    </a>
    <a href="#" class="mobile-nav-item">
        <span>👤</span>
        <span class="mobile-nav-label">Profil</span>
    </a>
</nav>
