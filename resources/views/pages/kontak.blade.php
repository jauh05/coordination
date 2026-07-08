<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak - Coordination</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-blue-50 text-slate-800 flex flex-col min-h-screen">
    <header class="w-full bg-blue-600 text-white p-6 shadow-md">
        <div class="max-w-6xl mx-auto flex justify-between items-center">
            <h1 class="text-2xl font-bold tracking-wider">COORDINATION</h1>
            <a href="/" class="hover:underline font-semibold">&larr; Kembali ke Beranda</a>
        </div>
    </header>
    <main class="flex-grow max-w-3xl mx-auto p-8 py-16 w-full">
        <h2 class="text-4xl font-extrabold text-blue-700 mb-6 text-center">Hubungi Tim Kami</h2>
        <div class="bg-white p-8 rounded-xl shadow border border-slate-200">
            <form class="space-y-6" onsubmit="event.preventDefault(); alert('Pesan berhasil terkirim!');">
                <div>
                    <label class="block text-slate-700 font-bold mb-2">Nama Lengkap</label>
                    <input type="text" required class="w-full p-3 border border-slate-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600" placeholder="Masukkan nama Anda">
                </div>
                <div>
                    <label class="block text-slate-700 font-bold mb-2">Email</label>
                    <input type="email" required class="w-full p-3 border border-slate-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600" placeholder="email@perusahaan.com">
                </div>
                <div>
                    <label class="block text-slate-700 font-bold mb-2">Pesan</label>
                    <textarea required class="w-full p-3 border border-slate-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600 h-32" placeholder="Apa yang bisa kami bantu?"></textarea>
                </div>
                <button type="submit" class="w-full bg-blue-600 text-white font-bold py-3 rounded-lg hover:bg-blue-700 transition">Kirim Pesan</button>
            </form>
        </div>
    </main>
    <footer class="bg-slate-900 text-slate-400 text-center py-6">
        <p>&copy; 2026 Coordination. All rights reserved.</p>
    </footer>
</body>
</html>
