<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'author', 'slug', 'body'];

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function scopeFilter(Builder $query, array $filters): void
    {
        $query->when(isset($filters['search']) ? $filters['search'] : false, function ($query, $search) {
            $query->where('title', 'like', '%' . $search . '%');
        });

        $query->when(isset($filters['category']) ? $filters['category'] : false, function ($query, $category) {
            $query->whereHas('category', fn($query) => $query->where('slug', $category));
        });

        $query->when(isset($filters['author']) ? $filters['author'] : false, function ($query, $author) {
            $query->whereHas('author', fn($query) => $query->where('username', $author));
        });
    }
}
