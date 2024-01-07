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
        Schema::create('pricings', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('p_sumatera');
            $table->bigInteger('p_jabodetabek');
            $table->bigInteger('p_jateng');
            $table->bigInteger('p_jatim');
            $table->bigInteger('p_nusabali');
            $table->bigInteger('p_kalimantan');
            $table->bigInteger('p_sulawesi');
            $table->bigInteger('p_papua');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pricings');
    }
};
