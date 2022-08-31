<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostResource;
use App\Models\Post;
use Illuminate\Http\Resources\Json\JsonResource;

class PostsController extends Controller
{
    public function index(): JsonResource
    {
        $posts = Post::all();

        return PostResource::collection($posts);
    }
}
