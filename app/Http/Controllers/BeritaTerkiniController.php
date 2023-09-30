<?php

namespace App\Http\Controllers;

use App\Models\dataBlog;
use Illuminate\Http\Request;

class BeritaTerkiniController extends Controller
{
    public function index()
    {
        $dataBlogs = dataBlog::with('user')->where('kategori', 'Berita Terkini')->get();
        
        return view('content.beritaterkini.index', compact('dataBlogs'));
    }
}
