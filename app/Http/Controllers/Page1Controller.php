<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Page1Controller extends Controller
{
    public function index()
    {
        $nama = 'Nama Anda';
        $hobi = 'Hobi Anda';
        $kegiatan = 'Kuliah';
        $semester = '7';

        return view('page1', compact('nama', 'hobi', 'kegiatan', 'semester'));
    }
}
