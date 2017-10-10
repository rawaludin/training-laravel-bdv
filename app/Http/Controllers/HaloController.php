<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HaloController extends Controller
{
    public function index(Request $request, $nama = 'User')
    {
        $greet = $request->input('greet', 'Selamat datang');
        return view('halo', compact('nama', 'greet'));
    }
}
