<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Yajra\DataTables\Facades\DataTables;

class FullCalender extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $query = Event::get();
            return DataTables::of($query)->addColumn('crypt_id', function ($query) {
                return Crypt::encryptString($query->id);
            })->make();
        }
        return view('pages.agenda.index');
    }

    public function create()
    {
        return view('pages.agenda.create');
    }
}
