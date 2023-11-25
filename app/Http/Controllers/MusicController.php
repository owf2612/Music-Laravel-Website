<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
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
            'file' => 'required|mimes:mp3',
            'photos.*' => 'image|mimes:jpeg,jpg,png',
        ]);

        $file = $request->file('file');
        $fileName = time() . '.' . $file->getClientOriginalExtension();
        $file->storeAs('music', $fileName);

        $imagePaths = [];

        if ($request->hasFile('photos')) {
            foreach ($request->file('photos') as $photo) {
                $photoName = Str::random(20) . '.' . $photo->getClientOriginalExtension();
                $photo->storeAs('music/images', $photoName);
                $imagePaths[] = $photoName;
            }
        }

        Music::create([
            'title' => $request->input('title'),
            'artist' => $request->input('artist'),
            'genre' => $request->input('genre'),
            'file_path' => $fileName,
            'image_paths' => json_encode($imagePaths), // Convert array to a JSON-encoded string
            'user_id' => auth()->user()->id,
        ]);

        return redirect('/music/create')->with('success', 'Music uploaded successfully');
    }


    public function index()
    {
        $musics = Music::all();
        return view('music.index', ['musics' => $musics]);
    }
}
