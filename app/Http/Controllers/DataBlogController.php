<?php

namespace App\Http\Controllers;

use App\Models\dataBlog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
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
            return DataTables::of($query)->addColumn('crypt_id', function ($query) {
                return Crypt::encryptString($query->id);
            })->make();
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
        $request->validate([
            'foto' => 'required',
            'judul' => 'required|max:100',
            'kategori' => 'required',
            'konten' => 'required',
        ]);

        $kontens = $request->konten;
        $dom = new \DomDocument();
        $dom->loadHtml($kontens, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $imageFile = $dom->getElementsByTagName('img');

        // dd($imageFile[0]->getAttribute('src'));

        foreach ($imageFile as $item => $image) {
            $data = $image->getAttribute('src');
            list($type, $data) = explode(';', $data);
            list(, $data)      = explode(',', $data);
            $imgeData = base64_decode($data);

            $image_name = "/berita/" . time() . $item . '.png';
            $path = public_path() . $image_name;
            file_put_contents($path, $imgeData);

            $image->removeAttribute('src');
            $image->setAttribute('src', $image_name);
        }

        $konten = $dom->saveHTML();

        if ($request->hasFile('foto')) {
            $dataFoto = $request->file('foto')->store('berita', 'public');
        }

        $dataUserid = auth()->user()->id;

        $data = [
            'user_id' => $dataUserid,
            'foto' => $dataFoto,
            'judul' => $request->judul,
            'kategori' => $request->kategori,
            'konten' => $konten,
        ];

        $blogData = dataBlog::create($data);

        $blogData->replicate();

        return redirect('datablog')->with('toast', 'showToast("Data berhasil disimpan")');
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
        $crypt_id = Crypt::decryptString($id);
        $blog = dataBlog::findOrFail($crypt_id);
        return view('pages.blog.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $crypt_id = Crypt::decryptString($id);
        $blog = dataBlog::findOrFail($crypt_id);

        $request->validate([
            'judul' => 'required|max:100',
            'kategori' => 'required',
            'konten' => 'required',
        ]);

        $kontens = $request->konten;
        $dom = new \DomDocument();
        $dom->loadHtml($kontens, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $imageFile = $dom->getElementsByTagName('img');

        // dd($imageFile[0]->getAttribute('src'));

        foreach ($imageFile as $item => $image) {
            $data = $image->getAttribute('src');
            list($type, $data) = explode(';', $data);
            list(, $data)      = explode(',', $data);
            $imgeData = base64_decode($data);

            $image_name = "/berita/" . time() . $item . '.png';
            $path = public_path() . $image_name;
            file_put_contents($path, $imgeData);

            $image->removeAttribute('src');
            $image->setAttribute('src', $image_name);
        }

        $konten = $dom->saveHTML();

        if ($request->hasFile('foto') && $request->file('foto')->isValid()) {
            $path = "berita/";
            $oldfile = $path . basename($blog->foto);
            Storage::disk('public')->delete($oldfile);
            $data['foto'] = Storage::disk('public')->put($path, $request->file('foto'));
        }


        $data = [
            'judul' => $request->judul,
            'kategori' => $request->kategori,
            'konten' => $konten,
        ];

        $blog->slug = null;
        $blog->update($data);

        return redirect('datablog')->with('toast', 'showToast("Data berhasil diupdate")');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $crypt_id = Crypt::decryptString($id);
        $blog = dataBlog::findOrFail($crypt_id);
        $blog->delete();

        return redirect()->back()->with('toast', 'showToast("Data berhasil dihapus")');
    }
}
