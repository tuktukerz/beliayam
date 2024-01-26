<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('site_identities', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description');
            $table->string('address');
            $table->string('phone');
            $table->string('email');
            $table->string('google_play');
            $table->string('app_store');
            $table->string('instagram');
            $table->string('twitter');
            $table->string('google_map');
            $table->string('youtube');
            $table->text('footer_desc');
            $table->string('logo_light');
            $table->string('logo_black');
            $table->string('ad')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('site_identities');
    }
};
