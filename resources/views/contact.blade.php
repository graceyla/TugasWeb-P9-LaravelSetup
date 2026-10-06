@extends('layouts.app')

@section('title', 'Contact')

@section('content')
    <h1 class="text-3xl font-bold mb-6">Contact</h1>

    <div class="grid md:grid-cols-2 gap-6">
        <div class="bg-white rounded-xl border border-slate-200 p-6">
            <h2 class="text-lg font-semibold mb-4">Kirim Pesan</h2>

            @if (session('success'))
                <div class="bg-green-50 text-green-700 border border-green-200 rounded-lg px-4 py-3 mb-4 text-sm">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('contact.store') }}" method="POST" class="space-y-4">
                @csrf

                <div>
                    <label class="block text-sm font-medium mb-1">Nama</label>
                    <input type="text" name="nama" value="{{ old('nama') }}"
                        class="w-full border rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-300 @error('nama') border-red-400 @else border-slate-300 @enderror">
                    @error('nama')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="block text-sm font-medium mb-1">Email</label>
                    <input type="text" name="email" value="{{ old('email') }}"
                        class="w-full border rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-300 @error('email') border-red-400 @else border-slate-300 @enderror">
                    @error('email')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="block text-sm font-medium mb-1">Pesan</label>
                    <textarea name="pesan" rows="4"
                        class="w-full border rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-300 @error('pesan') border-red-400 @else border-slate-300 @enderror">{{ old('pesan') }}</textarea>
                    @error('pesan')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit" class="bg-indigo-600 text-white px-5 py-2.5 rounded-lg hover:bg-indigo-700">Kirim</button>
            </form>
        </div>

        <div class="bg-white rounded-xl border border-slate-200 p-6">
            <h2 class="text-lg font-semibold mb-4">Pesan Terbaru</h2>

            @forelse ($pesanTerbaru as $p)
                <div class="border-b border-slate-100 py-3 last:border-0">
                    <div class="flex justify-between gap-2">
                        <span class="font-medium">{{ $p->nama }}</span>
                        <span class="text-xs text-slate-400">{{ $p->created_at->diffForHumans() }}</span>
                    </div>
                    <p class="text-sm text-slate-600 mt-1">{{ $p->pesan }}</p>
                </div>
            @empty
                <p class="text-sm text-slate-400">Belum ada pesan masuk.</p>
            @endforelse
        </div>
    </div>
@endsection
