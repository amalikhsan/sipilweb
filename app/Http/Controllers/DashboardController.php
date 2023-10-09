<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\dataBlog;
use App\Models\DataEvent;
use App\Models\DataAlumni;
use Illuminate\Http\Request;
use App\Models\dataDosenTendik;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    public function index()
    {
        $dataDosens = dataDosenTendik::with('user')->get();
        $dataBlogs = dataBlog::with('user')->get();
        $dataAlumnis = DataAlumni::with('user')->get();
        $dataEvents = DataEvent::with('user')->get();

        $totalDosen = count($dataDosens);
        $totalBlog = count($dataBlogs);
        $totalAlumni = count($dataAlumnis);
        $totalEvent = count($dataEvents);

        return view('pages.dashboard',compact('totalDosen', 'totalBlog', 'totalAlumni', 'totalEvent'));
    }

    public function profile()
    {
        return view('pages.profile');
    }

    public function changeAvatar(Request $request)
    {
        $user = User::findOrFail(auth()->user()->id);

        if($request->hasFile('avatar') && $request->file('avatar')->isValid()){
            $path = "avatar/";
            $oldfile = $path.basename($user->avatar);
            Storage::disk('public')->delete($oldfile);
            $data['avatar'] = Storage::disk('public')->put($path, $request->file('avatar'));

            $user->update($data);
        }

        return redirect()->back();
    }

    public function removeAvatar()
    {
        $user = User::findOrFail(auth()->user()->id);

        $path = "avatar/";
        $oldfile = $path.basename($user->avatar);
        Storage::disk('public')->delete($oldfile);
        $data['avatar'] = NULL;

        $user->update($data);

        return redirect()->back();
    }
}
