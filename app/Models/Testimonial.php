<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Testimonial extends Model
{

    protected $fillable = [
        'name',
        'company',
        'position',
        'image',
        'rating',
        'testimonial',
        'status',
    ];

    protected $casts = [
        'image' => 'array',
    ];

    public static function boot()
    {
        parent::boot();

        // static::creating(function ($Testimonial) {
        //     if (empty($Testimonial->slug)) {
        //         $Testimonial->slug = Str::slug($Testimonial->name);
        //     }
        // });

        // static::updating(function ($Testimonial) {
        //     if (empty($Testimonial->slug)) {
        //         $Testimonial->slug = Str::slug($Testimonial->name);
        //     }
        // });
    }
}
