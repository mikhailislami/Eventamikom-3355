@extends('layouts.admin', ['title' => 'Tambah Event'])

@section('content')

<header class="mb-10">
    <h1 class="text-3xl font-black">Tambah Event</h1>
    <p class="text-slate-500 font-medium">
        Isi detail event baru dengan lengkap.
    </p>
</header>

<div class="bg-white rounded-[2.5rem] border border-slate-100 p-10 shadow-sm max-w-4xl">

    {{-- ERROR VALIDATION --}}
    @if ($errors->any())

        <div class="bg-red-100 border border-red-300 text-red-700 p-4 rounded-2xl mb-6">

            <ul class="list-disc pl-5 space-y-1">

                @foreach ($errors->all() as $error)

                    <li>{{ $error }}</li>

                @endforeach

            </ul>

        </div>

    @endif

    <form action="{{ route('admin.events.store') }}"
          method="POST"
          enctype="multipart/form-data"
          class="space-y-6">

        @csrf

        <div class="grid grid-cols-2 gap-6">

            {{-- TITLE --}}
            <div class="col-span-2">

                <label class="block text-sm font-bold text-slate-700 mb-2">
                    Judul Event
                </label>

                <input type="text"
                       name="title"
                       value="{{ old('title') }}"
                       class="w-full px-5 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-indigo-500 outline-none"
                       required>

            </div>

            {{-- CATEGORY --}}
            <div>

                <label class="block text-sm font-bold text-slate-700 mb-2">
                    Kategori
                </label>

                <select name="category_id"
                        class="w-full px-5 py-3 rounded-xl border border-slate-200 outline-none"
                        required>

                    <option value="">
                        Pilih Kategori
                    </option>

                    @foreach($categories as $category)

                        <option value="{{ $category->id }}">

                            {{ $category->name }}

                        </option>

                    @endforeach

                </select>

            </div>

            {{-- DATE --}}
            <div>

                <label class="block text-sm font-bold text-slate-700 mb-2">
                    Tanggal & Waktu
                </label>

                <input type="datetime-local"
                       name="date"
                       class="w-full px-5 py-3 rounded-xl border border-slate-200 outline-none"
                       required>

            </div>

            {{-- DESCRIPTION --}}
            <div class="col-span-2">

                <label class="block text-sm font-bold text-slate-700 mb-2">
                    Deskripsi
                </label>

                <textarea name="description"
                          rows="4"
                          class="w-full px-5 py-3 rounded-xl border border-slate-200 outline-none"
                          nullable>{{ old('description') }}</textarea>

            </div>

            {{-- PRICE --}}
            <div>

                <label class="block text-sm font-bold text-slate-700 mb-2">
                    Harga (Rp)
                </label>

                <input type="number"
                       name="price"
                       class="w-full px-5 py-3 rounded-xl border border-slate-200 outline-none"
                       required>

            </div>

            {{-- STOCK --}}
            <div>

                <label class="block text-sm font-bold text-slate-700 mb-2">
                    Stok Tiket
                </label>

                <input type="number"
                       name="stock"
                       class="w-full px-5 py-3 rounded-xl border border-slate-200 outline-none"
                       required>

            </div>

            {{-- LOCATION --}}
            <div class="col-span-2">

                <label class="block text-sm font-bold text-slate-700 mb-2">
                    Lokasi
                </label>

                <input type="text"
                       name="location"
                       class="w-full px-5 py-3 rounded-xl border border-slate-200 outline-none"
                       nullable>

            </div>

            {{-- POSTER --}}
            <div class="col-span-2">

                <label class="block text-sm font-bold text-slate-700 mb-2">
                    Upload Poster
                </label>

                <input type="file"
                       name="poster"
                       class="w-full text-sm text-slate-500
                       file:mr-4
                       file:py-2
                       file:px-4
                       file:rounded-full
                       file:border-0
                       file:text-sm
                       file:font-semibold
                       file:bg-indigo-50
                       file:text-indigo-700
                       hover:file:bg-indigo-100">

            </div>

        </div>

        <div class="flex justify-end gap-4 mt-8">

            <a href="{{ route('admin.events.index') }}"
               class="px-6 py-3 font-bold text-slate-400">

                Batal

            </a>

            <button type="submit"
                    class="px-8 py-3 bg-indigo-600 text-white rounded-2xl font-bold shadow-lg shadow-indigo-100 hover:bg-indigo-700 transition">

                Simpan Event

            </button>

        </div>

    </form>

</div>

@endsection