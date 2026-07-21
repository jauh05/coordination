import re
import os

files = [
    'resources/views/auth/login.blade.php',
    'resources/views/auth/register.blade.php',
    'resources/views/pages/login.blade.php',
    'resources/views/pages/login-ketua.blade.php',
    'resources/views/pages/login-anggota.blade.php',
    'resources/views/pages/register.blade.php'
]

for file in files:
    if not os.path.exists(file):
        continue
    with open(file, 'r') as f:
        content = f.read()

    # Replace .glass-panel css
    content = re.sub(
        r'\.glass-panel\s*\{\s*background:\s*rgba\(255,\s*255,\s*255,\s*0\.85?\);\s*backdrop-filter:\s*blur\(24px\);\s*-webkit-backdrop-filter:\s*blur\(24px\);\s*border:\s*1px solid rgba\(226,\s*232,\s*240,\s*0\.6\);\s*box-shadow:\s*0 12px 40px rgba\(15,\s*23,\s*42,\s*0\.08\);\s*\}',
        '.glass-panel {\n            background: rgba(255, 255, 255, 0.4);\n            backdrop-filter: blur(24px);\n            -webkit-backdrop-filter: blur(24px);\n            border: 1px solid rgba(255, 255, 255, 0.5);\n            box-shadow: 0 12px 40px rgba(15, 23, 42, 0.08);\n        }',
        content
    )
    
    # Replace .glass-effect css (auth/register)
    content = re.sub(
        r'\.glass-effect\s*\{\s*backdrop-filter:\s*blur\(20px\);\s*background:\s*rgba\(255,\s*255,\s*255,\s*0\.8\);\s*\}',
        '.glass-effect {\n        backdrop-filter: blur(24px);\n        -webkit-backdrop-filter: blur(24px);\n        background: rgba(255, 255, 255, 0.4);\n        border: 1px solid rgba(255, 255, 255, 0.5);\n        box-shadow: 0 12px 40px rgba(15, 23, 42, 0.08);\n      }',
        content
    )
    
    # Replace bg-surface-card with glass-effect (auth/register)
    content = content.replace(
        '<div class="bg-surface-card p-stack-lg md:p-12 rounded-xl shadow-sm border border-border-subtle relative overflow-hidden">',
        '<div class="glass-effect p-stack-lg md:p-12 rounded-xl shadow-sm relative overflow-hidden">'
    )
    
    # Replace .glass-panel css (pages/register)
    content = re.sub(
        r'\.glass-panel\s*\{\s*background:\s*rgba\(255,\s*255,\s*255,\s*0\.8\);\s*backdrop-filter:\s*blur\(20px\);\s*border:\s*1px solid #e2e4e7;\s*\}',
        '.glass-panel {\n        backdrop-filter: blur(24px);\n        -webkit-backdrop-filter: blur(24px);\n        background: rgba(255, 255, 255, 0.4);\n        border: 1px solid rgba(255, 255, 255, 0.5);\n        box-shadow: 0 12px 40px rgba(15, 23, 42, 0.08);\n    }',
        content
    )

    with open(file, 'w') as f:
        f.write(content)
