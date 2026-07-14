<x-layouts.app title="Struktur Organisasi">

    <div x-data="{ showAddDivision: false, showAddMember: false }">
    <div class="page-header">
        <div class="page-header-row">
            <div>
                <h1 class="page-title">Struktur Organisasi</h1>
                <p class="page-subtitle">Visualisasi hierarki dan progress setiap divisi event</p>
            </div>
            <div class="page-header-actions">
                <button class="btn btn-outline"><span>👁</span> Tampilan Chart</button>
                <button type="button" @click="showAddMember = true" class="btn btn-secondary" style="background:var(--color-secondary-container);color:var(--color-on-secondary-container);border:1px solid var(--color-outline-variant);"><span>＋</span> Tambah Anggota</button>
                <button type="button" @click="showAddDivision = true" class="btn btn-primary"><span>＋</span> Tambah Divisi & Ketua</button>
            </div>
        </div>
    </div>

    @if (session('success'))
        <div style="padding: 1rem; margin-bottom: 1.5rem; border-radius: var(--radius-md); background-color: var(--color-success-light, #d1fae5); border: 1px solid var(--color-success, #10b981); color: var(--color-on-success-container, #065f46);">
            {{ session('success') }}
        </div>
    @endif

    @if ($errors->any())
        <div style="padding: 1rem; margin-bottom: 1.5rem; border-radius: var(--radius-md); background-color: var(--color-danger-light, #fee2e2); border: 1px solid var(--color-danger, #ef4444); color: var(--color-on-danger-container, #991b1b);">
            <ul style="margin: 0; padding-left: 1.5rem;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- Organization Chart --}}
    <div class="card mb-8">
        <h3 class="card-title mb-6">Hierarki Organisasi — Festival Musik 2026</h3>
        <div class="org-chart">
            @php
                $owner = null;
                if ($event) {
                    $ownerRel = $event->users()->wherePivot('role', 'owner')->first();
                    $owner = $ownerRel ?? auth()->user();
                }
            @endphp
            {{-- Level 1: Event Director --}}
            <div class="org-node" style="border-color:var(--color-primary);">
                <div class="org-node-avatar" style="background:var(--color-primary);color:#fff;">{{ $owner ? strtoupper(substr($owner->name, 0, 2)) : 'AR' }}</div>
                <div class="org-node-name">{{ $owner ? $owner->name : 'Ahmad Rizky' }}</div>
                <div class="org-node-role">Event Director</div>
            </div>

            @if(isset($divisions) && count($divisions) > 0)
            <div class="org-connector"></div>
            
            {{-- Level 2 & 3: Division Heads & Members --}}
            <div class="org-level" style="flex-wrap: wrap; justify-content: center; gap: 30px; align-items: flex-start;">
                @foreach($divisions as $div)
                    @php
                        $head = $div->members->where('role', 'division_head')->first();
                        $headName = $head ? $head->user->name : 'Belum Ada Ketua';
                        $initials = strtoupper(substr($headName, 0, 2));
                        $members = $div->members->where('role', 'member');
                    @endphp
                    <div style="display: flex; flex-direction: column; align-items: center;">
                        {{-- Division Head --}}
                        <div class="org-node" style="min-width:140px;padding:var(--space-3) var(--space-4);">
                            <div class="org-node-avatar" style="width:36px;height:36px;font-size:14px;">{{ $initials }}</div>
                            <div class="org-node-name" style="font-size:13px;">{{ $headName }}</div>
                            <div class="org-node-role" style="font-size:10px;font-weight:bold;color:var(--color-primary);">{{ $div->name }}</div>
                        </div>
                        
                        {{-- Members --}}
                        @if(count($members) > 0)
                        <div style="width: 2px; height: 20px; background: var(--color-outline-variant);"></div>
                        <div style="display: flex; gap: 10px; border-top: 2px solid var(--color-outline-variant); padding-top: 10px; flex-wrap: wrap; justify-content: center; max-width: 300px;">
                            @foreach($members as $member)
                            <div class="org-node" style="min-width:100px;padding:var(--space-2);background:var(--color-surface-container-lowest);">
                                <div class="org-node-avatar" style="width:24px;height:24px;font-size:10px;margin-bottom:4px;">{{ strtoupper(substr($member->user->name, 0, 2)) }}</div>
                                <div class="org-node-name" style="font-size:11px;">{{ $member->user->name }}</div>
                                <div class="org-node-role" style="font-size:9px;">Anggota</div>
                            </div>
                            @endforeach
                        </div>
                        @endif
                    </div>
                @endforeach
            </div>
            @endif
        </div>
    </div>

    {{-- Division Cards Grid --}}
    <h3 style="font-size:var(--font-size-xl);font-weight:700;margin-bottom:var(--space-6);">Divisi Event</h3>
    <div class="grid grid-3 mb-8">
        @if(isset($divisions) && count($divisions) > 0)
            @foreach($divisions as $div)
            @php
                $head = $div->members->where('role', 'division_head')->first();
                $headName = $head ? $head->user->name : 'Belum Ada Ketua';
                $initials = strtoupper(substr($headName, 0, 2));
                $membersCount = count($div->members);
                // Mock data for UI
                $progress = 0; $budget = 'Rp 0'; $budget_pct = 0; $health = 100;
                $tasks = 0; $issues = 0; $deadline = '—'; $color = 'primary';
            @endphp
            <div class="card card-clickable" style="cursor:pointer;">
                <div style="display:flex;align-items:center;gap:var(--space-3);margin-bottom:var(--space-4);">
                    <div style="width:40px;height:40px;border-radius:var(--radius-full);background:var(--color-{{ $color }}-light,var(--color-primary-light));color:var(--color-{{ $color }},var(--color-primary));display:flex;align-items:center;justify-content:center;font-weight:700;font-size:14px;">{{ $initials }}</div>
                    <div style="flex:1;">
                        <div class="font-semibold" style="display:flex; justify-content:space-between; align-items:center;">
                            {{ $div->name }}
                            <div style="display:flex; gap:5px;">
                                <button type="button" onclick="editDivision('{{ $div->id }}', '{{ $div->name }}')" class="btn btn-outline btn-sm" style="padding: 2px 5px; font-size:10px;">✎</button>
                                <form action="{{ route('organization.division.destroy', $div->id) }}" method="POST" onsubmit="return confirm('Yakin hapus divisi ini?');" style="margin:0;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline btn-sm" style="padding: 2px 5px; font-size:10px; color:var(--color-danger); border-color:var(--color-danger);">🗑</button>
                                </form>
                            </div>
                        </div>
                        <div class="text-xs text-secondary">{{ $headName }} • {{ $membersCount }} anggota</div>
                    </div>
                    @if($health >= 90)
                        <span class="badge badge-success ml-auto">{{ $health }}</span>
                    @elseif($health >= 70)
                        <span class="badge badge-warning ml-auto">{{ $health }}</span>
                    @else
                        <span class="badge badge-danger ml-auto">{{ $health }}</span>
                    @endif
                </div>

                {{-- Progress --}}
                <div style="margin-bottom:var(--space-3);">
                    <div style="display:flex;justify-content:space-between;font-size:12px;margin-bottom:4px;">
                        <span class="text-secondary">Progress</span>
                        <span class="font-semibold">{{ $progress }}%</span>
                    </div>
                    <div class="progress progress-sm">
                        <div class="progress-bar {{ $progress >= 80 ? 'success' : ($progress >= 50 ? '' : 'warning') }}" style="width:{{ $progress }}%"></div>
                    </div>
                </div>

                {{-- Budget --}}
                <div style="margin-bottom:var(--space-3);">
                    <div style="display:flex;justify-content:space-between;font-size:12px;margin-bottom:4px;">
                        <span class="text-secondary">Budget</span>
                        <span class="font-semibold">{{ $budget }}</span>
                    </div>
                    <div class="progress progress-sm">
                        <div class="progress-bar {{ $budget_pct > 90 ? 'danger' : ($budget_pct > 70 ? 'warning' : '') }}" style="width:{{ $budget_pct }}%"></div>
                    </div>
                </div>

                {{-- Stats --}}
                <div style="display:flex;gap:var(--space-4);font-size:12px;color:var(--color-text-secondary);">
                    <span>📋 {{ $tasks }} Task</span>
                    @if($issues > 0)
                        <span style="color:var(--color-danger);">⚠ {{ $issues }} Kendala</span>
                    @else
                        <span style="color:var(--color-success);">✓ Lancar</span>
                    @endif
                    <span class="ml-auto">📅 {{ $deadline }}</span>
                </div>
            </div>
            @endforeach
        @else
            <div class="col-span-3 text-center py-8 text-on-surface-variant">Belum ada divisi yang dibuat.</div>
        @endif
    </div>

    <!-- Modal Tambah Divisi -->
    <div x-show="showAddDivision" class="fixed inset-0 z-[100] flex items-center justify-center" x-cloak>
        <div x-show="showAddDivision" x-transition.opacity class="fixed inset-0 bg-black/50 backdrop-blur-sm" @click="showAddDivision = false"></div>
        
        <div x-show="showAddDivision" 
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0 scale-95 translate-y-4"
             x-transition:enter-end="opacity-100 scale-100 translate-y-0"
             class="relative bg-surface rounded-2xl shadow-xl border border-outline-variant/30 p-8 w-full max-w-lg mx-4 z-10 max-h-[90vh] overflow-y-auto">
            
            <div class="flex justify-between items-center mb-6">
                <h3 class="font-headline-sm text-headline-sm text-on-surface">Tambah Divisi Baru</h3>
                <button type="button" @click="showAddDivision = false" class="text-slate-400 hover:text-slate-600">
                    <span class="material-symbols-outlined">close</span>
                </button>
            </div>
            
            <form method="POST" action="{{ route('organization.store') }}" class="space-y-4">
                @csrf
                <div>
                    <label class="block text-sm font-semibold mb-1">Nama Divisi</label>
                    <input type="text" name="division_name" class="w-full px-4 py-2 bg-surface-container-lowest border border-outline-variant rounded-xl focus:ring-2 focus:ring-primary/20 outline-none" placeholder="Contoh: Produksi, Sponsorship" required>
                </div>
                
                <hr class="border-outline-variant/30 my-4">
                <h4 class="font-title-md text-title-md mb-2">Akun Ketua Divisi</h4>
                
                <div>
                    <label class="block text-sm font-semibold mb-1">Nama Lengkap Ketua</label>
                    <input type="text" name="head_name" class="w-full px-4 py-2 bg-surface-container-lowest border border-outline-variant rounded-xl focus:ring-2 focus:ring-primary/20 outline-none" placeholder="Nama Lengkap" required>
                </div>
                <div>
                    <label class="block text-sm font-semibold mb-1">Email</label>
                    <input type="email" name="head_email" class="w-full px-4 py-2 bg-surface-container-lowest border border-outline-variant rounded-xl focus:ring-2 focus:ring-primary/20 outline-none" placeholder="email@contoh.com" required>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-semibold mb-1">Password</label>
                        <input type="password" name="password" class="w-full px-4 py-2 bg-surface-container-lowest border border-outline-variant rounded-xl focus:ring-2 focus:ring-primary/20 outline-none" required>
                    </div>
                    <div>
                        <label class="block text-sm font-semibold mb-1">Konfirmasi Password</label>
                        <input type="password" name="password_confirmation" class="w-full px-4 py-2 bg-surface-container-lowest border border-outline-variant rounded-xl focus:ring-2 focus:ring-primary/20 outline-none" required>
                    </div>
                </div>
                
                <div class="pt-4 flex gap-4">
                    <button type="button" @click="showAddDivision = false" class="flex-1 px-4 py-2 border border-outline-variant text-on-surface rounded-xl font-label-md hover:bg-surface-container transition-colors">Batal</button>
                    <button type="submit" class="flex-1 px-4 py-2 bg-primary text-white rounded-xl font-label-md hover:bg-blue-700 shadow-sm transition-colors">Simpan & Buat Akun</button>
                </div>
            </form>
        </div>
    </div>
    
    <!-- Modal Tambah Anggota -->
    <div x-show="showAddMember" class="fixed inset-0 z-[100] flex items-center justify-center" x-cloak>
        <div x-show="showAddMember" x-transition.opacity class="fixed inset-0 bg-black/50 backdrop-blur-sm" @click="showAddMember = false"></div>
        
        <div x-show="showAddMember" 
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0 scale-95 translate-y-4"
             x-transition:enter-end="opacity-100 scale-100 translate-y-0"
             class="relative bg-surface rounded-2xl shadow-xl border border-outline-variant/30 p-8 w-full max-w-lg mx-4 z-10 max-h-[90vh] overflow-y-auto">
            
            <div class="flex justify-between items-center mb-6">
                <h3 class="font-headline-sm text-headline-sm text-on-surface">Tambah Anggota Baru</h3>
                <button type="button" @click="showAddMember = false" class="text-slate-400 hover:text-slate-600">
                    <span class="material-symbols-outlined">close</span>
                </button>
            </div>
            
            <form method="POST" action="{{ route('organization.member.store') }}" class="space-y-4">
                @csrf
                <div>
                    <label class="block text-sm font-semibold mb-1">Pilih Divisi</label>
                    <select name="division_id" class="w-full px-4 py-2 bg-surface-container-lowest border border-outline-variant rounded-xl focus:ring-2 focus:ring-primary/20 outline-none" required>
                        <option value="">-- Pilih Divisi --</option>
                        @if(isset($divisions))
                            @foreach($divisions as $div)
                                <option value="{{ $div->id }}">{{ $div->name }}</option>
                            @endforeach
                        @endif
                    </select>
                </div>
                
                <div>
                    <label class="block text-sm font-semibold mb-1">Nama Lengkap Anggota</label>
                    <input type="text" name="member_name" class="w-full px-4 py-2 bg-surface-container-lowest border border-outline-variant rounded-xl focus:ring-2 focus:ring-primary/20 outline-none" placeholder="Nama Lengkap" required>
                </div>
                <div>
                    <label class="block text-sm font-semibold mb-1">Email</label>
                    <input type="email" name="member_email" class="w-full px-4 py-2 bg-surface-container-lowest border border-outline-variant rounded-xl focus:ring-2 focus:ring-primary/20 outline-none" placeholder="email@contoh.com" required>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-semibold mb-1">Password</label>
                        <input type="password" name="password" class="w-full px-4 py-2 bg-surface-container-lowest border border-outline-variant rounded-xl focus:ring-2 focus:ring-primary/20 outline-none" required>
                    </div>
                    <div>
                        <label class="block text-sm font-semibold mb-1">Konfirmasi Password</label>
                        <input type="password" name="password_confirmation" class="w-full px-4 py-2 bg-surface-container-lowest border border-outline-variant rounded-xl focus:ring-2 focus:ring-primary/20 outline-none" required>
                    </div>
                </div>
                
                <div class="pt-4 flex gap-4">
                    <button type="button" @click="showAddMember = false" class="flex-1 px-4 py-2 border border-outline-variant text-on-surface rounded-xl font-label-md hover:bg-surface-container transition-colors">Batal</button>
                    <button type="submit" class="flex-1 px-4 py-2 bg-primary text-white rounded-xl font-label-md hover:bg-blue-700 shadow-sm transition-colors">Simpan & Buat Akun</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Script for Edit Division -->
    <script>
        function editDivision(id, currentName) {
            let newName = prompt("Edit Nama Divisi:", currentName);
            if (newName && newName !== currentName) {
                // Create a form and submit
                let form = document.createElement('form');
                form.method = 'POST';
                form.action = '/organization/division/' + id;
                
                let csrf = document.createElement('input');
                csrf.type = 'hidden';
                csrf.name = '_token';
                csrf.value = '{{ csrf_token() }}';
                form.appendChild(csrf);
                
                let method = document.createElement('input');
                method.type = 'hidden';
                method.name = '_method';
                method.value = 'PUT';
                form.appendChild(method);
                
                let nameInput = document.createElement('input');
                nameInput.type = 'hidden';
                nameInput.name = 'name';
                nameInput.value = newName;
                form.appendChild(nameInput);
                
                document.body.appendChild(form);
                form.submit();
            }
        }
    </script>
</x-layouts.app>
