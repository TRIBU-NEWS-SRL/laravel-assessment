<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'slug' => $this->slug,
            'title' => $this->title,
            'content' => $this->content,
            'author' => AuthorResource::make($this->user),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
