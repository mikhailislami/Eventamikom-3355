@extends('layouts.admin')

@section('content')

<div class="bg-white rounded-3xl shadow-sm border border-slate-200 p-8">

    <!-- HEADER -->
    <div class="flex justify-between items-center mb-8">

        <div>
            <h1 class="text-4xl font-extrabold text-slate-800">
                Data Kategori
            </h1>
            <p class="text-slate-500 mt-2">
                Kelola kategori event untuk AmikomEventHub.
            </p>
        </div>

    </div>

    <!-- SEARCH -->
    <form action="{{ route('admin-categories.index') }}"
          method="GET"
          class="flex gap-3 mb-5">

        <input type="text"
               name="search"
               value="{{ request('search') }}"
               placeholder="Cari kategori..."
               class="w-full border border-slate-300 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-indigo-500">

        <button
            class="bg-indigo-600 hover:bg-indigo-700 text-white px-6 py-3 rounded-xl font-semibold shadow">

            Cari

        </button>

    </form>

    <!-- TAMBAH KATEGORI -->
    <form action="{{ route('admin-categories.store') }}"
          method="POST"
          class="flex gap-3 mb-8">

        @csrf

        <input type="text"
               name="name"
               placeholder="Masukkan kategori baru..."
               class="w-full border border-slate-300 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-green-500"
               required>

        <button
            class="bg-green-600 hover:bg-green-700 text-white px-6 py-3 rounded-xl font-semibold shadow">

            + Tambah

        </button>

    </form>

    <!-- TABLE -->
    <div class="overflow-x-auto rounded-2xl border border-slate-200 shadow-sm">

        <table class="w-full">

            <thead class="bg-slate-100 text-slate-700">

                <tr>

                    <th class="px-6 py-4 text-left font-bold">ID</th>
                    <th class="px-6 py-4 text-left font-bold">Nama Kategori</th>
                    <th class="px-6 py-4 text-left font-bold">Created At</th>
                    <th class="px-6 py-4 text-left font-bold">Jumlah Event</th>
                    <th class="px-6 py-4 text-center font-bold">Aksi</th>

                </tr>

            </thead>

            <tbody>

                @forelse ($categories as $category)

                <tr class="border-t hover:bg-slate-50 transition">

                    <td class="px-6 py-4">{{ $category->id }}</td>

                    <td class="px-6 py-4 font-semibold text-slate-800">
                        {{ $category->name }}
                    </td>

                    <td class="px-6 py-4 text-slate-500">
                        {{ $category->created_at->format('d M Y H:i') }}
                    </td>

                    <td class="px-6 py-4">
                        <span class="bg-indigo-100 text-indigo-700 px-3 py-1 rounded-full text-sm font-semibold">
                            {{ $category->events_count ?? 0 }} Event
                        </span>
                    </td>

                    <td class="px-6 py-4">

                        <div class="flex justify-center gap-2">

                            <!-- EDIT -->
                            <form action="{{ route('admin-categories.update', $category->id) }}"
                                  method="POST"
                                  class="flex gap-2">

                                @csrf
                                @method('PUT')

                                <input type="text"
                                       name="name"
                                       value="{{ $category->name }}"
                                       class="border border-slate-300 rounded-lg px-3 py-2 w-40 focus:outline-none focus:ring-2 focus:ring-yellow-400">

                                <button
                                    class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-lg font-semibold shadow">

                                    Edit

                                </button>

                            </form>

                            <!-- DELETE -->
                            <form action="{{ route('admin-categories.destroy', $category->id) }}"
                                  method="POST">

                                @csrf
                                @method('DELETE')

                                <button
                                    onclick="return confirm('Yakin ingin menghapus kategori ini?')"
                                    class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg font-semibold shadow">

                                    Hapus

                                </button>

                            </form>

                        </div>

                    </td>

                </tr>

                @empty

                <tr>
                    <td colspan="5" class="text-center py-8 text-slate-500">
                        Belum ada data kategori.
                    </td>
                </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</div>

@endsection