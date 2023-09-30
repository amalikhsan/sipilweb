<?php

namespace App\Http\Controllers;

use App\Models\dataBlog;
use Illuminate\Http\Request;

class AkademikController extends Controller
{
    public function index(){
        $dataBlogs = dataBlog::with('user')->where('kategori','Akademik')->get();

        return view('content.akademik.index',compact('dataBlogs'));
    }
}
