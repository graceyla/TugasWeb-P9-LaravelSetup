@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <section class="bg-gradient-to-br from-indigo-600 to-purple-600 text-white rounded-2xl p-8 md:p-12 shadow-lg">
        <p class="uppercase tracking-widest text-indigo-200 text-sm mb-2">Tugas Rutin 9</p>
        <h1 class="text-3xl md:text-5xl font-bold mb-4">Halo, selamat datang di Laravel!</h1>
        <p class="text-indigo-100 max-w-2xl mb-8">
            Ini project pertama aku pakai Laravel. Isinya masih sederhana, cuma ada beberapa halaman
            buat belajar route, controller, model, dan Blade view.
        </p>
        <div class="flex flex-wrap gap-3">
            <a href="{{ route('about') }}" class="bg-white text-indigo-600 font-semibold px-5 py-2.5 rounded-lg hover:bg-indigo-50">Tentang Aku</a>
            <a href="{{ route('contact') }}" class="border border-white/60 px-5 py-2.5 rounded-lg hover:bg-white/10">Kirim Pesan</a>
        </div>
    </section>

    <section class="grid md:grid-cols-3 gap-4 mt-8">
        <div class="bg-white rounded-xl p-6 border border-slate-200">
            <h3 class="font-semibold mb-1">Route</h3>
            <p class="text-sm text-slate-500">Ada route /, /about, /contact, dan /hello/{nama}.</p>
        </div>
        <div class="bg-white rounded-xl p-6 border border-slate-200">
            <h3 class="font-semibold mb-1">Controller & Model</h3>
            <p class="text-sm text-slate-500">PageController dan model Contact dibuat pakai artisan.</p>
        </div>
        <div class="bg-white rounded-xl p-6 border border-slate-200">
            <h3 class="font-semibold mb-1">Database MySQL</h3>
            <p class="text-sm text-slate-500">Pesan dari halaman contact disimpan ke database db_tr9_laravel.</p>
        </div>
    </section>

    <p class="text-center text-sm text-slate-500 mt-8">
        Coba juga: <a href="{{ route('hello', 'Chintya') }}" class="text-indigo-600 underline">/hello/Chintya</a>
    </p>
@endsection
