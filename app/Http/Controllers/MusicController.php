<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Music;


class MusicController extends Controller
{
    public function create()
    {
        return view('music.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'artist' => 'required',
            'genre' => 'required',
            'file' => 'required|mimes:mp3', // Assuming you accept MP3 files
        ]);

        $file = $request->file('file');
        $fileName = time() . '.' . $file->getClientOriginalExtension();
        $file->storeAs('music', $fileName);



        Music::create([
            'title' => $request->input('title'),
            'artist' => $request->input('artist'),
            'genre' => $request->input('genre'),
            'file_path' => $fileName,
            'user_id' => auth()->user()->id, // Use user_id to associate with the user
        ]);

        return redirect('/music/create')->with('success', 'Music uploaded successfully');
    }

    public function index()
    {
        $musics = Music::all();
        return view('music.index', ['musics' => $musics]);
    }
}
