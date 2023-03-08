<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('site_settings', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('header')->nullable();
            $table->string('header_description')->nullable();
            $table->string('footer')->nullable();
            $table->string('footer_description')->nullable();
            $table->string('icon')->nullable();
            $table->string('logo')->nullable();
            $table->string('site_description')->nullable();
            $table->string('email')->nullable();
            $table->string('email1')->nullable();
            $table->string('phone')->nullable();
            $table->string('phone1')->nullable();
            $table->string('facebook_url')->nullable();
            $table->string('youtube_url')->nullable();
            $table->string('twitter_url')->nullable();
            $table->string('linkedin_url')->nullable();
            $table->string('address')->nullable();
            $table->string('address1')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('site_settings');
    }
};
