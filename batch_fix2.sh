#!/bin/bash
set -e
cd /Users/mac/Desktop/github_proyek/coordination/coordination-app

DASH="resources/views/dashboard/index.blade.php"
SIDEBAR="resources/views/components/sidebar.blade.php"
LAYOUT="resources/views/components/layouts/app.blade.php"

do_commit_push() {
    git add .
    git commit -m "$1" 2>/dev/null && git push 2>/dev/null && echo "OK: $1" || echo "SKIP: $1"
}

# 57. Fix sidebar brand text to use gradient like landing page
sed -i '' 's|<h1 class="font-headline-lg text-headline-lg font-bold text-primary">Coordination</h1>|<h1 class="font-headline-lg text-headline-lg font-bold bg-clip-text text-transparent bg-gradient-to-r from-primary to-blue-600">Coordination</h1>|g' "$SIDEBAR"
do_commit_push "fix: add gradient text to sidebar Coordination brand"

# 58. Change sidebar subtitle
sed -i '' 's|Operasi Enterprise|Event Coordination|g' "$SIDEBAR"
do_commit_push "fix: change sidebar subtitle to Event Coordination"

# 59. Fix sidebar icon to hub matching landing
sed -i '' 's|>corporate_fare</span>|>hub</span>|' "$SIDEBAR"
do_commit_push "fix: change sidebar icon to hub matching landing"

# 60. Fix secondary color in timeline for better contrast
sed -i '' 's|text-emerald-600">Selesai|text-green-600 font-semibold">Selesai|g' "$DASH"
do_commit_push "fix: improve Selesai text weight in timeline"

# 61. Fix the text-primary for current timeline step
sed -i '' 's|text-primary">H-18 Sekarang|text-blue-600 font-semibold">H-18 Sekarang|g' "$DASH"
do_commit_push "fix: improve H-18 Sekarang text styling"

# 62. Translate Lihat Detail Event button already in Indonesian, add icon
sed -i '' "s|>Lihat Detail Event</a>|><span class=\"material-symbols-outlined text-\[16px\]\">visibility</span> Lihat Detail Event</a>|g" "$DASH"
do_commit_push "fix: add icon to Lihat Detail Event button"

# 63. Add icon to Buka Workspace button
sed -i '' "s|>Buka Workspace</a>|><span class=\"material-symbols-outlined text-\[16px\]\">workspaces</span> Buka Workspace</a>|g" "$DASH"
do_commit_push "fix: add icon to Buka Workspace button"

# 64. Fix the hero-gradient to be more vibrant
sed -i '' 's|hero-gradient { background: linear-gradient(135deg, #004ac6 0%, #2563eb 100%); }|hero-gradient { background: linear-gradient(135deg, #003594 0%, #004ac6 40%, #2563eb 100%); }|g' "$LAYOUT"
do_commit_push "fix: improve hero gradient with deeper blue"

# 65. Change glass-panel to have slight blue tint
sed -i '' 's|background: rgba(255, 255, 255, 0.7);|background: rgba(255, 255, 255, 0.85);|g' "$LAYOUT"
do_commit_push "fix: increase glass-panel opacity for readability"

# 66. Translate Buka Kalender Penuh - already Indonesian. Fix Zoom to Online
sed -i '' 's|>Zoom<|>Online<|g' "$DASH"
do_commit_push "fix: change Zoom to Online in schedule"

# 67. Translate On-Site to Langsung
sed -i '' 's|>On-Site<|>Langsung<|g' "$DASH"
do_commit_push "fix: translate On-Site to Langsung"

# 68. Translate Review Media Plan
sed -i '' 's|Review Media Plan (WPP)|Review Rencana Media (WPP)|g' "$DASH"
do_commit_push "fix: translate Review Media Plan"

# 69. Translate Site Visit
sed -i '' 's|Site Visit: GBK Stadium|Kunjungan Lokasi: GBK Stadium|g' "$DASH"
do_commit_push "fix: translate Site Visit to Kunjungan Lokasi"

# 70. Translate Lihat Semua Rekomendasi already Indo. Fix AI description
sed -i '' 's|>Vendor LED Belum Terkonfirmasi|>Vendor LED Belum Dikonfirmasi|g' "$DASH"
do_commit_push "fix: improve vendor LED warning text"

# 71. Fix the secondary caption color
sed -i '' 's|text-caption text-secondary uppercase|text-caption text-green-600 uppercase|g' "$DASH"
do_commit_push "fix: change secondary caption to green-600"

# 72. Fix secondary bg for animate-pulse indicator
sed -i '' 's|bg-secondary rounded-full animate-pulse|bg-green-500 rounded-full animate-pulse|g' "$DASH"
do_commit_push "fix: change system indicator to green-500"

# 73. Fix error bar color in Sponsor card
sed -i '' 's|bg-error w-\[72%\]|bg-red-500 w-[72%]|g' "$DASH"
do_commit_push "fix: change Sponsor bar color to red-500"

# 74. Fix secondary bar in Marketing card  
sed -i '' 's|bg-secondary w-\[94%\]|bg-emerald-500 w-[94%]|g' "$DASH"
do_commit_push "fix: change Marketing bar color to emerald-500"

# 75. Fix tertiary activity feed icon
sed -i '' 's|bg-tertiary flex items-center justify-center text-white ring-4|bg-amber-500 flex items-center justify-center text-white ring-4|g' "$DASH"
do_commit_push "fix: change activity feed upload icon to amber-500"

# 76. Fix secondary activity feed icon  
sed -i '' 's|bg-secondary flex items-center justify-center text-white ring-4|bg-emerald-500 flex items-center justify-center text-white ring-4|g' "$DASH"
do_commit_push "fix: change activity feed meeting icon to emerald-500"

# 77. Fix error bar indicator color
sed -i '' 's|bg-error rounded-full shadow|bg-red-500 rounded-full shadow|g' "$DASH"
do_commit_push "fix: change risk indicator to red-500"

# 78. Fix secondary bar indicator for low risk
sed -i '' 's|w-2 h-10 bg-secondary rounded-full|w-2 h-10 bg-emerald-500 rounded-full|g' "$DASH"
do_commit_push "fix: change low risk indicator to emerald-500"

# 79. Fix secondary text for RENDAH
sed -i '' 's|text-secondary">RENDAH|text-emerald-600">RENDAH|g' "$DASH"
do_commit_push "fix: change RENDAH text color to emerald-600"

# 80. Fix error text for TINGGI
sed -i '' 's|text-error">TINGGI|text-red-600">TINGGI|g' "$DASH"
do_commit_push "fix: change TINGGI text color to red-600"

# 81. Fix error text for Sponsor score
sed -i '' 's|text-error">72%|text-red-600 font-bold">72%|g' "$DASH"
do_commit_push "fix: improve Sponsor score color"

# 82. Fix the primary/10 bg for AI insight icon
sed -i '' 's|bg-primary/10 flex items-center justify-center text-primary|bg-blue-50 flex items-center justify-center text-blue-600|g' "$DASH"
do_commit_push "fix: improve AI icon background and color"

# 83. Add hover effect to approval cards
sed -i '' 's|hover:border-primary/30 transition-all cursor-pointer block|hover:border-blue-300 hover:shadow-md transition-all cursor-pointer block|g' "$DASH"
do_commit_push "fix: improve approval card hover effects"

# 84. Fix outline text for time
sed -i '' 's|text-caption text-outline mt-1 italic|text-caption text-slate-400 mt-1 italic|g' "$DASH"
do_commit_push "fix: change time text color to slate-400"

# 85. Improve the primary button active state
sed -i '' 's|bg-primary text-on-primary py-3 px-4 rounded-xl|bg-gradient-to-r from-primary to-blue-500 text-white py-3 px-4 rounded-xl|g' "$SIDEBAR"
do_commit_push "fix: add gradient to sidebar Event Baru button"

# 86. Translate Support in footer
sed -i '' 's|>Support<|>Bantuan<|g' "$DASH"
do_commit_push "fix: translate Support to Bantuan in footer"

# 87. Add on-primary to sidebar brand text background
sed -i '' 's|text-label-md font-bold text-secondary tracking-widest|text-label-md font-bold text-emerald-600 tracking-widest|g' "$DASH"
do_commit_push "fix: change AMAN badge color to emerald-600"

# 88. Fix display-lg color for health gauge
sed -i '' 's|text-display-lg font-display-lg text-on-surface leading-none|text-display-lg font-display-lg text-slate-800 leading-none|g' "$DASH"
do_commit_push "fix: improve health gauge number color"

# 89. Fix on-surface-variant text in health breakdown
sed -i '' 's|text-caption font-caption text-on-surface-variant">Timeline|text-caption font-caption text-slate-500">Timeline|g' "$DASH"
do_commit_push "fix: improve Timeline label color in health gauge"

# 90. Fix Budget label color
sed -i '' 's|text-caption font-caption text-on-surface-variant">Budget|text-caption font-caption text-slate-500">Budget|g' "$DASH"
do_commit_push "fix: improve Budget label color in health gauge"

# 91. Fix Produksi label color
sed -i '' 's|text-caption font-caption text-on-surface-variant">Produksi</span>|text-caption font-caption text-slate-500">Produksi</span>|g' "$DASH"
do_commit_push "fix: improve Produksi label color in health gauge"

# 92. Fix Sponsor label color in gauge
sed -i '' 's|text-caption font-caption text-on-surface-variant">Sponsor</span><span class="text-label-md font-bold text-error|text-caption font-caption text-slate-500">Sponsor</span><span class="text-label-md font-bold text-red-600|g' "$DASH"
do_commit_push "fix: improve Sponsor label and score color in gauge"

# 93. Fix Vendor label color
sed -i '' 's|text-caption font-caption text-on-surface-variant">Vendor</span>|text-caption font-caption text-slate-500">Vendor</span>|g' "$DASH"
do_commit_push "fix: improve Vendor label color in health gauge"

# 94. Fix SDM label color
sed -i '' 's|text-caption font-caption text-on-surface-variant">SDM</span>|text-caption font-caption text-slate-500">SDM</span>|g' "$DASH"
do_commit_push "fix: improve SDM label color in health gauge"

# 95. Translate Hari Ini already Indonesian. Fix label-md text for descriptions
sed -i '' 's|text-on-surface-variant">Panggung utama|text-slate-500">Panggung utama|g' "$DASH"
do_commit_push "fix: improve Produksi description text color"

# 96. Fix Marketing description color
sed -i '' 's|text-on-surface-variant">Tiket Early Bird|text-slate-500">Tiket Early Bird|g' "$DASH"
do_commit_push "fix: improve Marketing description text color"

# 97. Fix Sponsor description color
sed -i '' 's|text-on-surface-variant">Menunggu kontrak|text-slate-500">Menunggu kontrak|g' "$DASH"
do_commit_push "fix: improve Sponsor description text color"

# 98. Fix Logistik description color
sed -i '' 's|text-on-surface-variant">Catering final|text-slate-500">Catering final|g' "$DASH"
do_commit_push "fix: improve Logistik description text color"

# 99. Fix the AI warning description color
sed -i '' 's|text-caption text-on-surface-variant mt-1">Estimasi|text-caption text-slate-500 mt-1">Estimasi|g' "$DASH"
do_commit_push "fix: improve AI warning description text color"

# 100. Fix the AI recommendation description color
sed -i '' 's|text-caption text-on-surface-variant mt-1">AI menyarankan|text-caption text-slate-500 mt-1">AI menyarankan|g' "$DASH"
do_commit_push "fix: improve AI recommendation text color"

# 101. Clean up batch script
rm -f batch_fix.sh batch_fix2.sh
git add .
git commit -m "chore: remove batch fix scripts" && git push && echo "OK: cleanup" || echo "SKIP: cleanup"

echo "=== BATCH 2 DONE ==="
