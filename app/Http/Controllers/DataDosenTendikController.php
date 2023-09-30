<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dataDosenTendik;
use Illuminate\Support\Facades\Crypt;
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
            return DataTables::of($query)->addColumn('crypt_id', function ($query) {
                return Crypt::encryptString($query->id);
            })->make();
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
        $request->validate([
            'foto' => 'required',
            'nama' => 'required|max:50',
            'nip' => 'required',
        ]);

        $data = [
            'nama' => $request->nama,
            'lulusan' => $request->lulusan,
            'pangkalan' => $request->pangkalan,
            'jabatan' => $request->jabatan,
            'nip' => $request->nip,
            'nidn' => $request->nidn,
            'role' => $request->role
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
        $crypt_id = Crypt::decryptString($id);
        $dosenAndTendik = dataDosenTendik::findOrFail($crypt_id);
        return view('pages.dosen.edit', compact('dosenAndTendik'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $crypt_id = Crypt::decryptString($id);
        $dosenAndTendik = dataDosenTendik::findOrFail($crypt_id);

        $request->validate([
            'foto' => 'required',
            'nama' => 'required|max:50',
            'nip' => 'required',
        ]);

        $data = [
            'nama' => $request->nama,
            'lulusan' => $request->lulusan,
            'pangkalan' => $request->pangkalan,
            'jabatan' => $request->jabatan,
            'nip' => $request->nip,
            'nidn' => $request->nidn,
            'role' => $request->role
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
    public function destroy(string $id)
    {

        $crypt_id = Crypt::decryptString($id);
        $dosenAndTendik = dataDosenTendik::findOrFail($crypt_id);
        $dosenAndTendik->delete();
        return redirect()->back()->with('toast', 'showToast("Data berhasil dihapus")');
    }
}
