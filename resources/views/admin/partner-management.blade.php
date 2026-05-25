@extends('layouts.admin')

@section('content')

<div class="container mx-auto p-6">

    <div class="bg-white rounded-xl shadow-lg p-6">

        <h1 class="text-3xl font-bold text-gray-700 mb-6">
            Data Partner
        </h1>

        <form method="GET" class="mb-5 flex gap-3">

            <input type="text"
                name="search"
                placeholder="Cari partner..."
                class="border border-gray-300 p-3 rounded-lg w-full">

            <button class="bg-blue-500 hover:bg-blue-600 text-white px-5 rounded-lg">
                Cari
            </button>

        </form>

        <form action="{{ route('admin-partners.store') }}" method="POST" class="mb-6 grid grid-cols-1 md:grid-cols-3 gap-3">

            @csrf

            <input type="text"
                name="name"
                placeholder="Nama partner"
                class="border border-gray-300 p-3 rounded-lg">

            <input type="text"
                name="logo_url"
                placeholder="Logo URL"
                class="border border-gray-300 p-3 rounded-lg">

            <button class="bg-green-500 hover:bg-green-600 text-white rounded-lg">
                Tambah
            </button>

        </form>

        <table class="w-full border">

            <thead class="bg-gray-100">

                <tr>

                    <th class="p-3 border">ID</th>
                    <th class="p-3 border">Logo</th>
                    <th class="p-3 border">Nama</th>
                    <th class="p-3 border">Aksi</th>

                </tr>

            </thead>

            <tbody>

                @foreach ($partners as $partner)

                <tr class="text-center">

                    <td class="p-3 border">
                        {{ $partner->id }}
                    </td>

                    <td class="p-3 border">
                        <img src="{{ $partner->logo_url }}"
                            class="w-16 h-16 object-cover rounded-full mx-auto">
                    </td>

                    <td class="p-3 border">
                        {{ $partner->name }}
                    </td>

                    <td class="p-3 border">

                        <div class="flex justify-center gap-2">

                            <form action="{{ route('admin-partners.update', $partner->id) }}" method="POST">

                                @csrf
                                @method('PUT')

                                <input type="text"
                                    name="name"
                                    value="{{ $partner->name }}"
                                    class="border p-1 rounded mb-1">

                                <input type="text"
                                    name="logo_url"
                                    value="{{ $partner->logo_url }}"
                                    class="border p-1 rounded mb-1">

                                <button class="bg-yellow-500 text-white px-3 py-1 rounded">
                                    Edit
                                </button>

                            </form>

                            <form action="{{ route('admin-partners.destroy', $partner->id) }}" method="POST">

                                @csrf
                                @method('DELETE')

                                <button class="bg-red-500 text-white px-3 py-1 rounded">
                                    Hapus
                                </button>

                            </form>

                        </div>

                    </td>

                </tr>

                @endforeach

            </tbody>

        </table>

    </div>

</div>

@endsection