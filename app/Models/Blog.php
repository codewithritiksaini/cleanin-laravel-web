<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Blog extends Model
{
    protected $fillable = [
        'title', 'name', 'slug', 'image', 'description', 'content', 'status'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($blog) {
            if (empty($blog->slug)) {
                $blog->slug = Str::slug($blog->name);
            }
        });

        static::updating(function ($blog) {
            if (empty($blog->slug)) {
                $blog->slug = Str::slug($blog->name);
            }
        });
    }
}
