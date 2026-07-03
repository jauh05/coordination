<x-layouts.app title="AI Assistant">

    <div style="display:grid;grid-template-columns:1fr 360px;gap:0;margin:-32px -24px;height:calc(100vh - var(--topnav-height));">
        {{-- Left: Chat Interface --}}
        <div class="chat-container" style="border-right:1px solid var(--color-border-light);">
            {{-- Alert Cards --}}
            <div style="padding:var(--space-4) var(--space-6);border-bottom:1px solid var(--color-border-light);display:flex;gap:var(--space-3);overflow-x:auto;">
                <div style="flex:0 0 auto;padding:var(--space-3) var(--space-4);background:var(--color-danger-light);border-radius:var(--radius-md);border-left:3px solid var(--color-danger);min-width:200px;">
                    <div style="font-size:12px;font-weight:700;color:var(--color-danger);">⚠ Risiko Budget Overflow</div>
                    <div style="font-size:12px;color:var(--color-text-secondary);margin-top:2px;">Pemasaran overspend 12%</div>
                    <a href="#" style="font-size:12px;font-weight:600;">Sesuaikan Alokasi →</a>
                </div>
                <div style="flex:0 0 auto;padding:var(--space-3) var(--space-4);background:var(--color-warning-light);border-radius:var(--radius-md);border-left:3px solid var(--color-warning);min-width:200px;">
                    <div style="font-size:12px;font-weight:700;color:var(--color-warning);">⏰ Vendor Terlambat</div>
                    <div style="font-size:12px;color:var(--color-text-secondary);margin-top:2px;">5 vendor belum konfirmasi</div>
                    <a href="#" style="font-size:12px;font-weight:600;">Lihat Detail →</a>
                </div>
                <div style="flex:0 0 auto;padding:var(--space-3) var(--space-4);background:var(--color-info-light);border-radius:var(--radius-md);border-left:3px solid var(--color-primary);min-width:200px;">
                    <div style="font-size:12px;font-weight:700;color:var(--color-primary);">📋 Dokumen Pending</div>
                    <div style="font-size:12px;color:var(--color-text-secondary);margin-top:2px;">8 dokumen belum lengkap</div>
                    <a href="#" style="font-size:12px;font-weight:600;">Lengkapi →</a>
                </div>
            </div>

            {{-- Chat Messages --}}
            <div class="chat-messages">
                {{-- AI Greeting --}}
                <div class="chat-message ai">
                    <div class="chat-message-avatar">✨</div>
                    <div class="chat-message-bubble">
                        <p style="margin-bottom:var(--space-3);">Selamat pagi, Ahmad! 👋</p>
                        <p>Saya telah menganalisis event-event Anda yang sedang berjalan. Apakah Anda ingin meninjau <strong>Health Score Festival Musik 2026</strong> atau memeriksa status task yang overdue?</p>
                    </div>
                </div>

                {{-- User Message --}}
                <div class="chat-message user">
                    <div class="chat-message-avatar">AR</div>
                    <div class="chat-message-bubble">
                        Tampilkan status budget untuk Festival Musik 2026.
                    </div>
                </div>

                {{-- AI Analysis Response --}}
                <div class="chat-message ai">
                    <div class="chat-message-avatar">✨</div>
                    <div class="chat-message-bubble">
                        <p style="margin-bottom:var(--space-4);">Berikut analisis budget <strong>Festival Musik 2026</strong>. Saat ini event telah menggunakan <strong>84%</strong> dari total anggaran:</p>

                        {{-- Data Card inside bubble --}}
                        <div style="background:var(--color-bg);border:1px solid var(--color-border-light);border-radius:var(--radius-md);padding:var(--space-4);margin-bottom:var(--space-4);">
                            <div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:var(--space-3);">
                                <div>
                                    <div style="font-size:11px;text-transform:uppercase;font-weight:600;color:var(--color-text-secondary);">Estimasi Total</div>
                                    <div style="font-size:24px;font-weight:700;">Rp 1.425.000.000</div>
                                </div>
                                <div style="width:48px;height:48px;border-radius:50%;border:3px solid var(--color-primary);display:flex;align-items:center;justify-content:center;font-size:14px;font-weight:700;color:var(--color-primary);">84%</div>
                            </div>

                            <div style="margin-bottom:var(--space-3);">
                                <div style="display:flex;justify-content:space-between;font-size:13px;margin-bottom:4px;">
                                    <span>Venue & Catering</span>
                                    <span class="font-semibold">Rp 850jt / Rp 900jt</span>
                                </div>
                                <div class="progress progress-sm">
                                    <div class="progress-bar" style="width:94%"></div>
                                </div>
                            </div>

                            <div style="margin-bottom:var(--space-3);">
                                <div style="display:flex;justify-content:space-between;font-size:13px;margin-bottom:4px;">
                                    <span>Marketing & PR</span>
                                    <span class="font-semibold" style="color:var(--color-danger);">Rp 320jt / Rp 280jt</span>
                                </div>
                                <div class="progress progress-sm">
                                    <div class="progress-bar danger" style="width:100%"></div>
                                </div>
                            </div>

                            <div style="display:flex;align-items:center;gap:var(--space-2);font-size:13px;color:var(--color-text-secondary);margin-top:var(--space-3);">
                                <span>📈</span> Diproyeksikan selesai 4% di bawah total anggaran.
                            </div>
                        </div>

                        <p style="color:var(--color-text-secondary);font-size:13px;">💡 <strong>Rekomendasi:</strong> Pertimbangkan untuk mengurangi alokasi Marketing digital ads dan mengalihkan surplus ke contingency fund.</p>
                    </div>
                </div>

                {{-- Recommended Actions --}}
                <div style="margin-bottom:var(--space-5);">
                    <div style="font-size:11px;font-weight:600;text-transform:uppercase;color:var(--color-text-secondary);letter-spacing:0.1em;margin-bottom:var(--space-3);margin-left:48px;">Aksi yang Direkomendasikan</div>
                    <div style="display:flex;flex-direction:column;gap:var(--space-2);margin-left:48px;">
                        <div style="display:flex;align-items:center;gap:var(--space-3);padding:var(--space-3) var(--space-4);background:var(--color-card);border:1px solid var(--color-border-light);border-radius:var(--radius-md);cursor:pointer;transition:all 0.15s ease;" onmouseenter="this.style.boxShadow='0 2px 8px rgba(0,0,0,0.06)'" onmouseleave="this.style.boxShadow='none'">
                            <div style="width:32px;height:32px;border-radius:var(--radius-sm);background:var(--color-success-light);color:var(--color-success);display:flex;align-items:center;justify-content:center;">💰</div>
                            <div style="flex:1;">
                                <div class="font-semibold" style="font-size:14px;">Setujui Surplus Marketing</div>
                                <div class="text-xs text-secondary">Otorisasi +Rp 40jt untuk Social Ads</div>
                            </div>
                            <span style="color:var(--color-text-tertiary);">›</span>
                        </div>
                        <div style="display:flex;align-items:center;gap:var(--space-3);padding:var(--space-3) var(--space-4);background:var(--color-card);border:1px solid var(--color-border-light);border-radius:var(--radius-md);cursor:pointer;transition:all 0.15s ease;" onmouseenter="this.style.boxShadow='0 2px 8px rgba(0,0,0,0.06)'" onmouseleave="this.style.boxShadow='none'">
                            <div style="width:32px;height:32px;border-radius:var(--radius-sm);background:var(--color-warning-light);color:var(--color-warning);display:flex;align-items:center;justify-content:center;">✉</div>
                            <div style="flex:1;">
                                <div class="font-semibold" style="font-size:14px;">Ingatkan Vendor</div>
                                <div class="text-xs text-secondary">Kirim reminder ke 5 vendor pending</div>
                            </div>
                            <span style="color:var(--color-text-tertiary);">›</span>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Chat Input --}}
            <div class="chat-input-container">
                <div class="chat-input-wrapper">
                    <input type="text" placeholder="Tanya Coordination AI..." id="chatInput">
                    <button class="btn btn-ghost btn-icon" title="Voice input">🎤</button>
                    <button class="chat-input-send" title="Kirim">➤</button>
                </div>
            </div>
        </div>

        {{-- Right: Insight Panel --}}
        <div class="insight-panel">
            <h3 style="font-size:var(--font-size-lg);font-weight:700;margin-bottom:var(--space-6);">Insight Panel</h3>

            {{-- Prioritas Hari Ini --}}
            <div class="insight-section">
                <h4 class="insight-section-title">Prioritas Hari Ini</h4>
                <div class="insight-item">
                    <div class="insight-item-icon" style="background:var(--color-danger-light);color:var(--color-danger);">🔥</div>
                    <div class="insight-item-content">
                        <div class="insight-item-title">Pembayaran Vendor Final</div>
                        <div class="insight-item-desc">Deadline hari ini 17:00 WIB</div>
                    </div>
                </div>
                <div class="insight-item">
                    <div class="insight-item-icon" style="background:var(--color-warning-light);color:var(--color-warning);">⚡</div>
                    <div class="insight-item-content">
                        <div class="insight-item-title">Konfirmasi LED Screen</div>
                        <div class="insight-item-desc">MegaLED belum konfirmasi</div>
                    </div>
                </div>
                <div class="insight-item">
                    <div class="insight-item-icon" style="background:var(--color-primary-light);color:var(--color-primary);">📋</div>
                    <div class="insight-item-content">
                        <div class="insight-item-title">Review Laporan Divisi</div>
                        <div class="insight-item-desc">3 laporan harian pending</div>
                    </div>
                </div>
            </div>

            {{-- Status Risiko --}}
            <div class="insight-section">
                <h4 class="insight-section-title">Status Risiko</h4>
                <div style="padding:var(--space-4);background:var(--color-warning-light);border-radius:var(--radius-md);margin-bottom:var(--space-3);">
                    <div style="display:flex;align-items:center;gap:var(--space-2);margin-bottom:var(--space-2);">
                        <span style="font-size:18px;">🟡</span>
                        <span class="font-semibold" style="color:var(--color-warning);">Sedang — 72/100</span>
                    </div>
                    <div style="font-size:12px;color:var(--color-text-secondary);">
                        Produksi 54% • Vendor LED belum konfirmasi • Budget terpakai 76% • 5 invoice belum diunggah
                    </div>
                </div>
            </div>

            {{-- Task Terlambat --}}
            <div class="insight-section">
                <h4 class="insight-section-title">Task Terlambat</h4>
                <div class="insight-item">
                    <div class="insight-item-icon" style="background:var(--color-danger-light);color:var(--color-danger);">⏰</div>
                    <div class="insight-item-content">
                        <div class="insight-item-title">Pemetaan Logistik Venue</div>
                        <div class="insight-item-desc">Terlambat 3 hari • Logistik</div>
                    </div>
                </div>
                <div class="insight-item">
                    <div class="insight-item-icon" style="background:var(--color-danger-light);color:var(--color-danger);">⏰</div>
                    <div class="insight-item-content">
                        <div class="insight-item-title">Kontrak Sponsor Platinum</div>
                        <div class="insight-item-desc">Terlambat 1 hari • Sponsorship</div>
                    </div>
                </div>
            </div>

            {{-- Dokumen Belum Lengkap --}}
            <div class="insight-section">
                <h4 class="insight-section-title">Dokumen Belum Lengkap</h4>
                <div class="insight-item">
                    <div class="insight-item-icon" style="background:var(--color-info-light);color:var(--color-primary);">📄</div>
                    <div class="insight-item-content">
                        <div class="insight-item-title">Invoice Catering VIP</div>
                        <div class="insight-item-desc">Divisi Konsumsi</div>
                    </div>
                </div>
                <div class="insight-item">
                    <div class="insight-item-icon" style="background:var(--color-info-light);color:var(--color-primary);">📄</div>
                    <div class="insight-item-content">
                        <div class="insight-item-title">Izin Keramaian</div>
                        <div class="insight-item-desc">Divisi Perizinan</div>
                    </div>
                </div>
                <div class="insight-item">
                    <div class="insight-item-icon" style="background:var(--color-info-light);color:var(--color-primary);">📄</div>
                    <div class="insight-item-content">
                        <div class="insight-item-title">MoU Media Partner</div>
                        <div class="insight-item-desc">Divisi Media Partner</div>
                    </div>
                </div>
            </div>

            {{-- Rekomendasi AI --}}
            <div class="insight-section">
                <h4 class="insight-section-title">Rekomendasi AI</h4>
                <div style="padding:var(--space-3);background:var(--color-primary-light);border-radius:var(--radius-md);font-size:13px;color:var(--color-text);line-height:1.6;">
                    <p style="margin-bottom:var(--space-2);">📌 <strong>Finalisasi vendor LED</strong> — deadline kontrak besok</p>
                    <p style="margin-bottom:var(--space-2);">📌 <strong>Lengkapi 5 invoice</strong> — blocking realisasi anggaran</p>
                    <p style="margin-bottom:var(--space-2);">📌 <strong>Tambah PIC Produksi</strong> — workload melebihi kapasitas</p>
                    <p>📌 <strong>Kurangi anggaran dekorasi</strong> — selisih +Rp 3,2jt perlu revisi</p>
                </div>
            </div>
        </div>
    </div>

</x-layouts.app>
