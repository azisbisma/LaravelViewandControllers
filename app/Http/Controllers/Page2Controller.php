<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Page2Controller extends Controller
{
    public function index()
    {
        $namaKampus = 'Universitas Muhammadiyah Surakarta';
        $lokasiKampus = 'SOLO';

        return view('page2', compact('namaKampus', 'lokasiKampus'));
    }
}

