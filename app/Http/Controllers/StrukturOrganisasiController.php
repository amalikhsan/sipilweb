<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StrukturOrganisasiController extends Controller
{
    public function index()
    {
        return view('content.strukturorganisasi.index');
    }
}
