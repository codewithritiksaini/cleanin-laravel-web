<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class ImageGallery extends Model
{
    protected $fillable = [
        'title', 'slug', 'image', 'description'
    ];    

    protected $casts = [
        'image' => 'array',
    ];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($imagegallery) {
            if (empty($imagegallery->slug)) {
                $imagegallery->slug = Str::slug($imagegallery->name);
            }
        });

        static::updating(function ($imagegallery) {
            if (empty($imagegallery->slug)) {
                $imagegallery->slug = Str::slug($imagegallery->name);
            }
        });
    }
}
