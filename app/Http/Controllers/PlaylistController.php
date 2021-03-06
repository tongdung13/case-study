<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Category;
use App\Models\Country;
use App\Models\Playlist;
use App\Models\Singer;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class PlaylistController extends Controller
{

    public function index()
    {
        $playlists = Playlist::paginate(5);
        $category  = Category::all();
        $country   = Country::all();
        $album     = Album::all();
        $singer    = Singer::all();

        return view('playlists.list', compact('playlists', 'category', 'country', 'album', 'singer'));
    }

    public function create()
    {
        $category = Category::all();
        $country  = Country::all();
        $album    = Album::all();
        $singer   = Singer::all();
        return view('playlists.create', compact('category', 'country', 'album','singer'));
    }

    public function store(Request $request)
    {
        $playlist = new Playlist();
        $playlist->fill($request->all());

        if ($request->hasFile('audio')) {
            $audio = $request->file('audio');

            $filename = $audio->getClientOriginalName();

            // $location = storage_path('audio/'. $filename);

            $audio->storeAs('public/audio/', $filename);

            $playlist->audio = $filename;

        }

        if ($request->hasFile('image')) {

            $image = $request->file('image');
            $path = $image->store('images', 'public');
            $playlist->image = $path;
        }


        $playlist->save();

        Session::flash('success', 'Upload with success');

        return redirect()->route('playlists.index');


    }

    public function show($id){
        $playlist = Playlist::findOrFail($id);

        return view('playlists.playlist', compact('playlist'));
    }

    public function edit($id)
    {
        $playlist = Playlist::findOrFail($id);
        $category = Category::all();
        $country  = Country::all();
        $album    = Album::all();
        $singer   = Singer::all();
        return view('playlists.edit', compact('playlist', 'category', 'country', 'album','singer'));
    }

    public function update(Request $request, $id)
    {
        $playlist = Playlist::findOrFail($id);
        $playlist->fill($request->all());

        if ($request->hasFile('image')) {

            $currentImg = $request->image;
            if ($currentImg) {
                Storage::delete('/public/' . $currentImg);
            }

            $image = $request->file('image');
            $path = $image->store('images', 'public');
            $playlist->image = $path;
        }

        if ($request->hasFile('audio')) {
            $currentAudio = $request->audio;

            if ($currentAudio) {
                Storage::delete('/pubic/' . $currentAudio);
            }

            $audio = $request->audio;

            $filename = $audio->getClientOriginalName();

            $audio->storeAs('public/audio/', $filename);

            $playlist->audio = $filename;
        }

        $playlist->save();
        Session::flash('success', 'Upload with success');
        return redirect()->route('playlists.index');
    }

    public function destroy($id)
    {
        $playlist = Playlist::findOrFail($id);
        $playlist->delete();

        return redirect()->route('playlists.index');
    }


    public function search(Request $request)
    {
        $search = $request->input('search');
        if (!$search) {
            return redirect()->route('playlists.index');
        }

        $playlists = Playlist::where('music_name','LIKE', '%'. $search . '%')->paginate(5);

        $category = Category::all();
        $country  = Country::all();
        $album    = Album::all();
        $singer   = Singer::all();
        Session::flash('search_result', true);
        return view('playlists.list', compact('playlists', 'category', 'country', 'album','singer'));

    }


}
