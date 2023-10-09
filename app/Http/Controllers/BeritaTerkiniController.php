<?php

namespace App\Http\Controllers;

use App\Models\dataBlog;
use Illuminate\Http\Request;

class BeritaTerkiniController extends Controller
{
    public function index()
    {
        if (request('search')) {
            $dataBlogs = dataBlog::where('judul', 'like', '%' . request('search') . '%')->orWhere('konten', 'like', '%' . request('search') . '%')->where('kategori', 'Berita Terkini')->get();
        } else {
            $dataBlogs = dataBlog::where('kategori', 'Berita Terkini')->get();
        }

        return view('content.beritaterkini.index', compact('dataBlogs'))->with('user');
    }
}
