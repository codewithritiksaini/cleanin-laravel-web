<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Banner extends Model
{
    protected $fillable = [
        'title', 'sub_title', 'slug', 'image', 'description','btn_name','btn_url', 'status'
    ];    

    protected $casts = [
        'image' => 'array',
    ];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($banner) {
            if (empty($banner->slug)) {
                $banner->slug = Str::slug($banner->name);
            }
        });

        static::updating(function ($banner) {
            if (empty($banner->slug)) {
                $banner->slug = Str::slug($banner->name);
            }
        });
    }
}
