<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-r from-purple-200 via-blue-200 to-indigo-200 min-h-screen">

<nav class="bg-white py-4 shadow">
    <div class="flex justify-center gap-10 text-lg font-medium text-gray-700">
        <a href="/home" class="text-blue-600 font-semibold">Home</a>
        <a href="/profil">Profil</a>
        <a href="/katalog">Katalog</a>
        <a href="/bantuan">Bantuan</a>
        <a href="/kontak">Kontak</a>
    </div>
</nav>

<div class="flex justify-center mt-10">
    <div class="bg-white/80 backdrop-blur p-10 rounded-xl shadow text-center w-[500px]">

        <h1 class="text-3xl font-bold mb-4">Tugas 1</h1>

        <p class="text-gray-600 mb-6">
            Ini adalah Halaman Tentang Aplikasi Event Hub berbasis Digital Bisnis
        </p>

        <p class="font-semibold">Nama: {{ $nama }}</p>
        <p class="font-semibold">NIM: {{ $nim }}</p>

    </div>
</div>

</body>
</html>