<!DOCTYPE html>
<html>
<head>
    <title>AmikomEventHub</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-br from-purple-200 via-blue-100 to-cyan-100 min-h-screen">

<div class="container mx-auto p-8">

    <h1 class="text-5xl font-bold text-center text-purple-700 mb-10">
        AmikomEventHub
    </h1>

    <h2 class="text-3xl font-bold mb-5 text-blue-700">
        Kategori Event
    </h2>

    <div class="grid grid-cols-2 md:grid-cols-4 gap-5 mb-10">

        @foreach ($categories as $category)

        <div class="bg-white p-5 rounded-2xl shadow-xl text-center font-semibold">
            {{ $category->name }}
        </div>

        @endforeach

    </div>

    <h2 class="text-3xl font-bold mb-5 text-purple-700">
        Partner Kami
    </h2>

    <div class="grid grid-cols-2 md:grid-cols-4 gap-5">

        @foreach ($partners as $partner)

        <div class="bg-white rounded-2xl shadow-xl p-5 text-center">

            <img src="{{ $partner->logo_url }}"
                class="w-24 h-24 mx-auto rounded-full object-cover mb-3">

            <h3 class="font-bold">
                {{ $partner->name }}
            </h3>

        </div>

        @endforeach

    </div>

</div>

</body>
</html>