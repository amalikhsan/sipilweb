<?php

namespace App\Http\Controllers;

use App\Models\dataBlog;
use Illuminate\Http\Request;

class AkademikController extends Controller
{
    public function index(){
        if (request('search')) {
            $dataBlogs = dataBlog::where('judul', 'like', '%' . request('search') . '%')->orWhere('konten', 'like', '%' . request('search') . '%')->where('kategori', 'Akademik')->get();
        } else {
            $dataBlogs = dataBlog::where('kategori','Akademik')->get();
        }

        return view('content.akademik.index',compact('dataBlogs'))->with('user');
    }
}
