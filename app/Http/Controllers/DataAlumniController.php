<?php

namespace App\Http\Controllers;

use App\Models\dataAlumni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class DataAlumniController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $query = dataAlumni::get();
            return DataTables::of($query)->addColumn('crypt_id', function ($query) {
                return Crypt::encryptString($query->id);
            })->make();
        }
        return view('pages.alumni.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.alumni.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'foto' => 'required',
            'nama' => 'required',
            'tahunLulus' => 'required',
            'prodi' => 'required'
        ]);

        $data = [
            'nama' => $request->nama,
            'prodi' => $request->prodi,
            'tahunLulus' => $request->tahunLulus,
        ];


        if ($request->hasFile('foto')) {
            $data['foto'] = $request->file('foto')->store('alumni', 'public');
        }

        dataAlumni::create($data);
        return redirect('alumni')->with('toast', 'showToast("Data berhasil disimpan")');
    }

    /**
     * Display the specified resource.
     */
    public function show(dataAlumni $dataAlumni)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $crypt_id = Crypt::decryptString($id);
        $alumni = dataAlumni::findOrFail($crypt_id);
        return view('pages.alumni.edit', compact('alumni'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $crypt_id = Crypt::decryptString($id);
        $alumni = dataAlumni::findOrFail($crypt_id);

        $request->validate([
            'foto' => 'required',
            'nama' => 'required',
            'tahunLulus' => 'required',
            'prodi' => 'required'
        ]);

        $data = [
            'nama' => $request->nama,
            'prodi' => $request->prodi,
            'tahunLulus' => $request->tahunLulus,
        ];

        if ($request->hasFile('foto') && $request->file('foto')->isValid()) {
            $path = "alumni/";
            $oldfile = $path . basename($alumni->foto);
            Storage::disk('public')->delete($oldfile);
            $data['foto'] = Storage::disk('public')->put($path, $request->file('foto'));
        }

        $alumni->update($data);

        return redirect('alumni')->with('toast', 'showToast("Data berhasil diupdate")');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $crypt_id = Crypt::decryptString($id);
        $alumni = dataAlumni::findOrFail($crypt_id);
        $alumni->delete();
        return redirect()->back()->with('toast', 'showToast("Data berhasil dihapus")');
    }
}
