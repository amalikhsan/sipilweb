<?php

namespace App\Http\Controllers;

use App\Models\DataEvent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class DataEventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $query = DataEvent::with('user')->get();
            return DataTables::of($query)->addColumn('crypt_id', function ($query) {
                return Crypt::encryptString($query->id);
            })->make();
        }
        return view('pages.event.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.event.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'start' => 'required',
            'end' => 'required',
        ]);

        $data = [
            'title' => $request->title,
            'start' => $request->start,
            'end' => $request->end
        ];

        $data['user_id'] = auth()->user()->id;

        DataEvent::create($data);

        return redirect('dataevent')->with('toast', 'showToast("Data berhasil disimpan")');
    }

    /**
     * Display the specified resource.
     */
    public function show(DataEvent $DataEvent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $crypt_id = Crypt::decryptString($id);
        $DataEvent = DataEvent::findOrFail($crypt_id);
        return view('pages.event.edit', compact('DataEvent'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $crypt_id = Crypt::decryptString($id);
        $dataEvent = DataEvent::findOrFail($crypt_id);

        $request->validate([
            'title' => 'required',
            'start' => 'required',
            'end' => 'required',
        ]);

        $data = [
            'title' => $request->title,
            'start' => $request->start,
            'end' => $request->end
        ];

        $dataEvent->update($data);

        return redirect('dataevent')->with('toast', 'showToast("Data berhasil diupdate")');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $crypt_id = Crypt::decryptString($id);
        $dataEvent = DataEvent::findOrFail($crypt_id);
        $dataEvent->delete();
        return redirect()->back()->with('toast', 'showToast("Data berhasil dihapus")');
    }
}
