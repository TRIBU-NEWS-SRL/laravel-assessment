<?php

namespace App\Actions;

use App\Models\Movie;
use App\Models\User;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class PostProcess
{
    public function execute(int $movieId)
    {
        $movie = Movie::find($movieId);

        $link = $this->convertTo460p($movieId);

        if ($movie->resolution <= 460) {
            Mail::to(User::find($movie->user_id))->send((new Mailable())->with('link', $link));
        }

        if ($movie->resolution >= 1080) {
            $link = $this->convertTo1080p($movieId);
        }

        if ($movie->resolution <= 1080) {
            Mail::to(User::find($movie->user_id))->send((new Mailable())->with('link', $link));
        }

        if ($movie->resolution >= 4096) {
            $link = $this->convertTo4k($movieId);
            Mail::to(User::find($movie->user_id))->send((new Mailable())->with('link', $link));
        }
    }

    private function convertTo460p(int $movieId): string
    {
        $movie = Movie::find($movieId);

        // Split file in multiple part and upload them to s3
        // $file = Storage::get('movie-'.$movie->id);
        // resize file down for designed resolution
        // ...

        return 'https://s3.example.com/file-link'.Str::uuid();
    }

    private function convertTo1080p(int $movieId)
    {
        $movie = Movie::find($movieId);

        // Split file in multiple part and upload them to s3
        // $file = Storage::get('movie-'.$movie->id);
        // resize file down for designed resolution
        // ...

        return 'https://s3.example.com/file-link'.Str::uuid();
    }

    private function convertTo4k(int $movieId)
    {
        $movie = Movie::find($movieId);

        // Split file in multiple part and upload them to s3
        // $file = Storage::get('movie-'.$movie->id);
        // resize file down for designed resolution
        // ...

        return 'https://s3.example.com/file-link'.Str::uuid();
    }
}
