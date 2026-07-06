#!/bin/bash
set -e
cd /Users/mac/Desktop/github_proyek/coordination/coordination-app

FILE="resources/views/dashboard/index.blade.php"

# Array of sed replacements and commit messages
declare -a SEDS
declare -a MSGS

# 8. Preparation Phase -> Fase Persiapan
SEDS+=("s/Preparation Phase/Fase Persiapan/g")
MSGS+=("fix: translate Preparation Phase to Fase Persiapan")

# 9. Event Roadmap -> Peta Jalan Event
SEDS+=("s/>Event Roadmap</>Peta Jalan Event</g")
MSGS+=("fix: translate Event Roadmap to Peta Jalan Event")

# 10. Concept -> Konsep
SEDS+=("s/>Concept</>Konsep</g")
MSGS+=("fix: translate Concept to Konsep in timeline")

# 11. Sponsorship -> Sponsorship (keep) but translate Selesai already done, translate Preparation
SEDS+=("s/>Preparation</>Persiapan</g")
MSGS+=("fix: translate Preparation to Persiapan in timeline")

# 12. Production -> Produksi in timeline
SEDS+=("s/>Production</>Produksi</g")
MSGS+=("fix: translate Production to Produksi in timeline")

# 13. Execution -> Eksekusi
SEDS+=("s/>Execution</>Eksekusi</g")
MSGS+=("fix: translate Execution to Eksekusi in timeline")

# 14. H-18 Now -> H-18 Sekarang
SEDS+=("s/H-18 Now/H-18 Sekarang/g")
MSGS+=("fix: translate H-18 Now to H-18 Sekarang")

# 15. Risk Matrix Summary -> Ringkasan Matriks Risiko
SEDS+=("s/>Risk Matrix Summary</>Ringkasan Matriks Risiko</g")
MSGS+=("fix: translate Risk Matrix Summary")

# 16. Budget Overshoot -> Pembengkakan Anggaran
SEDS+=("s/>Budget Overshoot</>Pembengkakan Anggaran</g")
MSGS+=("fix: translate Budget Overshoot to Pembengkakan Anggaran")

# 17. Probability -> Probabilitas
SEDS+=("s/Probability:/Probabilitas:/g")
MSGS+=("fix: translate Probability to Probabilitas")

# 18. Vendor Timeline -> Timeline Vendor
SEDS+=("s/>Vendor Timeline</>Timeline Vendor</g")
MSGS+=("fix: translate Vendor Timeline")

# 19. Cuaca (Rain Plan) -> already Indonesian, skip. Budget Visualization -> Visualisasi Anggaran
SEDS+=("s/>Budget Visualization</>Visualisasi Anggaran</g")
MSGS+=("fix: translate Budget Visualization to Visualisasi Anggaran")

# 20. Actual vs Planned -> Aktual vs Rencana
SEDS+=("s/Actual vs Planned/Aktual vs Rencana/g")
MSGS+=("fix: translate Actual vs Planned to Aktual vs Rencana")

# 21. Activity Feed -> Aktivitas Terkini
SEDS+=("s/>Activity Feed</>Aktivitas Terkini</g")
MSGS+=("fix: translate Activity Feed to Aktivitas Terkini")

# 22. Upcoming Schedule -> Jadwal Mendatang
SEDS+=("s/>Upcoming Schedule</>Jadwal Mendatang</g")
MSGS+=("fix: translate Upcoming Schedule to Jadwal Mendatang")

# 23. Knowledge Base -> Basis Pengetahuan
SEDS+=("s/>Knowledge Base</>Basis Pengetahuan</g")
MSGS+=("fix: translate Knowledge Base to Basis Pengetahuan")

# 24. Lessons Learned -> Pelajaran Terambil
SEDS+=("s/>Lessons Learned</>Pelajaran Terambil</g")
MSGS+=("fix: translate Lessons Learned")

# 25. Resource Library -> Perpustakaan Sumber Daya
SEDS+=("s/>Resource Library</>Perpustakaan Sumber Daya</g")
MSGS+=("fix: translate Resource Library")

# 26. System Online -> Sistem Online
SEDS+=("s/System Online/Sistem Online/g")
MSGS+=("fix: translate System Online to Sistem Online")

# 27. 3 Alerts -> 3 Peringatan
SEDS+=("s/>3 Alerts</>3 Peringatan</g")
MSGS+=("fix: translate 3 Alerts to 3 Peringatan")

# 28. AI Insights -> Wawasan AI
SEDS+=("s/>AI Insights</>Wawasan AI</g")
MSGS+=("fix: translate AI Insights to Wawasan AI")

# 29. Mission Briefing Hari Ini -> keep
# 30. Contract -> Kontrak
SEDS+=("s/>Contract</>Kontrak</g")
MSGS+=("fix: translate Contract to Kontrak in approval")

# 31. LOW -> RENDAH
SEDS+=("s/>LOW</>RENDAH</g")
MSGS+=("fix: translate LOW to RENDAH")

# 32. HIGH -> TINGGI
SEDS+=("s/>HIGH</>TINGGI</g")
MSGS+=("fix: translate HIGH to TINGGI")

# 33. MEDIUM -> SEDANG
SEDS+=("s/>MEDIUM</>SEDANG</g")
MSGS+=("fix: translate MEDIUM to SEDANG")

# 34. Fix tertiary-container color issues - change from orange tint border to primary
SEDS+=("s/border-tertiary-container\/30/border-outline-variant\/30/g")
MSGS+=("fix: remove tertiary-container border color clash")

# 35. Fix tertiary text color for readability
SEDS+=("s/text-tertiary bg-tertiary\/10/text-amber-700 bg-amber-100/g")
MSGS+=("fix: improve Logistik badge color for readability")

# 36. Fix tertiary/10 bg for button icons  
SEDS+=("s/bg-tertiary-container\/10/bg-amber-50/g")
MSGS+=("fix: change tertiary container background to amber")

# 37. Fix tertiary icon color
SEDS+=("s/text-tertiary group-hover/text-amber-700 group-hover/g")
MSGS+=("fix: improve tertiary icon color for upload button")

# 38. Fix bar chart tertiary color
SEDS+=("s/bg-tertiary w-\[88%\]/bg-amber-500 w-[88%]/g")
MSGS+=("fix: change Logistik bar color to amber")

# 39. Fix secondary-container/30 bg
SEDS+=("s/bg-secondary-container\/30/bg-emerald-100/g")
MSGS+=("fix: change secondary-container to emerald for invoice button")

# 40. Fix on-secondary-container text
SEDS+=("s/text-on-secondary-container group-hover/text-emerald-700 group-hover/g")
MSGS+=("fix: improve secondary container icon color")

# 41. Fix error/10 bg for Sponsor card
SEDS+=("s/text-error bg-error\/10/text-red-600 bg-red-50/g")
MSGS+=("fix: improve Sponsor badge colors")

# 42. Fix secondary bg/10 in Marketing card
SEDS+=("s/text-secondary bg-secondary\/10/text-emerald-700 bg-emerald-100/g")
MSGS+=("fix: improve Marketing badge colors")

# 43. Fix primary/10 for Produksi card
SEDS+=("s/text-primary bg-primary\/10/text-blue-700 bg-blue-50/g")
MSGS+=("fix: improve Produksi badge colors")

# 44. Fix primary-container/20 bg for button
SEDS+=("s/bg-primary-container\/20/bg-blue-50/g")
MSGS+=("fix: change primary-container bg for Add Vendor button")

# 45. Fix error-container/20 bg
SEDS+=("s/bg-error-container\/20/bg-red-50/g")
MSGS+=("fix: change error-container bg to red-50")

# 46. Fix on-error-container text color
SEDS+=("s/text-on-error-container/text-red-800/g")
MSGS+=("fix: change on-error-container text to red-800")

# 47. Fix error/10 border
SEDS+=("s/border-error\/10/border-red-200/g")
MSGS+=("fix: change error border to red-200")

# 48. Fix tertiary/10 bg for AI icon
SEDS+=("s/bg-tertiary\/10/bg-amber-50/g")
MSGS+=("fix: change tertiary bg to amber-50 for icon")

# 49. Fix text-tertiary for lightbulb icon
SEDS+=("s/text-tertiary\">lightbulb/text-amber-600\">lightbulb/g")
MSGS+=("fix: change tertiary text color for lightbulb icon")

# 50. Fix primary-container/10 hover
SEDS+=("s/bg-primary-container\/10/bg-blue-50/g")
MSGS+=("fix: change primary-container hover bg to blue-50")

# 51. Fix primary/20 border for button
SEDS+=("s/border-primary\/20/border-blue-200/g")
MSGS+=("fix: change primary border to blue-200")

# 52. Fix surface-container-high bg for progress bar
SEDS+=("s/bg-surface-container-high rounded-full ring/bg-slate-200 rounded-full ring/g")
MSGS+=("fix: change timeline dot inactive color to slate-200")

# 53. Fix secondary text in timeline caption
SEDS+=("s/text-secondary\">Selesai/text-emerald-600\">Selesai/g")
MSGS+=("fix: change Selesai caption color to emerald-600")

# 54. Translate Global Progress -> Progress Global already there, skip. Input Invoice -> Input Invoice (keep)
# 55. Fix on-surface-variant text colors for better contrast
SEDS+=("s/v2\.4\.1 MISSION_STABLE/v2.4.1 STABIL/g")
MSGS+=("fix: translate MISSION_STABLE to STABIL")

# Now do sidebar file fixes
SIDEBAR="resources/views/components/sidebar.blade.php"

# 56. Fix sidebar icon gradient  
SEDS+=("s_bg-primary rounded-xl flex items-center justify-center text-on-primary_bg-gradient-to-tr from-primary to-blue-400 rounded-xl flex items-center justify-center text-white shadow-md_g")
MSGS+=("fix: add gradient to sidebar logo icon")

# Execute all
for i in "${!SEDS[@]}"; do
    # Try dashboard file first
    if [[ "${SEDS[$i]}" == *"$SIDEBAR"* ]] || [[ $i -ge 55 && $i -le 55 ]]; then
        sed -i '' "${SEDS[$i]}" "$SIDEBAR" 2>/dev/null || true
    else
        sed -i '' "${SEDS[$i]}" "$FILE" 2>/dev/null || true
    fi
    git add .
    git commit -m "${MSGS[$i]}" 2>/dev/null || echo "No changes for: ${MSGS[$i]}"
    git push 2>/dev/null || echo "Push failed for: ${MSGS[$i]}"
    echo "Done: ${MSGS[$i]}"
done

echo "=== ALL DONE ==="
