<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        if (!Schema::hasTable('settings')) {
            Schema::create('setting', function (Blueprint $table) {
                $table->id();
                // general information
                $table->string('name',255)->nullable();

                $table->string('email',400)->nullable();
                $table->string('email1',400)->nullable();

                $table->string('mobile')->nullable();
                $table->string('mobile1')->nullable();

                $table->text('address',1000)->nullable();
                $table->text('short_address',1000)->nullable();

                $table->string('whatsapp')->nullable();

                $table->string('facebook')->nullable();
                $table->string('instagram')->nullable();
                $table->string('twitter')->nullable();
                $table->string('linkedin')->nullable();
                $table->string('youtube')->nullable();

                $table->string('favicon')->nullable();
                $table->string('dark_logo')->nullable();
                $table->string('light_logo')->nullable();

                $table->string('company_profile')->nullable();

                $table->string('template_name')->nullable();

                $table->string('footer_text', 1000)->nullable();
                $table->string('google_map_url', 1000)->nullable();
                $table->string('google_analytics', 1000)->nullable();
                $table->string('live_chat', 1000)->nullable();

                $table->string('image_seo_keyword', 255)->nullable();
                $table->string('title', 255)->nullable();
                $table->string('description', 1000)->nullable();

                $table->string('total_google_ratting')->nullable();
                $table->string('total_google_reviews')->nullable();
                $table->string('google_review_link', 255)->nullable();
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *  @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
};
