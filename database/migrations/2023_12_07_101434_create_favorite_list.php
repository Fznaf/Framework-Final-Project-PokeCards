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
        Schema::create('favorite_list', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('userid');
            $table->string('cardid');
            $table->string('cardname');
            $table->binary('image');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('favorite_list');
    }
};
