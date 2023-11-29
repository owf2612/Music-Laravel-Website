<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Music;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;

class DashboardController extends Controller
{
    public function index()
    {
        // Lấy danh sách bài hát từ cơ sở dữ liệu
        $songs = Music::all(); 

        return view('dashboard', ['songs' => $songs]);
    }

    public function search(Request $request)
    {
        $query = $request->input('query');

        $songs = Music::where('title', 'like', "%$query%")
            ->orWhere('artist', 'like', "%$query%")
            ->orWhere('genre', 'like', "%$query%")
            ->get();

        return view('dashboard', ['songs' => $songs]);
    }

    public function streamMusic($filename)
    {
        $path = storage_path('app/music/' . $filename);

        if (file_exists($path)) {
            $file = Storage::get('music/' . $filename);

            $response = Response::make($file, 200);
            $response->header('Content-Type', 'audio/mpeg');

            return $response;
        } else {
            return response('Audio file not found', 404);
        }
    }

    public function getImage($filename)
    {
        $path = storage_path('app/music/images/' . $filename);

        if (file_exists($path)) {
            $file = Storage::get('music/images/' . $filename);

            $response = Response::make($file, 200);
            $response->header('Content-Type', 'image/jpeg'); // Update the content type based on the image file type

            return $response;
        } else {
            return response('Image not found', 404);
        }
    }
}
