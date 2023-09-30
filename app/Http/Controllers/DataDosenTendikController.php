<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dataDosenTendik;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class DataDosenTendikController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $query = dataDosenTendik::with('user')->get();
            return DataTables::of($query)->make();
        }
        return view('pages.dosen.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.dosen.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            'nama' => $request->nama,
            'lulusan' => $request->lulusan,
            'pangkalan' => $request->pangkalan,
            'jabatan' => $request->jabatan,
            'nip' => $request->nip,
            'nidn' => $request->nidn,
        ];

        if ($request->hasFile('foto')) {
            $data['foto'] = $request->file('foto')->store('dosen', 'public');
        }

        $data['user_id'] = auth()->user()->id;

        dataDosenTendik::create($data);

        return redirect('dosen')->with('toast', 'showToast("Data berhasil disimpan")');
    }

    /**
     * Display the specified resource.
     */
    public function show(dataDosenTendik $dataDosenTendik)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $item = dataDosenTendik::findOrFail($id);
        return view('pages.dosen.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $dosenAndTendik = dataDosenTendik::findOrFail($id);
        $data = [
            'nama' => $request->nama,
            'lulusan' => $request->lulusan,
            'pangkalan' => $request->pangkalan,
            'jabatan' => $request->jabatan,
            'nip' => $request->nip,
            'nidn' => $request->nidn,
        ];

        if ($request->hasFile('foto') && $request->file('foto')->isValid()) {
            $path = "dosen/";
            $oldfile = $path . basename($dosenAndTendik->foto);
            Storage::disk('public')->delete($oldfile);
            $data['avatar'] = Storage::disk('public')->put($path, $request->file('foto'));
        }

        $dosenAndTendik->update($data);

        return redirect('dosen')->with('toast', 'showToast("Data berhasil diupdate")');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(dataDosenTendik $dataDosenTendik)
    {
        //
    }
}
