<?php

namespace App\Http\Controllers;

use App\Models\dataBlog;
use Illuminate\Http\Request;

class LowonganPekerjaanController extends Controller
{
    public function index()
    {
        if (request('search')) {
            $dataBlogs = dataBlog::where('judul', 'like', '%' . request('search') . '%')->orWhere('konten', 'like', '%' . request('search') . '%')->where('kategori', 'Lowongan Pekerjaan')->get();
        } else {
            $dataBlogs = dataBlog::where('kategori', 'Lowongan Pekerjaan')->get();
        }

        return view('content.lowonganpekerjaan.index', compact('dataBlogs'))->with('user');
    }
}
