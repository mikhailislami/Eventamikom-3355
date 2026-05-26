@extends('layouts.admin')

@section('content')

<div class="container mx-auto p-6">

    <h1 class="text-4xl font-bold mb-10">
        Selamat Datang di AmikomEventHub
    </h1>

    <h2 class="text-2xl font-semibold mb-4">
        Kategori Event
    </h2>

    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-10">

        @foreach ($categories as $category)

        <div class="border p-4 rounded shadow">
            {{ $category->name }}
        </div>

        @endforeach

    </div>

    <h2 class="text-2xl font-semibold mb-4">
        Partner Kami
    </h2>

    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">

        @foreach ($partners as $partner)

        <div class="border p-4 rounded shadow text-center">

            <img src="{{ $partner->logo_url }}"
                class="w-24 h-24 object-cover mx-auto mb-3">

            <h3 class="font-bold">
                {{ $partner->name }}
            </h3>

        </div>

        @endforeach

    </div>

</div>

@endsection