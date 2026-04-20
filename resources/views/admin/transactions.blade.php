@extends('layouts.admin')

@section('content')
<header class="mb-10">
    <h1 class="text-3xl font-black">Laporan Transaksi</h1>
    <p class="text-slate-500 font-medium">Data seluruh penjualan tiket.</p>
</header>

<div class="bg-white rounded-3xl border border-slate-100 shadow-sm overflow-hidden">
    <table class="w-full text-left p-8">
        <tr class="bg-slate-50">
            <th class="p-4">ID</th>
            <th class="p-4">Pembeli</th>
            <th class="p-4">Status</th>
        </tr>
        <tr>
            <td class="p-4">#TRX001</td>
            <td class="p-4">Donni Prabowo</td>
            <td class="p-4"><span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs">Success</span></td>
        </tr>
    </table>
</div>
@endsection