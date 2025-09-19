<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VideoGallery extends Model
{
    protected $table = 'video_galleries';

    protected $fillable = [
        'title',
        'description',
        'video_url',
        'image',
        'status'
    ];

    protected $casts = [
        'status' => 'boolean',
    ];
}
