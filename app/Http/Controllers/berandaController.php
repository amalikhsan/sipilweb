<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class berandaController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Event::get();
            return response()->json($data);
        }
        return view('content.beranda.index');
    }
}
