<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class ImageGallery extends Model
{
    protected $table = 'image_galleries';

    protected $fillable = [
        'title', 'slug', 'image', 'description', 'status'
    ];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($image) {
            if (empty($image->slug)) {
                $image->slug = Str::slug($image->title);
            }
        });

        static::updating(function ($image) {
            if (empty($image->slug)) {
                $image->slug = Str::slug($image->title);
            }
        });
    }
}
