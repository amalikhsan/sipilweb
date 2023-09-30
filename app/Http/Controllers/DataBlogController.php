<?php

namespace App\Http\Controllers;

use App\Models\dataBlog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class DataBlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $query = dataBlog::with('user')->get();
            return DataTables::of($query)->make();
        }
        return view('pages.blog.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            'judul' => $request->judul,
            'kategori' => $request->kategori,
            'konten' => $request->konten,
        ];

        if ($request->hasFile('foto')) {
            $data['foto'] = $request->file('foto')->store('berita', 'public');
        }

        $data['user_id'] = auth()->user()->id;

        $blogData = dataBlog::create($data);

        $blogData->replicate();
        return redirect('blog')->with('toast', 'showToast("Data berhasil disimpan")');
    }

    /**
     * Display the specified resource.
     */
    public function show(dataBlog $dataBlog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $item = dataBlog::findOrFail($id);
        return view('pages.blog.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $blog = dataBlog::findOrFail($id);
        $data = [
            'judul' => $request->judul,
            'kategori' => $request->kategori,
            'konten' => $request->konten,
        ];

        if ($request->hasFile('foto') && $request->file('foto')->isValid()) {
            $path = "foto/";
            $oldfile = $path . basename($blog->foto);
            Storage::disk('public')->delete($oldfile);
            $data['avatar'] = Storage::disk('public')->put($path, $request->file('foto'));
        }

        $blog->slug = null;
        $blog->update($data);

        return redirect('dosen')->with('toast', 'showToast("Data berhasil diupdate")');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(dataBlog $dataBlog)
    {
        //
    }
}
