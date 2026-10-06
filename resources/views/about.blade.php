@extends('layouts.app')

@section('title', 'About')

@section('content')
    <h1 class="text-3xl font-bold mb-6">About</h1>

    <div class="grid md:grid-cols-3 gap-6">
        <div class="bg-white rounded-xl border border-slate-200 p-6">
            <div class="w-16 h-16 rounded-full bg-indigo-100 text-indigo-600 flex items-center justify-center text-2xl font-bold mb-4">
                {{ substr($profil['nama'], 0, 1) }}
            </div>
            <h2 class="text-lg font-semibold">{{ $profil['nama'] }}</h2>
            <p class="text-sm text-slate-500">Mahasiswa semester {{ $profil['semester'] }}</p>
            <p class="text-sm text-slate-500">{{ $profil['matkul'] }}</p>

            <h3 class="font-semibold mt-6 mb-2">Skill</h3>
            <div class="flex flex-wrap gap-2">
                @foreach ($skills as $skill)
                    <span class="text-xs bg-indigo-50 text-indigo-700 px-2.5 py-1 rounded-full">{{ $skill }}</span>
                @endforeach
            </div>
        </div>

        <div class="md:col-span-2 bg-white rounded-xl border border-slate-200 p-6">
            <h2 class="text-lg font-semibold mb-4">Daftar Tugas Rutin</h2>
            <div class="overflow-x-auto">
                <table class="w-full text-sm">
                    <thead>
                        <tr class="text-left border-b border-slate-200 text-slate-500">
                            <th class="py-2 pr-4">TR</th>
                            <th class="py-2 pr-4">Judul</th>
                            <th class="py-2">Teknologi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($tugas as $t)
                            <tr class="border-b border-slate-100">
                                <td class="py-2 pr-4">{{ $t['no'] }}</td>
                                <td class="py-2 pr-4">{{ $t['judul'] }}</td>
                                <td class="py-2">{{ $t['tech'] }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3" class="py-4 text-center text-slate-400">Belum ada data</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <p class="text-xs text-slate-400 mt-3">Total: {{ count($tugas) }} tugas</p>
        </div>
    </div>
@endsection
