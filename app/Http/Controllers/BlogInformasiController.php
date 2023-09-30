<?php

namespace App\Http\Controllers;

use App\Models\dataBlog;
use Illuminate\Http\Request;

class BlogInformasiController extends Controller
{
    public function index(string $slug)
    {
        $dataBlog = dataBlog::with('user')->where('slug',$slug)->first();;
        $previousBlog = dataBlog::where('id', '<', $dataBlog->id)->orderBy('id', 'desc')->first();
        $nextBlog = dataBlog::where('id', '>', $dataBlog->id)->orderBy('id', 'asc')->first();

        $dataBlogViews = $dataBlog->views;
        if(!$dataBlogViews){
            $dataBlogViews = 0;
        }

        $dataBlog->update(['views' => $dataBlogViews+1]);

        return view('content.bloginformasi.index',compact('dataBlog', 'previousBlog', 'nextBlog'));
    }
}
