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
        $songs = Music::all(); // Điều này lấy tất cả bản ghi nhạc, bạn có thể tùy chỉnh nếu cần.

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
}
