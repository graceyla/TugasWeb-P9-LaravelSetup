<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    // kolom yang boleh diisi lewat Contact::create()
    protected $fillable = [
        'nama',
        'email',
        'pesan',
    ];
}
