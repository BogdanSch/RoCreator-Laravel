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
        Schema::create('game_posts', function (Blueprint $table) {
            $table->id();
            $table->string('game_title');
            $table->text('game_content');
            $table->string('game_type');
            $table->string('game_image');
            $table->timestamp('publish_date')->useCurrent();
            $table->string('game_link');
            $table->boolean('game_available')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('game_posts');
    }
};