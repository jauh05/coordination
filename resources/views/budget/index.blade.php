<x-layouts.app title="RAB — Rencana Anggaran Biaya">

    <div class="page-header">
        <div class="page-header-row">
            <div>
                <h1 class="page-title">Rencana Anggaran Biaya</h1>
                <p class="page-subtitle">Kelola seluruh alur budget dari perencanaan hingga realisasi</p>
            </div>
            <div class="page-header-actions">
                <button class="btn btn-outline"><span>↓</span> Ekspor Excel</button>
                <button class="btn btn-outline"><span>📄</span> Upload Dokumen</button>
                <button class="btn btn-primary"><span>＋</span> Tambah Item</button>
            </div>
        </div>
    </div>

    {{-- Stat Cards --}}
    <div class="grid grid-4 mb-8">
        <div class="stat-card">
            <div class="stat-card-header">
                <span class="stat-card-label">Total RAB</span>
                <div class="stat-card-icon" style="background:var(--color-primary-light);color:var(--color-primary);">💰</div>
            </div>
            <div class="stat-card-value">Rp 1,85M</div>
            <span class="stat-card-meta">Dari 14 divisi</span>
        </div>
        <div class="stat-card">
            <div class="stat-card-header">
                <span class="stat-card-label">Realisasi</span>
                <div class="stat-card-icon" style="background:var(--color-secondary-light);color:var(--color-secondary);">📊</div>
            </div>
            <div class="stat-card-value">Rp 1,52M</div>
            <span class="stat-card-trend up">↑ 82% terpakai</span>
        </div>
        <div class="stat-card">
            <div class="stat-card-header">
                <span class="stat-card-label">Sisa Anggaran</span>
                <div class="stat-card-icon" style="background:var(--color-success-light);color:var(--color-success);">💵</div>
            </div>
            <div class="stat-card-value">Rp 330 jt</div>
            <span class="stat-card-trend up">↑ Hemat 4%</span>
        </div>
        <div class="stat-card">
            <div class="stat-card-header">
                <span class="stat-card-label">Efisiensi</span>
                <div class="stat-card-icon" style="background:var(--color-warning-light);color:var(--color-warning);">⚡</div>
            </div>
            <div class="stat-card-value">96%</div>
            <span class="stat-card-meta">Target: 95%</span>
        </div>
    </div>

    {{-- Workflow Stepper --}}
    <div class="card mb-8">
        <h3 class="card-title mb-4">Alur Workflow RAB</h3>
        <div class="workflow-stepper">
            @php
            $steps = [
                ['label' => 'Perencanaan', 'status' => 'completed'],
                ['label' => 'RAB Awal', 'status' => 'completed'],
                ['label' => 'Pengajuan Divisi', 'status' => 'completed'],
                ['label' => 'Review', 'status' => 'completed'],
                ['label' => 'Revisi', 'status' => 'completed'],
                ['label' => 'Approval', 'status' => 'completed'],
                ['label' => 'RAB Final', 'status' => 'completed'],
                ['label' => 'PO', 'status' => 'active'],
                ['label' => 'Invoice', 'status' => 'pending'],
                ['label' => 'Pembayaran', 'status' => 'pending'],
                ['label' => 'Verifikasi', 'status' => 'pending'],
                ['label' => 'Realisasi', 'status' => 'pending'],
            ];
            @endphp
            @foreach($steps as $i => $step)
                <div class="workflow-step">
                    <div class="workflow-step-dot {{ $step['status'] }}">
                        @if($step['status'] === 'completed')
                            ✓
                        @else
                            {{ $i + 1 }}
                        @endif
                    </div>
                    <span class="workflow-step-label">{{ $step['label'] }}</span>
                </div>
                @if($i < count($steps) - 1)
                    <div class="workflow-step-line {{ $step['status'] === 'completed' ? 'completed' : '' }}"></div>
                @endif
            @endforeach
        </div>
    </div>

    {{-- Charts Row --}}
    <div class="grid grid-2 mb-8">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Budget vs Realisasi per Divisi</h3>
            </div>
            <div class="chart-container">
                <canvas id="budgetDivisionChart"></canvas>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Alokasi per Kategori</h3>
            </div>
            <div class="chart-container" style="display:flex;align-items:center;justify-content:center;gap:var(--space-6);">
                <canvas id="categoryDonut" width="200" height="200"></canvas>
                <div style="font-size:13px;">
                    <div style="display:flex;align-items:center;gap:8px;margin-bottom:8px;"><span style="width:10px;height:10px;border-radius:2px;background:#2563EB;"></span> Produksi (35%)</div>
                    <div style="display:flex;align-items:center;gap:8px;margin-bottom:8px;"><span style="width:10px;height:10px;border-radius:2px;background:#10B981;"></span> Pemasaran (20%)</div>
                    <div style="display:flex;align-items:center;gap:8px;margin-bottom:8px;"><span style="width:10px;height:10px;border-radius:2px;background:#F59E0B;"></span> Logistik (15%)</div>
                    <div style="display:flex;align-items:center;gap:8px;margin-bottom:8px;"><span style="width:10px;height:10px;border-radius:2px;background:#EF4444;"></span> Konsumsi (12%)</div>
                    <div style="display:flex;align-items:center;gap:8px;margin-bottom:8px;"><span style="width:10px;height:10px;border-radius:2px;background:#8B5CF6;"></span> Keamanan (8%)</div>
                    <div style="display:flex;align-items:center;gap:8px;"><span style="width:10px;height:10px;border-radius:2px;background:#94A3B8;"></span> Lainnya (10%)</div>
                </div>
            </div>
        </div>
    </div>

    {{-- Budget Table --}}
    <div class="card">
        <div class="card-header">
            <div>
                <h3 class="card-title">Detail Anggaran</h3>
                <p class="card-subtitle">Menampilkan 10 item dari 86 total</p>
            </div>
            <div style="display:flex;gap:var(--space-2);">
                <button class="btn btn-outline btn-sm">Filter</button>
                <button class="btn btn-outline btn-sm">Semua Divisi</button>
            </div>
        </div>
        <div class="table-container" style="margin-top:var(--space-4);">
            <table class="table">
                <thead>
                    <tr>
                        <th>Kategori</th>
                        <th>Divisi</th>
                        <th>PIC</th>
                        <th>Vendor</th>
                        <th>Jumlah</th>
                        <th>Estimasi</th>
                        <th>Realisasi</th>
                        <th>Selisih</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="font-semibold">Sound System</td>
                        <td>Produksi</td>
                        <td>Nanda A.</td>
                        <td>PT Audio Pro</td>
                        <td>1 paket</td>
                        <td>Rp 85.000.000</td>
                        <td>Rp 82.500.000</td>
                        <td style="color:var(--color-success);">-Rp 2.500.000</td>
                        <td><span class="badge badge-success">Lunas</span></td>
                    </tr>
                    <tr>
                        <td class="font-semibold">Dekorasi Panggung</td>
                        <td>Produksi</td>
                        <td>Nanda A.</td>
                        <td>Kreasi Dekor</td>
                        <td>1 paket</td>
                        <td>Rp 45.000.000</td>
                        <td>Rp 48.200.000</td>
                        <td style="color:var(--color-danger);">+Rp 3.200.000</td>
                        <td><span class="badge badge-warning">Revisi</span></td>
                    </tr>
                    <tr>
                        <td class="font-semibold">Catering VIP</td>
                        <td>Konsumsi</td>
                        <td>Sari N.</td>
                        <td>Katering Nusantara</td>
                        <td>500 pax</td>
                        <td>Rp 75.000.000</td>
                        <td>Rp 72.000.000</td>
                        <td style="color:var(--color-success);">-Rp 3.000.000</td>
                        <td><span class="badge badge-success">Lunas</span></td>
                    </tr>
                    <tr>
                        <td class="font-semibold">LED Screen Indoor</td>
                        <td>Produksi</td>
                        <td>Nanda A.</td>
                        <td>MegaLED</td>
                        <td>3 unit</td>
                        <td>Rp 35.000.000</td>
                        <td>—</td>
                        <td>—</td>
                        <td><span class="badge badge-info">PO Terkirim</span></td>
                    </tr>
                    <tr>
                        <td class="font-semibold">Digital Ads</td>
                        <td>Pemasaran</td>
                        <td>Indra A.</td>
                        <td>Social Buzz Agency</td>
                        <td>1 paket</td>
                        <td>Rp 28.000.000</td>
                        <td>Rp 32.000.000</td>
                        <td style="color:var(--color-danger);">+Rp 4.000.000</td>
                        <td><span class="badge badge-danger">Over Budget</span></td>
                    </tr>
                    <tr>
                        <td class="font-semibold">Security</td>
                        <td>Keamanan</td>
                        <td>Hendra W.</td>
                        <td>PT Jaga Sentosa</td>
                        <td>25 personel</td>
                        <td>Rp 18.750.000</td>
                        <td>—</td>
                        <td>—</td>
                        <td><span class="badge badge-neutral">Pending</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div style="display:flex;align-items:center;justify-content:space-between;padding:var(--space-4) 0;font-size:13px;color:var(--color-text-secondary);">
            <span>Menampilkan 1 - 6 dari 86 item</span>
            <div style="display:flex;gap:var(--space-1);">
                <button class="btn btn-ghost btn-sm">‹</button>
                <button class="btn btn-primary btn-sm" style="min-width:32px;">1</button>
                <button class="btn btn-ghost btn-sm" style="min-width:32px;">2</button>
                <button class="btn btn-ghost btn-sm" style="min-width:32px;">3</button>
                <button class="btn btn-ghost btn-sm">…</button>
                <button class="btn btn-ghost btn-sm" style="min-width:32px;">9</button>
                <button class="btn btn-ghost btn-sm">›</button>
            </div>
        </div>
    </div>

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Division Bar Chart
    const ctx1 = document.getElementById('budgetDivisionChart');
    if (ctx1) {
        new Chart(ctx1, {
            type: 'bar',
            data: {
                labels: ['Produksi', 'Pemasaran', 'Logistik', 'Konsumsi', 'Keamanan', 'Sponsorship'],
                datasets: [
                    { label: 'Budget', data: [320, 150, 95, 85, 65, 25], backgroundColor: '#E2E8F0', borderRadius: 6, borderSkipped: false },
                    { label: 'Realisasi', data: [280, 142, 68, 72, 45, 18], backgroundColor: '#2563EB', borderRadius: 6, borderSkipped: false }
                ]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: { legend: { display: false } },
                scales: {
                    x: { grid: { display: false }, ticks: { font: { family: 'Inter', size: 11 }, color: '#94A3B8' } },
                    y: { grid: { color: '#F1F5F9' }, ticks: { font: { family: 'Inter', size: 11 }, color: '#94A3B8', callback: v => 'Rp ' + v + 'jt' } }
                }
            }
        });
    }

    // Donut Chart
    const ctx2 = document.getElementById('categoryDonut');
    if (ctx2) {
        new Chart(ctx2, {
            type: 'doughnut',
            data: {
                labels: ['Produksi', 'Pemasaran', 'Logistik', 'Konsumsi', 'Keamanan', 'Lainnya'],
                datasets: [{
                    data: [35, 20, 15, 12, 8, 10],
                    backgroundColor: ['#2563EB', '#10B981', '#F59E0B', '#EF4444', '#8B5CF6', '#94A3B8'],
                    borderWidth: 0,
                    borderRadius: 4,
                }]
            },
            options: {
                responsive: false,
                cutout: '65%',
                plugins: { legend: { display: false } }
            }
        });
    }
});
</script>
@endpush

</x-layouts.app>
