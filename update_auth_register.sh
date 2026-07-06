#!/bin/bash
cd /Users/mac/Desktop/github_proyek/coordination/coordination-app

cat << 'EOF' > patch_register.php
<?php
$file = 'resources/views/auth/register.blade.php';
$content = file_get_contents($file);

$newForm = <<<'HTML'
<!-- Progress Indicator -->
<nav aria-label="Progress" class="mb-stack-lg">
<ol class="flex items-center space-x-4" role="list">
<li class="flex items-center">
<span id="node-1" class="flex items-center justify-center w-8 h-8 rounded-full border-2 border-primary-container bg-primary-container text-white font-label-md text-label-md transition-colors">1</span>
<span class="ml-2 font-label-md text-label-md text-primary" id="text-1">Akun</span>
</li>
<li class="flex items-center">
<div class="w-8 h-[2px] bg-outline-variant mx-2" id="line-1"></div>
<span id="node-2" class="flex items-center justify-center w-8 h-8 rounded-full border-2 border-outline-variant text-on-surface-variant font-label-md text-label-md transition-colors">2</span>
<span class="ml-2 font-label-md text-label-md text-on-surface-variant" id="text-2">Event</span>
</li>
<li class="flex items-center">
<div class="w-8 h-[2px] bg-outline-variant mx-2" id="line-2"></div>
<span id="node-3" class="flex items-center justify-center w-8 h-8 rounded-full border-2 border-outline-variant text-on-surface-variant font-label-md text-label-md transition-colors">3</span>
<span class="ml-2 font-label-md text-label-md text-on-surface-variant" id="text-3">Selesai</span>
</li>
</ol>
</nav>

<form method="POST" action="{{ route('register') }}" class="relative min-h-[400px]" id="registrationForm">
@csrf

<!-- STEP 1: Akun -->
<div id="step-1" class="absolute w-full top-0 left-0 transition-all duration-500 opacity-100 translate-x-0 z-10">
    <div class="mb-stack-lg">
        <h1 class="font-headline-lg text-headline-lg text-text-primary mb-2">Buat profil profesional Anda</h1>
        <p class="font-body-md text-body-md text-text-secondary">Mulai kelola event penting dengan presisi berbasis AI.</p>
    </div>
    
    <div class="space-y-stack-md">
        <div class="space-y-1">
            <label class="font-label-md text-label-md text-on-surface-variant" for="name">Nama Lengkap</label>
            <input class="w-full h-11 px-4 bg-surface-container-lowest border border-border-subtle rounded-lg focus:ring-2 focus:ring-primary-container focus:border-primary-container transition-all outline-none" id="name" name="name" placeholder="Budi Santoso" type="text" required value="{{ old('name') }}"/>
            @error('name')
            <p class="text-[11px] text-danger mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="space-y-1">
            <label class="font-label-md text-label-md text-on-surface-variant" for="email">Email Bisnis</label>
            <input class="w-full h-11 px-4 bg-surface-container-lowest border border-border-subtle rounded-lg focus:ring-2 focus:ring-primary-container focus:border-primary-container transition-all outline-none" id="email" name="email" placeholder="budi@perusahaan.com" type="email" required value="{{ old('email') }}"/>
            @error('email')
            <p class="text-[11px] text-danger mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="space-y-1">
            <label class="font-label-md text-label-md text-on-surface-variant" for="password">Kata Sandi</label>
            <div class="relative">
                <input class="w-full h-11 px-4 bg-surface-container-lowest border border-border-subtle rounded-lg focus:ring-2 focus:ring-primary-container focus:border-primary-container transition-all outline-none" id="password" name="password" placeholder="••••••••" type="password" required/>
                <button class="absolute right-3 top-1/2 -translate-y-1/2 text-on-surface-variant pass-toggle" type="button">
                    <span class="material-symbols-outlined text-sm">visibility</span>
                </button>
            </div>
            @error('password')
            <p class="text-[11px] text-danger mt-1">{{ $message }}</p>
            @else
            <p class="text-[11px] text-text-secondary mt-1">Minimal 8 karakter dengan setidaknya satu angka dan simbol.</p>
            @enderror
        </div>

        <div class="space-y-1">
            <label class="font-label-md text-label-md text-on-surface-variant" for="password_confirmation">Konfirmasi Kata Sandi</label>
            <div class="relative">
                <input class="w-full h-11 px-4 bg-surface-container-lowest border border-border-subtle rounded-lg focus:ring-2 focus:ring-primary-container focus:border-primary-container transition-all outline-none" id="password_confirmation" name="password_confirmation" placeholder="••••••••" type="password" required/>
            </div>
        </div>

        <div class="pt-stack-md">
            <button onclick="goToStep(2)" class="w-full h-12 bg-primary-container text-white font-label-md text-label-md rounded-lg shadow-sm hover:opacity-90 active:scale-[0.98] transition-all flex items-center justify-center gap-2" type="button">
                Lanjutkan ke Detail Event
                <span class="material-symbols-outlined text-sm">arrow_forward</span>
            </button>
        </div>
        <div class="flex items-center gap-2 py-2">
            <input class="rounded border-border-subtle text-primary focus:ring-primary" id="terms" type="checkbox" required/>
            <label class="font-body-sm text-body-sm text-on-surface-variant" for="terms">
                Saya setuju dengan <a class="text-primary hover:underline" href="#">Syarat Layanan</a> dan <a class="text-primary hover:underline" href="#">Kebijakan Privasi</a>.
            </label>
        </div>
    </div>
</div>

<!-- STEP 2: Event -->
<div id="step-2" class="absolute w-full top-0 left-0 transition-all duration-500 opacity-0 translate-x-20 z-0 invisible">
    <div class="mb-stack-lg flex justify-between items-start">
        <div>
            <h1 class="font-headline-lg text-headline-lg text-text-primary mb-2">Detail Event</h1>
            <p class="font-body-md text-body-md text-text-secondary">Lengkapi informasi dasar mengenai event Anda.</p>
        </div>
        <button class="text-primary font-label-md text-label-md hover:underline" onclick="goToStep(3)" type="button">Lewati</button>
    </div>
    
    <div class="space-y-stack-md">
        <div class="space-y-1">
            <label class="font-label-md text-label-md text-on-surface-variant">Nama Event</label>
            <input class="w-full h-11 px-4 bg-surface-container-lowest border border-border-subtle rounded-lg focus:ring-2 focus:ring-primary-container focus:border-primary-container transition-all outline-none" name="event_name" placeholder="contoh: Festival Musik Indonesia 2027" type="text"/>
        </div>
        <div class="space-y-1">
            <label class="font-label-md text-label-md text-on-surface-variant">Budget Perkiraan</label>
            <input class="w-full h-11 px-4 bg-surface-container-lowest border border-border-subtle rounded-lg focus:ring-2 focus:ring-primary-container focus:border-primary-container transition-all outline-none" name="event_budget" placeholder="contoh: Rp 500.000.000" type="text"/>
        </div>
        <div class="grid grid-cols-2 gap-stack-md">
            <div class="space-y-1">
                <label class="font-label-md text-label-md text-on-surface-variant">Tanggal Mulai</label>
                <input class="w-full h-11 px-4 bg-surface-container-lowest border border-border-subtle rounded-lg focus:ring-2 focus:ring-primary-container focus:border-primary-container transition-all outline-none" name="event_start" type="date"/>
            </div>
            <div class="space-y-1">
                <label class="font-label-md text-label-md text-on-surface-variant">Hari H Event</label>
                <input class="w-full h-11 px-4 bg-surface-container-lowest border border-border-subtle rounded-lg focus:ring-2 focus:ring-primary-container focus:border-primary-container transition-all outline-none" name="event_dday" type="date"/>
            </div>
        </div>
        <div class="space-y-1">
            <label class="font-label-md text-label-md text-on-surface-variant">Target Penonton</label>
            <input class="w-full h-11 px-4 bg-surface-container-lowest border border-border-subtle rounded-lg focus:ring-2 focus:ring-primary-container focus:border-primary-container transition-all outline-none" name="event_audience" placeholder="contoh: 5000 orang" type="text"/>
        </div>

        <div class="pt-stack-md flex gap-4">
            <button onclick="goToStep(1)" class="flex-1 h-12 border border-border-subtle bg-surface-container-lowest text-text-primary font-label-md text-label-md rounded-lg shadow-sm hover:bg-surface-container-low active:scale-[0.98] transition-all" type="button">
                Kembali
            </button>
            <button onclick="goToStep(3)" class="flex-[2] h-12 bg-primary-container text-white font-label-md text-label-md rounded-lg shadow-sm hover:opacity-90 active:scale-[0.98] transition-all flex items-center justify-center gap-2" type="button">
                Langkah Terakhir
                <span class="material-symbols-outlined text-sm">arrow_forward</span>
            </button>
        </div>
    </div>
</div>

<!-- STEP 3: Selesai -->
<div id="step-3" class="absolute w-full top-0 left-0 transition-all duration-500 opacity-0 translate-x-20 z-0 invisible text-center py-8">
    <div class="mb-stack-lg">
        <div class="w-24 h-24 bg-secondary-container text-on-secondary-container rounded-full flex items-center justify-center mx-auto mb-stack-md">
            <span class="material-symbols-outlined text-5xl" style="font-variation-settings: 'FILL' 1;">check_circle</span>
        </div>
        <h3 class="font-headline-lg text-headline-lg text-text-primary mb-2">Pendaftaran Selesai!</h3>
        <p class="font-body-md text-body-md text-text-secondary px-8">Event Anda telah berhasil dibuat. Ruang kerja (workspace) untuk event ini sudah siap digunakan oleh seluruh tim.</p>
    </div>
    <div class="pt-stack-md">
        <button class="w-full h-12 bg-primary text-white font-label-md text-label-md rounded-lg shadow-sm hover:opacity-90 active:scale-[0.98] transition-all" type="submit">
            Daftar & Buka Dasbor Operasional
        </button>
    </div>
</div>
</form>
HTML;

$pattern = '/<!-- Progress Indicator -->.*?<\/form>/s';
$content = preg_replace($pattern, $newForm, $content);

$newScript = <<<'HTML'
<script>
        function goToStep(step) {
            const step1 = document.getElementById('step-1');
            const step2 = document.getElementById('step-2');
            const step3 = document.getElementById('step-3');
            
            // Validate step 1 before going to step 2
            if (step === 2) {
                const name = document.getElementById('name');
                const email = document.getElementById('email');
                const password = document.getElementById('password');
                const terms = document.getElementById('terms');
                
                if(!name.reportValidity() || !email.reportValidity() || !password.reportValidity() || !terms.reportValidity()) {
                    return;
                }
            }

            [step1, step2, step3].forEach(s => {
                s.classList.remove('opacity-100', 'translate-x-0', 'z-10');
                s.classList.add('opacity-0', 'translate-x-20', 'z-0', 'invisible');
            });

            const current = document.getElementById('step-' + step);
            current.classList.remove('invisible');
            setTimeout(() => {
                current.classList.remove('opacity-0', 'translate-x-20', 'z-0');
                current.classList.add('opacity-100', 'translate-x-0', 'z-10');
            }, 50);

            // Update Nodes
            const n1 = document.getElementById('node-1');
            const n2 = document.getElementById('node-2');
            const n3 = document.getElementById('node-3');
            const l1 = document.getElementById('line-1');
            const l2 = document.getElementById('line-2');
            const t2 = document.getElementById('text-2');
            const t3 = document.getElementById('text-3');

            if (step === 1) {
                n2.className = 'flex items-center justify-center w-8 h-8 rounded-full border-2 border-outline-variant text-on-surface-variant font-label-md text-label-md transition-colors';
                t2.className = 'ml-2 font-label-md text-label-md text-on-surface-variant';
                l1.className = 'w-8 h-[2px] bg-outline-variant mx-2 transition-colors';
            } else if (step === 2) {
                n2.className = 'flex items-center justify-center w-8 h-8 rounded-full border-2 border-primary-container bg-primary-container text-white font-label-md text-label-md transition-colors';
                t2.className = 'ml-2 font-label-md text-label-md text-primary';
                l1.className = 'w-8 h-[2px] bg-primary mx-2 transition-colors';
                n3.className = 'flex items-center justify-center w-8 h-8 rounded-full border-2 border-outline-variant text-on-surface-variant font-label-md text-label-md transition-colors';
                t3.className = 'ml-2 font-label-md text-label-md text-on-surface-variant';
                l2.className = 'w-8 h-[2px] bg-outline-variant mx-2 transition-colors';
            } else if (step === 3) {
                n2.className = 'flex items-center justify-center w-8 h-8 rounded-full border-2 border-primary-container bg-primary-container text-white font-label-md text-label-md transition-colors';
                t2.className = 'ml-2 font-label-md text-label-md text-primary';
                l1.className = 'w-8 h-[2px] bg-primary mx-2 transition-colors';
                n3.className = 'flex items-center justify-center w-8 h-8 rounded-full border-2 border-primary-container bg-primary-container text-white font-label-md text-label-md transition-colors';
                t3.className = 'ml-2 font-label-md text-label-md text-primary';
                l2.className = 'w-8 h-[2px] bg-primary mx-2 transition-colors';
            }
        }

        const form = document.getElementById('registrationForm');
        form.addEventListener('submit', (e) => {
            const btn = e.target.querySelector('button[type="submit"]');
            btn.innerHTML = '<span class="material-symbols-outlined text-sm animate-spin">progress_activity</span> Memproses...';
        });

        const passToggles = document.querySelectorAll('.pass-toggle');
        passToggles.forEach(toggle => {
            toggle.addEventListener('click', (e) => {
                const passInput = e.currentTarget.previousElementSibling;
                const isPass = passInput.type === 'password';
                passInput.type = isPass ? 'text' : 'password';
                e.currentTarget.querySelector('span').innerText = isPass ? 'visibility_off' : 'visibility';
            });
        });
    </script>
HTML;

$scriptPattern = '/<script>.*?<\/script>/s';
$content = preg_replace($scriptPattern, $newScript, $content);

file_put_contents($file, $content);
echo "Updated auth/register.blade.php\n";
?>
EOF

php patch_register.php
rm patch_register.php
