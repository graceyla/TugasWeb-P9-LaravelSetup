@extends('layouts.app')

@section('title', 'Hello')

@section('content')
    <div class="bg-white rounded-xl border border-slate-200 p-10 text-center">
        <p class="text-5xl mb-4">👋</p>
        <h1 class="text-3xl font-bold mb-2">Hello, {{ $nama }}!</h1>
        <p class="text-slate-500">Nama ini diambil dari parameter URL <code class="bg-slate-100 px-1.5 py-0.5 rounded">/hello/{{ $nama }}</code></p>
        <a href="{{ route('home') }}" class="inline-block mt-6 text-indigo-600 underline">Kembali ke Home</a>
    </div>
@endsection
