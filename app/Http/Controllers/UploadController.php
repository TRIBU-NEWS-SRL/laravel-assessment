<?php

namespace App\Http\Controllers;

use App\Actions\PostProcess;
use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules\File;

class UploadController extends Controller
{
    public function __invoke(Request $request)
    {
        $request->validate(['file' => ['required', File::types(['mp3'])->max(7 * 1024)]]);

        $movie = Movie::create(['name' => $request->file()->getFilename(), 'user_id' => $request->user()->id, 'size' => $request->file()->getSize()]);
        Storage::putFileAs('movie', $request->file, 'movie-'.$movie->id);

        (new PostProcess())->execute($movie->id);
    }
}
