<?php

namespace App\Http\Controllers;

use App\Models\DataAlumni;
use Illuminate\Http\Request;

class AlumniController extends Controller
{
    public function index()
    {

        if (request('search')) {
            $DataAlumnis = DataAlumni::where('nama', 'like', '%' . request('search') . '%')->orWhere('prodi', 'like', '%' . request('search') . '%')->orWhere('tahunLulus', 'like', '%' . request('search') . '%')->where('role', 'dosen')->get();
        } else {
            $dataAlumnis = DataAlumni::get();
        }

        return view('content.alumni.index', compact('dataAlumnis'))->with('user');
    }
}
