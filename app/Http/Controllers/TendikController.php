<?php

namespace App\Http\Controllers;

use App\Models\dataDosenTendik;
use Illuminate\Http\Request;

class TendikController extends Controller
{
    public function index()
    {
        if (request('search')) {
            $dataTendiks = dataDosenTendik::where('nama', 'like', '%' . request('search') . '%')->orWhere('jabatan', 'like', '%' . request('search') . '%')->orWhere('nip', 'like', '%' . request('search') . '%')->where('role', 'tendik')->get();
        } else {
            $dataTendiks = dataDosenTendik::where('role','tendik')->get();
        }

        return view('content.tendik.index', compact('dataTendiks'))->with('user');
    }
}
