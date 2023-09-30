<?php

namespace App\Http\Controllers;

use App\Models\dataBlog;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index()
    {
        $dataBlogs = dataBlog::with('user')->get();

        return view('content.beranda.index', compact('dataBlogs'));
    }
}
