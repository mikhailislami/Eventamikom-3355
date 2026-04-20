@extends('layouts.admin')

@section('content')
<header class="flex justify-between items-center mb-10">
    <div>
        <h1 class="text-3xl font-black text-slate-800">Manajemen Kategori</h1>
        <p class="text-slate-500 font-medium">Kelompokkan event agar mahasiswa lebih mudah mencari.</p>
    </div>
    <button class="px-6 py-3 bg-indigo-600 text-white rounded-2xl font-bold shadow-lg shadow-indigo-200 hover:bg-indigo-700 active:scale-95 transition-all">
        + Tambah Kategori
    </button>
</header>

<div class="bg-white rounded-[2.5rem] border border-slate-100 shadow-sm overflow-hidden">
    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
            <thead class="bg-slate-50/50 text-slate-400 uppercase text-[10px] font-black tracking-widest">
                <tr>
                    <th class="px-8 py-5 w-16 text-center">NO</th>
                    <th class="px-8 py-5">NAMA KATEGORI</th>
                    <th class="px-8 py-5">JUMLAH EVENT</th>
                    <th class="px-8 py-5">STATUS</th>
                    <th class="px-8 py-5 text-center">AKSI</th>
                </tr>
            </thead>
            <tbody class="divide-y border-t border-slate-50">
                <tr class="hover:bg-slate-50/30 transition">
                    <td class="px-8 py-6 text-center font-bold text-slate-400">1</td>
                    <td class="px-8 py-6">
                        <span class="font-black text-slate-800 text-lg">Musik</span>
                    </td>
                    <td class="px-8 py-6 text-slate-500 font-medium">12 Event Terdaftar</td>
                    <td class="px-8 py-6">
                        <span class="px-3 py-1 bg-emerald-100 text-emerald-600 rounded-full text-[10px] font-black uppercase tracking-wider">Aktif</span>
                    </td>
                    <td class="px-8 py-6">
                        <div class="flex justify-center gap-3">
                            <button class="p-2.5 bg-indigo-50 text-indigo-600 rounded-xl hover:bg-indigo-600 hover:text-white transition-colors">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 00-2 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                            </button>
                            <button class="p-2.5 bg-rose-50 text-rose-600 rounded-xl hover:bg-rose-600 hover:text-white transition-colors">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                            </button>
                        </div>
                    </td>
                </tr>

                <tr class="hover:bg-slate-50/30 transition">
                    <td class="px-8 py-6 text-center font-bold text-slate-400">2</td>
                    <td class="px-8 py-6">
                        <span class="font-black text-slate-800 text-lg">Workshop</span>
                    </td>
                    <td class="px-8 py-6 text-slate-500 font-medium">5 Event Terdaftar</td>
                    <td class="px-8 py-6">
                        <span class="px-3 py-1 bg-emerald-100 text-emerald-600 rounded-full text-[10px] font-black uppercase tracking-wider">Aktif</span>
                    </td>
                    <td class="px-8 py-6">
                        <div class="flex justify-center gap-3">
                            <button class="p-2.5 bg-indigo-50 text-indigo-600 rounded-xl hover:bg-indigo-600 hover:text-white transition-colors">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 00-2 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                            </button>
                            <button class="p-2.5 bg-rose-50 text-rose-600 rounded-xl hover:bg-rose-600 hover:text-white transition-colors">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                            </button>
                        </div>
                    </td>
                </tr>

                <tr class="hover:bg-slate-50/30 transition">
                    <td class="px-8 py-6 text-center font-bold text-slate-400">3</td>
                    <td class="px-8 py-6">
                        <span class="font-black text-slate-800 text-lg text-slate-400">Seminar (Draft)</span>
                    </td>
                    <td class="px-8 py-6 text-slate-400 font-medium italic">Belum ada event</td>
                    <td class="px-8 py-6">
                        <span class="px-3 py-1 bg-slate-100 text-slate-400 rounded-full text-[10px] font-black uppercase tracking-wider">Non-Aktif</span>
                    </td>
                    <td class="px-8 py-6 text-center italic text-slate-300 text-sm">No Action</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection