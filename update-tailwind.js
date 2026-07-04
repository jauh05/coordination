const fs = require('fs');

const appBladePath = 'resources/views/components/layouts/app.blade.php';
let content = fs.readFileSync(appBladePath, 'utf8');

const regex = /tailwind\.config = \{[\s\S]*?\};\s*<\/script>/;

const newConfig = `tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "tertiary-fixed": "#ffdbcd", background: "#faf8ff", primary: "#004ac6", "inverse-primary": "#b4c5ff", "surface-container-low": "#f2f3ff", "secondary-fixed-dim": "#4edea3", "outline-variant": "#c3c6d7", "surface-variant": "#dae2fd", "surface-dim": "#d2d9f4", "inverse-on-surface": "#eef0ff", "surface-container-highest": "#dae2fd", "secondary-container": "#6cf8bb", "primary-fixed-dim": "#b4c5ff", "surface-bright": "#faf8ff", "on-tertiary-fixed": "#360f00", "on-secondary-fixed": "#002113", "surface-container-lowest": "#ffffff", outline: "#737686", danger: "#EF4444", "border-subtle": "#E2E8F0", "inverse-surface": "#283044", "surface-container": "#eaedff", "on-surface": "#131b2e", "on-error": "#ffffff", "primary-fixed": "#dbe1ff", "on-background": "#131b2e", "on-surface-variant": "#434655", error: "#ba1a1a", tertiary: "#943700", secondary: "#006c49", "text-primary": "#0F172A", "on-secondary-fixed-variant": "#005236", "on-secondary": "#ffffff", "surface-tint": "#0053db", "on-primary-fixed": "#00174b", "text-secondary": "#64748B", "on-tertiary-container": "#ffede6", "secondary-fixed": "#6ffbbe", surface: "#faf8ff", "surface-container-high": "#e2e7ff", "on-secondary-container": "#00714d", "on-primary-container": "#eeefff", "error-container": "#ffdad6", "on-tertiary-fixed-variant": "#7d2d00", "primary-container": "#2563eb", "tertiary-fixed-dim": "#ffb596", success: "#22C55E", "on-primary-fixed-variant": "#003ea8", "on-tertiary": "#ffffff", warning: "#F59E0B", "on-error-container": "#93000a", "tertiary-container": "#bc4800"
                    },
                    borderRadius: {DEFAULT: "0.25rem", lg: "0.5rem", xl: "0.75rem", full: "9999px"},
                    spacing: {
                        "stack-sm": "8px", "stack-md": "16px", "container-max": "1440px", gutter: "24px", "sidebar-width": "260px", "margin-page": "32px", unit: "8px", "stack-lg": "24px",
                        "xs": "4px", "sm": "8px", "margin": "32px", "xl": "32px", "lg": "24px", "xxl": "48px", "md": "16px"
                    },
                    fontFamily: {
                        "label-md": ["Inter"], "headline-md": ["Inter"], "label-sm": ["Inter"], "headline-lg": ["Inter"], "body-sm": ["Inter"], "headline-xl": ["Inter"], "body-md": ["Inter"], "body-lg": ["Inter"], headline: ["Inter"], display: ["Inter"], body: ["Inter"], label: ["Inter"],
                        "headline-lg-mobile": ["Inter"], "title-md": ["Inter"], "headline-sm": ["Inter"], "display-lg": ["Inter"], "caption": ["Inter"]
                    },
                    fontSize: {
                        "label-md": ["12px", {lineHeight: "16px", letterSpacing: "0.05em", fontWeight: "600"}], 
                        "headline-md": ["20px", {lineHeight: "28px", fontWeight: "600"}], 
                        "label-sm": ["11px", {lineHeight: "14px", fontWeight: "500"}], 
                        "headline-lg": ["24px", {lineHeight: "32px", letterSpacing: "-0.01em", fontWeight: "600"}], 
                        "body-sm": ["13px", {lineHeight: "18px", fontWeight: "400"}], 
                        "headline-xl": ["36px", {lineHeight: "44px", letterSpacing: "-0.02em", fontWeight: "700"}], 
                        "body-md": ["14px", {lineHeight: "20px", fontWeight: "400"}], 
                        "body-lg": ["16px", {lineHeight: "24px", fontWeight: "400"}],
                        "headline-lg-mobile": ["24px", {"lineHeight": "32px", "letterSpacing": "-0.01em", "fontWeight": "700"}],
                        "title-md": ["16px", {"lineHeight": "24px", "fontWeight": "600"}],
                        "headline-sm": ["20px", {"lineHeight": "28px", "fontWeight": "600"}],
                        "display-lg": ["48px", {"lineHeight": "56px", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                        "caption": ["12px", {"lineHeight": "16px", "fontWeight": "400"}]
                    }
                }
            }
        };
    </script>`;

content = content.replace(regex, newConfig);
fs.writeFileSync(appBladePath, content);
