<?php

namespace App\Http\Controllers;

use App\Models\dataBlog;
use Illuminate\Http\Request;

class LowonganPekerjaanController extends Controller
{
    public function index()
    {
        $dataBlogs = dataBlog::with('user')->where('kategori', 'Lowongan Pekerjaan')->get();
        
        return view('content.lowonganpekerjaan.index', compact('dataBlogs'));
    }
}
