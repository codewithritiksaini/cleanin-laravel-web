<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $table = 'setting';

    protected $fillable = [
        'name',
        'email',
        'email1',
        'mobile',
        'mobile1',
        'address',
        'short_address',
        'whatsapp',
        'facebook',
        'instagram',
        'twitter',
        'linkedin',
        'youtube',
        'favicon',
        'dark_logo',
        'light_logo',
        'company_profile',
        'template_name',
        'footer_text',
        'google_map_url',
        'google_analytics',
        'live_chat',
        'image_seo_keyword',
        'title',
        'description',
        'total_google_ratting',
        'total_google_reviews',
        'google_review_link',
    ];

    // // 🔁 Mutator to convert empty values to null
    public function setAttribute($key, $value)
    {
        parent::setAttribute($key, $value === '' ? null : $value);
    }
}
