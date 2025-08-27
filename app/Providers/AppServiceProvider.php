<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use App\Models\Setting;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    public function boot()
{
    // Check if 'setting' table exists
    if (Schema::hasTable('setting')) {
        $setting = Setting::first();

        // Agar record mila to uske attributes, warna empty array
        $data = $setting ? $setting->toArray() : [];

        // Sabhi fields ko default '' set karne ke liye
        $defaultFields = [
            'name','email','email1','mobile','mobile1','address','short_address',
            'whatsapp','facebook','instagram','twitter','linkedin','youtube',
            'favicon','dark_logo','light_logo','company_profile','template_name',
            'footer_text','google_map_url','google_analytics','live_chat',
            'image_seo_keyword','title','description','total_google_ratting',
            'total_google_reviews','google_review_link'
        ];

        $finalData = [];
        foreach ($defaultFields as $field) {
            $finalData[$field] = $data[$field] ?? ''; // agar null hai to '' assign
        }

        // Share with all views
        View::share('setting', (object) $finalData);
    } else {
        // Table hi exist nahi karti
        View::share('setting', (object) []);
    }
}
}
