<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');

// data dikirim langsung dari route ke view dalam bentuk array
Route::get('/about', function () {
    $profil = [
        'nama' => 'Chintya Graceyla',
        'semester' => 3,
        'matkul' => 'Pemrograman Web',
    ];

    $skills = ['HTML', 'CSS', 'JavaScript', 'PHP', 'MySQL', 'Laravel'];

    $tugas = [
        ['no' => 1, 'judul' => 'Portofolio', 'tech' => 'HTML'],
        ['no' => 2, 'judul' => 'Portofolio + CSS', 'tech' => 'CSS'],
        ['no' => 5, 'judul' => 'Weather App', 'tech' => 'JavaScript'],
        ['no' => 6, 'judul' => 'Quiz App', 'tech' => 'JavaScript'],
        ['no' => 7, 'judul' => 'Register PHP', 'tech' => 'PHP'],
        ['no' => 8, 'judul' => 'CRUD Inventaris', 'tech' => 'PHP + MySQL'],
        ['no' => 9, 'judul' => 'Setup Laravel', 'tech' => 'Laravel'],
    ];

    return view('about', compact('profil', 'skills', 'tugas'));
})->name('about');

Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::post('/contact', [PageController::class, 'kirimPesan'])->name('contact.store');

// bonus: route parameter
Route::get('/hello/{nama}', [PageController::class, 'hello'])
    ->where('nama', '[A-Za-z]+')
    ->name('hello');
