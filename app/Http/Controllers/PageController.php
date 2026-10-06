<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('welcome');
    }

    public function contact()
    {
        // ambil 5 pesan terakhir buat ditampilin di bawah form
        $pesanTerbaru = Contact::latest()->take(5)->get();

        return view('contact', compact('pesanTerbaru'));
    }

    public function kirimPesan(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required|string|max:100',
            'email' => 'required|email|max:100',
            'pesan' => 'required|string|min:10|max:1000',
        ], [
            'nama.required' => 'Nama wajib diisi',
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Format email tidak valid',
            'pesan.required' => 'Pesan wajib diisi',
            'pesan.min' => 'Pesan minimal 10 karakter',
        ]);

        Contact::create($data);

        return redirect()->route('contact')->with('success', 'Pesan berhasil dikirim, terima kasih!');
    }

    public function hello($nama)
    {
        return view('hello', ['nama' => $nama]);
    }
}
