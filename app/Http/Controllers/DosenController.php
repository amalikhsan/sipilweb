<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dataDosenTendik;

class DosenController extends Controller
{
    public function index()
    {
        if (request('search')) {
            $dataDosens = dataDosenTendik::where('nama', 'like', '%' . request('search') . '%')->orWhere('lulusan', 'like', '%' . request('search') . '%')->orWhere('pangkalan', 'like', '%' . request('search') . '%')->orWhere('nip', 'like', '%' . request('search') . '%')->orWhere('nidn', 'like', '%' . request('search') . '%')->where('role', 'dosen')->get();
        } else {
            $dataDosens = dataDosenTendik::where('role', 'dosen')->get();
        }

        return view('content.dosen.index', compact('dataDosens'))->with('user');
    }
}
