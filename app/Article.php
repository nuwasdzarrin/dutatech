<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    /** @var string $table */
    protected $table = 'posts';

    protected $casts = [
        'body' => 'html',
        'featured' => 'boolean',
    ];

    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    /**
     * Scope a query to only include active users.
     *
     * @param Builder $query
     * @return Builder
     */
    public function scopePublished($query)
    {
        return $query->where('status', 'PUBLISHED');
    }

    /**
     * Scope a query to only include active users.
     *
     * @param Builder $query
     * @return Builder
     */
    public function scopeFeatured($query)
    {
        return $query->where('featured', 1);
    }
}
