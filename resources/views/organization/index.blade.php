<x-layouts.app title="Struktur Organisasi">

    <div class="page-header">
        <div class="page-header-row">
            <div>
                <h1 class="page-title">Struktur Organisasi</h1>
                <p class="page-subtitle">Visualisasi hierarki dan progress setiap divisi event</p>
            </div>
            <div class="page-header-actions">
                <button class="btn btn-outline"><span>👁</span> Tampilan Chart</button>
                <button class="btn btn-primary"><span>＋</span> Tambah Anggota</button>
            </div>
        </div>
    </div>

    {{-- Organization Chart --}}
    <div class="card mb-8">
        <h3 class="card-title mb-6">Hierarki Organisasi — Festival Musik 2026</h3>
        <div class="org-chart">
            {{-- Level 1: Event Director --}}
            <div class="org-node" style="border-color:var(--color-primary);">
                <div class="org-node-avatar" style="background:var(--color-primary);color:#fff;">AR</div>
                <div class="org-node-name">Ahmad Rizky</div>
                <div class="org-node-role">Event Director</div>
                <div style="display:flex;gap:var(--space-3);justify-content:center;margin-top:var(--space-3);">
                    <span class="badge badge-success">Health: 94</span>
                    <span class="badge badge-info">12 Tasks</span>
                </div>
            </div>

            <div class="org-connector"></div>

            {{-- Level 2: Project Managers --}}
            <div class="org-level">
                <div class="org-node">
                    <div class="org-node-avatar">SA</div>
                    <div class="org-node-name">Sarah Amelia</div>
                    <div class="org-node-role">Project Manager</div>
                    <div style="display:flex;gap:var(--space-2);justify-content:center;margin-top:var(--space-2);">
                        <span class="badge badge-success">88%</span>
                    </div>
                </div>
                <div class="org-node">
                    <div class="org-node-avatar">BR</div>
                    <div class="org-node-name">Budi Raharjo</div>
                    <div class="org-node-role">Project Manager</div>
                    <div style="display:flex;gap:var(--space-2);justify-content:center;margin-top:var(--space-2);">
                        <span class="badge badge-warning">62%</span>
                    </div>
                </div>
            </div>

            <div class="org-connector"></div>

            {{-- Level 3: Division Heads --}}
            <div class="org-level">
                <div class="org-node" style="min-width:140px;padding:var(--space-3) var(--space-4);">
                    <div class="org-node-avatar" style="width:36px;height:36px;font-size:14px;">DW</div>
                    <div class="org-node-name" style="font-size:13px;">Dewi W.</div>
                    <div class="org-node-role" style="font-size:10px;">Sekretaris</div>
                </div>
                <div class="org-node" style="min-width:140px;padding:var(--space-3) var(--space-4);">
                    <div class="org-node-avatar" style="width:36px;height:36px;font-size:14px;">RP</div>
                    <div class="org-node-name" style="font-size:13px;">Rina P.</div>
                    <div class="org-node-role" style="font-size:10px;">Bendahara</div>
                </div>
                <div class="org-node" style="min-width:140px;padding:var(--space-3) var(--space-4);">
                    <div class="org-node-avatar" style="width:36px;height:36px;font-size:14px;">FH</div>
                    <div class="org-node-name" style="font-size:13px;">Fajar H.</div>
                    <div class="org-node-role" style="font-size:10px;">Program</div>
                </div>
                <div class="org-node" style="min-width:140px;padding:var(--space-3) var(--space-4);">
                    <div class="org-node-avatar" style="width:36px;height:36px;font-size:14px;">NA</div>
                    <div class="org-node-name" style="font-size:13px;">Nanda A.</div>
                    <div class="org-node-role" style="font-size:10px;">Produksi</div>
                </div>
                <div class="org-node" style="min-width:140px;padding:var(--space-3) var(--space-4);">
                    <div class="org-node-avatar" style="width:36px;height:36px;font-size:14px;">IA</div>
                    <div class="org-node-name" style="font-size:13px;">Indra A.</div>
                    <div class="org-node-role" style="font-size:10px;">Pemasaran</div>
                </div>
                <div class="org-node" style="min-width:140px;padding:var(--space-3) var(--space-4);">
                    <div class="org-node-avatar" style="width:36px;height:36px;font-size:14px;">LS</div>
                    <div class="org-node-name" style="font-size:13px;">Lisa S.</div>
                    <div class="org-node-role" style="font-size:10px;">Logistik</div>
                </div>
            </div>
        </div>
    </div>

    {{-- Division Cards Grid --}}
    <h3 style="font-size:var(--font-size-xl);font-weight:700;margin-bottom:var(--space-6);">Divisi Event</h3>
    <div class="grid grid-3 mb-8">
        @php
        $divisions = [
            ['name'=>'Sekretaris','head'=>'Dewi W.','initials'=>'DW','members'=>8,'budget'=>'Rp 45 jt','budget_pct'=>62,'progress'=>72,'health'=>85,'tasks'=>14,'issues'=>1,'deadline'=>'12 Jul','color'=>'primary'],
            ['name'=>'Bendahara','head'=>'Rina P.','initials'=>'RP','members'=>4,'budget'=>'Rp 12 jt','budget_pct'=>45,'progress'=>68,'health'=>90,'tasks'=>8,'issues'=>0,'deadline'=>'15 Jul','color'=>'secondary'],
            ['name'=>'Program','head'=>'Fajar H.','initials'=>'FH','members'=>12,'budget'=>'Rp 180 jt','budget_pct'=>78,'progress'=>85,'health'=>92,'tasks'=>28,'issues'=>2,'deadline'=>'10 Jul','color'=>'primary'],
            ['name'=>'Produksi','head'=>'Nanda A.','initials'=>'NA','members'=>15,'budget'=>'Rp 320 jt','budget_pct'=>88,'progress'=>88,'health'=>95,'tasks'=>35,'issues'=>1,'deadline'=>'8 Jul','color'=>'success'],
            ['name'=>'Pemasaran','head'=>'Indra A.','initials'=>'IA','members'=>10,'budget'=>'Rp 150 jt','budget_pct'=>94,'progress'=>94,'health'=>97,'tasks'=>22,'issues'=>0,'deadline'=>'14 Jul','color'=>'success'],
            ['name'=>'Sponsorship','head'=>'Maya R.','initials'=>'MR','members'=>6,'budget'=>'Rp 25 jt','budget_pct'=>38,'progress'=>38,'health'=>65,'tasks'=>15,'issues'=>3,'deadline'=>'7 Jul','color'=>'danger'],
            ['name'=>'Media Partner','head'=>'Dion K.','initials'=>'DK','members'=>5,'budget'=>'Rp 35 jt','budget_pct'=>56,'progress'=>56,'health'=>78,'tasks'=>12,'issues'=>1,'deadline'=>'11 Jul','color'=>'warning'],
            ['name'=>'Logistik','head'=>'Lisa S.','initials'=>'LS','members'=>8,'budget'=>'Rp 95 jt','budget_pct'=>45,'progress'=>45,'health'=>70,'tasks'=>20,'issues'=>2,'deadline'=>'6 Jul','color'=>'warning'],
            ['name'=>'Dokumentasi','head'=>'Rendi M.','initials'=>'RM','members'=>6,'budget'=>'Rp 28 jt','budget_pct'=>100,'progress'=>100,'health'=>100,'tasks'=>10,'issues'=>0,'deadline'=>'—','color'=>'success'],
            ['name'=>'Konsumsi','head'=>'Sari N.','initials'=>'SN','members'=>7,'budget'=>'Rp 85 jt','budget_pct'=>72,'progress'=>72,'health'=>82,'tasks'=>16,'issues'=>1,'deadline'=>'9 Jul','color'=>'primary'],
            ['name'=>'Perizinan','head'=>'Agus T.','initials'=>'AT','members'=>3,'budget'=>'Rp 18 jt','budget_pct'=>80,'progress'=>80,'health'=>88,'tasks'=>6,'issues'=>0,'deadline'=>'13 Jul','color'=>'primary'],
            ['name'=>'Keamanan','head'=>'Hendra W.','initials'=>'HW','members'=>12,'budget'=>'Rp 65 jt','budget_pct'=>55,'progress'=>55,'health'=>75,'tasks'=>18,'issues'=>2,'deadline'=>'7 Jul','color'=>'warning'],
        ];
        @endphp

        @foreach($divisions as $div)
        <div class="card card-clickable" style="cursor:pointer;">
            <div style="display:flex;align-items:center;gap:var(--space-3);margin-bottom:var(--space-4);">
                <div style="width:40px;height:40px;border-radius:var(--radius-full);background:var(--color-{{ $div['color'] }}-light,var(--color-primary-light));color:var(--color-{{ $div['color'] }},var(--color-primary));display:flex;align-items:center;justify-content:center;font-weight:700;font-size:14px;">{{ $div['initials'] }}</div>
                <div>
                    <div class="font-semibold">{{ $div['name'] }}</div>
                    <div class="text-xs text-secondary">{{ $div['head'] }} • {{ $div['members'] }} anggota</div>
                </div>
                @if($div['health'] >= 90)
                    <span class="badge badge-success ml-auto">{{ $div['health'] }}</span>
                @elseif($div['health'] >= 70)
                    <span class="badge badge-warning ml-auto">{{ $div['health'] }}</span>
                @else
                    <span class="badge badge-danger ml-auto">{{ $div['health'] }}</span>
                @endif
            </div>

            {{-- Progress --}}
            <div style="margin-bottom:var(--space-3);">
                <div style="display:flex;justify-content:space-between;font-size:12px;margin-bottom:4px;">
                    <span class="text-secondary">Progress</span>
                    <span class="font-semibold">{{ $div['progress'] }}%</span>
                </div>
                <div class="progress progress-sm">
                    <div class="progress-bar {{ $div['progress'] >= 80 ? 'success' : ($div['progress'] >= 50 ? '' : 'warning') }}" style="width:{{ $div['progress'] }}%"></div>
                </div>
            </div>

            {{-- Budget --}}
            <div style="margin-bottom:var(--space-3);">
                <div style="display:flex;justify-content:space-between;font-size:12px;margin-bottom:4px;">
                    <span class="text-secondary">Budget</span>
                    <span class="font-semibold">{{ $div['budget'] }}</span>
                </div>
                <div class="progress progress-sm">
                    <div class="progress-bar {{ $div['budget_pct'] > 90 ? 'danger' : ($div['budget_pct'] > 70 ? 'warning' : '') }}" style="width:{{ $div['budget_pct'] }}%"></div>
                </div>
            </div>

            {{-- Stats --}}
            <div style="display:flex;gap:var(--space-4);font-size:12px;color:var(--color-text-secondary);">
                <span>📋 {{ $div['tasks'] }} Task</span>
                @if($div['issues'] > 0)
                    <span style="color:var(--color-danger);">⚠ {{ $div['issues'] }} Kendala</span>
                @else
                    <span style="color:var(--color-success);">✓ Lancar</span>
                @endif
                <span class="ml-auto">📅 {{ $div['deadline'] }}</span>
            </div>
        </div>
        @endforeach
    </div>

</x-layouts.app>
