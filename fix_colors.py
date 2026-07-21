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

    # Change text colors
    content = content.replace('text-text-secondary', 'text-black')
    content = content.replace('text-on-surface-variant', 'text-black')
    content = content.replace('text-slate-800/80', 'text-black')
    content = content.replace('text-slate-700', 'text-black')
    content = content.replace('text-slate-500', 'text-black')
    
    # Remove shadow on register/login cards
    content = content.replace('box-shadow: 0 12px 40px rgba(15, 23, 42, 0.08);', 'box-shadow: none;')
    content = content.replace('border: 1px solid rgba(255, 255, 255, 0.5);', 'border: none;')
    content = content.replace('shadow-sm', '')

    with open(file, 'w') as f:
        f.write(content)
