<!DOCTYPE html>
<html class="light" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Flowvent | Enterprise Ops Login</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "tertiary-fixed": "#ffdbcd", background: "#faf8ff", primary: "#004ac6", "inverse-primary": "#b4c5ff", "surface-container-low": "#f2f3ff", "secondary-fixed-dim": "#4edea3", "outline-variant": "#c3c6d7", "surface-variant": "#dae2fd", "surface-dim": "#d2d9f4", "inverse-on-surface": "#eef0ff", "surface-container-highest": "#dae2fd", "secondary-container": "#6cf8bb", "primary-fixed-dim": "#b4c5ff", "surface-bright": "#faf8ff", "on-tertiary-fixed": "#360f00", "on-secondary-fixed": "#002113", "surface-container-lowest": "#ffffff", outline: "#737686", danger: "#EF4444", "border-subtle": "#E2E8F0", "inverse-surface": "#283044", "surface-container": "#eaedff", "on-surface": "#131b2e", "on-error": "#ffffff", "primary-fixed": "#dbe1ff", "on-background": "#131b2e", "on-surface-variant": "#434655", error: "#ba1a1a", tertiary: "#943700", secondary: "#006c49", "text-primary": "#0F172A", "on-secondary-fixed-variant": "#005236", "on-secondary": "#ffffff", "surface-tint": "#0053db", "on-primary-fixed": "#00174b", "text-secondary": "#64748B", "on-tertiary-container": "#ffede6", "secondary-fixed": "#6ffbbe", surface: "#faf8ff", "surface-container-high": "#e2e7ff", "on-secondary-container": "#00714d", "on-primary-container": "#eeefff", "error-container": "#ffdad6", "on-tertiary-fixed-variant": "#7d2d00", "primary-container": "#2563eb", "tertiary-fixed-dim": "#ffb596", success: "#22C55E", "on-primary-fixed-variant": "#003ea8", "on-tertiary": "#ffffff", warning: "#F59E0B", "on-error-container": "#93000a", "tertiary-container": "#bc4800", "on-primary": "#ffffff"
                    },
                    borderRadius: {DEFAULT: "0.25rem", lg: "0.5rem", xl: "0.75rem", full: "9999px"},
                    spacing: {"stack-sm": "8px", "stack-md": "16px", "container-max": "1440px", gutter: "24px", "sidebar-width": "260px", "margin-page": "32px", unit: "8px", "stack-lg": "24px"},
                    fontFamily: {"label-md": ["Inter"], "headline-md": ["Inter"], "label-sm": ["Inter"], "headline-lg": ["Inter"], "body-sm": ["Inter"], "headline-xl": ["Inter"], "body-md": ["Inter"], "body-lg": ["Inter"], headline: ["Inter"], display: ["Inter"], body: ["Inter"], label: ["Inter"]},
                    fontSize: {"label-md": ["12px", {lineHeight: "16px", letterSpacing: "0.05em", fontWeight: "600"}], "headline-md": ["20px", {lineHeight: "28px", fontWeight: "600"}], "label-sm": ["11px", {lineHeight: "14px", fontWeight: "500"}], "headline-lg": ["24px", {lineHeight: "32px", letterSpacing: "-0.01em", fontWeight: "600"}], "body-sm": ["13px", {lineHeight: "18px", fontWeight: "400"}], "headline-xl": ["36px", {lineHeight: "44px", letterSpacing: "-0.02em", fontWeight: "700"}], "body-md": ["14px", {lineHeight: "20px", fontWeight: "400"}], "body-lg": ["16px", {lineHeight: "24px", fontWeight: "400"}]}
                }
            }
        };
    </script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #F8FAFC;
        }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .login-card-shadow {
            box-shadow: 0px 1px 3px rgba(15, 23, 42, 0.08);
        }
        .focused-input:focus-within {
            ring: 2px solid #004ac6;
            ring-offset: 4px;
        }
    </style>
</head>
<body class="antialiased text-on-surface">
<div class="min-h-screen flex items-stretch overflow-hidden">
<!-- Left Side: Professional Illustration Canvas -->
<div class="hidden lg:flex lg:w-1/2 relative bg-primary items-center justify-center p-stack-lg">
<!-- Background Atmospheric Shader (Placeholder) -->
<div class="absolute inset-0 opacity-40 pointer-events-none">
<!-- No shader provided in prompt, using a stylized gradient/image instead -->
<div class="absolute inset-0 bg-gradient-to-br from-primary to-on-primary-fixed-variant"></div>
</div>
<div class="relative z-10 max-w-lg w-full text-center">
<div class="mb-stack-lg inline-flex p-4 bg-white/10 backdrop-blur-xl rounded-2xl border border-white/20">
<img class="w-full h-auto rounded-xl shadow-2xl" data-alt="A futuristic, minimalist 3D rendering of an abstract event structural grid with floating nodes and glowing connections. The lighting is crisp and corporate, using a palette of deep royal blue and brilliant white. The composition conveys precision, scalability, and operational harmony within a professional software context. The style is clean and high-fidelity, typical of a top-tier enterprise platform." src="https://lh3.googleusercontent.com/aida-public/AB6AXuC_arYArHWskIE0TfYIvZNP8tUA0vcSCeDiViAZHBdILc70FM7RQ-QMjpnT_BTSMYImpX4-Bnk0a5XofpYvuTO2P52KmSxh1KylYfXyWPvD1ZRiTl78sgDhWNnRv9Bh6x7t7TJrG08Naqxjvk3mQhIKyaQcxG7U35jKlgTxSrW0NUpz7AKp7m1IIPjeUuOJzTF6akzweZh8v13kRky-xZY9t_pSKJI-k3LA0yifavGAbHTAC_PdKpSBlt_pS8nkQEyXysPFeqSjTjc"/>
</div>
<h1 class="font-headline-xl text-headline-xl text-white mb-stack-sm">Precision in Every Plan.</h1>
<p class="font-body-lg text-body-lg text-primary-fixed opacity-90 px-stack-md">
                    Empowering event operations with seamless logistics, real-time tracking, and enterprise-grade collaboration tools.
                </p>
<!-- Floating Stats Mini-Cards -->
<div class="mt-12 flex gap-4 justify-center">
<div class="bg-white/10 backdrop-blur-md border border-white/10 p-4 rounded-xl text-left flex items-center gap-3">
<div class="w-10 h-10 rounded-full bg-secondary-container flex items-center justify-center text-on-secondary-container">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">event_available</span>
</div>
<div>
<div class="font-label-md text-label-md text-white">Events Managed</div>
<div class="font-headline-md text-headline-md text-white">12.4k+</div>
</div>
</div>
<div class="bg-white/10 backdrop-blur-md border border-white/10 p-4 rounded-xl text-left flex items-center gap-3">
<div class="w-10 h-10 rounded-full bg-primary-fixed flex items-center justify-center text-on-primary-fixed">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">groups</span>
</div>
<div>
<div class="font-label-md text-label-md text-white">Active Users</div>
<div class="font-headline-md text-headline-md text-white">850k</div>
</div>
</div>
</div>
</div>
<!-- Branding Logo Overlay -->
<div class="absolute top-margin-page left-margin-page flex items-center gap-2">
<div class="w-8 h-8 bg-white rounded-lg flex items-center justify-center">
<span class="material-symbols-outlined text-primary font-bold">bolt</span>
</div>
<span class="font-headline-md text-headline-md text-white tracking-tight">Flowvent</span>
</div>
</div>
<!-- Right Side: Login Form -->
<div class="w-full lg:w-1/2 bg-background flex items-center justify-center p-stack-lg sm:p-12 md:p-24">
<div class="max-w-md w-full">
<!-- Mobile Branding -->
<div class="lg:hidden flex items-center gap-2 mb-12 justify-center">
<div class="w-10 h-10 bg-primary rounded-lg flex items-center justify-center">
<span class="material-symbols-outlined text-white font-bold">bolt</span>
</div>
<span class="font-headline-lg text-headline-lg text-on-surface tracking-tight">Flowvent</span>
</div>
<div class="mb-10 text-center lg:text-left">
<h2 class="font-headline-lg text-headline-lg text-on-surface mb-2">Welcome Back</h2>
<p class="font-body-md text-body-md text-text-secondary">Please enter your details to access your workspace.</p>
</div>
<form class="space-y-stack-lg" method="POST" action="{{ route('login') }}">
@csrf
<!-- Email Field -->
<div class="space-y-2">
<label class="font-body-sm text-body-sm font-bold text-on-surface-variant block" for="email">Email Address</label>
<div class="relative group">
<div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-outline">
<span class="material-symbols-outlined text-[20px]">mail</span>
</div>
<input class="w-full pl-10 pr-4 py-3 bg-surface border border-border-subtle rounded-lg font-body-md text-body-md text-on-surface placeholder:text-outline/50 focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all shadow-sm" id="email" name="email" placeholder="name@company.com" type="email" value="{{ old('email') }}" required autofocus/>
</div>
@error('email')
<p class="text-xs mt-1" style="color: #ba1a1a;">{{ $message }}</p>
@enderror
</div>
<!-- Password Field -->
<div class="space-y-2">
<div class="flex justify-between items-center">
<label class="font-body-sm text-body-sm font-bold text-on-surface-variant block" for="password">Password</label>
<a class="font-label-md text-label-md text-primary hover:underline transition-all" href="#">Forgot password?</a>
</div>
<div class="relative group">
<div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-outline">
<span class="material-symbols-outlined text-[20px]">lock</span>
</div>
<input class="w-full pl-10 pr-10 py-3 bg-surface border border-border-subtle rounded-lg font-body-md text-body-md text-on-surface placeholder:text-outline/50 focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all shadow-sm" id="password" name="password" placeholder="••••••••" type="password" required/>
<button class="absolute inset-y-0 right-0 pr-3 flex items-center text-outline hover:text-on-surface transition-colors" type="button">
<span class="material-symbols-outlined text-[20px]">visibility</span>
</button>
</div>
@error('password')
<p class="text-xs mt-1" style="color: #ba1a1a;">{{ $message }}</p>
@enderror
</div>
<!-- Remember Me -->
<div class="flex items-center">
<input class="h-4 w-4 text-primary focus:ring-primary border-border-subtle rounded cursor-pointer" id="remember-me" name="remember" type="checkbox"/>
<label class="ml-2 block font-body-sm text-body-sm text-text-secondary cursor-pointer" for="remember-me">
                            Remember me for 30 days
                        </label>
</div>
<!-- Login Button -->
<button class="w-full py-3.5 px-4 bg-primary text-white font-semibold rounded-lg shadow-sm hover:bg-primary/90 focus:outline-none focus:ring-4 focus:ring-primary/10 active:scale-[0.99] transition-all flex items-center justify-center gap-2" type="submit">
                        Log In
                        <span class="material-symbols-outlined text-[18px]">login</span>
</button>
<!-- Divider -->
<div class="relative py-4">
<div class="absolute inset-0 flex items-center">
<div class="w-full border-t border-border-subtle"></div>
</div>
<div class="relative flex justify-center text-label-md uppercase">
<span class="bg-background px-4 text-outline font-medium tracking-widest">Or continue with</span>
</div>
</div>
<!-- Social Logins -->
<div class="grid grid-cols-2 gap-stack-md">
<button class="flex items-center justify-center gap-2 py-3 px-4 bg-surface border border-border-subtle rounded-lg font-label-md text-on-surface hover:bg-surface-container-low transition-colors active:scale-[0.98]" type="button">
<svg class="w-5 h-5" viewbox="0 0 24 24">
<path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"></path>
<path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"></path>
<path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l3.66-2.84z" fill="#FBBC05"></path>
<path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"></path>
</svg>
                            Google
                        </button>
<button class="flex items-center justify-center gap-2 py-3 px-4 bg-surface border border-border-subtle rounded-lg font-label-md text-on-surface hover:bg-surface-container-low transition-colors active:scale-[0.98]" type="button">
<span class="material-symbols-outlined text-[20px] text-primary">key</span>
                            SSO
                        </button>
</div>
</form>
<!-- Footer Links -->
<div class="mt-12 text-center">
<p class="font-body-sm text-body-sm text-text-secondary">
                        Don't have an account? 
                        <a class="text-primary font-bold hover:underline" href="{{ route('register') }}">Request access</a>
</p>
<div class="mt-8 flex justify-center gap-6 opacity-60">
<a class="font-label-sm text-label-sm hover:text-on-surface transition-colors" href="#">Privacy Policy</a>
<a class="font-label-sm text-label-sm hover:text-on-surface transition-colors" href="#">Terms of Service</a>
<a class="font-label-sm text-label-sm hover:text-on-surface transition-colors" href="#">Support</a>
</div>
</div>
</div>
</div>
</div>
<!-- Micro-interaction for input fields -->
<script>
        document.querySelectorAll('input').forEach(input => {
            input.addEventListener('focus', () => {
                input.closest('.group')?.querySelector('.material-symbols-outlined')?.classList.add('text-primary');
            });
            input.addEventListener('blur', () => {
                input.closest('.group')?.querySelector('.material-symbols-outlined')?.classList.remove('text-primary');
            });
        });
        
        // Simple eye toggle logic
        const togglePass = document.querySelector('button[type="button"] .material-symbols-outlined');
        const passInput = document.getElementById('password');
        if(togglePass && passInput) {
            togglePass.parentElement.addEventListener('click', () => {
                const isPass = passInput.type === 'password';
                passInput.type = isPass ? 'text' : 'password';
                togglePass.textContent = isPass ? 'visibility_off' : 'visibility';
            });
        }
    </script>
</body>
</html>
