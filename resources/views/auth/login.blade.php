<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - AmikomEventHub</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }
    </style>
</head>

<body class="bg-indigo-900">

    <div class="min-h-screen flex items-center justify-center p-6">

        <div class="w-full max-w-md bg-white text-slate-900 rounded-[2rem] p-8 shadow-2xl">

            <!-- Logo -->
            <div class="text-center mb-8">

                <div
                    class="w-16 h-16 bg-indigo-600 rounded-2xl flex items-center justify-center text-white font-bold text-2xl mx-auto mb-4">
                    AH
                </div>

                <h1 class="text-3xl font-black">
                    Admin Login
                </h1>

                <p class="text-slate-500">
                    AmikomEventHub Dashboard
                </p>

            </div>

            <!-- Error -->
            @if(session('error'))
                <div class="bg-red-100 border border-red-200 text-red-600 p-4 rounded-xl mb-6 text-center font-semibold">
                    {{ session('error') }}
                </div>
            @endif

            <!-- Form -->
            <form action="{{ route('admin.login.post') }}" method="POST" class="space-y-6">

                @csrf

                <!-- Email -->
                <div>
                    <label class="block text-sm font-bold text-slate-700 uppercase tracking-wide mb-2">
                        Email
                    </label>

                    <input
                        type="email"
                        name="email"
                        placeholder="Masukkan email"
                        class="w-full px-5 py-4 bg-slate-50 border-2 border-slate-200 rounded-2xl outline-none focus:border-indigo-600 focus:ring-4 focus:ring-indigo-500/10 transition"
                        required>
                </div>

                <!-- Password -->
                <div>
                    <label class="block text-sm font-bold text-slate-700 uppercase tracking-wide mb-2">
                        Password
                    </label>

                    <input
                        type="password"
                        name="password"
                        placeholder="Masukkan password"
                        class="w-full px-5 py-4 bg-slate-50 border-2 border-slate-200 rounded-2xl outline-none focus:border-indigo-600 focus:ring-4 focus:ring-indigo-500/10 transition"
                        required>
                </div>

                <!-- Button -->
                <button
                    type="submit"
                    class="w-full py-4 bg-indigo-600 text-white rounded-2xl font-bold text-lg shadow-lg hover:bg-indigo-700 transition duration-300">
                    Masuk
                </button>

            </form>

        </div>

    </div>

</body>

</html>