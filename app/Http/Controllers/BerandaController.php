<?php

namespace App\Http\Controllers;

use App\Models\dataBlog;
use App\Models\DataEvent;
use Illuminate\Http\Request;

class BerandaController extends Controller
{

    public function index()
    {
        $dataBlogs = dataBlog::with('user')->get();

        
            $events = [];

            $DataEvents = DataEvent::with(['user'])->get();

            foreach ($DataEvents as $DataEvent) {
                $events[] = [
                    'title' => $DataEvent->title,
                    'start' => $DataEvent->start,
                    'end' => $DataEvent->end,
                ];
            }

        return view('content.beranda.index', compact('dataBlogs','events'));
    }
}
