<!DOCTYPE html>
<html>
<head>
    <title>Profil</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-r from-purple-200 via-blue-200 to-indigo-200 min-h-screen">

<nav class="bg-white py-4 shadow">
    <div class="flex justify-center gap-10 text-gray-700 font-medium">
        <a href="/">Home</a>
        <a href="/profil" class="text-blue-600 font-semibold">Profil</a>
        <a href="/katalog">Katalog</a>
        <a href="/bantuan">Bantuan</a>
        <a href="/kontak">Kontak</a>
    </div>
</nav>

<div class="flex justify-center mt-10">
    <div class="bg-white/80 backdrop-blur p-10 rounded-xl shadow text-center w-[500px]">

        <h1 class="text-2xl font-bold mb-4">Profil Mahasiswa</h1>

        <p><b>Nama:</b> {{ $nama }}</p>
        <p><b>NIM:</b> {{ $nim }}</p>
        <p class="mt-3 text-gray-600">
            Mahasiswa Sistem Informasi yang mempelajari Digital Bisnis dan pengembangan web.
        </p>

    </div>
</div>

</body>
</html>