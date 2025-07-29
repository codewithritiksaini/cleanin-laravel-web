<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class ImageGallery extends Model
{
    protected $fillable = ['title', 'slug', 'image', 'description', 'status'];

    protected $casts = [
    'image' => 'array',
];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->slug = Str::slug($model->name);
        });

        static::updating(function ($model) {
            $model->slug = Str::slug($model->name);
        });
    }
}

