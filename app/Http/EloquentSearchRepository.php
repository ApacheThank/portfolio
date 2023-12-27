<?php

namespace App\Http;

use App\Models\Post;
use Illuminate\Database\Eloquent\Collection;

class EloquentSearchRepository implements SearchRepository
{
    public function search(string $term): Collection
    {
        return Post::query()
            ->where(fn ($query) => (
                $query->where('title', 'LIKE', "%{$term}%")
                    ->orWhere('content', 'LIKE', "%{$term}%")
            ))
            ->get();
    }
}
