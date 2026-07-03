<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar — Coordination</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/coordination.css') }}">
</head>
<body style="background: var(--color-bg);">
    <div class="auth-layout">
        <div class="auth-branding">
            <div class="auth-branding-content">
                <div class="auth-branding-logo">
                    <div class="auth-branding-logo-icon">⚡</div>
                    <span class="auth-branding-logo-text">Coordination</span>
                </div>
                <h2>Mulai Kelola Event Anda.</h2>
                <p>Bergabung dengan ribuan Event Organizer profesional yang telah menggunakan Coordination untuk mengelola operasi event mereka.</p>
                <div class="auth-branding-stats">
                    <div class="auth-branding-stat">
                        <div class="auth-branding-stat-icon">🚀</div>
                        <div class="auth-branding-stat-value">5 menit</div>
                        <div class="auth-branding-stat-label">Setup Awal</div>
                    </div>
                    <div class="auth-branding-stat">
                        <div class="auth-branding-stat-icon">💰</div>
                        <div class="auth-branding-stat-value">Gratis</div>
                        <div class="auth-branding-stat-label">Untuk Memulai</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="auth-form-side">
            <div class="auth-form-container">
                <div class="auth-form-header">
                    <h1 class="auth-form-title">Buat Akun</h1>
                    <p class="auth-form-subtitle">Mulai kelola event Anda dengan lebih profesional.</p>
                </div>

                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="form-group">
                        <label class="form-label" for="name">Nama Lengkap</label>
                        <input type="text" id="name" name="name" class="form-input" placeholder="Nama lengkap Anda" value="{{ old('name') }}" required>
                        @error('name')
                            <p class="form-error">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="email">Alamat Email</label>
                        <input type="email" id="email" name="email" class="form-input" placeholder="nama@perusahaan.com" value="{{ old('email') }}" required>
                        @error('email')
                            <p class="form-error">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="organization">Nama Organisasi</label>
                        <input type="text" id="organization" name="organization" class="form-input" placeholder="PT Event Organizer Indonesia">
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="password">Kata Sandi</label>
                        <input type="password" id="password" name="password" class="form-input" placeholder="Minimal 8 karakter" required>
                        @error('password')
                            <p class="form-error">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="password_confirmation">Konfirmasi Kata Sandi</label>
                        <input type="password" id="password_confirmation" name="password_confirmation" class="form-input" placeholder="Ulangi kata sandi" required>
                    </div>

                    <div class="form-group">
                        <label class="form-checkbox">
                            <input type="checkbox" name="terms" required>
                            Saya setuju dengan <a href="#" style="font-weight:600;">Ketentuan Layanan</a> dan <a href="#" style="font-weight:600;">Kebijakan Privasi</a>
                        </label>
                    </div>

                    <button type="submit" class="btn btn-primary btn-lg w-full">
                        Buat Akun →
                    </button>
                </form>

                <div class="divider" style="margin:var(--space-6) 0;">ATAU DAFTAR DENGAN</div>

                <div class="auth-social-buttons">
                    <button class="auth-social-btn"><span>G</span> Google</button>
                    <button class="auth-social-btn"><span>🔑</span> SSO</button>
                </div>

                <p class="auth-form-footer">
                    Sudah punya akun? <a href="{{ route('login') }}">Masuk</a>
                </p>
            </div>
        </div>
    </div>
</body>
</html>
