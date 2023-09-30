<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VisiDanMisiController extends Controller
{
    public function index()
    {
        return view('content.visidanmisi.index');
    }
}
