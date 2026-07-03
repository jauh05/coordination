@props(['icon' => '🚧', 'title' => 'Segera Hadir', 'description' => 'Halaman ini sedang dalam pengembangan.'])

<x-layouts.app :title="$title">
    <div class="page-header">
        <h1 class="page-title">{{ $title }}</h1>
    </div>
    <div class="placeholder-page">
        <div class="placeholder-icon">{{ $icon }}</div>
        <h2 class="placeholder-title">Segera Hadir</h2>
        <p class="placeholder-text">{{ $description }}</p>
        <a href="{{ route('dashboard') }}" class="btn btn-primary">Kembali ke Dashboard</a>
    </div>
</x-layouts.app>
